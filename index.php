<?php get_header();?>

 <?php get_template_part( '/inc/subheader/sub_header_v1');  ?>


<?php
if ( $avadosFramework['blog_layout'] == 'blog_layout_v1' 
|| $avadosFramework['blog_layout'] == 'blog_layout_v2'

) {
	get_template_part( '/inc/blog/' . $avadosFramework['blog_layout'] 
	);
}
?>


<?php get_footer(); ?>
