@php
    $contacts = array(
        array('id' => '123', 'name' => 'Jack Smith', 'date' => '6/17/2017', 'responded' => 'Awaiting Response'),
        array('id' => '123', 'name' => 'Jack Smith', 'date' => '6/17/2017', 'responded' => '06/20/2017'),
        array('id' => '123', 'name' => 'Jack Smith', 'date' => '6/17/2017', 'responded' => '06/20/2017'),
        array('id' => '123', 'name' => 'Jack Smith', 'date' => '6/17/2017', 'responded' => '06/20/2017'),
        array('id' => '123', 'name' => 'Jack Smith', 'date' => '6/17/2017', 'responded' => '06/20/2017'),
    );
@endphp

@extends('layout.layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
        <h1>Contact Requests lives here...</h1>
        <table class="table contact-table">
            <thead>
            <th>Name</th>
            <th>Date Recieved</th>
            <th>Date Responded</th>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr id="{{ $contact['id'] }}">
                    <td>{{ $contact['name'] }}</td>
                    <td>{{ $contact['date'] }}</td>
                    <td>{{ $contact['responded'] }}</td>
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