<?php

$avados_include_path = get_parent_theme_file_uri();
$avados_admin_includes_path = $avados_include_path . '/sample/preview';


/*Avados Fremework*/
include(get_parent_theme_file_path('/sample/barebones-config.php'));

//plugins activator
include(get_parent_theme_file_path('plugins_activator.php'));

//for is_plugin_active
include_once( ABSPATH . 'wp-admin/includes/plugin.php');

/* Register and enqueue a custom stylesheet in the WordPress admin. */
function avados_backend_style() {
    wp_enqueue_style('avados-backend', get_theme_file_uri( '/sample/avados-redux-custom-style.css' ));
    wp_enqueue_style('backend-custom-style', get_theme_file_uri( '/css/backend-custom-style.css' ));  
}

add_action( 'admin_enqueue_scripts', 'avados_backend_style' );

/*Theme Function*/
include(get_parent_theme_file_path('/inc/functions/theme-widgets.php'));
include(get_parent_theme_file_path('/inc/functions/breadcrumbs.php'));
include(get_parent_theme_file_path('/inc/functions/other-function.php'));
include(get_parent_theme_file_path('/inc/functions/performance-function.php'));

if (class_exists('Woocommerce')) {
include(get_parent_theme_file_path('/inc/functions/woocommerce-function.php'));
};

include(get_parent_theme_file_path('/inc/functions/theme-core-function.php'));
include(get_parent_theme_file_path('/inc/functions/register-sidebar.php'));

// register js
function avados_script() {

global $avadosFramework;

/*avados menu js*/
wp_enqueue_script('prettyMenu', get_theme_file_uri( '/js/prettyMenu.js'), array( 'jquery' ), '', true  );
wp_enqueue_script('prettyMenu-active', get_theme_file_uri( '/js/prettyMenu-active.js'), array( 'jquery' ), '', true  );

/*one page menu scroll*/
if ( $avadosFramework['menu_style'] == 'menu_onepage') {
wp_enqueue_script('jquery-singlePageNav', get_theme_file_uri( '/js/jquery.singlePageNav.js'), array( 'jquery' ), '', true  );
wp_enqueue_script('singlePageNav-active', get_theme_file_uri( '/js/jquery.singlePageNav-active.js'), array( 'jquery' ), '', true);
}

if ( $avadosFramework['header_layout'] == 'header_v6') {
wp_enqueue_script('jquery-fatNav', get_theme_file_uri( '/js/jquery.fatNav.js'), array( 'jquery' ), '', true  );
wp_enqueue_script('jquery-fatNav-active', get_theme_file_uri( '/js/jquery.fatNav-active.js'), array( 'jquery' ), '', true);
}

/*magnific popup js*/
wp_enqueue_script('jquery-magnific-popup',  get_theme_file_uri( '/js/jquery.magnific-popup.js'), array( 'jquery' ), '', true   );
wp_enqueue_script('magnific-popup-active', get_theme_file_uri( '/js/jquery.magnific-popup-active.js'), array( 'jquery' ), '', true  );


/*number counter*/	
wp_enqueue_script('waypoints', get_theme_file_uri( '/js/waypoints.js'), array( 'jquery' ), '', true  );
wp_enqueue_script('jquery-counterup',  get_theme_file_uri( '/js/jquery.counterup.js'), array( 'jquery' ), '', true  );


wp_enqueue_script('responsive-tables-js', get_theme_file_uri( '/js/responsive-tables.js'), array( 'jquery' ), '', true  );
wp_enqueue_script('responsive-tables-active', get_theme_file_uri( '/js/responsive-tables-active.js'), array( 'jquery' ), '', true  );

if ( $avadosFramework['smart_fixed_header'] == '1') {
wp_enqueue_script('smart-fixed-header', get_theme_file_uri( '/js/smart-fixed-header.js'), array( 'jquery' ), '', true  );
}

wp_enqueue_script('owl-carousel',  get_theme_file_uri( '/js/owl.carousel.js'), array( 'jquery' ), '', true   );
wp_enqueue_script('avados-script',  get_theme_file_uri( '/js/script.js'), array( 'jquery' ), '', true   );

}
add_action( 'wp_enqueue_scripts', 'avados_script' );

// register css
function avados_styles() {

global $avadosFramework;	

wp_enqueue_style('reset', get_theme_file_uri( '/css/reset.css' )); 
wp_enqueue_style('avados-maine-style',  get_stylesheet_uri() );	
wp_enqueue_style('avados-framework', get_theme_file_uri( '/css/avados-framework.css' )); 

wp_enqueue_style('visual-composer-style', get_theme_file_uri( '/css/visual_comoser_style.css' )); 

wp_enqueue_style('avados-contact-form-7', get_theme_file_uri( '/css/avados-contact-form-7.css' )); 

if ($avadosFramework['wrapp_shadow'] == 1) {
wp_enqueue_style('boxed-shadow-style', get_theme_file_uri( '/css/boxed-style.css' )); 
}

wp_enqueue_style('font-awesome-min', get_theme_file_uri( '/css/fonts/font-awesome/css/font-awesome.min.css' ));

wp_enqueue_style('owl-carousel', get_theme_file_uri( '/css/owl.carousel.css' ));
wp_enqueue_style('owl-carousel-avados-style', get_theme_file_uri( '/css/owl.carousel-avados-style.css' ));


if ( $avadosFramework['smart_fixed_header'] == '1') {
wp_enqueue_style('smart-fixed-header', get_theme_file_uri( '/css/smart-fixed-header.css'));
}

wp_enqueue_style('prettyMenu', get_theme_file_uri( '/css/prettyMenu.css' )); 
wp_enqueue_style('hover', get_theme_file_uri( '/css/hover.css' )); 
wp_enqueue_style('hamburgers', get_theme_file_uri( '/css/hamburgers.css' )); 
wp_enqueue_style('animate', get_theme_file_uri( '/css/animate.css' )); 

wp_enqueue_style('magnific-popup', get_theme_file_uri( '/css/magnific-popup.css' ));

wp_enqueue_style('avados-car-serive-icon', get_theme_file_uri( '/css/fonts/car-serive-icon.css' ));

if (class_exists('Woocommerce')) {
wp_enqueue_style('avados-woocommerce', get_theme_file_uri( '/css/woocommerce.css' )); 
wp_enqueue_style('woocommerce-trigger-icon', get_theme_file_uri( '/css/fonts/woocommerce-icon/woocommerce-trigger-icon.css' )); 
};

if ( $avadosFramework['defaul_top_bar_area'] == 1) {
wp_enqueue_style('top_bar', get_theme_file_uri( '/css/header/top_bar.css' )); 
}
if ( $avadosFramework['header_layout'] == 'header_v1') {
wp_enqueue_style('header_v1', get_theme_file_uri( '/css/header/header_v1.css' )); 
}
if ( $avadosFramework['header_layout'] == 'header_v10') {
wp_enqueue_style('header_v10', get_theme_file_uri( '/css/header/header_v10.css' )); 
}
if ( $avadosFramework['header_layout'] == 'header_v3') {
wp_enqueue_style('header_v3', get_theme_file_uri( '/css/header/header_v3.css' )); 
}
if ( $avadosFramework['header_layout'] == 'header_v2') {
wp_enqueue_style('header_v2', get_theme_file_uri( '/css/header/header_v2.css' )); 
}
if ( $avadosFramework['header_layout'] == 'header_v4') {
wp_enqueue_style('header_v4', get_theme_file_uri( '/css/header/header_v4.css' )); 
}
if ( $avadosFramework['header_layout'] == 'header_v5') {
wp_enqueue_style('header_v5', get_theme_file_uri( '/css/header/header_v5.css' )); 
}
if ( $avadosFramework['header_layout'] == 'header_v6') {
wp_enqueue_style('jquery-fatNav', get_theme_file_uri( '/css/jquery.fatNav.css' )); 
wp_enqueue_style('header_v6', get_theme_file_uri( '/css/header/header_v6.css' )); 
}
if ( $avadosFramework['disable_sub_header'] == '1') {
wp_enqueue_style('top-bar', get_theme_file_uri( '/css/top-bar.css' )); 
}

if ( $avadosFramework['fullwidth_header'] == '1') {
wp_enqueue_style('fullwidth-header', get_theme_file_uri( '/css/fullwidth-header.css' )); 
}


if ( $avadosFramework['advanced_setting'] == '0') {
wp_enqueue_style('advanced-style', get_theme_file_uri( '/css/advanced-style.css' )); 
}




wp_enqueue_style('responsive-tables-css', get_theme_file_uri( '/css/responsive-tables.css' )); 

/*responsive style*/
wp_enqueue_style('responsive-only-mobile', get_theme_file_uri( '/css/responsive-only-mobile.css' )); 
wp_enqueue_style('responsive-only-table', get_theme_file_uri( '/css/responsive-only-table.css' )); 
wp_enqueue_style('responsive-mobile-and-table', get_theme_file_uri( '/css/responsive-mobile-and-table.css' )); 
wp_enqueue_style('responsive-laptop-and-more', get_theme_file_uri( '/css/responsive-laptop-and-more.css' )); 

wp_enqueue_style('custom-style', get_theme_file_uri( '/css/custom-style.css' )); 

}
add_action( 'wp_enqueue_scripts', 'avados_styles' );


#-----------------------------------------------------------------#
# Delete Validator error 
#-----------------------------------------------------------------#

add_action( 'template_redirect', function(){
    ob_start( function( $buffer ){
        $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer );
        
        // Also works with other attributes...
        $buffer = str_replace( array( 'type="text/css"', "type='text/css'" ), '', $buffer );
        $buffer = str_replace( array( 'frameborder="0"', "frameborder='0'" ), '', $buffer );
        $buffer = str_replace( array( 'scrolling="no"', "scrolling='no'" ), '', $buffer );
        
        return $buffer;
    });
});




#-----------------------------------------------------------------#
# Dynamic Styles/Scipts
#-----------------------------------------------------------------#



//From this option you can customize Avados in admin panel
include(get_parent_theme_file_path('/css/dynamic-colors.php'));

//This option is custom css from admin panel
include(get_parent_theme_file_path('/css/dynamic-custom.php'));

include(get_parent_theme_file_path('/css/dynamic-only-mobile.php'));
include(get_parent_theme_file_path('/css/dynamic-only-table.php'));
include(get_parent_theme_file_path('/css/dynamic-only-mobile-and-table.php'));
include(get_parent_theme_file_path('/css/dynamic-custom-only-laptop.php'));


//This option is custom JS from admin panel
if(!isset($avadosFramework['dynamic-custom-js'])) {
	include(get_parent_theme_file_path('/js/dynamic-custom-js.php'));
}

if(!isset($avadosFramework['analytics_code'])) {
	include(get_parent_theme_file_path('/js/dynamic-analytics-code.php'));
}

/* Post-thumbnails support */
add_theme_support( "post-thumbnails");

add_image_size( 'normal', 500, 350, true );
add_image_size( 'wide', 1000, 350, true );  
add_image_size( 'tall', 500, 700, true ); 
add_image_size( 'square', 1000, 700, true );
add_image_size( 'masonry', 500, 9999 );
add_image_size( '200x300', 200, 300, true ); 
add_image_size( '300x400', 300, 400, true ); 
add_image_size( '400x500', 400, 500, true ); 

add_image_size( '400x400', 400, 400, true ); 
 
 




?>