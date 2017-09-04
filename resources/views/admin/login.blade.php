@extends('layout.layout')

@section('styles')
    <link href="{{ url('css/admin.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="common">
        <h1>Admin Login</h1>
        <form method="post">
            <div class="form-group">
                <label id="emailLabel" for="email" class="control-label label-hidden">Email Address</label>
                <input type="text" class="form-control" id="email" placeholder="Email Address"/>
            </div>
            <div class="form-group">
                <label id="passwordLabel" for="password" class="control-label label-hidden">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password"/>
            </div>
            <button type="submit" class="btn btn-default btn-block" id="login">Login</button>
        </form>
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
    <script src="{{ asset('js/main.contact.js') }}"></script>
@endsection