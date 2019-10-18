<?php global $avadosFramework; ?>
 

<div class="scroll_header_holder"></div>
<div class="header bg-dark header-block-8" id="home">
<div class="container">
        

      <div class="flex space-between">    
      
     <div class="logo-and-menu-block flex space-between mobile-width-100">
  
        
<!-- Logo --> 
<?php
get_template_part( 'inc/header/logo','header'); 
?>
<!-- Logo Finish --> 
        
<?php if ( isset( $avadosFramework['disable_ribbon'] ) && $avadosFramework['disable_ribbon'] == 1 ) { ?>
<a href="#order" class="ribbon-block popup-modal hide-on-mobile hide-on-laptop">
<span>FREE</span>
QUOTE
</a>
<?php } ?>	 
	
<div id="menu" class="menu_v3 dark-submenu  bottom-line-style">  
<?php
if ( $avadosFramework['menu_style'] == 'menu_classic' 
|| $avadosFramework['menu_style'] == 'menu_onepage' ) {
	get_template_part( '/inc/menu/' . $avadosFramework['menu_style'] 
);
}
?>
</div>
</div><!-- logo and mu block END-->


		  
		  
<div class="flex hide-on-mobile hide-on-table">



<?php if ( isset( $avadosFramework['disable_phone'] ) && $avadosFramework['disable_phone'] == 1 ) { ?>
<span class="tel text-white uppercase bold padding-right-30">
<?php echo esc_attr( $avadosFramework['header_phone'] ) ?>
</span>
<?php } ?>

<?php if ( isset( $avadosFramework['disable_ribbon'] ) && $avadosFramework['disable_ribbon'] == 1 ) { ?>
<a href="#order" class="ribbon-block popup-modal">
<span>FREE</span>
QUOTE
</a>
<?php } ?>

</div>

      </div>
     
  </div>
   </div>