<?php
global $avadosFramework;		
?>

<?php get_header(); ?>



<div id="post-<?php the_ID(); ?>" 
     <?php post_class(); ?>>



<?php
if ( 
   $avadosFramework['single_post_sub_header_layout'] == 'single_post_sub_header_v1' || 
   $avadosFramework['single_post_sub_header_layout'] == 'single_post_sub_header_v2'

) {
	get_template_part( '/inc/blog/' . $avadosFramework['single_post_sub_header_layout'] 
	);
}
?>



<?php
if ( 
   $avadosFramework['single_post_sidebar'] == 'single_post_left_sidebar' || 
   $avadosFramework['single_post_sidebar'] == 'single_post_right_sidebar' || 
   $avadosFramework['single_post_sidebar'] == 'single_post_without_sidebar'

) {
	get_template_part( '/inc/blog/' . $avadosFramework['single_post_sidebar'] 
	);
}
?>




</div>
<?php get_footer(); ?>
