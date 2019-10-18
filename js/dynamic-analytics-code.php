<?php 

function analytics_code() {
	
global $avadosFramework;

echo $avadosFramework['analytics-custom-code'];

}
add_action('wp_footer', 'analytics_code', 100);

?>