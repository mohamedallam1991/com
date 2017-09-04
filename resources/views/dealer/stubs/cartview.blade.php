@php
    $items = array(
        array('item' => 'Product 1', 'qty' => '1', 'cost' => '239.85'),
        array('item' => 'Product 2', 'qty' => '1', 'cost' => '39.85'),
        array('item' => 'Product 1', 'qty' => '1', 'cost' => '29.95')
    );
    $total = 239.85 + 39.85 + 29.95;
@endphp
<div class="cart cartview cart-closed">
    <div class="cart extender cart-closed">

    </div>
    <table class="table">
        <thead>
        <th>Item</th>
        <th>Qty</th>
        <th>Price</th>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item['item'] }}</td>
                <td>{{ $item['qty'] }}</td>
                <td>{{ $item['cost'] }}</td>
            </tr>
        @endforeach
        <tr>
            <th>Subtotal</th>
            <th></th>
            <th>{{ $total }}</th>
        </tr>
        </tbody>
    </table>
    <button class="btn btn-success btn-checkout">Checkout</button>
</div>