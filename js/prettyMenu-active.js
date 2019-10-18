(function($) { 
"use strict"; 


/* =================================
	PRETTY MENU
=================================== */
    $(window).on('load', function(){

    $('#menu').prettyMenu({
iconStyle: "spin",
 submenuAnimation: 'fadeIn',
        fixed: false,
        hoverAnimation: 'hvr-shutter-out-horizontal',
        mobile: 1240,
        mobileDirection: 'left',
        colorScheme: 'white',
        shadow: false,
        mobileBackground: false,
        showDividers: false,
        onTop: false,
pushContent: false
    });
    
    
    $('#menu_vc_addon').prettyMenu({
iconStyle: "spin",
 submenuAnimation: 'fadeIn',
        fixed: false,
        hoverAnimation: 'hvr-shutter-out-horizontal',
        mobile: 1240,
        mobileDirection: 'left',
        colorScheme: 'white',
        shadow: false,
        mobileBackground: false,
        showDividers: false,
        onTop: false,
pushContent: false
    });
    
    $('#menu_v6').prettyMenu({
iconStyle: "spin",
 submenuAnimation: 'fadeIn',
        fixed: false,
        hoverAnimation: 'hvr-shutter-out-horizontal',
        mobile: 1240,
        mobileDirection: 'left',
        colorScheme: 'white',
        shadow: false,
        mobileBackground: false,
        showDividers: false,
        onTop: false,
pushContent: false
    });
    
     
    
});



})(jQuery);