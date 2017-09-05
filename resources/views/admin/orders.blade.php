@php
    $orders = array(
        array('id' => '123', 'date' => '7/21/2017', 'company' => 'ABC Inc', 'total' => '$1201.90', 'status' => 'Unfilled'),
        array('id' => '123', 'date' => '7/21/2017', 'company' => 'ABC Inc', 'total' => '$121.90', 'status' => 'In Production'),
        array('id' => '123', 'date' => '7/21/2017', 'company' => 'ABC Inc', 'total' => '$101.90', 'status' => 'QA Inspection'),
        array('id' => '123', 'date' => '7/21/2017', 'company' => 'ABC Inc', 'total' => '$2,001.90', 'status' => 'Packed'),
        array('id' => '123', 'date' => '7/21/2017', 'company' => 'ABC Inc', 'total' => '$21.90', 'status' => 'Shipped'),
    );
@endphp

@extends('layout.layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
        <h1>Order Management</h1>

        <table class="table order-table">
            <thead>
            <th>Order Date</th>
            <th>Order ID</th>
            <th>Company</th>
            <th>Total</th>
            <th>Status</th>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr id="{{ $order['id'] }}">
                    <td>{{ $order['date'] }}</td>
                    <td>{{ $order['id'] }}</td>
                    <td>{{ $order['company'] }}</td>
                    <td>{{ $order['total'] }}</td>
                    <td>{{ $order['status'] }}</td>
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
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection