@extends('layout.layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
        <h1>Add Order Tracking lives here...</h1>
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/admin.navigation.js') }}"></script>
    <script src="{{ url('js/admin.tables.js') }}"></script>
    <script src="{{ url('js/admin.products.js') }}"></script>
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection