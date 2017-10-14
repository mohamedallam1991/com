@extends('layout.layout')

@section('content')
    @php
        $hasPromotion = true;
        $promos = array(
            'title' => 'Flash Sale',
            'description' => 'Come buy something @ 20% off!',
            'link' => '/products/product/4',
            'helper' => 'Take advantage before time runs out!'
            );
    @endphp
    @includeWhen($hasPromotion, 'main.stubs.promotions', ['promotions' => $promos])
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/images/PumpItRealGood.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="/images/PumpItRealGood.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="about sweet">
        <div class="common col-xs-6 col-xs-offset-4">
            <div class="img-holder">
                <img src="{{url('/images/rev-title-logo.svg')}}" alt="Revolution Logo">
            </div>

            <h1>About Us</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut accumsan turpis, fermentum dictum sapien. Vestibulum sodales mi vitae tortor ultricies, non egestas metus fermentum. Sed sodales dictum eros, eu consectetur justo porttitor ut. In quis quam sodales, malesuada magna nec, aliquam arcu. Curabitur non efficitur ipsum. Sed imperdiet tellus ac mauris pellentesque, et ultricies felis pretium. Curabitur eget nunc sagittis odio pellentesque suscipit ut eu metus.
            </p><p>
                Sed sed cursus lorem. Donec tristique consequat nibh, et pellentesque nunc blandit quis. Donec id tortor faucibus, varius neque vel, ullamcorper lectus. Fusce at sodales ex. Sed feugiat tempus dolor vitae efficitur. Vestibulum dignissim pulvinar libero sit amet sollicitudin. Curabitur suscipit metus nec diam tincidunt fermentum euismod ut erat. Donec nibh velit, interdum eu laoreet ut, volutpat quis leo. Quisque et vehicula nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>
        </div>
    </div>

    <div class="contact sweet">
        <div class="common col-xs-6 col-xs-offset-4">
            <div class="img-holder">
                <img src="{{url('/images/rev-title-logo.svg')}}" alt="Revolution Logo">
            </div>
            <h1>Contact Us</h1>

            <form method="post">
                <div class="form-group">
                    <label id="nameLabel" class="control-label label-hidden" for="name">Your Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name"/>
                </div>
                <div class="form-group">
                    <label id="emailLabel" class="control-label label-hidden" for="email">Email Address</label>
                    <input class="form-control" type="text" id="email" name="email" placeholder="Email Address"/>
                </div>
                <div class="form-group">
                    <label id="commentsLabel" class="control-label label-hidden" for="comments">Comments</label>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comments"></textarea>
                </div>
                <button type="submit" class="btn btn-default btn-block">Submit</button>
            </form>
        </div>

    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ asset('js/main.landing.js') }}"></script>
    <script src="{{ asset('js/main.contact.js') }}"></script>
@endsection
