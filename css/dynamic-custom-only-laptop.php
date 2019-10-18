<?php 

function dynamic_avados_only_laptop_custom_css() {
	
global $avadosFramework;

echo '<style type="text/css">
@media only screen and (min-width: 1025px) {';
if(!empty($avadosFramework['dynamic-custom-only-laptop'])) {
	echo $avadosFramework['dynamic-custom-only-laptop'];
}
echo '}</style>';


}
add_action('wp_head', 'dynamic_avados_only_laptop_custom_css');

?>