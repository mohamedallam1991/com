$(function() {
   var alist = $('#navbar a');
   var path = window.location.pathname;
   productsPath = path.indexOf('products/cat/');
   alist.each(function(a) {
       if(alist[a].getAttribute('href') === path) {
           $(alist[a].parentNode).addClass('active');
       } else if(productsPath > 0 && alist[a].getAttribute('href').indexOf('products') > 0) {
           $(alist[a].parentNode).addClass('active');
       } else {
           $(alist[a].parentNode).removeClass('active');
       }
   });
});