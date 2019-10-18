<?php

 
/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Header Layout', 'Post Type General Name', 'avados' ),
        'singular_name'       => _x( 'Layout', 'Post Type Singular Name', 'avados' ),
        'menu_name'           => __( 'Header Layout', 'avados' ),
        'parent_item_colon'   => __( 'Parent Layout', 'avados' ),
        'all_items'           => __( 'All Header Layout', 'avados' ),
        'view_item'           => __( 'View Layout', 'avados' ),
        'add_new_item'        => __( 'Add New Layout', 'avados' ),
        'add_new'             => __( 'Add New', 'avados' ),
        'edit_item'           => __( 'Edit Layout', 'avados' ),
        'update_item'         => __( 'Update Layout', 'avados' ),
        'search_items'        => __( 'Search Layout', 'avados' ),
        'not_found'           => __( 'Not Found', 'avados' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'avados' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'header_layout_type', 'avados' ),
        'description'         => __( 'Layout news and reviews', 'avados' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'header_layout_type', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );



?>