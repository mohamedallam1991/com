$(function() {
    console.log('hi there');
    $('#promotion button').click(function(e) {
        e.preventDefault();
        $('#promotion').addClass('hidden');
    });
});