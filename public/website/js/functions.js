 $(document).ready(function(){


 	var val1 = 0;

 	$('.navbar-handler').children("img").click(function(){

 		if(val1==0){
 			$(this).attr("src","images/cross.png")
 		$('.header-menu').slideToggle()

 		val1 = 1;
 	
 	}
 	else {
 		$('.header-menu').slideToggle()
 		$(this).attr("src","images/hamburger.png")
 		val1 = 0;

 	}
 	})



 	$('.search-toggle').click(function(){

 		$(".search-form").slideToggle()

 	})




 })








 $('.image-slider').slick({
  dots: false,
  infinite: true,
  speed: 400,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  focusOnSelect: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});








 
 //-----JS for Price Range slider-----

$(function() {
  $("#slider-range").slider({
    range: true,
    min: 50,
    max: 250,
    values: [ 50, 250 ],
    slide: function( event, ui ) {
    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
  });
  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});



// VERSION WITHOUT BOOTSTRAP 4 : https://codepen.io/seltix/pen/LygQXx

jQuery('.dropdown-menu.keep-open').on('click', function (e) {
  e.stopPropagation();
});

if(1) {
  $('body').attr('tabindex', '0');
}
else {
  alertify.confirm().set({'reverseButtons': true});
  alertify.prompt().set({'reverseButtons': true});
}






 $(document).ready(function(){


 

  $('.checkbox-filter2').children("button").click(function(){

     $(this).parent(".checkbox-filter2").find("input").removeAttr("checked")
     $(this).parent(".checkbox-filter2").children("button").removeClass("active-1")
      $(this).addClass("active-1")
      $(this).find("input").attr('checked','checked');



  })


 })



 $(function() {
  $('[data-decrease]').click(decrease);
  $('[data-increase]').click(increase);
  $('[data-value]').change(valueChange);
});

function decrease() {
  var value = $(this).parent().find('[data-value]').val();
  if(value > 1) {
    value--;
    $(this).parent().find('[data-value]').val(value);
  }
}

function increase() {
  var value = $(this).parent().find('[data-value]').val();
  if(value < 100) {
    value++;
    $(this).parent().find('[data-value]').val(value);
  }
}

function valueChange() {
  var value = $(this).val();
  if(value == undefined || isNaN(value) == true || value <= 0) {
    $(this).val(1);
  } else if(value >= 101) {
    $(this).val(100);
  }
}