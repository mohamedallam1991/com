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
            <a href="/products" class="list-group-item {{ $active }}">All Products</a>
            @foreach($categories as $cat)
                <a href="/products?cat={{ $cat['title'] }}" class="list-group-item {{ $cat['active'] }}">{{ $cat['title']}}</a>
            @endforeach
        </div>

        Add Filters by Category
        Search is implemented in the navbar
        show product cards
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection