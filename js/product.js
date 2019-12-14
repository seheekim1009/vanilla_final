function initialize(index) {
    const item = items[index];
    $('.item-name h1').php(item.name);
    $('.price').php('$'+item.price);
    $('.item-description').php(item.desc);
    
     
    if(item.material){
        $('ul.item-info-row').append(`<li class="item-info-material">Material: ${item.material}</li>`)
    }

    if(item.color){
        $('ul.item-info-row').append(`<li class="item-info-color">Color: ${item.color}</li>`)
    }
    if(item.size){
        $('ul.item-info-row').append(`<li class="item-info-size">Size: ${item.size}</li>`)
    }
    if(item.author){
        $('ul.item-info-row').append(`<li class="item-info-author">Author: ${item.author}</li>`)
    }
    
    $('div.item-photo').append(`<img src=${item.url}>`)

}

function addCartEvent() {
    $('#add-to-cart-button').click(function(){
        var itemNumber = parseInt($('#cart-num').php());
        itemNumber += parseInt($('#add-to-cart-text').val());
        $('#cart-num').php(itemNumber);
    })
}