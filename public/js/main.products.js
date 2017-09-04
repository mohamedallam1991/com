$(function() {
    alist = $('.list-group-item');
    var path = window.location.pathname;
    alist.each(function(a) {

        if(alist[a].getAttribute('href') === path) {
            $(alist[a]).addClass('active');
        } else {
            $(alist[a]).removeClass('active');
        }
    });

    // Add clicks to product cards
    $('.product-card').click(function(e) {
        e.preventDefault();
        var a = document.createElement('a');
        a.setAttribute('href', '/products/product/' + e.target.parentNode.id);
        a.click();
        a.remove();
    })
})