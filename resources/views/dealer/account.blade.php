@extends('layout.layout')

@section('styles')
    <link href="{{ url('css/dealer.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('dealer.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
        <h1>My Account</h1>
        <div class="panel-group" id="contactInfo" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="contactHeading">
                    <h2 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#contactInfo" href="#collapseContact" aria-expanded="true" aria-controls="collapseContact">
                            Contact Information
                        </a>
                    </h2>
                    <i class="glyphicon glyphicon-pencil pull-right account-edit" title="Edit Information"></i>
                </div>
                <div id="collapseContact" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="contactHeading">
                    <div class="panel-body">
                        contact information lives here
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group" id="billingInfo" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="billingHeading">
                    <h2 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#billingInfo" href="#collapseBilling" aria-expanded="false" aria-controls="collapseBilling">
                            Billing Information
                        </a>
                    </h2>
                    <i class="glyphicon glyphicon-pencil pull-right account-edit" title="Edit Information"></i>
                </div>
                <div id="collapseBilling" class="panel-collapse collapse" role="tabpanel" aria-labelledby="billingHeading">
                    <div class="panel-body">
                        billing information lives here
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group" id="shippingInfo" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="shippingHeading">
                    <h2 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#shippingInfo" href="#collapseShipping" aria-expanded="false" aria-controls="collapseShipping">
                            Shipping Information
                        </a>
                    </h2>
                    <i class="glyphicon glyphicon-pencil pull-right account-edit" title="Edit Information"></i>
                </div>
                <div id="collapseShipping" class="panel-collapse collapse" role="tabpanel" aria-labelledby="shippingHeading">
                    <div class="panel-body">
                        shipping information lives here
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group" id="paymentInfo" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="paymentHeading">
                    <h2 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#paymentInfo" href="#collapsePayment" aria-expanded="false" aria-controls="collapsePayment">
                            Payment Information
                        </a>
                    </h2>
                    <i class="glyphicon glyphicon-pencil pull-right account-edit" title="Edit Information"></i>
                </div>
                <div id="collapsePayment" class="panel-collapse collapse" role="tabpanel" aria-labelledby="paymentHeading">
                    <div class="panel-body">
                        payment information lives here
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group" id="accountInfo" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="accountHeading">
                    <h2 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accountInfo" href="#collapseAccount" aria-expanded="false" aria-controls="collapseAccount">
                            Account Information
                        </a>
                    </h2>
                    <i class="glyphicon glyphicon-pencil pull-right account-edit" title="Edit Information"></i>
                </div>
                <div id="collapseAccount" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accountHeading">
                    <div class="panel-body">
                        account information lives here
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/constrain.js') }}"></script>
    <script src="{{ url('js/dealer.navigation.js') }}"></script>
@endsection