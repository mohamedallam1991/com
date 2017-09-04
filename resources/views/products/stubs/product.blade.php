@php
    $products = array(
        array( 'id' => '123', 'name' => 'Product 1', 'img' => '/images/product.jpg', 'desc' => 'Product does some wonderful things, just buy it and find out for yourself.'),
        array( 'id' => '124', 'name' => 'Product 2', 'img' => '/images/product.jpg', 'desc' => 'Product does some wonderful things, just buy it and find out for yourself.'),
        array( 'id' => '125', 'name' => 'Product 3', 'img' => '/images/product.jpg', 'desc' => 'Product does some wonderful things, just buy it and find out for yourself.'),
        array( 'id' => '126', 'name' => 'Product 4', 'img' => '/images/product.jpg', 'desc' => 'Product does some wonderful things, just buy it and find out for yourself.'),
        array( 'id' => '127', 'name' => 'Product 5', 'img' => '/images/product.jpg', 'desc' => 'Product does some wonderful things, just buy it and find out for yourself.'),
        array( 'id' => '128', 'name' => 'Product 6', 'img' => '/images/product.jpg', 'desc' => 'Product does some wonderful things, just buy it and find out for yourself.'),
        array( 'id' => '129', 'name' => 'Product 7', 'img' => '/images/product.jpg', 'desc' => 'Product does some wonderful things, just buy it and find out for yourself.'),
    );
@endphp

<div class="container-fluid category">
    <div class="row">
        @foreach($products as $product)
            <div class="col-xs-6 col-md-3 adjust">
                <div class="product-card" id="{{ $product['id'] }}">
                    <h4>{{ $product['name'] }}</h4>
                    <img src="{{ $product['img'] }}">
                    <p>{{ $product['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>