$(document).ready(function(){
$('select[name="category"]').on('change', function() {
    if ($(this).val() == 'equipe') {
        $('select[name="user_id"]').removeClass('hide');
    } else {
        $('select[name="user_id"]').addClass('hide').val('null');
    }
});
});


//.find('select').val('null')