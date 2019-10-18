<?php global $avadosFramework; ?>



 
  <div class="colums header-contact hide-on-mobile 
  
<?php if ( 
$avadosFramework['header_layout'] == 'header_v10' ||
$avadosFramework['header_layout'] == 'header_v6' 

) { ?>
flex
<?php } ?>">

<?php if(!empty($avadosFramework['header_phone'])) { ?>
  <a href="tel:<?php echo esc_attr( $avadosFramework['header_phone'] ) ?>" class="phone"><?php echo esc_attr( $avadosFramework['header_phone'] ) ?></a>
<?php } ?>



<?php if(!empty($avadosFramework['header_adress'])) { ?>
 <div class="adress"><?php echo esc_attr( $avadosFramework['header_adress'] ) ?></div>
<?php } ?>


 
<?php if(!empty($avadosFramework['header_btn'])) { ?>
 <a href="#order" class="btn btn-color-border popup-modal"><?php echo esc_attr( $avadosFramework['header_btn'] ) ?></a>
<?php } ?>

<?php if ( isset( $avadosFramework['disable_ribbon'] ) && $avadosFramework['disable_ribbon'] == 1 ) { ?>
<a href="#order" class="ribbon-block popup-modal">
<span>FREE</span>
QUOTE
</a>
<?php } ?>



 </div>
 
 
