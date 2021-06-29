 $(".set > a").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".content")
        .slideUp(200);
      $(".set > a i")
        .removeClass("fa-caret-down")
        .addClass("fa-caret-right");
    } else {
      $(".set > a i")
        .removeClass("fa-caret-down")
        .addClass("fa-caret-right");
      $(this)
        .find("i")
        .removeClass("fa-caret-right")
        .addClass("fa-caret-down");
      $(".set > a").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this)
        .siblings(".content")
        .slideDown(200);
    }
  });

 
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




 $('.image-slider2').slick({
  dots: false,
  infinite: true,
  speed: 400,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
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




 $('.image-slider3').slick({
  dots: false,
  infinite: true,
  speed: 400,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 700,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
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









 $('.item-multiple-box').slick({
  dots: false,
  infinite: true,
  speed: 400,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
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



 

 $('.art-multiple-box').slick({
  dots: false,
  infinite: true,
  speed: 400,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
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





$(function() {
  $("#slider-range2").slider({
    range: true,
    min: 50,
    max: 250,
    values: [ 50, 250 ],
    slide: function( event, ui ) {
    $( "#amount2" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
  });
  $( "#amount2" ).val( "$" + $( "#slider-range2" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range2" ).slider( "values", 1 ) );
});



// VERSION WITHOUT BOOTSTRAP 4 : https://codepen.io/seltix/pen/LygQXx

/*jQuery('.dropdown-menu.keep-open').on('click', function (e) {
  e.stopPropagation();
});

if(1) {
  $('body').attr('tabindex', '0');
}
else {
  alertify.confirm().set({'reverseButtons': true});
  alertify.prompt().set({'reverseButtons': true});
}


*/



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



(function($) {
  function compareDates(startDate, endDate, format) {
    var temp, dateStart, dateEnd;
    try {
      dateStart = $.datepicker.parseDate(format, startDate);
      dateEnd = $.datepicker.parseDate(format, endDate);
      if (dateEnd < dateStart) {
        temp = startDate;
        startDate = endDate;
        endDate = temp;
      }
    } catch (ex) {}
    return { start: startDate, end: endDate };
  }

  $.fn.dateRangePicker = function (options) {
    options = $.extend({
      "changeMonth": false,
      "changeYear": false,
      "numberOfMonths": 2,
      "rangeSeparator": " - ",
      "useHiddenAltFields": false
    }, options || {});

    var myDateRangeTarget = $(this);
    var onSelect = options.onSelect || $.noop;
    var onClose = options.onClose || $.noop;
    var beforeShow = options.beforeShow || $.noop;
    var beforeShowDay = options.beforeShowDay;
    var lastDateRange;

    function storePreviousDateRange(dateText, dateFormat) {
      var start, end;
      dateText = dateText.split(options.rangeSeparator);
      if (dateText.length > 0) {
        start = $.datepicker.parseDate(dateFormat, dateText[0]);
        if (dateText.length > 1) {
          end = $.datepicker.parseDate(dateFormat, dateText[1]);
        }
        lastDateRange = {start: start, end: end};
      } else {
        lastDateRange = null;
      }
    }
    
    options.beforeShow = function(input, inst) {
      var dateFormat = myDateRangeTarget.datepicker("option", "dateFormat");
      storePreviousDateRange($(input).val(), dateFormat);
      beforeShow.apply(myDateRangeTarget, arguments);
    };
    
    options.beforeShowDay = function(date) {
      var out = [true, ""], extraOut;
      if (lastDateRange && lastDateRange.start <= date) {
        if (lastDateRange.end && date <= lastDateRange.end) {
          out[1] = "ui-datepicker-range";
        }
      }

      if (beforeShowDay) {
        extraOut = beforeShowDay.apply(myDateRangeTarget, arguments);
        out[0] = out[0] && extraOut[0];
        out[1] = out[1] + " " + extraOut[1];
        out[2] = extraOut[2];
      }
      return out;
    };

    options.onSelect = function(dateText, inst) {
      var textStart;
      if (!inst.rangeStart) {
        inst.inline = true;
        inst.rangeStart = dateText;
      } else {
        inst.inline = false;
        textStart = inst.rangeStart;
        if (textStart !== dateText) {
          var dateFormat = myDateRangeTarget.datepicker("option", "dateFormat");
          var dateRange = compareDates(textStart, dateText, dateFormat);
          myDateRangeTarget.val(dateRange.start + options.rangeSeparator + dateRange.end);
          inst.rangeStart = null;
          if (options.useHiddenAltFields){
            var myToField = myDateRangeTarget.attr("data-to-field");
            var myFromField = myDateRangeTarget.attr("data-from-field");
            $("#"+myFromField).val(dateRange.start);
            $("#"+myToField).val(dateRange.end);
          }
        }
      }
      onSelect.apply(myDateRangeTarget, arguments);
    };

    options.onClose = function(dateText, inst) {
      inst.rangeStart = null;
      inst.inline = false;
      onClose.apply(myDateRangeTarget, arguments);
    };

    return this.each(function() {
      if (myDateRangeTarget.is("input")) {
        myDateRangeTarget.datepicker(options);
      }
      myDateRangeTarget.wrap("<div class=\"dateRangeWrapper\"></div>");
    });
  };
}(jQuery));

$(document).ready(function(){
  $("#txtDateRange").dateRangePicker({
    showOn: "focus",
    rangeSeparator: " to ",
    dateFormat: "yy-mm-dd",
    useHiddenAltFields: true,
    constrainInput: true
  });
});


 
$(document).ready(function(){

  var native_width = 0;
  var native_height = 0;

  //Now the mousemove function
  $(".magnify").mousemove(function(e){
    //When the user hovers on the image, the script will first calculate
    //the native dimensions if they don't exist. Only after the native dimensions
    //are available, the script will show the zoomed version.
    if(!native_width && !native_height)
    {
      //This will create a new image object with the same image as that in .small
      //We cannot directly get the dimensions from .small because of the 
      //width specified to 200px in the html. To get the actual dimensions we have
      //created this image object.
      var image_object = new Image();
      image_object.src = $(".small").attr("src");
      
      //This code is wrapped in the .load function which is important.
      //width and height of the object would return 0 if accessed before 
      //the image gets loaded.
      native_width = image_object.width;
      native_height = image_object.height;
    }
    else
    {
      //x/y coordinates of the mouse
      //This is the position of .magnify with respect to the document.
      var magnify_offset = $(this).offset();
      //We will deduct the positions of .magnify from the mouse positions with
      //respect to the document to get the mouse positions with respect to the 
      //container(.magnify)
      var mx = e.pageX - magnify_offset.left;
      var my = e.pageY - magnify_offset.top;
      
      //Finally the code to fade out the glass if the mouse is outside the container
      if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
      {
        $(".large").fadeIn(100);
      }
      else
      {
        $(".large").fadeOut(100);
      }
      if($(".large").is(":visible"))
      {
        //The background position of .large will be changed according to the position
        //of the mouse over the .small image. So we will get the ratio of the pixel
        //under the mouse pointer with respect to the image and use that to position the 
        //large image inside the magnifying glass
        var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
        var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
        var bgp = rx + "px " + ry + "px";
        
        //Time to move the magnifying glass with the mouse
        var px = mx - $(".large").width()/2;
        var py = my - $(".large").height()/2;
        //Now the glass moves with the mouse
        //The logic is to deduct half of the glass's width and height from the 
        //mouse coordinates to place it with its center at the mouse coordinates
        
        //If you hover on the image now, you should see the magnifying glass in action
        $(".large").css({left: px, top: py, backgroundPosition: bgp});
      }
    }
  })
})





$(document).ready(function(){


$('.wishlist-icon').click(function(){
$(this).toggleClass("wishlist-selected")
})

$('.checkbox-filter4').children("h6").click(function(){

 
$(this).parent(".checkbox-filter4").children("p").slideToggle()

$(this).children("i").toggleClass("fa-caret-right")
$(this).children("i").toggleClass("fa-caret-down")

})




})





