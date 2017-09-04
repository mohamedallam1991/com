@php
    $applicants = array(
        array('id' => 1234, 'company' => 'ABC Inc', 'rep' => 'John Smith', 'appDate' => '06/17/2017', 'status' => 'Reference Check'),
        array('id' => 1234, 'company' => 'ABC Inc', 'rep' => 'John Smith', 'appDate' => '06/17/2017', 'status' => 'New'),
        array('id' => 1234, 'company' => 'ABC Inc', 'rep' => 'John Smith', 'appDate' => '06/17/2017', 'status' => 'Credit Check'),
        array('id' => 1234, 'company' => 'ABC Inc', 'rep' => 'John Smith', 'appDate' => '06/17/2017', 'status' => 'Finished'),
        array('id' => 1234, 'company' => 'ABC Inc', 'rep' => 'John Smith', 'appDate' => '06/17/2017', 'status' => 'Documents Needed')
    );
@endphp

@extends('layout.layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')

    <div class="col-xs-12 col-md-10 common">
        <h1>Application Management</h1>
        <table class="table applicant-table">
            <thead>
            <th>Company</th>
            <th>Representative</th>
            <th>Date Applied</th>
            <th>Status</th>
            </thead>
            <tbody>
                @foreach($applicants as $app)
                    <tr id="{{ $app['id'] }}">
                        <td>{{ $app['company'] }}</td>
                        <td>{{ $app['rep'] }}</td>
                        <td>{{ $app['appDate'] }}</td>
                        <td>{{ $app['status'] }}</td>
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