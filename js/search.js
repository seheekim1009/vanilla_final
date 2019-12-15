$(function () {
    $('.search-field-trigger').click(function(){
        if($('#search-container').css('display') === 'flex') {
            $('#search-container').fadeOut(500, function() {
                $('#search-container').css('display', 'none');
                $('body').css('overflow', 'auto');

            });

    
        } else {
            $('#search-container').fadeIn(500, function() {
                $('#search-container').css('display', 'flex');
                $('body').css('overflow', 'hidden');
            });
        }
        $('#search-button').click(function(){
            const search = $('#search').val();
            location.href="product_list.php?search="+search;  
                });
    })
});


 