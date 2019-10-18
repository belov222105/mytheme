<?php 
global $avadosFramework;
global $post; // maybe but probably not


?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

  


<div class="page-header-2-wrapp" style="background: url('<?php echo $thumb['0'];?>') no-repeat center center fixed;background-size: cover;">
<div class="page-header-2-wrapp-bg"></div>

<div class="page-header-2">


  

</div>

</div>

  <div class="page-header-2-breadcrumbs">
  <div class="container">
    
          <?php

if ( 
$avadosFramework['breadcrumbs_style'] == 'breadcrumbs_style_header' 
) {
	get_template_part( '/inc/breadcrumbs/' . $avadosFramework['breadcrumbs_style'] 
	);
}

?>
</div>
 </div>
 
 <div class="container">
      <h1 class="title-page">
        <?php the_title(); ?>
      </h1>
      </div>

    
 
  

     
      
      

