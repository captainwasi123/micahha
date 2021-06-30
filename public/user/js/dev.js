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


    //Artist
        $(document).on('click', '.withdraw_request_btn', function(){
            var id = $(this).data('id');
            if(confirm('Are you sure want to request for withdraw.?')){
                $.get( host+"/artist/withdraw/request/", function( data ) {
                    if(data.status == '100'){
                        $('#withdraw_error').html('<br><div class="alert alert-warning">'+data.message+'</div>');
                    }else{
                        $('#withdraw_error').html('<br><div class="alert alert-success">'+data.message+'</div>');
                        $('.balance_tray span').html('0.0');
                    }
                });
            }
        });


        $(document).on('click', '.artistOrderProcess', function(){
            var id = $(this).data('id');
            if(confirm('Are you sure want to process this.?')){
                window.location.href = host+'/artist/orders/process/'+id;
            }
        });
});