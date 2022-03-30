<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use DB;
use Illuminate\View\View;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product', [
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    protected function productInfoValidate($request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'product_image' => 'required'
        ]);
    }

    protected function productImageUpload($request)
    {
        $productImage = $request->file('product_image');
//        $imageName    = $productImage->getClientOriginalName();   // keep image name like 1.jpg
        $fileType = $productImage->getClientOriginalExtension();

        $imageName = $request->product_name . '.' . $fileType;     //Change image name to product name
        $directory = 'product-image/';
        $imageUrl = $directory . $imageName;
//        $productImage->move($directory, $imageName);   //
        Image::make($productImage)->resize(200, 200)->save($imageUrl);   // Intervention.io package rule

        return $imageUrl;
    }

    protected function saveProductBasicInfo($request, $imageUrl)
    {
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }

    public function saveProduct(Request $request)
    {
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->saveProductBasicInfo($request, $imageUrl);


        return redirect('/product/add')->with('message', 'Product info save successfully');
    }

    public function manageProduct()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->get();

//        return $products;


        return view('admin.product.manage-product', ['products' => $products]);
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();

        return view('admin.product.edit-product', [
            'product'    => $product,
            'categories' => $categories,
            'brands'     => $brands
        ]);
    }

    public function productBasicInfoUpdate($product, $request, $imageUrl = null)
    {
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        if ($imageUrl) {
            $product->product_image = $imageUrl;
        }
        $product->publication_status = $request->publication_status;
        $product->save();
    }

    public function updateProduct(Request $request) {
        $productImage = $request->file('product_image');
        $product = Product::find($request->product_id);

        if($productImage) {
            unlink($product->product_image);
            $imageUrl= $this->productImageUpload($request);
            $this->productBasicInfoUpdate($product, $request, $imageUrl);
        }  else {
            $this->productBasicInfoUpdate($product, $request);
        }

        return redirect('/product/manage')->with('message', 'Product info updated');
    }

    public function unpublishedProduct($id){
        $product = Product::find($id);

        $product->publication_status == 0;
        $product->save();

        return redirect('/product/manage')->with('message', 'Product Un-published');
    }

    public function publishedProduct($id){
        $product = Product::find($id);

        $product->publication_status == 1;
        $product->save();

        return redirect('/product/manage')->with('message', 'Product Published');
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('/product/manage')->with('message', 'Product info Delete');
    }


}
