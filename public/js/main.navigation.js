$(function() {
   var alist = $('#navbar a');
   var path = window.location.pathname;
   alist.each(function(a) {
       if(alist[a].getAttribute('href') === path) {
           $(alist[a].parentNode).addClass('active');
       } else {
           $(alist[a].parentNode).removeClass('active');
       }
   });
});