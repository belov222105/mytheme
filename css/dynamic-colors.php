<?php 

function avados_dynamic_css() {

global $avadosFramework;
	
$theme_color_schemes = $avadosFramework['theme-color-schemes'];	
	
$p_color = $avadosFramework['body-text-color'];

$sub_header_link_color = $avadosFramework['sub-header-text-color'];

$sub_header_p_color = $avadosFramework['sub-header-text-color'];

$link_color = $avadosFramework['body-link-color'];

$body_link_hover_color = $avadosFramework['body-link-hover-color'];






$button_background = $avadosFramework['button-bg'];
$button_text_color = $avadosFramework['btn-text-color'];

$button_top_bottom_padding = $avadosFramework['btn-top-bottom-padding'];
$button_left_right_padding = $avadosFramework['btn-left-right-padding'];




$button_background_hover = $avadosFramework['button-bg-hover'];
$button_text_color_hover = $avadosFramework['btn-text-color-hover'];

$button_border_top_right_radius = $avadosFramework['btn-border-top-right-radius'];
$button_border_bottom_right_radius = $avadosFramework['btn-border-bottom-right-radius'];
$button_border_bottom_left_radius = $avadosFramework['btn-border-bottom-left-radius'];
$button_border_top_left_radius = $avadosFramework['btn-border-top-left-radius'];

/*border color hover*/
$button_border_cover_hover = $avadosFramework['btn-border-color-hover'];



/*menu colors */
$menu_color = $avadosFramework['menu-color'];



/* ============================================================
ACCENT COLOR
/* ============================================================*/
	
echo '<style>';
echo '.service3 .wpb_single_image .vc_figure-caption,
.service3 .service3-title,
.bg-color,
.color-bg,
th,
.line,
.ball-pulse-color > div,
.wpcf7-submit,
.navigation .current,
.tagcloud a:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
 .wcmenucart-contents .shop-count,
.ribbon-block,
.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current,
#popular-posts li:before,
.woocommerce span.onsale,
.cf7mls_progress_bar li.active:before,
.footer .widget-title:after,
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover,
 .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,
 .avados_slider_1 .owl-nav div.owl-prev, 
 .avados_slider_1 .owl-nav div.owl-next,
 .avados_slider_1 .owl-dots .owl-dot.active span, 
 .owl-theme .owl-dots .owl-dot:hover span,
 .fullwidth-block-img-content .owl-carousel .owl-nav div.owl-prev, 
 .fullwidth-block-img-content .owl-carousel .owl-nav div.owl-next,
 body .owl-carousel .owl-dots .owl-dot.active span, 
 body  .owl-theme .owl-dots .owl-dot:hover span,
body .owl-carousel .owl-controls .owl-nav .owl-prev, 
body .owl-carousel .owl-controls .owl-nav .owl-next,
.woocommerce ul.products li.product .onsale
{
background: '. $theme_color_schemes .';


}
		

		.color,
		.car_repair_i,
		.sidebar ul li a:hover,
		.single-post-style ul li:before,
		.contact-icon,
		.woocommerce .star-rating span,
.woocommerce-message::before,
.subscribe i,
.woocommerce-info:before,
.sidebar ul li a:before,
.color,
.contact-icon,
.woocommerce-tabs ul li:before,
.btn.btn-color-border,
.btn.btn-color-border:hover,
a.btn.btn-color-border:hover,
a,
a:hover,
.widget_recent_comments ul li:before,
.woocommerce ul.products li .max_btn_wrapp a,
.max_wishlist_wrapp  .yith-wcwl-wishlistexistsbrowse.show:after,
.how-we-work .wrap .item-number,
.woocommerce .added_to_cart.wc-forward:after,
.footer ul li a:before
{
			color: '. $theme_color_schemes .';
		}
		
		.border-color,
span.vc_sep_line,
.border-color ul li,
.service3 .wpb_single_image .vc_figure-caption:before,
.service3 .service3-title:before,
.woocommerce-message,
.scrollMenu .current,
ul.circle li:before,
.footer ul li:before,
.sidebar ul.menu li.current-menu-item a,
.widget-title:before,
.title-page:before,
    .blog-category ul.bloglist h3:before,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .ribbon-block:after,
    .woocommerce-info,
    .woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current,
.uptitle:before,
.ul-line ul li:before,
.wpb_text_column ul li:before,
div.vc_custom_heading:first-child:before,
.uptitle:before,
.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, 
.woocommerce div.product .woocommerce-tabs ul.tabs li a.selected, 

.tagcloud a:hover,
.btn.btn-color-border,
.bottom-line-style ul>li>a:after,
.sidebar ul.menu li.current-menu-item,
textarea:focus, 
select:focus,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
 .avados_slider_1 .owl-nav div.owl-prev, 
 .avados_slider_1 .owl-nav div.owl-next,
 .avados_slider_1 .owl-dots .owl-dot.active span:before,
 .fullwidth-block-img-content .owl-carousel .owl-nav div.owl-prev, 
 .fullwidth-block-img-content .owl-carousel .owl-nav div.owl-next,
 .owl-carousel .owl-dots .owl-dot.active span:before,
 .avados_slider_1 .owl-dots .owl-dot.active span:before,
input[type="submit"]
{
	    border-color:'. $theme_color_schemes .';	
}

	
		

		
	
		
		p,
		.fullpage li,
		.page-content li,
		.sidebar li{
			color: '. $p_color .';
		}
		
		a {
		color: '. $link_color .';
		}
		
		a:hover {
		color: '. $body_link_hover_color .';
		}
		
		
		
		
		
button,		
input[type="submit"],		
.btn, 
.btn:hover,
.form-submit .submit, 
.form-submit .submit:hover,
.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button,
.woocommerce-product-search input[type="submit"],
.woocommerce a.button:hover,
.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt,
.woocommerce button.button.alt, 
.woocommerce input.button.alt{
			background: '. $button_background .';
			color: '. $button_text_color .'; 
			padding-top: '. $button_top_bottom_padding .'px;
			padding-bottom: '. $button_top_bottom_padding .'px;
			
			padding-left: '. $button_left_right_padding .'px;
			padding-right: '. $button_left_right_padding .'px;
			
			}


button:hover,
.btn:hover,
.form-submit .submit:hover,
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt:hover, 
.woocommerce button.button.alt:hover, 
.woocommerce input.button.alt:hover{
			background: '. $button_background_hover .';
			color: '. $button_text_color_hover .'; 
			border-color: '. $button_border_cover_hover .';
			
			}


input{
			padding-top: '. $button_top_bottom_padding .'px;
			padding-bottom: '. $button_top_bottom_padding .'px;
			
			padding-left: '. $button_left_right_padding .'px;
			padding-right: '. $button_left_right_padding .'px;
			
			}

		';
	
	echo '</style>';
	
}

add_action('wp_head', 'avados_dynamic_css');

?>