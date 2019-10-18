(function($) { 
"use strict"; 

//this function add from all image tag rel="lightbox"
$('a[rel|="lightbox"]').magnificPopup({
type: 'image',
closeBtnInside: false,
preload: [0,2],
tLoading: '',
callbacks: {
lazyLoad: function(item) {
console.log(item); // Magnific Popup data object that should be loaded
},
beforeChange: function() {
this.items[0].src = this.items[0].src + '?=' + Math.random(); 
}
},
closeOnContentClick: true,
fixedContentPos: true,
mainClass: 'mfp-img-mobile',
gallery: {
    // options for gallery
    enabled: true
  },
        image: {
            verticalFit: true
        } 
    });



/* ==========================================================================
 Pop up and Lighbox 
 ========================================================================== */
$('.gallery, .dgwt-jg-gallery, .woo-slider-image, .woocommerce-product-gallery__image').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    
   
   
   	    removalDelay: 0,
    mainClass: 'mfp-move-from-top',
     easing: 'ease-in-out', // CSS transition easing function
     
    
    callbacks: {
        change: function() {
            if (this.isOpen) {
                this.wrap.addClass('mfp-open');
            }
        },
        beforeOpen: function() {
            // just a hack that adds mfp-anim class to markup 
            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
            this.st.mainClass = this.st.el.attr('data-effect');
        }
    },
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
});



	$('.popup-modal').magnificPopup({
	
	    removalDelay: 0,
    mainClass: 'mfp-move-from-top',
     easing: 'ease-in-out', // CSS transition easing function
     
     
     
    
		type: 'inline',
		preloader: false,
		focus: '#username'
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
	
		$('.simple-ajax-popup').magnificPopup({
		type: 'ajax'
	});
	
	
	
	

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});




})(jQuery);