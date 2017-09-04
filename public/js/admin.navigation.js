$(function() {
    var alist = $('.sidebar a');
    var path = window.location.pathname;
    alist.each(function(element) {
        if(alist[element].getAttribute('href') === path) {
            $(alist[element].parentNode).addClass('active');
        } else {
            $(alist[element].parentNode).removeClass('active');
        }
    });
});