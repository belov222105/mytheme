<?php 

function avados_dynamic_custom_js() {
	
global $avadosFramework;
echo '<script>
	 (function($) {
	 "use strict";';
echo $avadosFramework['dynamic-custom-js'];
echo '})(jQuery);
	  </script>';

}
add_action('wp_footer', 'avados_dynamic_custom_js', 100);

?>