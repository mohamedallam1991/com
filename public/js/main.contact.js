$(function () {
       $('.form-control').keyup(function(e) {
           input = e.target;
           console.log(input);
           label = $('#' + input.parentNode.children[0].id);
           console.log(label);
           var text = input.value;
           if( text.length > 0 ) {
               if( label.hasClass('label-hidden') ) {
                   label.removeClass('label-hidden');
               }
           } else {
               if( !label.hasClass('label-hidden') ) {
                   label.addClass('label-hidden');
               }
           }
       });

    $('.form-control').change(function(e) {
        input = e.target;
        label = $('#' + input.parentNode.children[0].id);
        var text = input.value;
        if( text.length > 0 ) {
            if( label.hasClass('label-hidden') ) {
                label.removeClass('label-hidden');
            }
        } else {
            if( !label.hasClass('label-hidden') ) {
                label.addClass('label-hidden');
            }
        }
    });
});