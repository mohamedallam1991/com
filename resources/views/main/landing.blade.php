@extends('layout.layout')

@section('content')
    <section class="promotion">
        @include('main.stubs.promotions')
    </section>
    <section class="products">
        @each('main.stubs.products', ['cat-1.jpg', 'cat-2.jpg', 'cat-3.jpg', 'cat-4.jpg', 'cat-5.jpg', 'cat-6.jpg'], 'cat')
    </section>
@endsection