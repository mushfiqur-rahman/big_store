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
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 well">
                        <h3 class="text-center text-success">You have to login to complete your valuable order. If you are not registered then please register first.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 well">
                        <h3>Register if you are not Registered before!</h3>
                        <br/>
                        <form action="{{ route('customer-sign-up') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email_address" id="email_address" class="form-control" placeholder="example@gmail.com">
                                <span class="text-success" id="res"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <textarea name="address" placeholder="Address" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="regBtn" name="btn" class="form-control  btn btn-info" value="Register">
                            </div>
                       </form>
                    </div>

                    <div class="col-md-5 well " style="margin-left: 20px;">
                        <h3 class="text-center">Already Registerd? Login Here!</h3>
                        <br/>
                        <h4 class="text-center text-danger">{{ Session::get('message') }}</h4>
                        <br/>
                        <form action="{{ route('customer-login') }}" method="post">

                            {{csrf_field()}}

                            <div class="form-group">
                                <input type="email" name="email_address" class="form-control " placeholder="example@gmail.com">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control " placeholder="Password">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="btn" class="form-control  btn btn-success" value="Log-in">
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
        <!--single-->
        <!--new-arrivals-->
    </div>

    <script>
        var email_address = document.getElementById('email_address');
        email_address.onblur = function () {
            var email = document.getElementById('email_address').value;
            var xmlHttp = new XMLHttpRequest();
            // var data = document.getElementById('name').value;
            var serverPage = 'http://localhost/big_store/public/ajax-email-check/'+email;
            xmlHttp.open('GET', serverPage);
            xmlHttp.onreadystatechange = function () {
                // alert(xmlHttp.readyState);
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
                    document.getElementById('res').innerHTML = xmlHttp.responseText;
                    if (xmlHttp.responseText == 'Already Exist'){
                        document.getElementById('regBtn').disabled = true;
                    }else {
                        document.getElementById('regBtn').disabled = false;
                    }
                }
            }

            xmlHttp.send(null);
        }
    </script>
@endsection