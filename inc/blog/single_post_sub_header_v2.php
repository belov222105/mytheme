<?php 
global $avadosFramework;
global $post;
$author_id=$post->post_author;


?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

  


<div class="page-header-2-wrapp text-center" style="background: url('<?php echo $thumb['0'];?>') no-repeat center center fixed;background-size: cover;">
<div class="page-header-2-wrapp-bg"></div>

<div class="page-header-2">


   
 <div class="container z-index text-white bold padding-top-150 padding-bottom-150">
 
  <span class="bg-color link-white padding-5 margin-right-10">
          <?php the_category(',');?>
        </span>
        
         
       <i class="fa fa-eye" aria-hidden="true"></i>
<?php setPostViews(get_the_ID()); ?>
<?php echo getPostViews(get_the_ID()); ?>

      <h1 class="title-page padding-top-30 padding-bottom-20">
        <?php the_title(); ?>
      </h1>
      
      
       <span class="postedby margin-right-20">
       
<span class="avados-avatar"><?php echo get_avatar(); ?></span>
       
        
        <?php the_author_meta( 'nickname', $author_id ); ?>
        

        </span>
        
         <span class="postcomment link-white margin-right-20">
         <i class="fa fa-comment-o" aria-hidden="true"></i>
        <?php comments_popup_link(__('0','avados'),__('1','avados'),__('%','avados'));?>
        </span>
        
         <span class="postdate">
          <i class="fa fa-calendar padding-right-5" aria-hidden="true"></i>
<?php the_time( get_option('date_format') ); ?>
        </span>
        
        
      </div>

</div>

</div>

  
  


    
      

     
      
      

