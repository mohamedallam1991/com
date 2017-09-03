@extends('layout.layout')

@section('content')
    <div class="about">
        <h1>Dealer Inquiry</h1>

        Form goes here....
    </div>

@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection