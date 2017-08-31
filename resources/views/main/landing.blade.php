@extends('layout.layout')

@section('content')
    <section class="promotion">
        @include('main.stubs.promotions')
    </section>
    <section class="products">
        @include('main.stubs.products')
    </section>
@endsection