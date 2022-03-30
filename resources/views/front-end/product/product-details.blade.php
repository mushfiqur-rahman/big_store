@extends('front-end.master')

@section('title')
    Product Details
@endsection

@section('body')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{ route('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Singlepage</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="products">
        <div class="container">
            <div class="agileinfo_single">

                <div class="col-md-4 agileinfo_single_left">
                    <img id="example" src="{{ asset($product->product_image) }}" alt=" " class="img-responsive">
                </div>
                <div class="col-md-8 agileinfo_single_right">
                    <h2>{{ $product->product_name }}</h2>
                    <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                    </div>
                    <div class="w3agile_description">
                        <h4>Description :</h4>
                        <p>{{ $product->long_description }}</p>
                    </div>

                    <form action="{{ route('add-to-cart') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="color-quality">
                            <h6>Quality :</h6>
                            <div class="quantity">
                                <input type="number" name="qty" value="1" min="1"/>
                                <input type="hidden" name="id" value="{{ $product->id }}"/>
                            </div>
                        </div>
                        <br>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <br>

                        <div class="snipcart-item block">
                            <div class="snipcart-thumb agileinfo_single_right_snipcart">
                                <h4 class="m-sing">TK. {{ $product->product_price }}</h4>
                            </div>
                            <div class="snipcart-details agileinfo_single_right_details">
                                {{--<form action="#" method="post">--}}

                                <input type="submit" name="btn" value="Add to cart" class="button">

                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- new -->
    <!-- //new -->
    @endsection
