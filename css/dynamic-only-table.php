<?php 

function dynamic_avados_only_table_custom_css() {
	
global $avadosFramework;

echo '<style type="text/css">
@media only screen and (min-width: 768px) and (max-width: 1024px) {';
if(!empty($avadosFramework['dynamic-custom-only-table-css'])) {
	echo $avadosFramework['dynamic-custom-only-table-css'];
}
echo '}</style>';


}
add_action('wp_head', 'dynamic_avados_only_table_custom_css');

?>