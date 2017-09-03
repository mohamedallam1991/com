@extends('layout.layout')

@section('content')
    <div class="common">
        <div class="img-holder">
            <img src="{{url('/images/RevolutionLogos.svg')}}" alt="Revolution Logo">
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

@endsection

@section('script.js')
    @parent
    <script src="{{ asset('js/main.contact.js') }}"></script>
    <script src="{{ asset('js/constrain.js') }}"></script>
@endsection