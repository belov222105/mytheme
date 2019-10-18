<?php

/**
 *  Functions From Header Page Builder
 */
 
 
 
function avados_add_layout_blocks_css() {
$header_layout_block_id = avados_get_layout_block_id( 'header-layout-block' );	
    echo avados_get_vc_page_custom_css( $header_layout_block_id );
	echo avados_get_vc_shortcodes_custom_css( $header_layout_block_id );
	
	
}

add_action( 'wp_head', 'avados_add_layout_blocks_css' );

add_filter( 'msm_filter_load_compiled_style', 'petal_msm_filter_load_compiled_style' );





 
 
define( 'avados_THEME_OPTION_NAME', 'avadosFramework' );
define( 'avados_THEME_NAME', 'avados' );

function avados_get_grid_class( $index, $invert = false ) {
	$grid = avados_grid_class_map();

	return isset( $grid[ $index ] ) ? $grid[ $index ][ $invert ? 1 : 0 ] : '';
}

function avados_get_option( $option_name, $default = false ) {
	$options = isset( $GLOBALS[ avados_THEME_OPTION_NAME ] ) ? $GLOBALS[ avados_THEME_OPTION_NAME ] : false;

	if ( $options && is_string( $option_name ) ) {
		return isset( $options[ $option_name ] ) ? $options[ $option_name ] : $default;
	}

	return $default;
}

function avados_get_page_template() {

	$post_id = null;
	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	} elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	} else {
		global $post;
		$post_id = $post->ID;
	}

	if ( $post_id ) {
		return get_post_meta( $post_id, '_wp_page_template', true );
	}

}

function avados_is_page_template( $template_file ) {
	return avados_get_page_template() == $template_file;
}


function avados_filter_array( $filter_name, $default = array() ) {

	$filtered = apply_filters( $filter_name, $default );

	if ( ! is_array( $filtered ) || ! count( $filtered ) ) {
		$filtered = $default;
	}

	return array_unique( $filtered );
}

function avados_array_val_concat( $array = null, $postfix = '', $default ) {

	if ( is_array( $array ) ) {

		$res = array();

		foreach ( $array as $val ) {
			$res[] = $val . $postfix;
		}

		return $res;
	}

	return $default;
}

function avados_get_rwmb_meta( $key, $post_id, $options = array() ) {
	$prefix = 'avados_';
	$value  = false;

	if ( function_exists( 'rwmb_meta' ) ) {
		$value = rwmb_meta( $prefix . $key, $options, $post_id );
	}

	return $value;
}

function avados_get_layout_block_id( $key ) {

	global $post;
	$layout_block_id = null;

	if ( $post ) {
		$layout_block_id = avados_get_rwmb_meta( str_replace( '-', '_', $key ), $post->ID );
	}
	if ( ! $layout_block_id ) {
		$layout_block_id = avados_get_option( $key, false );
	}

	return $layout_block_id;
}


function avados_get_layout_block( $key ) {

	$layout_block_id = avados_get_layout_block_id( $key );
	if ( $layout_block_id ) {
		$layout_block = get_post( $layout_block_id );

		return $layout_block;
	}
}

function avados_get_layout_block_content( $key ) {
	$layout_block = avados_get_layout_block( $key );
	$content = false;
	if ($layout_block) {

		$content = $layout_block->post_content;

		$search  = array(
			'vc_basic_grid',
			'vc_media_grid',
			'vc_masonry_grid',
			'vc_masonry_media_grid'
		);
		$replace = array();
		foreach ($search as $val) {
			$replace[] = $val . ' page_id="' . $layout_block->ID . '"';
		}

		$content = str_replace( $search, $replace, $content );
	}

	return $content;

}

function avados_get_child_pages() {

	global $post;

	$args = array(
		'child_of'    => $post->ID,
		'sort_column' => 'menu_order',
	);

	$pages = get_pages( $args );

	return count( $pages );

}







/*add custom style from visual compouser */


function avados_msm_filter_load_compiled_style() {
	return false;
}

function avados_get_vc_page_custom_css( $id ) {

	$out = '';
	if ( $id ) {
		$post_custom_css = get_post_meta( $id, '_wpb_post_custom_css', true );
		if ( ! empty( $post_custom_css ) ) {
			$post_custom_css = strip_tags( $post_custom_css );
			$out .= '<style type="text/css" data-type="vc_custom-css">';
			$out .= $post_custom_css;
			$out .= '</style>';
		}
	}

	return $out;
}

function avados_get_vc_shortcodes_custom_css( $id ) {

	$out = '';
	if ( $id ) {
		$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
		if ( ! empty( $shortcodes_custom_css ) ) {
			$shortcodes_custom_css = strip_tags( $shortcodes_custom_css );
			$out .= '<style type="text/css" data-type="vc_shortcodes-custom-css">';
			$out .= $shortcodes_custom_css;
			$out .= '</style>';
		}
	}

	return $out;
}

?>