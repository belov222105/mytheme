<?php global $avadosFramework; ?>

<div class="container">
  <div class="row">
  
  
<?php get_sidebar(); ?>

    <div class="single-post-block">
    
     <?php if ( $avadosFramework['single_post_sub_header_layout'] == 'single_post_sub_header_v1' ) { ?>
       
       
      <?php if ( isset( 
      
      $avadosFramework['single_post_sub_header_v1_image'] ) && $avadosFramework['single_post_sub_header_v1_image'] == 1 ) { ?>

        <a href="<?php the_post_thumbnail_url( 'full' ); ?>"  rel="lightbox">
          <?php the_post_thumbnail( 'full', array( 'class' => 'aligncenter no-margin-top' ) ); ?>
        </a>
    
    <?php } ?>
    
<?php } ?>


      <div class="single-post-style single-post-shadow">
      
      
            


      
      
        
        <?php if ( have_posts() ) : ?>
        <!-- Add the pagination functions here. -->
        <?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
while ( have_posts() ) : the_post();  ?>
        <!-- the rest of your theme's main loop -->
        <?php the_content(); ?>
        <!-- add pagination -->
        <div class="wp-link-pages">
        <?php wp_link_pages(); ?>
        </div>
       
             <?php if ( isset( $avadosFramework['single_the_post_navigation'] ) && $avadosFramework['single_the_post_navigation'] == 1 ) { ?>

        <!-- Add the pagination functions here. -->
        <?php 
the_post_navigation( array(
'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'avados' ) . '</span><i class="fa fa-angle-double-right" aria-hidden="true"></i>' .
'<span class="screen-reader-text">' . __( 'Next post:', 'avados' ) . '</span> ' ,
'prev_text' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i><span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'avados' ) . '</span> ' .
'<span class="screen-reader-text">' . __( 'Previous post:', 'avados' ) . '</span> ' ,
) );
?>

<?php } ?>


        <div class="clear">
        </div>		
        <?php endwhile; ?>
        <!-- End of the main loop -->
        <?php else : ?>
        <p>
          <?php echo __('Sorry, no posts matched your criteria.', 'avados'); ?>
        </p>
        <?php endif; ?>
      </div>
      
      <?php if ( isset( $avadosFramework['meta'] ) && $avadosFramework['meta'] == 1 ) { ?>
      <div class="metapost">
        <span class="postdate">
          <?php echo __('Posted at: ','avados');?>
          <?php the_time( get_option('date_format') ); ?>
        </span>
        <span class="postindicator">|
        </span>
        <span class="posttags">
          <?php the_tags(); ?>
        </span>
        <span class="postindicator">|
        </span>
        <span class="postedby">
          <?php echo __('By ','avados');?>: 
          <?php the_author_posts_link();?>
        </span>
        <span class="postindicator">|
        </span>
        <span class="postedon">
          <?php echo __('Categories ','avados');?>: 
          <?php the_category(',');?>
        </span>
        <span class="postindicator">|
        </span>
        <span class="postcomment">
          <?php comments_popup_link(__('0 Comment','avados'),__('1 Comment','avados'),__('% Comments','avados'));?>
        </span>
      </div>
      <?php } ?>
      
      

<?php
if ( 
$avadosFramework['single_post_related_post_style'] == 'single_post_related_post_v1' || $avadosFramework['single_post_related_post_style'] == 'single_post_related_post_v2'
) {
	get_template_part( '/inc/blog/' . $avadosFramework['single_post_related_post_style'] 
	);
}
?>


      
      <?php comments_template('', true);  ?>
    </div>





  </div>











</div>