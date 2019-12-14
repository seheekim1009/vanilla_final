function addEvent(id1, id2) {
    if($(id1).css('display') === 'flex') {
        $(id1).fadeOut(500, function() {
            $(id1).css('display', 'none');
            $(id2).fadeIn(500, function() {
                $(id2).css('display', 'flex');
            });
        });
    } else {
        $(id2).fadeOut(500, function() {
            $(id2).css('display', 'none');
            $(id1).fadeIn(500, function() {
                $(id1).css('display', 'flex');
            });
        });
    }
}

$(function () {
    $('#carousel-2').hide();
    $('#carousel-arrow-left, #carousel-arrow-right').click(function(){
        addEvent('#carousel-1', '#carousel-2');
    })
});