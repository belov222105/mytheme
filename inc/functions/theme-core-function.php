<?php

 
/*aviable from v1.2*/
/*importa 1 click */
function avados_1_click_demo_import() {
  return array(  
    array(
      'import_file_name'           => 'Demo Import',
      'categories'                 => array( 'New category', 'Old category' ),
      'import_file_url'            =>  get_theme_file_uri() . '/inc/demo-import/1/avados.xml',
      'import_widget_file_url'     =>  get_theme_file_uri() . '/inc/demo-import/1/widgets.wie',
      'import_customizer_file_url' =>  get_theme_file_uri() . '/inc/demo-import/1/export.dat',
      'import_redux'               => array(
        array(
          'file_url'    => get_theme_file_uri() . '/inc/demo-import/1/redux.json',
          'option_name' => 'avadosFramework',
        ),
      ),
      'import_preview_image_url'   => get_theme_file_uri() . '/inc/demo-import/1/home_1_preview.jpg',
      'preview_url'                => 'https://max-webs.com/themforest/wordpress/avados/',
    ),
    
      array(
      'import_file_name'           => 'Soon',
      'categories'                 => array( 'New category', 'Old category' ),
      'import_file_url'            =>  get_theme_file_uri() . '',
      'import_widget_file_url'     =>  get_theme_file_uri() . '',
      'import_customizer_file_url' =>  get_theme_file_uri() . '',
      'import_redux'               => array(
        array(
          'file_url'    => get_theme_file_uri() . '',
          'option_name' => 'avadosFramework',
        ),
      ),
      'import_preview_image_url'   => get_theme_file_uri() . '/inc/demo-import/1/soon.jpg',
      'preview_url'                => '',
    ),
    
  );
}
add_filter( 'pt-ocdi/import_files', 'avados_1_click_demo_import' );






/*Custom Post Type For Header Builder*/
include(get_parent_theme_file_path('/inc/functions/header-post-type.php'));

/*Visual Compouser Header Builder*/
if(!isset($avadosFramework['header_v9'])) {
  include(get_parent_theme_file_path('/inc/functions/vc-header-builder.php'));
}






?>