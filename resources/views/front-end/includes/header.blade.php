<div class="agileits_header">
    <div class="container">
        <div class="w3l_offers">
            <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="{{route('/')}}">SHOP NOW</a></p>
        </div>
        <div class="agile-login">
            <ul>

                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                @if(Session::get('customerId'))
                    <li><a href="#" onclick="document.getElementById('customerLogoutForm').submit();">Logout</a></li>
                    <form action="{{ route('customer-logout') }}" method="post" id="customerLogoutForm">
                        {{csrf_field()}}
                    </form>

                @else
                    <li><a href="{{ route('new-customer-login') }}">Login</a></li>
                @endif

            </ul>
        </div>
        <div class="product_list_header">
            <a href="{{route('show-cart')}}"><span class="glyphicon glyphicon-shopping-cart"></span></a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>

            </ul>
        </div>
        <div class="w3ls_logo_products_left">
            <h1><a href="{{ route('/') }}">super Market</a></h1>
        </div>
        <div class="w3l_search">
            {{--<form action="#" method="post">--}}

                <input type="search" id="search" name="Search" placeholder="Search for a Product...">
                {{--<button type="submit" class="btn btn-default search" aria-label="Left Align">--}}
                    {{--<i class="fa fa-search" aria-hidden="true"> </i>--}}
                {{--</button>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</form>--}}
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('/')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    })
</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

<!-- navigation -->
<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">

                    @foreach($categories as $category)
                    <li class="active"><a href="{{ route('category-product', ['id'=>$category->id]) }}" class="act">{{ $category->category_name }}</a></li>
                    <!-- Mega Menu -->
                    @endforeach

                    <li><a href="{{route('contact-us')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
