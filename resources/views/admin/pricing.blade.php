@php
    $DISCOUNT_P = 0; // Percentage
    $DISCOUNT_D = 1; // Dollars
    $currentDealer = '';
    $dealers = array(
        array('id' => '224', 'company' => 'ABC Inc',
            'products' => array(
                array( 'id' => '123', 'discount' => '10', 'type' => $DISCOUNT_D),
                array( 'id' => '124', 'discount' => '15', 'type' => $DISCOUNT_P),
                array( 'id' => '125', 'discount' => '18', 'type' => $DISCOUNT_P),
                array( 'id' => '126', 'discount' => '20', 'type' => $DISCOUNT_D),
                array( 'id' => '127', 'discount' => '5', 'type' => $DISCOUNT_P),
                array( 'id' => '128', 'discount' => '14', 'type' => $DISCOUNT_P),
                array( 'id' => '129', 'discount' => '10', 'type' => $DISCOUNT_P),
            )),
        array('id' => '225', 'company' => 'BCD Inc', 'products' => array(
                array( 'id' => '123', 'discount' => '10', 'type' => $DISCOUNT_D),
                array( 'id' => '124', 'discount' => '15', 'type' => $DISCOUNT_P),
                array( 'id' => '125', 'discount' => '18', 'type' => $DISCOUNT_P),
                array( 'id' => '126', 'discount' => '20', 'type' => $DISCOUNT_D),
                array( 'id' => '127', 'discount' => '5', 'type' => $DISCOUNT_P),
                array( 'id' => '128', 'discount' => '14', 'type' => $DISCOUNT_P),
                array( 'id' => '129', 'discount' => '10', 'type' => $DISCOUNT_P),
            )),
        array('id' => '226', 'company' => 'CDE Inc', 'products' => array(
                array( 'id' => '123', 'discount' => '10', 'type' => $DISCOUNT_D),
                array( 'id' => '124', 'discount' => '15', 'type' => $DISCOUNT_P),
                array( 'id' => '125', 'discount' => '18', 'type' => $DISCOUNT_P),
                array( 'id' => '126', 'discount' => '20', 'type' => $DISCOUNT_D),
                array( 'id' => '127', 'discount' => '5', 'type' => $DISCOUNT_P),
                array( 'id' => '128', 'discount' => '14', 'type' => $DISCOUNT_P),
                array( 'id' => '129', 'discount' => '10', 'type' => $DISCOUNT_P),
            )),
        array('id' => '227', 'company' => 'DEF Inc', 'products' => array(
                array( 'id' => '123', 'discount' => '10', 'type' => $DISCOUNT_D),
                array( 'id' => '124', 'discount' => '15', 'type' => $DISCOUNT_P),
                array( 'id' => '125', 'discount' => '18', 'type' => $DISCOUNT_P),
                array( 'id' => '126', 'discount' => '20', 'type' => $DISCOUNT_D),
                array( 'id' => '127', 'discount' => '5', 'type' => $DISCOUNT_P),
                array( 'id' => '128', 'discount' => '14', 'type' => $DISCOUNT_P),
                array( 'id' => '129', 'discount' => '10', 'type' => $DISCOUNT_P),
            )),
        array('id' => '228', 'company' => 'EFG Inc', 'products' => array(
                array( 'id' => '123', 'discount' => '10', 'type' => $DISCOUNT_D),
                array( 'id' => '124', 'discount' => '15', 'type' => $DISCOUNT_P),
                array( 'id' => '125', 'discount' => '18', 'type' => $DISCOUNT_P),
                array( 'id' => '126', 'discount' => '20', 'type' => $DISCOUNT_D),
                array( 'id' => '127', 'discount' => '5', 'type' => $DISCOUNT_P),
                array( 'id' => '128', 'discount' => '14', 'type' => $DISCOUNT_P),
                array( 'id' => '129', 'discount' => '10', 'type' => $DISCOUNT_P),
            )),
    );
    $products = array(
        array( 'id' => '123', 'name' => 'Product 1', 'img' => '/images/product.jpg', 'cost' => '150.32', 'retail' => '241.95'),
        array( 'id' => '124', 'name' => 'Product 2', 'img' => '/images/product.jpg', 'cost' => '18.53', 'retail' => '29.95'),
        array( 'id' => '125', 'name' => 'Product 3', 'img' => '/images/product.jpg', 'cost' => '832.00', 'retail' => '1331.49'),
        array( 'id' => '126', 'name' => 'Product 4', 'img' => '/images/product.jpg', 'cost' => '38.20', 'retail' => '61.49'),
        array( 'id' => '127', 'name' => 'Product 5', 'img' => '/images/product.jpg', 'cost' => '152.91', 'retail' => '244.99'),
        array( 'id' => '128', 'name' => 'Product 6', 'img' => '/images/product.jpg', 'cost' => '78.23', 'retail' => '125.49'),
        array( 'id' => '129', 'name' => 'Product 7', 'img' => '/images/product.jpg', 'cost' => '40.21', 'retail' => '64.79'),
    );
@endphp

@extends('layout.layout')

@section('styles')
    <link href="{{ url('css/admin.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('admin.stubs.navigation')
    <div class="col-xs-12 col-md-10 common">
        <h1>Dealer Pricing</h1>
        <form id="dealer-picker" class="form-inline pull-right">
            <div class="form-group">
                <label for="dealer" class="control-label">Dealer</label>
                <select class="form-control" id="dealer">
                    <option value="-1">Select a Dealer</option>
                    @foreach($dealers as $dealer)
                        <option value="{{ $dealer['id'] }}"
                            @if($currentDealer === $dealer['id'])
                                selected
                            @endif
                        >{{ $dealer['company'] }}</option>
                    @endforeach
                </select>
            </div>
        </form>
        <form id="product-list" class="form" method="post">
            <table class="table item-table">
                <thead>
                <th>Product</th>
                <th>Cost</th>
                <th>Retail</th>
                <th>Margin</th>
                <th>Discount Type</th>
                <th>Discount Amount</th>
                <th>Sale Price</th>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr id="{{ $product['id'] }}">
                            <td><img src="{{ url($product['img']) }}">{{ $product['name'] }}</td>
                            <td class="cost">{{ $product['cost'] }}</td>
                            <td class="retail">{{ $product['retail'] }}</td>
                            <td class="margin">0%</td>
                            <td>
                                <select class="form-control discount-type">
                                    <option value="0">%</option>
                                    <option value="1">$</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" class="form-control discount-amount" value="0">
                            </td>
                            <td>
                                <input type="number" disabled class="form-control sale-price" value="{{ $product['retail'] }}">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
@endsection

@section('script.js')
    @parent
    <script src="{{ url('js/admin.navigation.js') }}"></script>
    <script src="{{ url('js/admin.tables.js') }}"></script>
    <script src="{{ url('js/constrain.js') }}"></script>
    <script>
        var currentDealer = '';
        var products = {
            '123': {
                'id': '123',
                'name': 'Product 1',
                'img': '/images/product.jpg',
                'cost': '150.32',
                'retail': '241.95'
            },
            '124': {'id': '124', 'name': 'Product 2', 'img': '/images/product.jpg', 'cost': '18.53', 'retail': '29.95'},
            '125': {
                'id': '125',
                'name': 'Product 3',
                'img': '/images/product.jpg',
                'cost': '832.00',
                'retail': '1331.49'
            },
            '126': {'id': '126', 'name': 'Product 4', 'img': '/images/product.jpg', 'cost': '38.20', 'retail': '61.49'},
            '127': {
                'id': '127',
                'name': 'Product 5',
                'img': '/images/product.jpg',
                'cost': '152.91',
                'retail': '244.99'
            },
            '128': {
                'id': '128',
                'name': 'Product 6',
                'img': '/images/product.jpg',
                'cost': '78.23',
                'retail': '125.49'
            },
            '129': {'id': '129', 'name': 'Product 7', 'img': '/images/product.jpg', 'cost': '40.21', 'retail': '64.79'},
        };
        dealers = {
            '224': {
                'id': '224', 'company': 'ABC Inc',
                'products': {
                    '123': {'discount': '10', 'type': 1},
                    '124': {'discount': '15', 'type': 0},
                    '125': {'discount': '18', 'type': 0},
                    '126': {'discount': '20', 'type': 1},
                    '127': {'discount': '5', 'type': 0},
                    '128': {'discount': '14', 'type': 0},
                    '129': {'discount': '10', 'type': 0},
                }
            },
            '225': {
                'id': '225', 'company': 'BCD Inc',
                'products': {
                    '123': {'discount': '10', 'type': 1},
                    '124': {'discount': '15', 'type': 0 },
                    '125': {'discount': '18', 'type': 0 },
                    '126': {'discount': '20', 'type': 1},
                    '127': {'discount': '5', 'type': 0 },
                    '128': {'discount': '14', 'type': 0 },
                    '129': {'discount': '10', 'type': 0 },
                }
            },
            '226': {
                'id': '226', 'company': 'CDE Inc',
                'products': {
                    '123': {'discount': '10', 'type': 1},
                    '124': {'discount': '15', 'type': 0 },
                    '125': {'discount': '18', 'type': 0 },
                    '126': {'discount': '20', 'type': 1},
                    '127': {'discount': '5', 'type': 0 },
                    '128': {'discount': '14', 'type': 0 },
                    '129': {'discount': '10', 'type': 0 },
                }
            },
            '227': {
                'id': '227', 'company': 'DEF Inc',
                'products': {
                    '123': {'discount': '10', 'type': 1},
                    '124': {'discount': '15', 'type': 0 },
                    '125': {'discount': '18', 'type': 0 },
                    '126': {'discount': '20', 'type': 1},
                    '127': {'discount': '5', 'type': 0 },
                    '128': {'discount': '14', 'type': 0 },
                    '129': {'discount': '10', 'type': 0 },
                }
            },
            '228': {
                'id': '228', 'company': 'EFG Inc',
                'products': {
                    '123': {'discount': '10', 'type': 1},
                    '124': {'discount': '15', 'type': 0 },
                    '125': {'discount': '18', 'type': 0 },
                    '126': {'discount': '20', 'type': 1},
                    '127': {'discount': '5', 'type': 0 },
                    '128': {'discount': '14', 'type': 0 },
                    '129': {'discount': '10', 'type': 0 },
                }
            },
        };
        // Rendered here to allow server variables
        function calculateDiscount(type, discount, retail) {
            if( Number(type) === 0 ) {
                var num = retail / 100;
                return (Number(retail) * Number(discount) / 100).toFixed(2);
            } else if( Number(type) === 1 ) {
                return Number(discount).toFixed(2);
            }
        }

        function updateRow(rowId) {
            var retail = $('tr#' + rowId + ' .retail')[0].innerHTML;
            var type = $('tr#' + rowId + ' .discount-type').val();
            var discount = $('tr#' + rowId + ' .discount-amount').val();

            discount = calculateDiscount(type, discount, retail);
            $('tr#' + rowId + ' .sale-price').val(retail - discount);
            calculateMargins();
        }

        function updatePricingTable(dealerId) {

            $.each(dealers[dealerId].products, function(key, value) {
                var retail = $('tr#' + key + ' .retail')[0].innerHTML;
                $('tr#' + key + ' .discount-type').val(value['type']);
                var discount = calculateDiscount(value['type'], value['discount'], retail);
                $('tr#' + key + ' .discount-amount').val(value['discount']);
                $('tr#' + key + ' .sale-price').val((retail - discount).toFixed(2));
                calculateMargins();
            });
        }


        function calculateMargins() {
            var costs = $('.cost');
            var sales = $('.sale-price');
            var types = $('.discount-type');
            var discounts = $('.discount-amount');
            var margins = $('.margin')
            costs.each(function(a) {
                margins[a].innerHTML = ((sales[a].value - costs[a].innerHTML) / sales[a].value * 100).toFixed(2);
            });
        }

        $(function() {
            $('#dealer').change(function(e) {
                currentDealer = e.target.selectedOptions[0].value;
                updatePricingTable(currentDealer);
            });

            $('.discount-type').change(function(e) {
                updateRow(e.target.parentNode.parentNode.id);
            });

            $('.discount-amount').keyup(function(e) {
                updateRow(e.target.parentNode.parentNode.id);
            });

            $('.discount-amount').change(function(e) {
                updateRow(e.target.parentNode.parentNode.id);
            });
            calculateMargins();
        });
    </script>
@endsection