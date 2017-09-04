$(function() {
    $('.order-table tr').click(function(e) {
        console.log(e.target);
        if(!e.target.parentNode.id) {
            return;
        }
        e.preventDefault();
        var a = document.createElement('a');
        a.setAttribute('href', '/dealer/order/' + e.target.parentNode.id);
        a.click();
        a.remove();
    });
});