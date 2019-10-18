(function($) { 
"use strict"; 


 


    $(function(){
       $.each($(".tel-link"), function () {
           //replace all instances of -
            var jPhoneNumber = $(this).text().replace(/-/g,'');
    var link = $('<a />', {class: 'jPhoneLink', href: 'tel:'+parseInt(jPhoneNumber)});
           $(this).wrapInner(link);
        });
});


    

 $("#mydiv").hide();

 $(document).ready(function() {
        $('#show-text').click(function() {
                $('#mydiv').slideToggle("fast");
        });
    });




// + - from product

jQuery(function($){$("div.quantity:not(.buttons-add-minus), td.quantity:not(.buttons-add-minus)").addClass("buttons-add-minus").append('<input type="button" value="+" class="plus" />').prepend('<input type="button" value="-" class="minus" />'),$(document).on("click",".plus, .minus",function(){var t=$(this).closest(".quantity").find(".qty"),a=parseFloat(t.val()),n=parseFloat(t.attr("max")),s=parseFloat(t.attr("min")),e=t.attr("step");a&&""!==a&&"NaN"!==a||(a=0),(""===n||"NaN"===n)&&(n=""),(""===s||"NaN"===s)&&(s=0),("any"===e||""===e||void 0===e||"NaN"===parseFloat(e))&&(e=1),$(this).is(".plus")?t.val(n&&(n==a||a>n)?n:a+parseFloat(e)):s&&(s==a||s>a)?t.val(s):a>0&&t.val(a-parseFloat(e)),t.trigger("change")})});




/* ==========================================
	smooth scrolling from special elements
========================================== */
$(window).on('load', function(){


$('.smooth-scroll a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

}); 




/* ==========================================
	Toggle from call to action on hpme page on mobile and table device
========================================== */


if ((".loader")
			.length) {
			// show Preloader until the website ist loaded
			$(window)
				.on('load', function() { $(".loader").fadeOut("fast"); });
		}



 

    
    





 
 
 /* =================================
	TOGGLE FOOTER DIV
=================================== */
$(".toggle-next-div").on("click", function (e) {
$(this).toggleClass('active').next().slideToggle(300);
}); // .click






/* =================================
	Calculete menu height and hide empty height before scroll
=================================== */
$(window).on('load', function(){
  var divHeight = $('.header').height(); 
  $('.scroll_header_holder').css('min-height', divHeight+'px');
    $(".scroll_header_holder").addClass('hidden'); 
});

$(window).on('scroll', function(e) {
    var b = $(window).scrollTop();
    if (b > 270) {   
  $(".header").addClass('scroll_work');   
    $(".scroll_header_holder").removeClass('hidden');    
    } else {
  $(".header").removeClass("scroll_work");
    $(".scroll_header_holder").addClass('hidden'); 
    }
});



         /* =================================
	Calculete menu height and hide empty height before scroll
=================================== 
$(window).on('load', function(){
  var divHeight = $('.scroll_header').height(); 
  $('.scroll_header_holder').css('min-height', divHeight+'px');
    
  $(".scroll_header_holder").addClass('hidden');    
});

*/  

/* =================================
	NAVBAR COLLAPSE ON SCROLL
=================================== 

$(window).on('scroll', function(e) {
    var b = $(window).scrollTop();
    if (b > 300) {   
    $(".scroll_header_holder").removeClass('hidden');
    $(".scroll_header").addClass("scrollMenu");
    } else {
        $(".scroll_header_holder").addClass('hidden');

         $(".scroll_header").removeClass("scrollMenu");
    }
});

*/




//$(window).resize(function() {
//    $('#fullscreensearch').css("margin-top", $(".header").height());
//}).resize();


/* ==========================================
	Show fullscreen search on click menu item
========================================== */
$('.close-open-btn').on("click", function (e) {
$('body').toggleClass('stop-scrolling');
$('.close-open-btn').toggleClass('seacrh-active');
$('#fullscreensearch').toggleClass('open');



$('#fullscreensearch').css('margin-top', $('#wpadminbar').height());
$('#fullscreensearch').css('top', $('.header').height());


//$("#fullscreensearch").css('top', $(".header").height() + "px");



$('.stop-scrolling').css('top', $('#wpadminbar').height());


});








/* =================================
	Toggle
=================================== */
 $(".contentHideText").hide();

    $(".toggle").on("click", function (e) {
        
        var $this = $(this).prev('.contentHideText');
        var $text = $(this);
        $this.slideToggle('fast', function () {
            if ($(this).is(':visible')) {
                $text.html('<a class="link">Hide</a>');
            } else {
              $text.html('<a class="link">Read more</a>');
            }
        });

    });	
    


/* =================================
	BACK TOP
=================================== */
$("#back-top").hide();
	
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#back-top').fadeIn();
				} else {
					$('#back-top').fadeOut();
				}
			});
			$("a #back-top").on("click", function (e) {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
	



/* =================================
	Accordion shortcodes
=================================== */
$('.accordion_title').on("click", function (e) {
    $(this).toggleClass('active').next().slideToggle(300);
}); // .click




/* =================================
	Timer 
=================================== */

$(window).on('load', function(){
timer();
});



function timer() {
    var now = new Date();
    var newDate = new Date("November,14,2018 23:59:59");
    var totalRemains = (newDate.getTime() - now.getTime());
    if (totalRemains > 1) {
        var Days = (parseInt(parseInt(totalRemains / 1000) / (24 * 3600)));
        var Hours = (parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) / 3600));
        var Min = (parseInt(parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) - Hours * 3600) / 60));
        var Sec = parseInt((parseInt(totalRemains / 1000) - Days * 24 * 3600) - Hours * 3600) - Min * 60;
        if (Days < 10) {
            Days = "0" + Days
        }
        if (Hours < 10) {
            Hours = "0" + Hours
        }
        if (Min < 10) {
            Min = "0" + Min
        }
        if (Sec < 10) {
            Sec = "0" + Sec
        }
        $(".day").each(function() {
            $(this).text(Days);
        });
        $(".hour").each(function() {
            $(this).text(Hours);
        });
        $(".min").each(function() {
            $(this).text(Min);
        });
        $(".sec").each(function() {
            $(this).text(Sec);
        });
        setTimeout(timer, 1000);
    }
}






/* ===========================================================
	Equal-Height Columns
============================================================== */




$(document).ready(function() {
    setHeight('.equal_height_columns');
});

var maxHeight = 0;

function setHeight(column) {
    //Get all the element with class = col
    column = $(column);
    //Loop all the column
    column.each(function() {
        //Store the highest value
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();;
        }
    });
    //Set the height
    column.height(maxHeight);
}


 


})(jQuery);