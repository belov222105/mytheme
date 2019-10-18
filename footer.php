<?php
global $avadosFramework;		
?>

<div class="clear"></div>



<div class="footer">

<div class="container">





<?php 
if( is_front_page() ){ 
?>


<?php } else { ?>

<?php

if ( 
$avadosFramework['breadcrumbs_style'] == 'breadcrumbs_style_footer' 
) {
	get_template_part( '/inc/breadcrumbs/' . $avadosFramework['breadcrumbs_style'] 
	);
}

?>

<?php } ?>


<div class="row">
  <?php if ( is_active_sidebar( 'footer-1' ) ){ ?>
		<div class="col-4">
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
	<?php } ?>
	
	
	  <?php if ( is_active_sidebar( 'footer-2' ) ){ ?>
		<div class="col-4">
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>
	<?php } ?>
	
	  <?php if ( is_active_sidebar( 'footer-3' ) ){ ?>
		<div class="col-4">
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
	<?php } ?>


  <?php if ( is_active_sidebar( 'footer-4' ) ){ ?>
		<div class="col-4">
			<?php dynamic_sidebar( 'footer-4' ); ?>
		</div>
	<?php } ?>


</div><!--/row-->
</div><!--/container-->

</div><!--/footer-->


<?php if ( isset( $avadosFramework['disable_footer_bottom'] ) && $avadosFramework['disable_footer_bottom'] == 1 ) { ?>
<div class="footer-copyright" id="footer">
  <div class="container">
    <div class="row">
      <?php if ( isset( $avadosFramework['disable_footer_copyright'] ) && $avadosFramework['disable_footer_copyright'] == 1 ) { ?>
      <div class="col-2">
        <div class="copyright">
          <!-- Site Copyright -->
          <div class="copyright col_12 last">
            <p><?php echo esc_attr($avadosFramework['footer_bottom_text']); ?></p>
          </div>
          <!-- Site Copyright End -->
        </div> 
      </div>
      <?php } ?>
      <div class="col-2">
        <?php if ( isset( $avadosFramework['disable_footer_bottom_social'] ) && $avadosFramework['disable_footer_bottom_social'] == 1 ) { ?>
        <ul class="social-network social-circle">
          <li> 
            <a href="<?php echo esc_url($avadosFramework['footer_bottom_social_facebook']); ?>" target="_blank"><i class='fa fa-facebook'></i>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url($avadosFramework['footer_bottom_social_twitter']); ?>" target="_blank"><i class='fa fa-twitter'></i>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url($avadosFramework['footer_bottom_social_google']); ?>" target="_blank"><i class='fa fa-google-plus'></i>
            </a>
          </li>
        </ul>
        <?php 
}
?>
      </div>
     
    </div>
  </div>
</div>
<?php 
}
?>
<?php if ( isset( $avadosFramework['totop_show'] ) && $avadosFramework['totop_show'] == 1 ) { ?>
<a href="#top">
  <p id="back-top">
    <i class="fa fa-chevron-up">
    </i>
  </p>
</a>
<?php } ?>





<!--noindex-->
<div id="order" class="white-popup-block mfp-hide">

<?php 

$output = do_shortcode($avadosFramework['header-cta-shortcode']);
echo $output;

?>

</div>
<!--/noindex-->

<div id="fullscreensearch" class="menu-search">
<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
    
    <div class="search-table">
   
    <div class="search-field"><input type="text" placeholder="Type to search" value="" name="s" id="s" /></div>
    
    <button type="submit" class="menu-search-submit"><i class="fa fa-search"></i></button>
    
    </div>
    
    </form>
</div>

</div> <!-- wrapp end -->

<?php wp_footer();?>

</body>
</html>