@php
    $product = array( 'id' => '123', 'name' => 'Product 1', 'cat' => 'Machines', 'img' => '/images/product.jpg', 'description' => 'Place holder description', 'cost' => '150.32', 'retail' => '241.95');
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
        <h1>Product Details</h1>
        <div class="row">
            <div class="col-xs-8 col-md-8">
                <div class="form-group">
                    <label for="name" class="control-label">Product Name</label>
                    <input type="text" id="name" class="form-control" value="{{ $product['name'] }}" disabled>
                </div>
                <div class="form-group">
                    <label for="category" class="control-label">Category</label>
                    <select id="category" class="form-control" disabled>
                        <option value="{{ $product['cat'] }}">{{ $product['cat'] }}</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <label for="cost" class="control-label">Cost</label>
                            <input type="number" id="cost" class="form-control" value="{{ $product['cost'] }}" disabled>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <label for="retail" class="control-label">Retail</label>
                            <input type="number" id="retail" class="form-control" value="{{ $product['retail'] }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Product Description</label>
                    <textarea class="form-control" id="description" disabled>{{ $product['description'] }}</textarea>
                </div>
            </div>
            <div class="col-xs-4 col-md-4">
                <img class="img-responsive" id="product-image" src="{{ url($product['img']) }}">
            </div>
        </div>

    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/admin.navigation.js') }}"></script>
    <script src="{{ url('js/admin.tables.js') }}"></script>
    <script src="{{ url('js/admin.products.js') }}"></script>
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection