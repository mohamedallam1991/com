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

    <section class="products">
        @each('main.stubs.products', ['cat-1.jpg', 'cat-2.jpg', 'cat-3.jpg', 'cat-4.jpg', 'cat-5.jpg', 'cat-6.jpg'], 'cat')
    </section>

@endsection

@section('script.js')
    @parent
    <script src="{{ asset('js/main.landing.js') }}"></script>
@endsection