@php
    $promotions = array(
        array( 'id' => '123', 'name' => 'Promo 1', 'code' => 'GET20',
        'discount' => '20', 'description' => 'Take 20% off during our fall clearance',
         'type' => '0', 'starts' => '2017-06-20', 'ends' => '2017-08-20'),
         array( 'id' => '123', 'name' => 'Promo 1', 'code' => 'GET20',
        'discount' => '20', 'description' => 'Take 20% off during our fall clearance',
         'type' => '0', 'starts' => '2017-06-20', 'ends' => '2017-08-20'),
         array( 'id' => '123', 'name' => 'Promo 1', 'code' => 'GET20',
        'discount' => '20', 'description' => 'Take 20% off during our fall clearance',
         'type' => '0', 'starts' => '2017-06-20', 'ends' => '2017-08-20'),
         array( 'id' => '123', 'name' => 'Promo 1', 'code' => 'GET20',
        'discount' => '20', 'description' => 'Take 20% off during our fall clearance',
         'type' => '0', 'starts' => '2017-06-20', 'ends' => '2017-08-20'),
         array( 'id' => '123', 'name' => 'Promo 1', 'code' => 'GET20',
        'discount' => '20', 'description' => 'Take 20% off during our fall clearance',
         'type' => '0', 'starts' => '2017-06-20', 'ends' => '2017-08-20'),
    );
@endphp
@extends('layout.layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/admin.css')  }}">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
        <h1>Promotions Management</h1>
        @foreach($promotions as $promo)
            <div class="panel-group" id="{{ $promo['id'] }}" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{ $promo['id'] }}">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#{{ $promo['id'] }}"
                                href="#collapse{{ $promo['id'] }}" aria-expanded="false"
                                aria-controls="collapse{{ $promo['id'] }}">{{ $promo['name'] }}</a>
                        </h4>
                        <i class="glyphicon glyphicon-pencil pull-right"></i>
                    </div>
                </div>
                <div id="collapse{{$promo['id']}}" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="heading{{ $promo['id'] }}">
                    <div class="panel-body">
                        <div class="col-xs-2 col-md-2">
                            <label for="code" class="control-label">Code</label>
                            <input type="text" id="code" class="form-control" value="{{ $promo['code'] }}" disabled>
                        </div>
                        <div class="col-xs-2 col-md-2">
                            <label for="amount" class="control-label">Discount</label>
                            <input type="number" id="amount" class="form-control" value="{{ $promo['discount'] }}" disabled>
                        </div>
                        <div class="col-xs-2 col-md-2">
                            <label for="type" class="control-label">Discount Type</label>
                            <select id="type" class="form-control" disabled>
                                <option value="{{ $promo['discount'] }}">%</option>
                            </select>
                        </div>
                        <div class="col-xs-3 col-md-3">
                            <label for="starts" class="control-label">Promo Starts</label>
                            <input type="date" id="starts" class="form-control" value="{{ $promo['starts'] }}" disabled>
                        </div>
                        <div class="col-xs-3 col-md-3">
                            <label for="ends" class="control-label">Promo Ends</label>
                            <input type="date" id="ends" class="form-control" value="{{ $promo['ends'] }}" disabled>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <label for="description" class="control-label">Promotion Details</label>
                            <textarea id="description" class="form-control" disabled>{{ $promo['description'] }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/admin.navigation.js') }}"></script>
    <script src="{{ url('js/admin.tables.js') }}"></script>
    <script src="{{ url('js/admin.products.js') }}"></script>
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection