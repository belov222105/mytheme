<?php global $avadosFramework; ?>

<div class="container">
  

      <ul class="bloglist masonry">
        <?php 
if (have_posts()) : while (have_posts()) : the_post();?>
        <li id="item post-<?php the_ID(); ?>" <?php post_class(); ?> >
          
        <div class="flex" >
        
        <div class="relative width-100">

<div class="category bg-color"><a href="<?php the_permalink() ?>"><?php the_category(',');?></a></div>

<a class="line-height-0" href="<?php the_permalink();?>">
         <figure>
         
          <?php if ( has_post_thumbnail() ) {
the_post_thumbnail('masonry');
} else { ?>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/placeholder.jpg" alt="" />

<?php } ?></figure>
        </a>
        </div>
        <div class="bloglist-content">
          <h3>
            <a href="<?php the_permalink();?>">
              <?php the_title();?>
            </a>
          </h3>
          <div class="metapost">
        <span class="postdate">
          <?php the_time( get_option('date_format') ); ?>
        </span>
      </div>
      
          <div class="bloglist-expert">
            <?php the_excerpt();?>
          </div>
          
          
          
            <div class="metapost flex space-between">
     
        <span class="postedby">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          <?php the_author_posts_link();?>
        </span>
   
    
        <span class="postcomment">
        <i class="fa fa-comment-o" aria-hidden="true"></i>

          <?php comments_popup_link(__('0','avados'),__('1','avados'),__('%','avados'));?>
        </span>
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