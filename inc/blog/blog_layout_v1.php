<?php global $avadosFramework; ?>

<div class="container">
  <div class="row">
    <div class="blog-category">
      <ul class="bloglist">
        <?php 
if (have_posts()) : while (have_posts()) : the_post();?>
        <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <div class="row" >
        <div class="flex" >
        <a class="col-3" href="<?php the_permalink();?>">
         <figure>
          <?php if ( has_post_thumbnail() ) {
the_post_thumbnail('tall');
} else { ?>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/placeholder.jpg" alt="" />
<?php } ?></figure>
        </a>
        <div class="bloglist-content col-7">
          <h3>
            <a href="<?php the_permalink();?>">
              <?php the_title();?>
            </a>
          </h3>
          <div class="metapost">
        <span class="postdate">
          <?php echo __('Posted at: ','avados');?>
          <?php the_time( get_option('date_format') ); ?>
        </span>
        <span class="postindicator">|
        </span>
        
        <span class="postedby">
          <?php echo __('By ','avados');?>: 
          <?php the_author_posts_link();?>
        </span>
        <span class="postindicator">|
        </span>
    
        <span class="postcomment">
          <?php comments_popup_link(__('0 Comment','avados'),__('1 Comment','avados'),__('% Comments','avados'));?>
        </span>
      </div>
      
          <div class="bloglist-expert">
            <?php the_excerpt();?>
          </div>
          <a class="btn read-more" href="<?php the_permalink();?>">
            <?php echo esc_html_e('Read more','avados');?>
          </a>
        </div>
        </div>
        </div>
        </li>
      <?php endwhile;?> 
      <?php endif;?>
      </ul>
    <div class="navigation">
      <?php wp_link_pages(); ?>
      <?php echo paginate_links(); ?>
    </div>
    <div class="clear">
    </div> 
  </div> 
 <?php get_sidebar(); ?>
</div>
</div>