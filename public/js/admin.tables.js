$(function() {
    $('.applicant-table tr').click(function(e) {
        console.log(e.target);
        if(!e.target.parentNode.id) {
            return;
        }
        e.preventDefault();
        var a = document.createElement('a');
        a.setAttribute('href', '/dsadmin/application/' + e.target.parentNode.id);
        a.click();
        a.remove();
    });

    $('.contact-table tr').click(function(e) {
        e.preventDefault();
        var a = document.createElement('a');
        a.setAttribute('href', '/dsadmin/contact/' + e.target.parentNode.id);
        a.click();
        a.remove();
    });
});