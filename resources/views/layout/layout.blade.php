
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
                    <a href="/login">Dealer Login</a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container-fluid">

    @yield('content')

</div> <!-- /container -->

<footer class="footer">
    <div class="container-fluid">
        &copy;2017 Revolution Machinery.  All rights reserved.
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
@section('script.js')
@show
</body>
</html>


