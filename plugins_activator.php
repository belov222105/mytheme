<?php
get_template_part( 'class-tgm-plugin-activation' );

add_action('avados_register', 'cs_theme_register_required_plugins');
function cs_theme_register_required_plugins() 
{

    $plugins_path = get_template_directory() . '/plugins';

	$plugins = array(
		array(
			'name'     				=> 'WPBakery Visual Composer', // The plugin name
			'slug'     				=> 'js_composer', // The plugin slug (typically the folder name)
			'source' => $plugins_path . '/stm-configurations.zip',

			'source'   				=> $plugins_path . '/js_composer.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '5.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		
		array(
			'name'     				=> 'Unlimited Addons', // The plugin name
			'slug'     				=> 'unlimited-addons', // The plugin slug (typically the folder name)
			'source' => $plugins_path . '/stm-configurations.zip',
			'source'   				=> $plugins_path . '/unlimited-addons.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '1.0.26', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		
		array(
			'name'     				=> 'Addon Library Creator Extension', // The plugin name
			'slug'     				=> 'addon_library_creator', // The plugin slug (typically the folder name)
			'source' => $plugins_path . '/stm-configurations.zip',
			'source'   				=> $plugins_path . '/addon_library_creator.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '1.0.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		
		/* array(
			'name'     				=> 'Slider Revolution', // The plugin name
			'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
			'source' => $plugins_path . '/stm-configurations.zip',
			'source'   				=> $plugins_path . '/revslider.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '5.4.6.3.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		*/
		
		
		

'disable-emojis' => array(
			'name' => 'Disable Emojis (GDPR friendly)',
			'slug' => 'disable-emojis',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '1.7.2',
			
		),


		
		'woocommerce' => array(
			'name' => 'Woocommerce',
			'slug' => 'woocommerce',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '3.5.7',
			
		),
		
		'yith-woocommerce-wishlist' => array(
			'name' => 'YITH WooCommerce Wishlist',
			'slug' => 'yith-woocommerce-wishlist',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '2.2.8',
			
		),
		
		'autoptimize' => array(
			'name' => 'Autoptimize',
			'slug' => 'autoptimize',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '2.3.4',
		),
		
		'cyr2lat' => array(
			'name' => 'Cyr-To-Lat',
			'slug' => 'cyr2lat',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '3.2',
		),
		
	'mce-table-buttons' => array(
			'name' => 'MCE Table Buttons',
			'slug' => 'mce-table-buttons',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '3.3',
		),
		
		
		'client-dash' => array(
			'name' => 'Client Dash',
			'slug' => 'client-dash',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '2.0.8',
		),
		
			/*
		'disable-wordpress-updates' => array(
			'name' => 'Disable All WordPress Updates',
			'slug' => 'disable-wordpress-updates',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '1.6.3',
		),
		*/
		
		'flamingo' => array(
			'name' => 'Flamingo',
			'slug' => 'flamingo',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '1.8',
		),
		
		
		

        'instagram-feed' => array(
			'name' => 'Instagram Feed',
			'slug' => 'instagram-feed',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '1.8.3',
		),

		
		'contact-form-7' => array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
			'required' => true,
			'force_activation' => false,
			'version' 				=> '5.0.2',
		),
		
		
		'Redux Framework' => array(
			'name' => 'Redux Framework',
			'slug' => 'redux-framework',
			'required' => true,
			'force_activation' => false,
			'version' 				=> '3.6.9',
		),
		
		'Recent Tweets Widget' => array(
			'name' => 'Recent Tweets Widget',
			'slug' => 'recent-tweets-widget',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '1.6.8',
		),
		
		'AMP' => array(
			'name' => 'AMP',
			'slug' => 'amp',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '0.7.1',
		),
		'SVG support' => array(
			'name' => 'SVG support',
			'slug' => 'svg-support',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '2.3.15',
		),
		
		'Classic Editor' => array(
			'name' => 'Classic Editor',
			'slug' => 'classic-editor',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '1.4',
		),
		
		'All-in-One WP Migration' => array(
			'name' => 'All-in-One WP Migration',
			'slug' => 'all-in-one-wp-migration',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '6.76',
		),
		
		'WP Migrate DB' => array(
			'name' => 'WP Migrate DB',
			'slug' => 'wp-migrate-db',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '1.0.4',
		),
		
		'WP-Optimize' => array(
			'name' => 'WP-Optimize',
			'slug' => 'wp-optimize',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '2.2.4',
		),
		
		'Justified Gallery' => array(
			'name' => 'Justified Gallery',
			'slug' => 'justified-gallery',
			'required' => false,
			'force_activation' => false,
			'version' 				=> '1.3.1',
		),
		
		


		
		);
	avados( $plugins);

}
?>