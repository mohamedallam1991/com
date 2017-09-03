@extends('layout.layout')

@section('styles')
 <link href="{{ url('css/locator.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="about">
        <h1>Locate a Dealer</h1>
        <div id="locateContent">
            <form method="post" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" id="mapSearch" name="mapSearch" placeholder="Enter Address"/>
                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> </button>
                </div>
            </form>
            Map of nearby dealers
        </div>
        <div id="mapContent">
            <div id="loader"><img src="{{ url('images/ajax-loader.gif') }}"/><p>Map Loading...</p></div>
            <iframe width="600" height="480" allowfullscreen frameborder="0" id="embedMap" src="">

            </iframe>
            <div id="networkDown" class="hidden">
                <h5>Network Down</h5>
                <p>There's no internet<br/>
                    connection.  Reload<br/>
                    the page to retry.</p>
            </div>
        </div>


    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
@endsection