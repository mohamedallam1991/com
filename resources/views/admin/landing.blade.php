@extends('layout.layout')

@section('content')
    <section>
        @include('admin.stubs.applicants')
    </section>
    <section>
        @include('admin.stubs.orders')
    </section>
    <section>
        @include('admin.stubs.contacts')
    </section>
@endsection