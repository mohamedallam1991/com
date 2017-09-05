@php
    $items = array(
        array('item' => 'Product 1', 'qty' => '1', 'cost' => '239.85', 'discount' => '12.80'),
        array('item' => 'Product 2', 'qty' => '1', 'cost' => '39.85', 'discount' => '3.80'),
        array('item' => 'Product 1', 'qty' => '1', 'cost' => '29.95', 'discount' => '2.50')
    );
    $total = 239.85 + 39.85 + 29.95;
    $allowed = 19.15;
    $subtotal = $total - $allowed;
@endphp

@extends('layout.layout')


@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
    <h1>Order Details</h1>
        <table class="table">
            <thead>
            <th>Item</th>
            <th>Qty</th>
            <th>Price</th>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item['item'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>{{ $item['cost'] }}</td>
                </tr>
            @endforeach
            <tr>
                <th>Retail Subtotal</th>
                <th></th>
                <th>{{ $total }}</th>
            </tr>
            <tr>
                <td>Dealer Discounts</td>
                <th></th>
                <td>{{ $allowed }}</td>
            </tr>
            <tr>
                <th>Subtotal</th>
                <th></th>
                <th>{{ $subtotal }}</th>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/admin.navigation.js') }}"></script>
    <script src="{{ url('js/admin.tables.js') }}"></script>
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection