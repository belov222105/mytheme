<?php 

function dynamic_avados_only_mobile_custom_css() {
	
global $avadosFramework;

echo '<style type="text/css">
@media only screen and (max-width: 767px) {';
if(!empty($avadosFramework['dynamic-custom-only-mobile-css'])) {
	echo $avadosFramework['dynamic-custom-only-mobile-css'];
}
echo '}</style>';


}
add_action('wp_head', 'dynamic_avados_only_mobile_custom_css');

?>