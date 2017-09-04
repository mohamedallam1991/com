@php
    $orders = array(
        array('id' => '12345', 'placed' => '6/19/2017', 'status' => 'pending', 'total' => '$1239.56'),
        array('id' => '12313', 'placed' => '5/01/2017', 'status' => 'shipped', 'total' => '$1239.56'),
        array('id' => '11543', 'placed' => '3/18/2017', 'status' => 'shipped', 'total' => '$1239.56'),
        array('id' => '11412', 'placed' => '1/24/2017', 'status' => 'shipped', 'total' => '$1239.56'),
        array('id' => '11011', 'placed' => '12/18/2016', 'status' => 'shipped', 'total' => '$1239.56'),
   );
@endphp

<div class="col-xs-12 col-md-10 common">
    <h1>Recent Orders</h1>
    <table class="table order-table">
        <thead>
            <th>Date</th>
            <th>Order Id</th>
            <th>Status</th>
            <th>Total</th>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <a href="/dealer/order/{{ $order['id'] }}">
                    <tr id="{{ $order['id'] }}">
                        <td>{{ $order['placed'] }}</td>
                        <td>{{ $order['id'] }}</td>
                        <td>{{ $order['status'] }}
                            @if($order['status'] === 'shipped')
                                <a href="/dealer/tracking?id={{ $order['id'] }}" class="btn btn-default shipping-link"><img class="shipping-img" src="{{ url('images/shipping.png') }}"/></a>
                            @endif
                        </td>
                        <td>{{ $order['total'] }}</td>
                    </tr>
                </a>
            @endforeach
        </tbody>
    </table>
</div>
