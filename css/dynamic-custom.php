<?php 

function dynamic_avados_custom_css() {
	
global $avadosFramework;

echo '<style type="text/css">';
if(!empty($avadosFramework['dynamic-custom-css'])) {
	echo $avadosFramework['dynamic-custom-css'];
}
echo '</style>';


}
add_action('wp_head', 'dynamic_avados_custom_css');

?>