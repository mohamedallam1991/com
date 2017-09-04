$(function() {
    var uncon = $('.unconstrained');
    if(uncon.hasClass('constrain')) {
        // Intercept the call to open the cart link
        var cartA = $('.glyphicon-shopping-cart');
        cartA.click(function(e) {
            e.preventDefault();
            if($('.cart').hasClass('cart-closed')) {
                $('.cart').removeClass('cart-closed');
            } else {
                $('.cart').addClass('cart-closed');
            }
        });
    }

});