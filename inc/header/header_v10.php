<?php global $avadosFramework; ?>

<div class="scroll_header_holder"></div>


<div class="header header_v10 scroll_header" id="home">
    <div class="container">
      <div class="flex space-between">
      
 
 <!-- Logo --> 
<?php
get_template_part( 'inc/header/logo','header'); 
?>
<!-- Logo Finish --> 
       
       
  
  <div class="menu-and-phone flex space-between"> 
<div id="menu" class="menu_v4 bottom-line-style">  
<?php
if ( $avadosFramework['menu_style'] == 'menu_classic' 
|| $avadosFramework['menu_style'] == 'menu_onepage' ) {
	get_template_part( '/inc/menu/' . $avadosFramework['menu_style'] 
);
}
?>
</div>
<!-- header cta --> 
<?php
get_template_part( 'inc/header/header','cta'); 
?>
<!-- header cta finish --> 
</div>
      </div><!--/flex-->	
    </div><!--/container-->
  </div><!--header_v2-->
