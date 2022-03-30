@extends('front-end.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12 well text-center text-success">
                Dear {{ Session::get('customerName') }}. You have to give us product payment method..
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 well">
                <form action="{{ route('new-order') }}" method="POST">

                    {{csrf_field()}}

                    <table class="table table-bordered">
                        <tr>
                            <th><img src="{{asset('/')}}/front-end/images/casondelivery.png" alt=""></th>
                            <td><input type="radio" name="payment_type" value="Cash"> Cash On Delivery</td>
                        </tr>

                        <tr>
                            <th><img src="{{asset('/')}}/front-end/images/paypal.png" style="size: 100px" alt=""></th>
                            <td><input type="radio" name="payment_type" value="paypal"> paypal</td>
                        </tr>

                        <tr>
                            <th><img src="{{asset('/')}}/front-end/images/stripe.png" style="size: 100px" alt=""></th>
                            <td><input type="radio" name="payment_type" value="Stripe"> Stripe</td>
                        </tr>

                        <tr>
                            <th><img src="{{asset('/')}}/front-end/images/bkash.png" alt=""></th>
                            <td><input type="radio" name="payment_type" value="Bkash"> Bkash</td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><input type="submit" name="btn" class="btn-success" value="Confirm Order"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

@endsection