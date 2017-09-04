@extends('layout.layout')

@section('styles')
    <link href="{{ url('css/dealer.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    @include('dealer.stubs.navigation')

    <section class="last-order">
        @include('dealer.stubs.orders')
    </section>
    <section class="quick-track">
        @include('dealer.stubs.track')
    </section>
    @include('dealer.stubs.cartview')
    @include('dealer.stubs.cart')


@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
    <script src="{{ url('js/dealer.cart.js') }}"></script>
@endsection