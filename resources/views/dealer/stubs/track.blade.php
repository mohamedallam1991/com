@php
    $tracking = array(
        array('id' => '12313', 'lastUpdate' => '5/15/2017', 'status' => 'enroute', 'delivery' => '5/20/2017')
    );
@endphp

<div class="col-xs-12 col-md-10 col-md-offset-2 common">
    <h1>Order Tracking</h1>
    <table class="table table-tracking">
        <thead>
            <th>Order Id</th>
            <th>Status</th>
            <th>Last Updated</th>
            <th>Delivery Date (est.)</th>
        </thead>
        <tbody>
            @foreach($tracking as $trackIt)
                <tr id="{{ $trackIt['id'] }}">
                    <td>{{ $trackIt['id'] }}</td>
                    <td>{{ $trackIt['status'] }}</td>
                    <td>{{ $trackIt['lastUpdate'] }}</td>
                    <td>{{ $trackIt['delivery'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
