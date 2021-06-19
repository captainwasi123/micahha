 $(document).ready(function(){
    'use strict'
    var host = $("meta[name='host']").attr("content");

    $(document).on('click', '.removeAccomWishlist', function(){
        var id = $(this).data('id');
        if(confirm('Are you sure want to remove this.?')){
            window.location.href = host+'/wishlist/accommodation/remove/'+id;
        }
    });

    $(document).on('click', '.removeCollWishlist', function(){
        var id = $(this).data('id');
        if(confirm('Are you sure want to remove this.?')){
            window.location.href = host+'/wishlist/collectibles/remove/'+id;
        }
    });
});