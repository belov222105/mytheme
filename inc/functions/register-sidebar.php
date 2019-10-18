<?php

 //Register Sidebar
function avados_widgets_init() {

register_sidebar( array(
    'name' => esc_html__( 'Maine Sidebar', 'avados' ),
    'id' => 'maine-sidebar',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));

register_sidebar( array(
    'name' => esc_html__( 'Shop Sidebar', 'avados' ),
    'id' => 'shop-sidebar',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));
    
    register_sidebar( array(
    'name' => esc_html__( 'Single Product Sidebar', 'avados' ),
    'id' => 'single-product-sidebar',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));
    
    
    
 register_sidebar( array(
    'name' => esc_html__( 'Sub Header Left Sidebar', 'avados' ),
    'id' => 'sub-header-left-sidebar',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));
    
register_sidebar( array(
    'name' => esc_html__( 'Sub Header Right Sidebar', 'avados' ),
    'id' => 'sub-header-right-sidebar',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));
    

register_sidebar( array(
    'name' => esc_html__( 'Footer 1', 'avados' ),
    'id' => 'footer-1',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));
    

register_sidebar( array(
    'name' => esc_html__( 'Footer 2', 'avados' ),
    'id' => 'footer-2',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));
    
    register_sidebar( array(
    'name' => esc_html__( 'Footer 3', 'avados' ),
    'id' => 'footer-3',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));
    
    
    register_sidebar( array(
    'name' => esc_html__( 'Footer 4', 'avados' ),
    'id' => 'footer-4',
    'before_widget' => '<div id="%1$s" class="avados_sidebar_widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
    ));
} 
add_action( 'widgets_init', 'avados_widgets_init' );

?>