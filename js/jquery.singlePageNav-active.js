(function($) { 
"use strict"; 


$(window).on('load', function(){

$('ul#sticky-menu').singlePageNav({
filter: ':not(.extra a)' // make posible open menu link in new windows
});

});




})(jQuery);