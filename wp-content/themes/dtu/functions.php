<?
add_action('wp_enqueue_scripts', 'dtu_load_js_and_css');

function dtu_load_js_and_css() {
		
	// load css for child theme	
	wp_register_style( 'mainstyle', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );  
    wp_enqueue_style( 'mainstyle' );  	
		

	// load js for child theme	
	wp_deregister_script('jquery'); // loading jquery from google CDN
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array(), null, false);
	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery'), '1', true);
	wp_register_script('mainscript', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1', true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('mainscript');

	/* if (is_front_page()) {
	 wp_enqueue_script('home-page-main-flex-slider');
	 } */

}
?>