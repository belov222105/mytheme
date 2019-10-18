<?php get_header();?>

<?php if ( isset( $avadosFramework['disable_sub_header_layout'] ) && $avadosFramework['disable_sub_header_layout'] == 1 ) { ?>

<?php
if ( 
   $avadosFramework['sub_header_layout'] == 'sub_header_v1' || 
   $avadosFramework['sub_header_layout'] == 'sub_header_v2' || 
   $avadosFramework['sub_header_layout'] == 'sub_header_v3'

) {
	get_template_part( '/inc/subheader/' . $avadosFramework['sub_header_layout'] 
	);
}
?>

<?php } ?>



<div class="fullpage">
  <div class="container">
    <div class="error-page text-center">

    <div class="title">
      <?php echo esc_html_e( '404', 'avados' );  ?>
    </div>
    <div class="subtitle margin-bottom-50">
      <?php echo esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'avados' ); ?>
    </div>
    <div class="clear"></div>
    <div class="col-2 block-center">
      <?php get_search_form(); ?>
    </div>
  
    </div>
  </div>
  <!-- .fullpage-->
</div>



<?php get_footer(); ?>
