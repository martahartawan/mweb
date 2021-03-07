$(document).ready(function() {
    $('#checkbox').click(function() {

        if ($(this).is(':checked')) {
            $('#pwd').attr('type', 'text');
            $('#re-pwd').attr('type', 'text');
        } else {
            $('#pwd').attr('type', 'password');
            $('#re-pwd').attr('type', 'password');
        }
    })
})