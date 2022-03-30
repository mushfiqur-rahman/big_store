@extends('front-end.master')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="{{ route('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Checkout Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- checkout -->
    <div class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-md-offset-1">
                    <h3 class="text-center text-success">My Shopping Cart</h3>
                    <hr>

                    <table class="table table-bordered">
                        <tr class="bg-primary text-center">
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price TK. </th>
                            <th>Quantity</th>
                            <th>Total Price TK. </th>
                            <th>Action</th>
                        </tr>

                        @php($i=1)
                        @php($sum = 0)

                        @foreach($cartProducts as $cartProduct)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $cartProduct->name }}</td>
                            <td><img src="{{ asset($cartProduct->options->image) }}"  alt="" height="50" width="50"></td>
                            <td>{{ $cartProduct->price }}</td>
                            <td>
                                <form action="{{ route('update-cart') }}" method="post">
                                    {{csrf_field() }}
                                    <input type="number" name="qty" value="{{ $cartProduct->qty }}" min="1">
                                    <input type="hidden" name="rowId" value="{{ $cartProduct->rowId }}" min="1">
                                    <input type="submit" name="btn" value="Update">
                                </form>
                            </td>
                            <td>{{ $total = $cartProduct->price*$cartProduct->qty }}</td>
                            <td>
                                <a href="{{ route('delete-cart-item', ['rowId'=>$cartProduct->rowId]) }}" class="btn btn-danger" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                            <?php $sum = $sum+$total; ?>
                        @endforeach
                    </table>

                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th>Item Total (TK. )</th>
                            <td>{{ $sum }}</td>
                        </tr>
                        <tr>
                            <th>Vat Total (TK. )</th>
                            <td>{{ $vat = 0 }}</td>
                        </tr>

                        <tr>
                            <th>Grand Total (TK. )</th>
                            <td>{{ $orderTotal = $sum+$vat }}</td>
                            <?php
                                Session::put('orderTotal', $orderTotal);
                            ?>
                        </tr>
                    </table>

                </div>
            </div>

            <div class="row">
                <div class="col-md-11 col-md-offset-1">

                    @if(Session::get('customerId') && Session::get('shippingId'))
                        <a href="{{ route('checkout-payment') }}" class="btn btn-success pull-right">Checkout</a>
                    @elseif(Session::get('customerId'))
                        <a href="{{ route('checkout-shipping') }}" class="btn btn-success pull-right">Checkout</a>
                    @else
                        <a href="{{ route('checkout') }}" class="btn btn-success pull-right">Checkout</a>
                    @endif
                    <a href="{{ route('/') }}" class="btn btn-success">Continue shopping</a>
                </div>
            </div>

        </div>
    </div>
@endsection
