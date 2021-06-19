$(document).ready(function(){

    'use strict'
    var host = $("meta[name='host']").attr("content");

    $(document).on('click', '.accomAddWishlist', function(){
        var el = $(this);
        var id = el.data('id');
        $.get( host+"/accommodation/wishlist/add/"+id, function( data ) {
            el.remove();
        });
    });

     $(document).on('click', '.collAddWishlist', function(){
        var el = $(this);
        var id = el.data('id');
        $.get( host+"/collectibles/wishlist/add/"+id, function( data ) {
            el.remove();
        });
    });
});