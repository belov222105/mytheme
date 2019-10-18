<?php
global $avadosFramework;		
?>

<div class="page-header">
  <div class="container">

    <div class="flex space-between">
      <h1 class="title-page">
        <?php the_title(); ?>
      </h1>
       
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
</div>

