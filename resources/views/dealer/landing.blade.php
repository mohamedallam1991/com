@extends('layout.layout')

@section('content')
    <section class="last-order">
        @include('dealer.stubs.orders')
    </section>
    <section class="quick-track">
        @include('dealer.stubs.track')
    </section>
    <section class="cart">
        @include('dealer.stubs.cart')
    </section>
@endsection