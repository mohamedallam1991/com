$(function() {
    alist = $('.list-group-item');
    var path = window.location.pathname;
    alist.each(function(a) {

        if(alist[a].getAttribute('href') === path) {
            $(alist[a]).addClass('active');
        } else {
            $(alist[a]).removeClass('active');
        }
    })
})