<?php
/*
Template Name: Visual Composer
*/
?>
<?php get_header();?>
<div class="fullpage">
  <div class="container">
 
    <?php while ( have_posts() ) : the_post(); ?>
    <?php endwhile; ?>
    <?php the_content(); ?>
    <div class="wp-link-pages">
        <?php wp_link_pages(); ?>
        </div>
    <?php comments_template('', true);  ?>
 
  </div>
</div>
<?php get_footer(); ?>
