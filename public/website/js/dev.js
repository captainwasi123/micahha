var host = $("meta[name='host']").attr("content");

$(document).ready(function(){

    'use strict'


    $(document).on('change', '#country_input', function() {
        var val = $(this).find(':selected').attr('data-code');
        $('#phonecode_span').html(val);
        $('#phonecode_input').val(val);
    });


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

    $(document).on('click', '.plusItem', function(){
        var el = $(this);
        var id = el.data('id');
        var price = el.data('price');
        var method = el.data('method');
        plusItem(id, price, method);
    });
    $(document).on('click', '.minusItem', function(){
        var el = $(this);
        var id = el.data('id');
        var price = el.data('price');
        var method = el.data('method');
        minusItem(id, price, method);
    });

    $(document).on('keyup', '#username', function(){
        var val = $(this).val();

        $.get( host+"/username/verify/"+val, function( data ) {
            if(data == 'taken'){
                $('#user_error').html('Username is already taken.');
                $('#user_error').css({'color': 'red'});
            }else{
                $('#user_error').html('Username is available.');
                $('#user_error').css({'color': 'green'});
            }
        });
    });

    $(document).on('keyup', '#username', function(){
        var val = $(this).val();

        $.get( host+"/username/verify/"+val, function( data ) {
            if(data == 'taken'){
                $('#user_error').html('Username is already taken.');
                $('#user_error').css({'color': 'red'});
            }else{
                $('#user_error').html('Username is available.');
                $('#user_error').css({'color': 'green'});
            }
        });
    }).on('paste', function(e) {
        setTimeout(function(){
            var val = $('#username').val();

            $.get( host+"/username/verify/"+val, function( data ) {
                if(data == 'taken'){
                    $('#user_error').html('Username is already taken.');
                    $('#user_error').css({'color': 'red'});
                }else{
                    $('#user_error').html('Username is available.');
                    $('#user_error').css({'color': 'green'});
                }
            });
        }, 0);
    });




    //Collectibles

        //Add to cart
            $(document).on('click', '.addtocartColl', function(){
                var el = $(this);
                var id = el.data('id');
                $.get( host+"/collectibles/cart/add/"+id, function( data ) {
                    if(data.status == 'success'){
                        $('#cart_load').html('<div class="alert alert-success"><strong>Success!</strong>'+data.message+'</div>');
                        if(data.item == '1'){
                            var ccount = parseInt($('#cart_count').html());
                            $('#cart_count').html(ccount+1);
                        }
                    }else{
                        $('#cart_load').html('<div class="alert alert-danger"><strong>Alert!</strong>'+data.message+'</div>');
                    }
                });
            });

        //Remove from cart
            $(document).on('click', '.removeItemCart', function(){
                var el = $(this);
                var id = el.data('id');
                var type = el.data('type');
                let price = parseFloat(el.data('price'));
                let qty = parseInt(el.data('qty'));
                let gst = parseInt($('#gst').val());
                let subtotal = parseFloat($('#cart_subtotal').html());
                let total = parseFloat($('#cart_total').html());
                let ccount = parseInt($('#cart_count').html());
                $.get( host+"/cart/remove/"+id+"/"+type, function( data ) {
                    if(data == 'success'){
                        subtotal = subtotal-(price*qty);
                        $('#cart_subtotal').html(subtotal);
                        setTotal(subtotal);
                        el.parent().parent().remove();
                        if(ccount == 1){
                            $('#cart_tray').html('<tr><td colspan="6">No Items Found.</td></tr>');
                        }
                        $('#cart_count').html(ccount-1);
                    }
                });
            });

        //Validate Country
            $(document).on('change', '#country', function(){
                var val = $(this).val();
                $('#cart_tray_checkout').html('<tr><td colspan="4" class="cart_loader"><img src="'+host+'/public/loader.gif"></td></tr>');
                $.get( host+"/cart/countryValidate/"+val, function( data ) {
                    $('#cart_tray_checkout').html(data);
                    var valid = $('#valid').val();
                    if(valid == 0){
                        $('#order_btn').attr('type', 'submit');
                        $('#order_btn').removeAttr('data-toggle');
                        $('#order_btn').removeAttr('data-target');
                    }else{
                        $('#order_btn').attr('type', 'button');
                        $('#order_btn').attr('data-toggle', 'modal');
                        $('#order_btn').attr('data-target', '#unableShipping');
                    }
                });
            });

    //Art
        //Add to cart
            $(document).on('click', '.addtocartArt', function(){
                var el = $(this);
                var id = el.data('id');
                $.get( host+"/art/cart/add/"+id, function( data ) {
                    if(data.status == 'success'){
                        $('#cart_load').html('<div class="alert alert-success"><strong>Success!</strong>'+data.message+'</div>');
                        if(data.item == '1'){
                            var ccount = parseInt($('#cart_count').html());
                            $('#cart_count').html(ccount+1);
                        }
                    }else{
                        $('#cart_load').html('<div class="alert alert-danger"><strong>Alert!</strong>'+data.message+'</div>');
                    }
                });
            });


});

function plusItem(id, price, method){
    let qty = parseInt($('#cart_qty'+id).val());
    let itemTotal = parseFloat($('#item_total'+id).html());
    let subtotal = parseFloat($('#cart_subtotal').html());
    $.get( host+"/cart/item/plus/"+method+"/"+id, function( data ) {
        if(data.status == 'success'){
            subtotal = subtotal+price;
            $('#cart_subtotal').html(subtotal);
            setTotal(subtotal);
            $('#item_total'+id).html(itemTotal+price);
            $('#cart_qty'+id).val(qty+1);
        }
    });
}

function minusItem(id, price, method){
    let qty = parseInt($('#cart_qty'+id).val());
    let subtotal = parseFloat($('#cart_subtotal').html());
    let itemTotal = parseFloat($('#item_total'+id).html());
    if((price*qty) > price){
        $.get( host+"/cart/item/minus/"+method+"/"+id, function( data ) {
            if(data.status == 'success'){
                subtotal = subtotal-price;
                $('#cart_subtotal').html(subtotal);
                setTotal(subtotal);
                $('#item_total'+id).html(itemTotal-price);
                $('#cart_qty'+id).val(qty-1);
            }
        });
    }
}

function setTotal(subtotal){
    let gst = parseInt($('#gst').val());
    $('#cart_total').html(((subtotal/100)*gst)+subtotal);
}