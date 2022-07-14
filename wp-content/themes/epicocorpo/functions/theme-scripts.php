<?php
if ( ! is_admin() ) { add_action( 'wp_print_scripts', 'vergo_add_javascript' ); }

if ( ! function_exists( 'vergo_add_javascript' ) ) {
	function vergo_add_javascript() {

		// Load Common scripts
//		wp_enqueue_script('jquery');


		wp_enqueue_script('modernizr', get_template_directory_uri() .'/build/modernizr.js','','', true);
		
		wp_enqueue_script('app.min', get_template_directory_uri() .'/build/app.min.js','','', true);









	}
}
?>
