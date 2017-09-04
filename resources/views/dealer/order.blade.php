@php
    $items = array(
        array('item' => 'Product 1', 'qty' => '1', 'cost' => '239.85'),
        array('item' => 'Product 2', 'qty' => '1', 'cost' => '39.85'),
        array('item' => 'Product 1', 'qty' => '1', 'cost' => '29.95')
    );
    $total = 239.85 + 39.85 + 29.95;
@endphp

@extends('layout.layout')

@section('styles')
    <link href="{{ url('css/dealer.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('dealer.stubs.navigation')
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
                <th>Subtotal</th>
                <th></th>
                <th>{{ $total }}</th>
            </tr>
            </tbody>
        </table>
    </div>


@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
    <script src="{{ url('js/dealer.navigation.js') }}"></script>
@endsection