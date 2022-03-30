<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class BigStoreController extends Controller
{
    public function index(){
        $newProducts = Product::where('publication_status', 1)
                                ->orderBy('id', 'DESC')
                                ->take(9)
                                ->get();


        return view('front-end.home.home', [
            'newProducts'   =>$newProducts,
        ]);
    }

    public function categoryProduct($id){
        $categoryProducts = Product::where('category_id', $id)
                                    ->where('publication_status', 1)
                                    ->get();

        return view('front-end.category.category-content', [
            'categoryProducts' => $categoryProducts
        ]);
    }

    public function productDetails($id, $name){
        $product = Product::find($id);
        return view('front-end.product.product-details',
            ['product' => $product]);
    }


    public function eMail(){
        return view('front-end.contact.contactus');
    }

    public function aboutUs(){
        return view('front-end.about');
    }

    public function checkout(){
        return view('front-end.cart.checkout');
    }

    public function userLogin(){
        return view('admin.login.login');
    }
}
