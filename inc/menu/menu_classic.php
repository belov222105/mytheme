<?php global $avadosFramework; ?>       <?php if(has_nav_menu('maine')) {wp_nav_menu( array('theme_location' => 'maine','container' => '','container_class' => '','menu_id' => '','fallback_cb' => false) );						}else { echo '<a class="no-menu-assigned" href="'. esc_url(admin_url('nav-menus.php')) .'">'. __('No menu assigned!','avados') .'</a>'; } ?> 