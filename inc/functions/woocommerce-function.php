<?php




/**
 * Remove the breadcrumbs 
 */
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}






//Disable the default stylesheet
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


/**
 * Optimize WooCommerce Scripts
 * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
 */
 
function child_manage_woocommerce_styles() {
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );


	//remove generator meta tag
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
 
	//first check that woo exists to prevent fatal errors
	if ( function_exists( 'is_woocommerce' ) ) {
		//dequeue scripts and styles
		if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
			wp_dequeue_style( 'woocommerce_frontend_styles' );
			wp_dequeue_style( 'woocommerce_fancybox_styles' );
			wp_dequeue_style( 'woocommerce_chosen_styles' );
			wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
			wp_dequeue_script( 'wc_price_slider' );
			wp_dequeue_script( 'wc-single-product' );
			wp_dequeue_script( 'wc-add-to-cart' );
			wp_dequeue_script( 'wc-cart-fragments' );
			wp_dequeue_script( 'wc-checkout' );
			wp_dequeue_script( 'wc-add-to-cart-variation' );
			wp_dequeue_script( 'wc-single-product' );
			wp_dequeue_script( 'wc-cart' );
			wp_dequeue_script( 'wc-chosen' );
			wp_dequeue_script( 'woocommerce' );
			wp_dequeue_script( 'prettyPhoto' );
			wp_dequeue_script( 'prettyPhoto-init' );
			wp_dequeue_script( 'jquery-blockui' );
			wp_dequeue_script( 'jquery-placeholder' );
			wp_dequeue_script( 'fancybox' );
			wp_dequeue_script( 'jqueryui' );
		}
	}
 
}

// remove woocommerce scripts on unnecessary pages
function woocommerce_de_script() {
    if (function_exists( 'is_woocommerce' )) {
     if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() ) { // if we're not on a Woocommerce page, dequeue all of these scripts
    	wp_dequeue_script('wc-add-to-cart');
    	wp_dequeue_script('jquery-blockui');
    	wp_dequeue_script('jquery-placeholder');
    	wp_dequeue_script('woocommerce');
    	wp_dequeue_script('jquery-cookie');
    	wp_dequeue_script('wc-cart-fragments');
      }
    }
}
add_action( 'wp_print_scripts', 'woocommerce_de_script', 100 );
add_action( 'wp_enqueue_scripts', 'remove_woocommerce_generator', 99 );
function remove_woocommerce_generator() {
    if (function_exists( 'is_woocommerce' )) {
	if (!is_woocommerce()) { // if we're not on a woo page, remove the generator tag
		remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
	}
    }
}
// remove woocommerce styles, then add woo styles back in on woo-related pages
function child_manage_woocommerce_css(){
    if (function_exists( 'is_woocommerce' )) {
	if (!is_woocommerce()) { // this adds the styles back on woocommerce pages. If you're using a custom script, you could remove these and enter in the path to your own CSS file (if different from your basic style.css file)
		wp_dequeue_style('woocommerce-layout');
		wp_dequeue_style('woocommerce-smallscreen');
		wp_dequeue_style('woocommerce-general');
	}
    }
}
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_css' );






/*add support woocommerce from v1.4 */

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}



add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}



// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

// delete title in product single tabs
add_filter('woocommerce_product_description_heading', '__return_null');

//add support woocommerce slider
//add_theme_support( 'wc-product-gallery-zoom' );
//add_theme_support( 'wc-product-gallery-lightbox' );
//add_theme_support( 'wc-product-gallery-slider' );






//add shoping car in menu
function avados_shopping_cart_in_menu($menu, $args) {
global $avadosFramework;

if ( isset( $avadosFramework['shopping_cart_in_menu'] ) && $avadosFramework['shopping_cart_in_menu'] == 1 ) { 

	// Check if WooCommerce is active and add a new item to a menu assigned to Primary Navigation Menu location
	if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'maine' !== $args->theme_location )
		return $menu;
		
        ob_start();
		
		global $woocommerce;
	
		$viewing_cart = __('View your shopping cart', 'avados');
		$start_shopping = __('Start shopping', 'avados');
		$cart_url = $woocommerce->cart->get_cart_url();
		$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		$cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'avados'), $cart_contents_count);
		$cart_total = $woocommerce->cart->get_cart_total();
		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
		// if ( $cart_contents_count > 0 ) {
			if ($cart_contents_count == 0) {
				$menu_item = '<li class="menu-woocommerce-cart-icon"><a class="wcmenucart-contents" href="'. $shop_page_url .'" title="'. $start_shopping .'">';
			} else {
				$menu_item = '<li class="menu-woocommerce-cart-icon"><a class="wcmenucart-contents" href="'. $cart_url .'" title="'. $viewing_cart .'">';
			}

		

			$menu_item .= '<i class="fa fa-shopping-cart"><span class="shop-count">' . $cart_contents_count .'</span></i>' ; 
			$menu_item .= '</a></li>';
		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
		// }
		
		echo $menu_item;	
	$social = ob_get_clean();
	}//redux
	
	return $menu . $social;
	
}

add_filter('wp_nav_menu_items','avados_shopping_cart_in_menu', 10, 2);










//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );



//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 80 );



//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 5 );


/*change rating after price in archive*/
//remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

//change rating wrapp
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 ); 
add_action( 'max_rating_wrapp', 'woocommerce_template_loop_rating', 5 );

//change title wrapp
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 ); 
add_action( 'max_title_wrapp', 'woocommerce_template_loop_product_title', 10 );


//change price wrapp
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 ); 
add_action( 'max_price_wrapp', 'woocommerce_template_loop_price', 10 );

//change btn wrapp
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 ); 
add_action( 'max_btn_wrapp', 'woocommerce_template_loop_add_to_cart', 10 );


add_action('wp_footer','custom_jquery_add_to_cart_script');
function custom_jquery_add_to_cart_script(){
    if ( is_shop() || is_product_category() || is_product_tag() ): // Only for archives pages
        ?>
            <script type="text/javascript">
                // Ready state
                (function($){ 

                    $( document.body ).on( 'added_to_cart', function(){
                    //$( this ).addClass( "max_added_to_cart" );

                     // $( ".max_price_btn_wrapp" ).hide();


                    });

                })(jQuery); // "jQuery" Working with WP (added the $ alias as argument)
            </script>
        <?php
    endif;
}




//sale in persent

add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {
    if( $product->is_type('variable')){
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach( $prices['price'] as $key => $price ){
            // Only on sale variations
            if( $prices['regular_price'][$key] !== $price ){
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
    }
    return '<span class="onsale">' . esc_html__( '', 'avados' ) . ' ' . $percentage . '</span>';
}

?>