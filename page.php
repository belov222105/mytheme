<?php get_header();?>

<div class="container page-width-sidebar">
  <div class="row">
    <div class="page-content"> <div class="wrapper">
    
      <?php get_template_part( '/inc/subheader/sub_header_v1');  ?>
   
      <?php while ( have_posts() ) : the_post(); ?>
      <?php endwhile; ?>
      <?php the_content(); ?>
     <div class="wp-link-pages">
        <?php wp_link_pages(); ?>
        </div>
      <?php comments_template('', true);  ?>
    </div></div>
   <?php get_sidebar(); ?>
  </div>              
</div>
<?php get_footer(); ?>
