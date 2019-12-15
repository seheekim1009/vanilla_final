$(function () {
    $('.search-field-trigger').click(function(){
        if($('#search-container').css('display') === 'flex') {
            $('#search-container').fadeOut(500, function() {
                $('#search-container').css('display', 'none');
                $('body').css('overflow', 'auto');
                /* Enable scroll */
                $('.contents').off('scroll touchmove mousewheel');
            });
        } else {
            $('#search-container').fadeIn(500, function() {
                $('#search-container').css('display', 'flex');
                $('body').css('overflow', 'hidden');
                /* Disable scroll */
                $('.contents').on('scroll touchmove mousewheel', function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    return false;
                  });
            });
        }
        $('#search-button').click(function(){
            const search = $('#search').val();
            location.href="product_list.php?search="+search;  
                });
    })
});


 