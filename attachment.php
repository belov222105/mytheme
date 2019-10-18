<?php get_header();?>

<?php if ( isset( $avadosFramework['disable_sub_header_layout'] ) && $avadosFramework['disable_sub_header_layout'] == 1 ) { ?>

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

<?php } ?>


<div class="fullpage">
  <div class="container">
  <div class="entry-attachment">
        <?php $image_size = apply_filters( 'wporg_attachment_size', 'large' ); 
echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>
        <?php if ( has_excerpt() ) : ?>
        <div class="entry-caption">
          <?php the_excerpt(); ?>
        </div>
        <!-- .entry-caption -->
        <?php endif; ?>
      </div>
    <?php comments_template('', true);  ?>
  </div>
  <!-- .fullpage-->
</div>
<!-- .container-->
<?php get_footer(); ?>
