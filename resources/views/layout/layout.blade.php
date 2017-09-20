
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Revolution Machinery</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/app.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/custom.css')}}"/>
    @yield('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{url('/images/RevolutionLogos.svg')}}" alt="Revolution Logo">&nbsp;</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li>
                    <a href="/products">Products</a>
                </li>
                <li>
                    <a href="/locator">Dealer Locator</a>
                </li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">Action</a></li>--}}
                        {{--<li><a href="#">Another action</a></li>--}}
                        {{--<li><a href="#">Something else here</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li class="dropdown-header">Nav header</li>--}}
                        {{--<li><a href="#">Separated link</a></li>--}}
                        {{--<li><a href="#">One more separated link</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Search Products" aria-label="Search">
                </div>
                <button class="btn btn-default" type="submit">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if(!Auth::guest())
                        <a href="/logout">Logout</a>
                    @else
                        <a href="/login">Dealer Login</a>
                    @endif
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container-fluid unconstrained">

    @yield('content')

</div> <!-- /container -->

<footer class="footer">
    <div class="container-fluid">
        <div class="col-xs-6 col-xs-offset-6 mobile pull-right">
            <a link="/register">Dealer Application</a>
        </div>
        <div class="col-md-3 desktop">
            <h4><span>Main</span></h4>
            <ul class="links">
                <li><a href="/">Home</a></li>
                <li><a href="/product">Products</a></li>
                <li><a href="/locator">Dealer Locator</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/register">Dealer Application</a> </li>
            </ul>
        </div>
        <div class="col-md-3 desktop">
            @if(!Auth::guest())
                <h4><span>Dealer</span></h4>
                <ul class="links">
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="/dealer/">Dealer Portal</a></li>
                    <li><a href="/dealer/account">My Account</a></li>
                    <li><a href="/dealer/orders">Order History</a></li>
                    <li><a href="/dealer/tracking">Order Tracking</a></li>
                </ul>
            @endif
        </div>
        <div class="col-md-3 desktop">
            @if(!Auth::guest() && Auth::user()->hasRole('admin'))
                <h4><span>Admin</span></h4>
                <ul class="links">
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="/dsadmin">Admin Portal</a></li>
                    <li><a href="/dsadmin/applications">Applications</a></li>
                    <li><a href="/dsadmin/contacts">Contact Requests</a></li>
                    <li><a href="/dsadmin/dealers">Dealers</a></li>
                    <li><a href="/dsadmin/orders">Orders</a></li>
                    <li><a href="/dsadmin/pricing">Pricings</a> </li>
                    <li><a href="/dsadmin/products">Products</a> </li>
                    <li><a href="/dsadmin/promotions">Promotions</a></li>
                    <li><a href="/dsadmin/tracking">Tracking</a></li>
                </ul>
            @endif
        </div>
        <div class="col-xs-12 col-md-12">
            &copy;2017 Revolution Machinery.  All rights reserved.
        </div>

    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/main.navigation.js') }}"></script>
@section('script.js')
    <script src="{{ url('js/geolocation.js') }}"></script>
@show
</body>
</html>


