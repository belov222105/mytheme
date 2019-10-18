<?php

 /*show sticy post first in categoey */
class avados_PD_StickyPostsInCategory
{
    function __construct()
    {
        define('PD_SPIC_VERSION', '2.1');
        define("PD_SPIC_DIR", plugin_dir_path(__FILE__));
        define("PD_SPIC_BASENAME", plugin_basename(__FILE__));
        add_filter('the_posts', array($this, 'avados_putStickyOnTop'));
        add_filter('post_class', array($this, 'avados_addStickyClass'), 10, 3);
    }
    function avados_putStickyOnTop($posts)
    {
        global $wp_query;
        if (function_exists('is_main_query')) {
            //we have wp version 3.3+
            if (is_category() && is_main_query()) {
                $sticky_posts = get_option('sticky_posts');
                $num_posts = count($posts);
                $sticky_offset = 0;
                //loop over posts and relocate stickies to the front
                for ($i = 0; $i < $num_posts; $i++) {
                    if (in_array($posts[$i]->ID, $sticky_posts)) {
                        $sticky_post = $posts[$i];
                        //remove sticky post from current position
                        array_splice($posts, $i, 1);
                        //move to front, after other stickies
                        array_splice($posts, $sticky_offset, 0, array($sticky_post));
                        //increment the sticky offset. the next sticky will be placed at this offset.
                        $sticky_offset++;
                        //remove post from sticky posts array
                        $offset = array_search($sticky_post->ID, $sticky_posts);
                        unset($sticky_posts[$offset]);
                    }
                }
            }
        } else {
            //we have pre 3.3 wp version installed
            if (is_category()) {
                $sticky_posts = get_option('sticky_posts');
                $num_posts = count($posts);
                $sticky_offset = 0;
                //loop over posts and relocate stickies to the front
                for ($i = 0; $i < $num_posts; $i++) {
                    if (in_array($posts[$i]->ID, $sticky_posts)) {
                        $sticky_post = $posts[$i];
                        //remove sticky post from current position
                        array_splice($posts, $i, 1);
                        //move to front, after other stickies
                        array_splice($posts, $sticky_offset, 0, array($sticky_post));
                        //increment the sticky offset. the next sticky will be placed at this offset.
                        $sticky_offset++;
                        //remove post from sticky posts array
                        $offset = array_search($sticky_post->ID, $sticky_posts);
                        unset($sticky_posts[$offset]);
                    }
                }
            }
        }
        return $posts;
    }
    function avados_addStickyClass($classes, $class, $post_id)
    {
        if (is_sticky() && is_category() && !isset($classes['sticky'])) {
            $classes[] = 'sticky';
        }
        return $classes;
    }
    function activate()
    {
    }
}
$avados_PD_StickyPostsInCategory = new avados_PD_StickyPostsInCategory();








/**
Add Next Page/Page Break Button
**/
add_filter('avados_mce_buttons','avados_wysiwyg_editor');

function avados_wysiwyg_editor($avados_mce_buttons) {
$avados_pos = array_search('wp_more',$avados_mce_buttons,true);
if ($avados_pos !== false) {
$avados_tmp_buttons = array_slice($avados_mce_buttons, 0, $avados_pos+1);
$avados_tmp_buttons[] = 'wp_page';
$avados_mce_buttons = array_merge($avados_tmp_buttons, array_slice($avados_mce_buttons, $avados_pos+1));
}
return $avados_mce_buttons;
}







/*-----------------------------------------------------------------------------------*/
/* Add search in menu
/*-----------------------------------------------------------------------------------*/

function avados_search_box_function( $nav, $args ) {
global $avadosFramework;

if ( isset( $avadosFramework['search_in_menu'] ) && $avadosFramework['search_in_menu'] == 1 ) { 

    if( $args->theme_location == 'maine' )
        return $nav.'<li class="search">
    <a class="close-open-btn open"><i class="fa fa-search"></i></a>
    <a class="close-open-btn close"><i class="fa fa-times" aria-hidden="true"></i></a>
    
   
    
   </li>';
} //redux
    return $nav;
    
    
}

add_filter('wp_nav_menu_items','avados_search_box_function', 10, 2);



//custom avatar 
function new_default_avatar ( $avatar_defaults ) {
global $avadosFramework;
		//Set the URL where the image file for your avatar is located
		$new_avatar_url = esc_url($avadosFramework['avados-avatar']['url']); 
		//Set the text that will appear to the right of your avatar in Settings>>Discussion
		$avatar_defaults[$new_avatar_url] = 'Avados Avatar';
		return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'new_default_avatar' );








// add body class if both sidebars are active
function avados_body_class_layouts( $classes = '') {

// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
     
	// Adds a class of no-sidebar to sites without active sidebar.
    if ( ! is_active_sidebar('maine-sidebar') ) {
        $classes[] = 'no-sidebar';
    }
   

    
    
	// Adds a class of hfeed to non-singular pages.
	if ( is_singular() ) {
		$classes[] = 'hfeed';
	}


    return $classes;
}

add_filter( 'body_class', 'avados_body_class_layouts' );



//Big Favicon 
function avados_prefix_custom_site_icon_size( $sizes ) {
   $sizes[] = 64;
   return $sizes;
}
add_filter( 'site_icon_image_sizes', 'avados_prefix_custom_site_icon_size' );

function avados_prefix_custom_site_icon_tag( $meta_tags ) {
$meta_tags[] = sprintf( '<link rel="icon" href="%s" sizes="64x64" />', esc_url( get_site_icon_url( null, 64 ) ) );
 
return $meta_tags;
}
add_filter( 'site_icon_meta_tags', 'avados_prefix_custom_site_icon_tag' );


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1024;
}

/*Add supports tags*/
function avados_wpse_add_title_support() {
    add_theme_support( 'title-tag' );
}
add_action ( 'after_setup_theme', 'avados_wpse_add_title_support' );


/* ==========================================
	MAKE EXPERT 40 WORDS 
========================================== */
function avados_custom_excerpt_length( $length ) {
return 40;
}

add_filter( 'excerpt_length', 'avados_custom_excerpt_length', 999 );
    
    
    
/* ==========================================
	ADD ATRIBUTE RELL TO ALL IMAGES IN LOOP
========================================== */

function avados_lightbox($content) {
       global $post;
       $pattern ="/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
       $replacement = '<a$1href=$2$3.$4$5 rel="lightbox" $6>';
       $content = preg_replace($pattern, $replacement, $content);
       return $content;
}
add_filter('the_content', 'avados_lightbox');


/*Site logo*/ 
add_theme_support( 'custom-logo' );

/*Add custom class to customizer menu*/
function avados_change_logo_class($html) {
	$html = str_replace('class="custom-logo-link"', 'class="logo"', $html);
	return $html;
}
add_filter('get_custom_logo','avados_change_logo_class');

/*Editor Style*/ 
function avados_editor_styles() {
 add_editor_style( get_stylesheet_uri() );
}
add_action( 'init', 'avados_editor_styles' );

/*Languages*/
load_theme_textdomain('avados', get_template_directory() . '/languages');


/*Automatic Feed Links*/
add_theme_support( 'automatic-feed-links' );

//Register Menu
register_nav_menus(array(
'maine' => esc_html__( 'Main menu', 'avados' ),
));








// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
}
 
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
 
// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = esc_html_e('Views', 'avados');
    
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
 if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}





function avados_comments_script(){
if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
  wp_enqueue_script( 'comment-reply' );
}
add_action('wp_print_scripts', 'avados_comments_script');





/*woocommerce */


?>