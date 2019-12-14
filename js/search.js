$(function () {
    $('.search-field-trigger').click(function(){
        if($('#search-container').css('display') === 'flex') {
            $('#search-container').fadeOut(500, function() {
                $('#search-container').css('display', 'none');
            });
        } else {
            $('#search-container').fadeIn(500, function() {
                $('#search-container').css('display', 'flex');
            });
        }
    })
});