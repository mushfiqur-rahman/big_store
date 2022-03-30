@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="xyz">{{ Session::get('message') }}</h3>
                    <form action="{{ route('new-product') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" id="" class="form-control">
                                    <option value="">==Select Category Name==</option>

                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Brand Name</label>
                            <div class="col-md-9">
                                <select name="brand_id" id="" class="form-control">
                                    <option value="">==Select Brand Name==</option>

                                    @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="product_name">
                                <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Product Price</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="product_price">
                                <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product-price') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Product Quantity</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="product_quantity">
                                <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="short_description"></textarea>
                                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="editor" name="long_description"></textarea>
                            </div>
                            <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' '}}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Product Image</label>
                            <div class="col-md-9">
                                <input type="file"  name="product_image" accept="image/*">
                                <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Publication status</label>
                            <div class="col-md-9 radio">
                                <label><input type="radio" name="publication_status" value="1"/> Published</label>
                                <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
                                <br>
                                <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" value="Save Product Info" class="btn btn-success btn-block"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection