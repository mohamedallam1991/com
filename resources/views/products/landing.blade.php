@extends('layout.layout')

@section('styles')
    <link href="{{ url('css/products.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="common">
        @php
            $active = '';
            $categories = array(
                array('title' => 'Machines', 'active' => ''),
                array('title' => 'Hoses', 'active' => ''),
                array('title' => 'Accessories', 'active' => 'active'),
                array('title' => 'Parts', 'active' => ''),
                array('title' => 'Supplies', 'active' => '')
            );
        @endphp
        <h1>Products</h1>
        <div class="tab-center list-group list-inline">
            <a href="/products" class="list-group-item">All Products</a>
            @foreach($categories as $cat)
                <a href="/products/cat/{{ $cat['title'] }}" class="list-group-item">{{ $cat['title']}}</a>
            @endforeach
        </div>

        <div class="products">
            @include('products.stubs.product')
        </div>
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
    <script src="{{ url('js/main.products.js') }}"></script>
@endsection