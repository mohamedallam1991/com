@php
    $contact = array(
        'name' => 'Jack Smith',
        'email' => 'jack@example.com',
        'comments' => 'Can you please email me as soon as possible?'
    );
@endphp

@extends('layout.layout')


@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
        <h1>Contact Request</h1>
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input class="form-control disabled" type="text" id="name" value="{{ $contact['name'] }}" disabled/>
        </div>
        <div class="form-group">
            <label for="email" class="control-label">Email Address</label>
            <a class="form-control" href="mailto://{{ $contact['email'] }}">{{ $contact['email'] }}</a>
        </div>
        <div class="form-group">
            <label for="comments" class="control-label">Comments</label>
            <textarea id="comments" class="form-control" disabled>{{ $contact['comments'] }}</textarea>
        </div>
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/admin.navigation.js') }}"></script>
    <script src="{{ url('js/admin.tables.js') }}"></script>
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection