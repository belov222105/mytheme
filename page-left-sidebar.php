<?php
/*
Template Name: Page Left Sidebar 
*/
?>
<?php get_header();?>

<div class="container">
  <div class="row">
  <?php get_sidebar(); ?>
    <div class="page-content">
    
      <?php get_template_part( '/inc/subheader/sub_header_v1');  ?>
      
      
      <?php while ( have_posts() ) : the_post(); ?>
      <?php endwhile; ?>
      <?php the_content(); ?>
      <div class="wp-link-pages">
        <?php wp_link_pages(); ?>
        </div>
      <?php comments_template('', true);  ?>
    </div>
  </div>
  <!-- .row-->                 
</div>
<!-- .container-->
<?php get_footer(); ?>
