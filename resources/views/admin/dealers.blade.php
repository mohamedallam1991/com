@php
    $dealers = array(
        array('id' => '123', 'company' => 'ABC Inc', 'revenue' => '$12,001.90', 'discount' => '15%'),
        array('id' => '123', 'company' => 'ABC Inc', 'revenue' => '$12,001.90', 'discount' => '13%'),
        array('id' => '123', 'company' => 'ABC Inc', 'revenue' => '$12,001.90', 'discount' => '13%'),
        array('id' => '123', 'company' => 'ABC Inc', 'revenue' => '$12,001.90', 'discount' => '13%'),
        array('id' => '123', 'company' => 'ABC Inc', 'revenue' => '$12,001.90', 'discount' => '13%'),
    );
@endphp

@extends('layout.layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
    <h1>Dealer Management</h1>
        <table class="table dealer-table">
            <thead>
            <th>Company</th>
            <th>Revenue</th>
            <th>Discount</th>
            </thead>
            <tbody>
            @foreach($dealers as $dealer)
                <tr id="{{ $dealer['id'] }}">
                    <td>{{ $dealer['company'] }}</td>
                    <td>{{ $dealer['revenue'] }}</td>
                    <td>{{ $dealer['discount'] }}</td>
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