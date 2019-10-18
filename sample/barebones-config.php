<?php
/**
* ReduxFramework Barebones Sample Config File
* For full documentation, please visit: http://docs.reduxframework.com/
*/
if ( ! class_exists( 'Redux' ) ) {
return;
}
// This is your option name where all the Redux data is stored.
$opt_name = "avadosFramework";
/**
* ---> SET ARGUMENTS
* All the possible arguments for Redux.
* For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
* */
$theme = wp_get_theme(); // For use with some settings. Not necessary.
$args = array(
// TYPICAL -> Change these values as you need/desire
'opt_name'             => $opt_name,
// This is where your data is stored in the database and also becomes your global variable name.
'display_name'         => $theme->get( 'Name' ),
// Name that appears at the top of your panel
'display_version'      => $theme->get( 'Version' ),
// Version that appears at the top of your panel
'menu_type'            => 'menu',
//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
'allow_sub_menu'       => true,
// Show the sections below the admin menu item or not
'menu_title'          => esc_html__( 'Avados Options', 'avados' ),
'page_title'          => esc_html__( 'Avados Options', 'avados' ),
// You will need to generate a Google API key to use this feature.
// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
'google_api_key'       => '',
// Set it you want google fonts to update weekly. A google_api_key value is required.
'google_update_weekly' => false,
// Must be defined to add google fonts to the typography module
'async_typography'     => false,
// Use a asynchronous font on the front end or font string
//'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
'admin_bar'            => false,
// Show the panel pages on the admin bar
'admin_bar_icon'       => 'dashicons-portfolio',
// Choose an icon for the admin bar menu
'admin_bar_priority'   => 50,
// Choose an priority for the admin bar menu
'global_variable'      => '',
// Set a different name for your global variable other than the opt_name
'dev_mode'             => false,
// Show the time the page took to load, etc
'update_notice'        => false,
// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
'customizer'           => true,
// Enable basic customizer support
//'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
//'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
// OPTIONAL -> Give you extra features
'page_priority'        => null,
// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
'page_parent'          => 'themes.php',
// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
'page_permissions'     => 'manage_options',
// Permissions needed to access the options panel.
'menu_icon'            => '',
// Specify a custom URL to an icon
'last_tab'             => '',
// Force your panel to always open to a specific tab (by id)
'page_icon'            => 'icon-themes',
// Icon displayed in the admin panel next to your menu_title
'page_slug'            => 'avados_options',
// Page slug used to denote the panel
'save_defaults'        => true,
// On load save the defaults to DB before user clicks save or not
'default_show'         => false,
// If true, shows the default value next to each field that is not the default value.
'default_mark'         => '',
// What to print by the field's title if the value shown is default. Suggested: *
'show_import_export'   => true,
// Shows the Import/Export panel when not used as a field.
// CAREFUL -> These options are for advanced use only
'transient_time'       => 60 * MINUTE_IN_SECONDS,
'output'               => true,
// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
'output_tag'           => true,
// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
// 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
'database'             => '',
// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
'use_cdn'              => true,
// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
//'compiler'             => true,
// HINTS
'hints'                => array(
'icon'          => 'el el-question-sign',
'icon_position' => 'right',
'icon_color'    => 'lightgray',
'icon_size'     => 'normal',
'tip_style'     => array(
'color'   => 'light',
'shadow'  => true,
'rounded' => false,
'style'   => '',
),
'tip_position'  => array(
'my' => 'top left',
'at' => 'bottom right',
),
'tip_effect'    => array(
'show' => array(
'effect'   => 'slide',
'duration' => '500',
'event'    => 'mouseover',
),
'hide' => array(
'effect'   => 'slide',
'duration' => '500',
'event'    => 'click mouseleave',
),
),
)
);
// redux import //
// You will need to determine the specific path to 
// wherever you choose to keep your extensions folder.
// For this example, we're assuming it's in the same 
// directory as our config file.
$ext_path = dirname( __FILE__ ) . '/extensions/';
Redux::setExtensions($opt_name, $ext_path);
Redux::setArgs( $opt_name, $args );
/*
* ---> END ARGUMENTS
*/
/*
*
* ---> START SECTIONS
*
*/
Redux::setSection( $opt_name, array(
'title' => esc_html__( 'General', 'avados' ),
'id' => 'general_area',
'icon_class' => 'el-icon-large',
'icon' => 'el-cogs',
'fields'     => array(	




array(
'id' => 'favicon',
'type' => 'media',
'url' => true,
'title' => __('Favicon', 'avados'),
'desc' => __('Upload a 16x16px jpg, png or gif image.', 'avados'),
'subtitle' => __('Add a favicon logo to your website. <br> The favicon is displayed on the browser tab of your website.', 'avados'),
'default' => '',
),
array(
'id' => 'apple-touch-icon',
'type' => 'media',
'url' => true,
'title' => __('Apple Touch Icon', 'avados'),
'desc' => __('Upload an image from 60x60px to 152x152px .png file.', 'avados'),
'subtitle' => __('You may want users to be able to add your web application or webpage link to the Home screen. This image correspond to the icon webpage on iOS.', 'avados'),
'default' => '',
),

array(
'id'=>'show_perload',
'type' => 'switch',
'title' => esc_html__( 'Show Perload', 'avados' ),
'subtitle'=> esc_html__( 'Enable or Disable Theme Loader.', 'avados' ),
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),

),
array(
'id'=>'totop_show',
'type' => 'switch',
'title' => esc_html__( 'Go to top button', 'avados' ),
'subtitle'=> esc_html__( 'Enable or Disable Go to top button.', 'avados' ),
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),
)
)
);

Redux::setSection( $opt_name, array(
'title' => esc_html__( 'Analytics Code', 'avados' ),
'id' => 'analytics_code',
'icon_class' => 'dashicons',
'icon' => 'dashicons-chart-line',
'fields'     => array(	
array(
'id' => 'analytics-custom-code',
'type' => 'ace_editor',
'title' => __('Custom Code', 'avados'),
'subtitle' => __('Paste your Custom Code. From Google Analytics or Yandex Metrika. It added in footer.', 'avados'),
'mode' => 'javascript',
'theme' => 'monokai',
'desc' => '',
'default'  => ''
),
)
)
);

Redux::setSection( $opt_name, array(
'title' => esc_html__( 'Custom CSS Code', 'avados' ),
'id' => 'custom_code',
'icon_class' => 'el-icon-large',
'icon' => 'el-magic',
'fields'     => array(	
array(
'id' => 'dynamic-custom-css',
'type' => 'ace_editor',
'title' => __('CSS Code', 'avados'),
'subtitle' => __('Paste your custom CSS code here.<br> Very helpful if you add a custom class in a shortcode in order to customize a specific element.', 'avados'),
'mode' => 'css',
'theme' => 'chrome',
'desc' => '',
'default'  => ''
),
array(
'id' => 'dynamic-custom-only-mobile-css',
'type' => 'ace_editor',
'title' => __('Mobile Cutom CSS Code', 'avados'),
'subtitle' => __('Paste your custom CSS code from device Mobile max screen 767px.', 'avados'),
'mode' => 'css',
'theme' => 'chrome',
'desc' => '',
'default'  => ''
),
array(
'id' => 'dynamic-custom-only-table-css',
'type' => 'ace_editor',
'title' => __('Table Cutom CSS Code', 'avados'),
'subtitle' => __('Paste your custom CSS code from device Table min screen width 768 and max screen 1024px.
', 'avados'),
'mode' => 'css',
'theme' => 'chrome',
'desc' => '',
'default'  => ''
),
array(
'id' => 'dynamic-custom-only-mobile-and-table-css',
'type' => 'ace_editor',
'title' => __('Mobile and Table Cutom CSS Code', 'avados'),
'subtitle' => __('Paste your custom CSS code from device Mobile and Table  max screen  1024px.', 'avados'),
'mode' => 'css',
'theme' => 'chrome',
'desc' => '',
'default'  => ''
),
array(
'id' => 'dynamic-custom-only-laptop',
'type' => 'ace_editor',
'title' => __('Only Laptop CSS Code', 'avados'),
'subtitle' => __('Paste your custom CSS code from device only Laptop and mo min screen  1025px and mo', 'avados'),
'mode' => 'css',
'theme' => 'chrome',
'desc' => '',
'default'  => ''
),

)
)
);


Redux::setSection( $opt_name, array(
'title' => esc_html__( 'Custom JS Code', 'avados' ),
'id' => 'custom_code_js',
'icon_class' => 'el-icon-large',
'icon' => 'el-magic',
'fields'     => array(	
array(
'id' => 'dynamic-custom-js',
'type' => 'ace_editor',
'title' => __('Custom JS Code', 'avados'),
'subtitle' => __('Paste your custom JS code here. This function use strict already wright and on("load", function).', 'avados'),
'mode' => 'javascript',
'theme' => 'monokai',
'desc' => '',
'default' => ''
),
)
)
);


// -> style area
Redux::setSection( $opt_name, array(
'title' => esc_html__( 'Styles', 'avados' ),
'id' => 'style_area',
'icon_class' => 'dashicons',
'icon' => 'dashicons-admin-customizer',
'fields'     => array(	
array(
'id'=>'wrapp_shadow',
'type' => 'switch',
'title' => esc_html__( 'FullWidth Boxed Style', 'avados' ),
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),





array(
'id'        => 'theme-color-schemes',
'type'      => 'color',
'title'     => __('Theme Color', 'avados'),
'default' => '#edbb5e',
'validate'  => 'color',

),



array(
'id'          => 'body-background',
'type'        => 'color',
'title'       => __('Body Background', 'avados'), 
'subtitle'    => __('Pick a color for the Background color.', 'avados'),
'transparent' => false,
'validate'    => 'color',
),


array(
'id'          => 'body-link-color',
'type'        => 'color',
'title'       => __('Body Link Color', 'avados'), 
'subtitle'    => __('Pick a color for the link.', 'avados'),
'default' => '#5aa1e3',
'transparent' => false,
'validate'    => 'color',

),
array(
'id'          => 'body-link-hover-color',
'type'        => 'color',
'title'       => __('Body Link on Hover Color', 'avados'), 
'subtitle'    => __('Pick a color for the link pn hover.', 'avados'),
'default' => '#3f87ca',
'transparent' => false,
'validate'    => 'color',

),
array(
'id'          => 'body-text-color',
'type'        => 'color',
'title'       => __('Body Color (tags: p, li)', 'avados'), 
'subtitle'    => __('Pick a color for the body text color.', 'avados'),
'default'     => '#333',
'transparent' => false,
'validate'    => 'color',

),




)
)
);
Redux::setSection( $opt_name, array(
'icon' => 'el el-bookmark dashicons-editor-paragraph',
'title' => __('Button and Input', 'avados'),


'fields' => array(

/* array(
'id'       => 'extra_btn_class',
'type'     => 'text',
'title'   => esc_html__( 'Custom class', 'avados' ),
'desc'    => esc_html__( 'If you want active this setting from you custom button. Example div class: mybtn.', 'avados' ),
'default'  => '',
),
*/


array(
'id'          => 'btn-font-style',
'type'        => 'typography', 
'title'       => __('Button Font', 'avados'),
'google'      => true, 
'text-align'  => true,
'line-height' => false,

'subsets'     => true,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),
'output'      => array('button,
.btn,
.form-submit .submit,
.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button,
.woocommerce-product-search input[type="submit"],
.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt,
.woocommerce button.button.alt, 
.woocommerce input.button.alt
 ')
),




array(
'id'     => 'section-button-start',
'type'   => 'section',
'title' => __('Color Button Background', 'avados'),
'indent' => true,

),
array(
'id'        => 'button-bg',
'type'      => 'color',
'title'     => __('Background color', 'avados'),
'default' => '',
'validate'  => 'color',
),
array(
'id' => 'btn-text-color',
'type' => 'color',
'title' => __('Text color', 'avados'),
'default'     => '',
'transparent' => false,
'validate'    => 'color',
),
array(
'id'        => 'button-bg-hover',
'type'      => 'color',
'title'     => __('Background color:hover', 'avados'),
'default' => '',
'validate'  => 'color',
),
array(
'id' => 'btn-text-color-hover',
'type' => 'color',
'title' => __('Text color:hover', 'avados'),
'default'     => '',
'transparent' => false,
'validate'    => 'color',
),         
array(
'id' => 'btn-border-color-hover',
'type' => 'color',
'title' => __('Border color:hover', 'avados'),
'default'     => '#d29e3c',
'transparent' => false,
'validate'    => 'color',


),         
array(
'id'     => 'section-button-end',
'type'   => 'section',
'indent' => false,
),
array(
'id'     => 'section-2-start',
'type'   => 'section',
'title' => __('Button and Input Padding', 'avados'),

'indent' => true,
),
array(
'id' => 'btn-top-bottom-padding',
'type' => 'slider',
'title' => __('Top and Bottom padding', 'avados'),
"default"   => 15,
"min"       => 0,
"step"      => 1,
"max"       => 40,
"display_value" => 'text'
),
array(
'id' => 'btn-left-right-padding',
'type' => 'slider',
'title' => __('Left and Right padding', 'avados'),
"default"   => 22,
"min"       => 0,
"step"      => 1,
"max"       => 70,
"display_value" => 'text'
),
array(
'id'     => 'section-2-end',
'type'   => 'section',
'indent' => false,
),

/*
array(
'id'     => 'section-3-start',
'type'   => 'section',
'title' => __('Border', 'avados'),
'indent' => true,


),
array(
'id' => 'btn-border-color-top',
'type' => 'color',
'title' => __('Border Top Color', 'avados'),
'default'     => '',
'transparent' => true,
'validate'    => 'color',
),
array(
'id' => 'btn-border-top',
'type' => 'slider',
'title' => __('Border Top Width', 'avados'),
"default"   => 0,
"min"       => 0,
"step"      => 1,
"max"       => 10,
"display_value" => 'text'
),
array(
'id' => 'btn-border-color-right',
'type' => 'color',
'title' => __('Border Right Color', 'avados'),
'default'     => '',
'transparent' => true,
'validate'    => 'color',
),
array(
'id' => 'btn-border-right',
'type' => 'slider',
'title' => __('Border Right Width', 'avados'),
"default"   => 0,
"min"       => 0,
"step"      => 1,
"max"       => 10,
"display_value" => 'text'
),
array(
'id' => 'btn-border-color',
'type' => 'color',
'title' => __('Border Bottom Color', 'avados'),
'default'     => '',
'transparent' => true,
'validate'    => 'color',
),
array(
'id' => 'btn-border-bottom',
'type' => 'slider',
'title' => __('Border Bottom Width', 'avados'),
"default"   => 0,
"min"       => 0,
"step"      => 1,
"max"       => 10,
"display_value" => 'text'
),
array(
'id' => 'btn-border-color-left',
'type' => 'color',
'title' => __('Border Left Color', 'avados'),
'default'     => '',
'transparent' => true,
'validate'    => 'color',
),
array(
'id' => 'btn-border-left',
'type' => 'slider',
'title' => __('Border Left Width', 'avados'),
"default"   => 0,
"min"       => 0,
"step"      => 1,
"max"       => 10,
"display_value" => 'text'
),
array(
'id'     => 'section-3-end',
'type'   => 'section',
'indent' => false,
),

*/

/***********************
border radius
*************************/
array(
'id'     => 'section-border-radius-start',
'type'   => 'section',
'title' => __('Border Radius', 'avados'),
'indent' => true,


),
array(
'id' => 'btn-border-top-right-radius',
'type' => 'slider',
'title' => __('Border Radius Top Right', 'avados'),
"default"   => 0,
"min"       => 0,
"step"      => 1,
"max"       => 200,
"display_value" => 'text'
),
array(
'id' => 'btn-border-bottom-right-radius',
'type' => 'slider',
'title' => __('Border Radius Bottom Right', 'avados'),
"default"   => 0,
"min"       => 0,
"step"      => 1,
"max"       => 200,
"display_value" => 'text'
),
array(
'id' => 'btn-border-bottom-left-radius',
'type' => 'slider',
'title' => __('Border Radius Botom Left', 'avados'),
"default"   => 0,
"min"       => 0,
"step"      => 1,
"max"       => 200,
"display_value" => 'text'
),
array(
'id' => 'btn-border-top-left-radius',
'type' => 'slider',
'title' => __('Border Radius Top Left', 'avados'),
"default"   => 0,
"min"       => 0,
"step"      => 1,
"max"       => 200,
"display_value" => 'text'
),
),

)
);	



Redux::setSection( $opt_name, array(
'icon' => 'dashicons dashicons-editor-paragraph',
'title' => __('Typography', 'avados'),
'heading' => __('Main Typography Settings', 'avados'),
'fields' => array(
/*body, p*/
array(
'id'          => 'body-font',
'type'        => 'typography', 
'title'       => __('Body', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => true,
'subsets'     => true,
'color'       => false,
'units'       =>'px',
'font-backup' => false,
'output'      => array('body,p'),
),
/*body, p*/
array(
'id'          => 'uptitle-font',
'type'        => 'typography', 
'title'       => __('UpTitle', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => false,
'subsets'     => true,
'color'       => false,
'units'       =>'px',
'font-backup' => false,


'output'      => array('.uptitle'),


),
/*title*/
array(
'id'          => 'title-font',
'type'        => 'typography', 
'title'       => __('Title', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => true,
'subsets'     => true,
'color'       => false,
'units'       =>'px',
'font-backup' => false,


'output'      => array('.title, .font-title'),


),
/*subtitle*/
array(
'id'          => 'subtitle-font',
'type'        => 'typography', 
'title'       => __('Subtitle', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => true,
'subsets'     => true,
'color'       => false,						
'units'       =>'px',
'font-backup' => false,


'output'      => array('.subtitle'),


),
)
)
);
Redux::setSection( $opt_name, array(
'icon' => 'el el-fork dashicons-editor-paragraph',
'title' => __('Breadcrumbs', 'avados'),
'fields' => array(
array(
'id'       => 'breadcrumbs_style',
'type' => 'select',
'title' => esc_html__( 'Breadcrumbs', 'avados' ),
'options' => array(
'breadcrumbs_style_header' => 'Breadcrumbs Top',
'breadcrumbs_style_footer' => 'Breadcrumbs Down'
),
'default' => 'breadcrumbs_style_footer'
),

)
)
);	

Redux::setSection( $opt_name, array(
'title' => esc_html__( 'Top Bar', 'avados' ),
'id' => 'top_bar_area',
'desc' => 'You can enable the Top Bar area, just above the Header.',
'icon_class' => 'el-icon-large',
'icon' => 'el-bullhorn',
'fields'     => array(
array(
'id'=>'disable_sub_header',
'type' => 'switch',
'title' => esc_html__( 'Top Bar', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),
array(
'id'=>'sub_header_full_width',
'required' => array( 'disable_sub_header', '=', '1' ),
'type' => 'switch',
'title' => esc_html__( 'Top Bar Full Width', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),


),




array(
'id'=>'disable_workin_time_block',
'type' => 'switch',
'required' => array( 'disable_sub_header', '=', '1' ),
'title' => esc_html__( 'Working Time Area', 'avados' ),
'desc'=> esc_html__( 'Enable or Disable the working time area.', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),
array(
'id'       => 'workin_time_text',
'type'     => 'text',
'required' => array( 'disable_workin_time_block', '=', '1' ),
'title'   => esc_html__( 'Working Time Text', 'avados' ),
'desc'    => esc_html__( 'Example: 09.00 - 21.00', 'avados' ),
'default'  => '09.00 - 21.00',
),
array(
'id'=>'disable_email_block',
'type' => 'switch',
'required' => array( 'disable_sub_header', '=', '1' ),
'title' => esc_html__( 'Email Area', 'avados' ),
'desc'=> esc_html__( 'Enable or Disable the email area.', 'avados' ),						
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),				
array(
'id'       => 'email_text',
'type'     => 'text',
'required' => array( 'disable_email_block', '=', '1' ),
'title'   => esc_html__( 'Email Text', 'avados' ),
'desc'    => esc_html__( 'Example: info@domaine.com', 'avados' ),
'default'  => 'info@domaine.com',
),
array(
'id'=>'disable_phone_block',
'type' => 'switch',
'required' => array( 'disable_sub_header', '=', '1' ),
'title' => esc_html__( 'Phone Area', 'avados' ),
'desc'=> esc_html__( 'Enable or Disable the phone area.', 'avados' ),						
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),				
array(
'id'       => 'phone_text',
'type'     => 'text',
'required' => array( 'disable_phone_block', '=', '1' ),
'title'   => esc_html__( 'Phone Text', 'avados' ),
'desc'    => esc_html__( 'Example: +0(098)924-77-12', 'avados' ),
'default'  => '+0(098)924-77-12',
),


array(
'id'     => 'section-top-bar-start',
'type'   => 'section',
'title' => __('Main color', 'avados'),
'indent' => true,

),


array(
'id'          => 'sub-header-font',
'type'        => 'typography', 
'title'       => __('Font Style', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => false,
'subsets'     => true,
'color'       => true,
'units'       =>'px',
'font-backup' => false,
'output'      => array('.sub_header, .sub_header p'),


),




array(
'id'        => 'top-bar-bg',
'type'      => 'color_rgba',
'required' => array( 'disable_sub_header', '=', '1' ),
'title'     => __('Top Bar Background', 'avados'),
'subtitle'  => __('Pick a background color for the top bar (default: #fff).', 'avados'),

'default'   => array(
'color'     => '',
'alpha'     => 0,
),
),
array(
'id'        => 'top-border-bg',
'type'      => 'color_rgba',
'required' => array( 'disable_sub_header', '=', '1' ),
'title'     => __('Top Border Background', 'avados'),                
        
'default'   => array(
'color'     => '',
'alpha'     => 0,
),
),

array(
'id'          => 'sub-header-link-color',
'type'        => 'color',
'required' => array( 'disable_sub_header', '=', '1' ),
'title'       => __('Sub Header Link Color', 'avados'), 
'subtitle'    => __('Pick a color for the Sub Header link.', 'avados'),
'default'     => '#31aff5',
'transparent' => false,
'validate'    => 'color',

),



array(
'id'     => 'section-top-bar-end',
'type'   => 'section',
'indent' => false,
),


)
)
);  

Redux::setSection( $opt_name, array(
'title'     => esc_html__( 'Header', 'avados' ),
'id'         => 'header_area',
'icon_class' => 'dashicons',
'icon' => 'dashicons-welcome-widgets-menus',
'fields'     => array(

array(
'id'=>'header_layout',
'type' => 'image_select',
'title' => esc_html__( 'Header Style', 'avados' ),
'options' => array(
'header_v1' => array('alt' => 'Header v1', 'title' =>'Inline', 'img' => $avados_admin_includes_path . '/header/header_v1.jpg'),
'header_v2' => array('alt' => 'Header v2', 'title' =>'Classic', 'img' => $avados_admin_includes_path . '/header/header_v2.jpg'),
'header_v3' => array('alt' => 'Header v3', 'title' =>'Absolute', 'img' => $avados_admin_includes_path . '/header/header_v3.jpg'),
'header_v4' => array('alt' => 'Header v4', 'title' =>'Inline + Menu', 'img' => $avados_admin_includes_path . '/header/header_v4.jpg'),
'header_v5' => array('alt' => 'Header v5', 'title' =>'Modern', 'img' => $avados_admin_includes_path . '/header/header_v5.jpg'),
'header_v6' => array('alt' => 'Header v6', 'title' =>'Hamburger Menu', 'img' => $avados_admin_includes_path . '/header/header_v6.jpg'),
//'header_v7' => array('alt' => 'Header v7', 'title' =>'Subheader + Absolute', 'img' => $avados_admin_includes_path . '/header/header_v7.jpg'),
//'header_v8' => array('alt' => 'Header v8', 'title' =>'Mini Dark', 'img' => $avados_admin_includes_path . '/header/header_v8.jpg'),
'header_v9' => array('alt' => 'Header v9', 'title' =>'Header Builder', 'img' => $avados_admin_includes_path . '/header/header_v9.jpg'),
),
'default' => 'header_v1'
),



	
array(
'id' => 'header-logo',
'type' => 'media',
'title' => __('Header Logo', 'avados'),
'width' => '200',
'height' => '130',
'compiler' => 'true',
'desc' => __('Upload your header logo.', 'avados'),
'subtitle' => __('This logo is used in the top header navigation.<br> If in page header settings, transparent header option is activated, this logo will be used as the dark logo.', 'avados'),
'default' => array('url'=>get_template_directory_uri() . '/img/logo.png'),

),
array(
'id' => 'header-logo-light',
'type' => 'media',
'title' => __('Alternative Logo', 'avados'),
'required'    => array( 'header_layout', '=', array( 'header_v3', 'header_v5', 'header_v7' ) ),
'compiler' => 'true',
'desc' => __('Upload your alternative header logo.', 'avados'),
'subtitle' => __('This option need if you use absolute header or mobile version, etc. This alternative logo will be used in some cases.', 'avados'),
'default' => array('url'=>get_template_directory_uri() . '/img/logo.png'),
),
array(
'id' => 'header-logo-height',
'type' => 'slider',
'title' => __('Header Logo Width', 'avados'),
'subtitle' => __('Set the logo max-width of the header in px.', 'avados'),
"default"   => 150,
"min"       => 0,
"step"      => 1,
"max"       => 400,
"display_value" => 'text'
),
array(
'id'=>'smart_fixed_header',
'type' => 'switch',
'title' => esc_html__( 'Smart Fixed header', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),

array(
'id'=>'fullwidth_header',
'type' => 'switch',
'title' => esc_html__( 'FullWidth Header', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),

array(
'title'       => __('Header Backgroubnd Color (alternative)', 'avados'), 
'subtitle'    => __('This option need if you use absolute header or mobile version, etc. This alternative Header Backgroubnd Color will be used in some cases.', 'avados'),
'required'    => array( 'header_layout', '=', array( 'header_v3', 'header_v5', 'header_v7' ) ),


'id'          => 'header-bg-color-alternative',
'type'        => 'background',

'background-repeat' => 'false',
'background-size' => 'false',
'background-attachment' => 'false',
'background-position' => 'false',
'background-image' => 'false',
'transparent' => 'false',
	
'output'         => array('body:not(.home) .header, .scroll_work'),



),


array(
'id'=>'logo_desc_area',
'type' => 'switch',
'title' => esc_html__( 'Logo Description', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),
array(
'id'    => 'logo-desc',
'type'  => 'text',
'required' => array( 'logo_desc_area', '=', '1' ),
'title' => esc_html__( 'Logo description', 'avados' ),
),
/*subtitle*/
array(
'id'          => 'logo-desc-font',
'type'        => 'typography', 
'required' => array( 'logo_desc_area', '=', '1' ),
'title'       => __('Logo Description Font', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => false,
'subsets'     => true,
'color'       => false,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false,
'font-size'      => '17px',
'output'      => array('.logo-desc')
),
'default'     => array(
'font-family' => 'Open Sans',
'font-size'   => '17px',
'font-style'  => '400',
'google'      => true,
),
'output'      => array('.logo-desc')
),
array(
'id'       => 'menu_style',
'type' => 'select',
'title' => esc_html__( 'Menu Style', 'avados' ),
'options' => array(
'menu_classic' => 'Menu Classic',
'menu_onepage' => 'Menu One Page'
),
'default' => 'menu_classic'
),
array(
'id'    => 'extra_one_page',
'type'  => 'text',
'required' => array( 'menu_style', '=', 'menu_onepage' ),
'title' => esc_html__( 'Add extra class if you want open some link in new page', 'avados' ),
'default'  => '.menu .extra'
),
array(
'id'=>'show_site_title_desc',
'type' => 'switch',
'title' => esc_html__( 'Show Site Title and Description', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),


),
array(
'id'=>'search_in_menu',
'type' => 'switch',
'title' => esc_html__( 'Search in Menu', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),	
array(
    'id'             => 'header-spacing',
    'type'           => 'spacing',
    'output'         => array('.header .container'),
    'mode'           => 'padding',
    'units'          => array('px','em'),
    'units_extended' => 'false',
    'title'          => __('Header Padding', 'avados'),
    'subtitle'       => __('Allow your users to choose the spacing or margin they want.', 'avados'),
    'desc'           => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'avados'),
    'default'            => array(
        'padding-top'     => '0px', 
        'padding-right'   => '0px', 
        'padding-bottom'  => '0px', 
        'padding-left'    => '0px',
        'units'          => 'px', 
    )
),
array(

'title'       => __('Header Backgroubnd Color', 'avados'), 
'subtitle'    => __('Pick a color for the Header Backgroubnd.', 'avados'),


'id'          => 'header-bg-color',
'type'        => 'background',

'background-repeat' => 'false',
'background-size' => 'false',
'background-attachment' => 'false',
'background-position' => 'false',
'background-image' => 'false',
'transparent' => 'false',
	
'output'         => array('.header'),



),






/*****************************************
*****************************************
               
                 Call To Action START

*****************************************   
*****************************************/



array(
'id'     => 'section-cta-start',
'type'   => 'section',
'title' => __('Call To Action on Header', 'avados'),
    'subtitle'       => __('Leave empty if you not want some field', 'avados'),
'indent' => true,
),	


array(
'id'       => 'header_btn',
'type'     => 'text',
'required'    => array( 'header_layout', '=', array( 'header_v2', 'header_v4', 'header_v5', 'header_v6', 'header_v10' ) ),
'title'   => esc_html__( 'Button text', 'avados' ),
),	




array(
'id'       => 'header-cta-shortcode',
'type'     => 'textarea',
'title'   => esc_html__( 'Add custom text or shortcode', 'avados' ),
'desc'    => esc_html__( 'Example: fror cintct form 7 to make popup call to action.', 'avados' ),
'default'  => '',
),




array(
'id'    => 'header-layout-block',
'type'  => 'select',
'required' => array( 'header_layout', '=', 'header_v9' ),
'title' => esc_html__( 'Header Layout Block', 'avados' ),
'data'  => 'posts',
'args'  => array( 'post_type' => array( 'header_layout_type' ), 'posts_per_page' => - 1 ),
),


array(
'id'=>'disable_ribbon',
'type' => 'switch',
'required' => array( 'header_layout', '=', 'header_v8' ),
'title' => esc_html__( 'Ribbon', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),


array(
'id'       => 'header_phone',
'type'     => 'text',
'required'    => array( 'header_layout', '=', array( 'header_v2', 'header_v4', 'header_v5', 'header_v6', 'header_v10' ) ),
'title'   => esc_html__( 'Phone', 'avados' ),
'desc'    => esc_html__( 'Example: +1 (303) 215-7509', 'avados' ),
'default'  => '+1 (303) 215-7509',
),

array(
'id'          => 'header-phone-style',
'type'        => 'typography', 
'title'       => __('Phone Style', 'avados'),
'google'      => true, 
'text-align'  => true,
'line-height' => false,

'subsets'     => true,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),
'output'      => array('.header-contact a.phone ')
),
array(
'id'          => 'header-phone-style-alternative',
'required'    => array( 'header_layout', '=', array( 'header_v3', 'header_v5', 'header_v7' ) ),

'type'        => 'typography', 
'title'       => __('Phone Style Alternative', 'avados'),
'google'      => true, 
'text-align'  => true,
'line-height' => false,

'subsets'     => true,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),

'output'      => array('.home .header-contact a.phone')
),

	   
array(
'id'       => 'header_adress',
'type'     => 'text',
'required'    => array( 'header_layout', '=', array( 'header_v2', 'header_v4', 'header_v5', 'header_v6', 'header_v10' ) ),
'title'   => esc_html__( 'Adress', 'avados' ),
'desc'    => esc_html__( 'Example: Hampden ave., Englewood 33, Co 80110', 'avados' ),
'default'  => 'Hampden ave., Englewood 33, Co 80110',
),
array(
'id'          => 'header-adress-style',
'type'        => 'typography', 
'title'       => __('Adress Style', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => false,

'subsets'     => true,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),

'output'      => array('.header .header-contact .adress')
),
array(
'id'          => 'header-adress-style-alternative',
'required'    => array( 'header_layout', '=', array( 'header_v3', 'header_v5', 'header_v7' ) ),

'type'        => 'typography', 
'title'       => __('Adress Style Alternative', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => false,

'subsets'     => true,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),

'output'      => array('.home .header-absolute .adress')
),	


array(
'id'     => 'section-cta-end',
'type'   => 'section',
'indent' => false,
),



),	              
)
);		


Redux::setSection( $opt_name, array(
'title' => esc_html__( 'Menu', 'avados' ),
'id' => 'menu',
'icon_class' => 'el-icon-large',
'icon' => 'el el-pencil',
'fields'     => array(

/*****************************************
*****************************************
               
                 MENU START

*****************************************   
*****************************************/



array(
'id'     => 'section-main-menu-start',
'type'   => 'section',
'title' => __('Main menu', 'avados'),
'indent' => true,
),	
	
array(
'id'          => 'menu-a-a',
'type'        => 'typography', 
'title'       => __('Alternative Menu Font', 'avados'),
'subtitle' => __('This option need if you use absolute header or mobile version, etc. This alternative Font will be used in some cases.', 'avados'),
'required'    => array( 'header_layout', '=', array( 'header_v3', 'header_v5', 'header_v7' ) ),

'google'      => true, 
'text-align'  => false,
'line-height' => false,

'subsets'     => true,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),
'output'      => array('body:not(.home) .header .menu a, .header.scroll_work ul.menu a')
),
				
array(
'id'          => 'menu-a',
'type'        => 'typography', 
'title'       => __('Menu Font', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => false,

'subsets'     => true,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),

'output'      => array('.header ul.menu a')
),
				



array(
    'id'             => 'menu-spacing',
    'type'           => 'spacing',
    'output'         => array('.header ul.menu > li > a'),
    'mode'           => 'padding',
    'units'          => array('px','em'),
    'units_extended' => 'false',
    'title'          => __('Menu Link Padding', 'avados'),
    'subtitle'       => __('Allow your users to choose the spacing or margin they want.', 'avados'),
    'desc'           => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'avados'),
    'default'            => array(
        'padding-top'     => '', 
        'padding-right'   => '', 
        'padding-bottom'  => '', 
        'padding-left'    => '',
        'units'          => 'px', 
    )
),



array(
'id'     => 'section-main-menu-end',
'type'   => 'section',
'indent' => false,
),


/*****************************************
*****************************************
               
                 SUBMENU START

*****************************************   
*****************************************/

array(
'id'     => 'section-submenu-start',
'type'   => 'section',
'title' => __('Submenu', 'avados'),
'indent' => true,
),	


array(
    'id'             => 'sub-menu-spacing',
    'type'           => 'spacing',
    'output'         => array('.header ul.menu > li > ul > li a'),
    'mode'           => 'padding',
    'units'          => array('px','em'),
    'units_extended' => 'false',
    'title'          => __('Sub Menu Link Padding', 'avados'),
    'subtitle'       => __('Allow your users to choose the spacing or margin they want.', 'avados'),
    'desc'           => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'avados'),
    'default'            => array(
        'padding-top'     => '10px', 
        'padding-right'   => '10px', 
        'padding-bottom'  => '10px', 
        'padding-left'    => '10px',
        'units'          => 'px', 
    )
),

array(
'id'          => 'submenu-link-color',
'type'        => 'color',
'output'         => array('.header .prettyMenu:not(.pm_mobile) ul ul li a'),
'title'       => __('Submenu Link Color', 'avados'), 
'subtitle'    => __('Pick a color for the link.', 'avados'),
'default'     => '#222',
'transparent' => false,
'validate'    => 'color',
),


array(
'id'          => 'submenu-bg-color',
'type'        => 'background',

'background-repeat' => 'false',
'background-size' => 'false',
'background-attachment' => 'false',
'background-position' => 'false',
'background-image' => 'false',
'transparent' => 'false',
	
'output'         => array('body:not(.pm_mobile) .header ul.menu li ul'),
'title'       => __('Submenu Backgroubnd Color', 'avados'), 
'subtitle'    => __('Pick a color for the Backgroubnd.', 'avados'),
 'default'  => array(
        'background-color' => '#efefef',  
    )

),

array( 
    'id'       => 'submenu-top-arrow',
    'type'     => 'border',
    'title'    => __('Submenu Top Arrow', 'avados'),
    'output'   => array('body:not(.pm_mobile)  ul.menu li ul:before'),
    'default'  => array(
        
        'border-style'  => 'solid', 
        'border-top'    => '9px', 
        'border-right'  => '9px', 
        'border-bottom' => '9px', 
        'border-left'   => '9px',
         'default'  => array(
        'background-color' => '#f8f8f8',  
    )


    )
),


array(
'id'     => 'section-submenu-end',
'type'   => 'section',
'indent' => false,
),



/*****************************************
*****************************************
               
                 MOBILE MENU START

*****************************************   
*****************************************/

array(
'id'     => 'section-mobile-menu-start',
'type'   => 'section',
'title' => __('Mobile menu style', 'avados'),
'indent' => true,
),	


				
	array(
'id'          => 'mobile-menu-a',
'type'        => 'typography', 
'title'       => __('Mobile Menu Font Color', 'avados'),
'google'      => true, 
'text-align'  => false,
'line-height' => false,

'subsets'     => true,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),
 'default'  => array(
        'color' => '#000',
        
    ),
'output'      => array('.pm_mobile ul.menu a')
),


array(
'id'          => 'mobile-menu-bg-color',
'type'        => 'background',

'background-repeat' => 'false',
'background-size' => 'false',
'background-attachment' => 'false',
'background-position' => 'false',
'background-image' => 'false',
'transparent' => 'false',

'output'         => array('.prettyMenu.pm_mobile ul.main'),
'title'       => __('Mobile menu Backgroubnd Color', 'avados'), 
'subtitle'    => __('Pick a color for the Backgroubnd.', 'avados'),
 'default'  => array(
        'background-color' => '#fff',
        
    )

),



array(
'id'          => 'submenu-a-a-bg-color',
'type'        => 'background',

'background-repeat' => 'false',
'background-size' => 'false',
'background-attachment' => 'false',
'background-position' => 'false',
'background-image' => 'false',
'transparent' => 'false',
	
'output'         => array('.pm_mobile .header ul.menu li ul'),
'title'       => __('Submenu Backgroubnd Color', 'avados'), 
'subtitle'    => __('Pick a color for the Backgroubnd.', 'avados'),
 'default'  => array(
        'background-color' => '#eee',
        
    )

),




array( 
    'id'       => 'mobile_menu_header_separate',
    'type'     => 'border',   

    'right'     => 'false',
	'bottom'     => 'false',
    'left'     => 'false',
    'title'    => __('Mobile Menu Top Separate', 'avados'),
    'output'   => array('.pm_mobile ul.menu'),
    'default'  => array(        
    'border-style'  => 'solid', 
    'border-top' => '1px',
    'border-color' => '#eeeeee',
    )
),

array( 
    'id'       => 'mobile_menu_bottom_separate',
    'type'     => 'border',   
    
     'top'     => 'false',
    'right'     => 'false',
	
    'left'     => 'false',
    'title'    => __('Mobile Menu Bottom Separate', 'avados'),
    'output'   => array('.pm_mobile .header ul.menu li'),
    'default'  => array(        
    'border-style'  => 'solid', 
    'border-bottom' => '1px', 
    'border-color' => '#efefef', 
    )
),



array(

'title'       => __('Mobile menu hamburger Main Color', 'avados'), 
'subtitle'    => __('Pick a color for the color.', 'avados'),
'id'          => 'mobile-hamburger-color',
'type'        => 'background',
'background-repeat' => 'false',
'background-size' => 'false',
'background-attachment' => 'false',
'background-position' => 'false',
'background-image' => 'false',
'transparent' => 'false',
'output'         => array('
.home .header-absolute .hamburger-inner, 
.home .header-absolute .hamburger-inner::before, 
.home .header-absolute .hamburger-inner::after
'),
 'default'  => array(
 'color' => '#222', 
  )

),


array(

'title'       => __('Mobile menu hamburger Alternative Color', 'avados'), 
'subtitle' => __('This option need if you use absolute header or mobile version, etc. This alternative Font will be used in some cases.', 'avados'),
'id'          => 'mobile-hamburger-alt-color',
'type'        => 'background',

'preview'        => 'false',

'background-repeat' => 'false',
'background-size' => 'false',
'background-attachment' => 'false',
'background-position' => 'false',
'background-image' => 'false',
'transparent' => 'false',
'output'         => array('
.hamburger-inner, 
.hamburger-inner::before, 
.hamburger-inner::after,
.header-absolute.scroll_work .hamburger-inner,
.header-absolute.scroll_work .hamburger-inner::before,
.header-absolute.scroll_work .hamburger-inner:after

'),


 'default'  => array(
 'color' => '#fff', 
  )


),


array(
'id'     => 'section-mobile-menu-end',
'type'   => 'section',
'indent' => false,
),



)
)
); 


		

Redux::setSection( $opt_name, array(
'title'     => esc_html__( 'Blog', 'avados' ),
'id'         => 'blog_area',
'icon_class' => 'el-icon-large',
'icon' => 'el-list-alt',    
'fields'     => array(
array(
'id'=>'blog_layout',
'type' => 'image_select',
'title' => esc_html__( 'Blog Style', 'avados' ),
'options' => array(
'blog_layout_v1' => array('alt' => 'blog_layout v1', 'title' =>'Standart', 'img' => $avados_admin_includes_path . '/blog/blog_layout_v1.jpg'),
'blog_layout_v2' => array('alt' => 'blog_layout v2', 'title' =>'Masonry', 'img' => $avados_admin_includes_path . '/blog/blog_layout_v2.jpg')
),
'default' => 'blog_layout_v1'
),

),	              
)
);	
Redux::setSection( $opt_name, array(
'title'     => esc_html__( 'Single Post', 'avados' ),
'id'         => 'single_blog_post_area',
'icon_class' => 'el-icon-large',
'icon' => 'el-paper-clip',    
'fields'     => array(
array(
'id'=>'single_post_sidebar',
'type' => 'image_select',			
'title' => esc_html__( 'Sidebar Position', 'avados' ),
'options' => array(
'single_post_left_sidebar' => array(
'alt' => 'Left Sidebar', 
'title' =>'Left Sidebar', 
'img' => $avados_admin_includes_path . '/blog/sub-header-classic.jpg'),
'single_post_right_sidebar' => array(
'alt' => 'Right Sidebar', 
'title' =>'Right Sidebar', 
'img' => $avados_admin_includes_path . '/blog/sub-header-classic.jpg'),
'single_post_without_sidebar' => array(
'alt' => 'Without Sidebar', 
'title' =>'Without Sidebar', 
'img' => $avados_admin_includes_path . '/blog/sub-header-classic.jpg'),
),
'default' => 'single_post_right_sidebar'
),
array(
'required' => array( 'single_post_sidebar', '=', 'single_post_without_sidebar' ),					
'id' => 'container_margin_top',
'type' => 'slider',
'title' => __('Container Margin Top in %', 'avados'),
"default"   => 0,
"min"       => -20,
"step"      => 1,
"max"       => 20,
"display_value" => 'text'
),
array(
'id'=>'single_post_sub_header_layout',
'type' => 'image_select',			
'title' => esc_html__( 'Header Style', 'avados' ),
'options' => array(
'single_post_sub_header_v1' => array(
'alt' => 'Single Post Header v1', 
'title' =>'Default', 
'img' => $avados_admin_includes_path . '/blog/sub-header-classic.jpg'),
'single_post_sub_header_v2' => array(
'alt' => 'Single Post Header v2', 
'title' =>'Background Thumbnail', 
'img' => $avados_admin_includes_path . '/blog/sub-header-modern.jpg'),
),
'default' => 'single_post_sub_header_v1'
),
array(
'id'=>'single_post_sub_header_v1_image',
'type' => 'switch',
'required' => array( 'single_post_sub_header_layout', '=', 'single_post_sub_header_v1' ),					
'title' => esc_html__( 'Thumbnails before content', 'avados' ),
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),
array(
'id'=>'single_the_post_navigation',
'type' => 'switch',
'title' => esc_html__( 'Post Navigation', 'avados' ),
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),
array(
'id'=>'meta',
'type' => 'switch',
'title' => esc_html__( 'Meta: post date, category, author etc.', 'avados' ),
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),

array(
'id'=>'related_post_area',
'type' => 'switch',
'title' => esc_html__( 'Related Post', 'avados' ),
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),
array(
'required' => array( 'related_post_area', '=', '1' ),
'id'=>'single_post_related_post_style',
'type' => 'image_select',			
'title' => esc_html__( 'Related Post Style', 'avados' ),
'options' => array(
'single_post_related_post_v1' => array(
'alt' => 'Single Post Header v1', 
'title' =>'Style #1', 
'img' => $avados_admin_includes_path . '/blog/related_v1.jpg'
),
'single_post_related_post_v2' => array(
'alt' => 'Single Post Header v2', 
'title' =>'Style #2', 
'img' => $avados_admin_includes_path . '/blog/related_v2.jpg'
),
),
'default' => 'single_post_related_post_v1'
),
),	              
)
);	

Redux::setSection( $opt_name, array(
'title' => esc_html__( 'Woocommerce', 'avados' ),
'id' => 'woocommerce_area',
'icon_class' => 'el-icon-large',
'icon' => 'el-shopping-cart',
'fields'     => array(
array(
'id'=>'shopping_cart_in_menu',
'type' => 'switch',
'title' => esc_html__( 'Shopping Cart in Menu', 'avados' ),
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),				
)
)
); 

Redux::setSection( $opt_name, array(
'title' => esc_html__( 'Footer', 'avados' ),
'id' => 'footer_area',
'icon_class' => 'el-icon-large',
'icon' => 'el-arrow-down',
'fields'     => array(


array(
'id'          => 'footer-bg-color',
'type'        => 'background',

'background-repeat' => 'false',
'background-size' => 'false',
'background-attachment' => 'false',
'background-position' => 'false',
'background-image' => 'false',
'transparent' => 'false',
	
'output'         => array('.footer'),
'title'       => __('Footer Backgroubnd Color', 'avados'), 
'subtitle'    => __('Pick a color for the Backgroubnd for Footer.', 'avados'),
 'default'  => array(
        'background-color' => '#fff',
        
    )

),

array(
'id'          => 'footer-title',
'type'        => 'typography', 
'title'       => __('Footer Title', 'avados'),
'google'      => false, 
'font-style'  => false,
'font-size'  => false,
'font-weight'  => false,
'font-family'  => false,
'text-align'  => false,
'line-height' => false,
'subsets'     => false,
'color'       => true,	
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),
'default'     => array(
		'color'       => '#222', 
),
'output'      => array('.footer h1, .footer h2, .footer h3, .footer h4, .footer h5, .footer h6')
),


array(
'id'          => 'footer-p',
'type'        => 'typography', 
'title'       => __('Footer Font', 'avados'),
'google'      => false, 
'font-style'  => false,
'font-size'  => false,
'font-weight'  => false,
'font-family'  => false,
'text-align'  => false,
'line-height' => false,
'subsets'     => false,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),
'default'     => array(
		'color'       => '#222', 
),
'output'      => array('.footer p, .breadcrumbs')
),

array(
'id'          => 'footer-link',
'type'        => 'typography', 
'title'       => __('Footer link', 'avados'),
'google'      => false, 
'font-style'  => false,
'font-size'  => false,
'font-weight'  => false,
'font-family'  => false,
'text-align'  => false,
'line-height' => false,
'subsets'     => false,
'color'       => true,						
'units'       =>'px',
'font-backup' => false,
'preview'     => array(
'always_display' => false
),
'default'     => array(
		'color'       => '#222', 
),
'output'      => array('.footer a')
),

array(
'id'=>'disable_footer_bottom',
'type' => 'switch',
'title' => esc_html__( 'Copywriting Area', 'avados' ),
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),
array(
'id'=>'disable_footer_copyright',
'type' => 'switch',
'required' => array( 'disable_footer_bottom', '=', '1' ),
'title' => esc_html__( 'Copyright Area', 'avados' ),
'subtitle'=> esc_html__( 'Enable or Disable Copyright Area.', 'avados' ),						
"default" => 1,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),				
array(
'id'       => 'footer_bottom_text',
'type'     => 'text',
'required' => array( 'disable_footer_bottom', '=', '1' ),
'title'   => esc_html__( 'Copyright Text', 'avados' ),
'desc'    => esc_html__( 'Example: 2009 - 2017. All rights reserved.', 'avados' ),
'default'  => '2009 - 2017. All rights reserved.',
),
array(
'id'=>'disable_footer_bottom_social',
'type' => 'switch',
'required' => array( 'disable_footer_bottom', '=', '1' ),
'title' => esc_html__( 'Social Area', 'avados' ),
'subtitle'=> esc_html__( 'Enable or Disable Social Area.', 'avados' ),						
"default" => 0,
'on' => esc_html__( 'On', 'avados' ),
'off' => esc_html__( 'Off', 'avados' ),
),				
array(
'id'       => 'footer_bottom_social_facebook',
'type'     => 'text',
'required' => array( 'disable_footer_bottom', '=', '1' ),
'title'   => esc_html__( 'Facebook', 'avados' ),
'desc'    => esc_html__( 'Example: http://facebook.com/profile/', 'avados' ),
'default'  => 'http://facebook.com/profile/',
),
array(
'id'       => 'footer_bottom_social_twitter',
'type'     => 'text',
'required' => array( 'disable_footer_bottom', '=', '1' ),
'title'   => esc_html__( 'Twitter', 'avados' ),
'desc'    => esc_html__( 'Example: http://twitter.com/profile/', 'avados' ),
'default'  => 'http://twitter.com/profile/',
),
array(
'id'       => 'footer_bottom_social_google',
'type'     => 'text',
'required' => array( 'disable_footer_bottom', '=', '1' ),
'title'   => esc_html__( 'Google +', 'avados' ),
'desc'    => esc_html__( 'Example: http://plus.google.com/profile/', 'avados' ),
'default'  => 'http://plus.google.com/profile/',
),
)
)
); 


					
					
/*
* <--- END SECTIONS
*/
