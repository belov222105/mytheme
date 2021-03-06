<?php global $avadosFramework; ?>


<?php if ( isset( $avadosFramework['related_post_area'] ) && $avadosFramework['related_post_area'] == 1 ) { ?>
<div class="relatedposts clearfix">
<?php
$orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
$args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=>3, // Number of related posts to display.
'ignore_sticky_posts'=>1
);
$my_query = new wp_query( $args );
?>

<div class="title-font font-size-23 padding-top-20 extra-bold"><?php echo esc_html_e('Related Posts', 'avados'); ?></div>
 <div class="row">

<?php while( $my_query->have_posts() ) {
$my_query->the_post();
?>

       <div class="relatedthumb text-center col-3 clear-after-3 border-0">
        <a href="<?php the_permalink();?>">
        <?php if ( has_post_thumbnail() ) {
the_post_thumbnail( 'normal', array( 'class' => 'aligncenter' ) );
} else { ?>


<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/placeholder/placeholder-normal.jpg" alt="" class="aligncenter" />
<?php } ?>
 </a>
          
         
          <h4>
            <a class="related-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a> 
          </h4>
          <?php the_excerpt();?>
          <a class="read-more" href="<?php the_permalink();?>">
            <?php echo __('Read more &rarr;','avados');?>
          </a>
          <div class="clear">
          </div>
        </div>
        <?php }
}
$post = $orig_post;
wp_reset_postdata();

?>
      </div></div>
      <?php } ?>