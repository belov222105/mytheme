<?php global $avadosFramework; ?>

<div class="page-header-2-wrapp">
<div class="page-header-2-wrapp-bg"></div>

<div class="page-header-2" style="
<?php 
echo 'background-color:' . $avadosFramework['header_5_bg']['background-color'];
?>
;
<?php echo 'background-image: url( ' . $avadosFramework  ['header_5_bg']['background-image'] .')'; ?>
;
<?php echo 'background-size: ' . $avadosFramework  ['header_5_bg']['background-size']; ?>
;
<?php echo 'background-attachment: ' . $avadosFramework  ['header_5_bg']['background-attachment']; ?>
;
<?php echo 'background-position: ' . $avadosFramework  ['header_5_bg']['background-position']; ?>
">
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

    
 
  

     
      
      

