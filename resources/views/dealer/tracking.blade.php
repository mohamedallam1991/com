@php
    $tracking = array(
        array('id' => '12313', 'placed' => '5/01/2017', 'status' => 'shipped', 'total' => '$1239.56'),
        array('id' => '11543', 'placed' => '3/18/2017', 'status' => 'shipped', 'total' => '$1239.56'),
        array('id' => '11412', 'placed' => '1/24/2017', 'status' => 'shipped', 'total' => '$1239.56'),
        array('id' => '11011', 'placed' => '12/18/2016', 'status' => 'shipped', 'total' => '$1239.56'),
   );
@endphp

@extends('layout.layout')

@section('styles')
    <link href="{{ url('css/dealer.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('dealer.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
        <h1>Tracking Information</h1>
        @foreach($tracking as $trackIt)
            <div class="panel-group" id="o{{ $trackIt['id'] }}" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="o{{ $trackIt['id'] }}Heading">
                        <h2 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#o{{ $trackIt['id'] }}" href="#collapse{{ $trackIt['id'] }}" aria-expanded="false" aria-controls="collapse{{ $trackIt['id'] }}">
                                Order #{{ $trackIt['id'] }} - {{ $trackIt['placed'] }}
                            </a>
                        </h2>
                    </div>
                    <div id="collapse{{ $trackIt['id'] }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="o{{ $trackIt['id'] }}Heading">
                        <div class="panel-body">
                            data provided by tracking apis
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
    <script src="{{ url('js/dealer.navigation.js') }}"></script>
@endsection