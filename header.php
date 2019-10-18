<?php global $avadosFramework; ?>
<!DOCTYPE html >
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--favicicon-->
<?php if(!empty($avadosFramework['favicon']['url'])) { ?>
<link rel="shortcut icon" href="<?php echo esc_url($avadosFramework['favicon']['url']); ?>" />
<?php }
if(!empty($avadosFramework['apple-touch-icon']['url'])) {
?>
<link rel="apple-touch-icon" href="<?php echo esc_url($avadosFramework['apple-touch-icon']['url']); ?>" />
<?php } ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="wrapp">

<!--preloader-->
<?php if ( isset( $avadosFramework['show_perload'] ) && $avadosFramework['show_perload'] == 1 ) { ?>
<div class="loader preloader-bg"></div>
<?php } ?>

<?php 
get_template_part( '/inc/header/sub', 'header' ); 
?>

<?php if ( isset( $avadosFramework['header_layout'] )) {?>

<?php
if ( $avadosFramework['header_layout'] == 'header_v1' 
  || $avadosFramework['header_layout'] == 'header_v2'
  || $avadosFramework['header_layout'] == 'header_v3' 
  || $avadosFramework['header_layout'] == 'header_v4' 
  || $avadosFramework['header_layout'] == 'header_v5' 
  || $avadosFramework['header_layout'] == 'header_v6' 
  || $avadosFramework['header_layout'] == 'header_v7'
  || $avadosFramework['header_layout'] == 'header_v8' 
  || $avadosFramework['header_layout'] == 'header_v9' 
  || $avadosFramework['header_layout'] == 'header_v10' 
) 
?>

<?php get_template_part( '/inc/header/' . $avadosFramework['header_layout'] );  ?>

<?php } else { ?>

<?php get_template_part( '/inc/header/default');  ?>

<?php } ?>
