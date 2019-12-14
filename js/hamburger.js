$(function () {
    $('#hamburger, #close-button').click(function(){
        $('#menu').animate({width:'toggle'},500);
    })
});