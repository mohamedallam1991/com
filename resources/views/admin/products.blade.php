@php
    $products = array(
        array( 'id' => '123', 'name' => 'Product 1', 'cat' => 'Machines', 'img' => '/images/product.jpg', 'description' => 'Place holder description', 'cost' => '150.32', 'retail' => '241.95'),
        array( 'id' => '124', 'name' => 'Product 2', 'cat' => 'Hoses', 'img' => '/images/product.jpg', 'description' => 'Place holder description', 'cost' => '18.53', 'retail' => '29.95'),
        array( 'id' => '125', 'name' => 'Product 3', 'cat' => 'Supplies', 'img' => '/images/product.jpg', 'description' => 'Place holder description', 'cost' => '832.00', 'retail' => '1331.49'),
        array( 'id' => '126', 'name' => 'Product 4', 'cat' => 'Parts', 'img' => '/images/product.jpg', 'description' => 'Place holder description', 'cost' => '38.20', 'retail' => '61.49'),
        array( 'id' => '127', 'name' => 'Product 5', 'cat' => 'Machines', 'img' => '/images/product.jpg', 'description' => 'Place holder description', 'cost' => '152.91', 'retail' => '244.99'),
        array( 'id' => '128', 'name' => 'Product 6', 'cat' => 'Accessories', 'img' => '/images/product.jpg', 'description' => 'Place holder description', 'cost' => '78.23', 'retail' => '125.49'),
        array( 'id' => '129', 'name' => 'Product 7', 'cat' => 'Machines', 'img' => '/images/product.jpg', 'description' => 'Place holder description', 'cost' => '40.21', 'retail' => '64.79'),
    );
    $categories = array(
                array('title' => 'Machines', 'active' => ''),
                array('title' => 'Hoses', 'active' => ''),
                array('title' => 'Accessories', 'active' => 'active'),
                array('title' => 'Parts', 'active' => ''),
                array('title' => 'Supplies', 'active' => '')
            );
@endphp

@extends('layout.layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">

        <h1>Product Management</h1>

        <div class="tab-center list-group list-inline">
            <a href="/dsadmin/products" class="list-group-item">All Products</a>
            @foreach($categories as $cat)
                <a href="/dsadmin/products/cat/{{ $cat['title'] }}" class="list-group-item">{{ $cat['title']}}</a>
            @endforeach
        </div>

        <table class="table product-table">
            <thead>
            <th>Product Image</th>
            <th>Product</th>
            <th>Product ID</th>
            <th>Category</th>
            <th>Description</th>
            <th>Cost</th>
            <th>Retail</th>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr id="{{ $product['id'] }}">
                    <td><img src="{{ url($product['img']) }}"></td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['cat'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['cost'] }}</td>
                    <td>{{ $product['retail'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/admin.navigation.js') }}"></script>
    <script src="{{ url('js/admin.tables.js') }}"></script>
    <script src="{{ url('js/admin.products.js') }}"></script>
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection