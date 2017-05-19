<?php
/**
 * Control Scripts & Styles
 *
 * 
 */


# Add custom scripts and styles
add_action( 'wp_enqueue_scripts', 'wp_base_enqueue_scripts', 5 );
add_action( 'wp_enqueue_scripts', 'wp_base_enqueue_styles',  5 );

# Remove Unwanted Scripts
add_action('init','wp_base_unused_scripts');

/**
 * Remove Query String from Static Resources
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );



/**
 * Load scripts for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function wp_base_enqueue_scripts() {

	    
	//	html5shiv.min.js
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-3.3.1.min.js', array('jquery'), '3.3.1', true );
	
	//https://github.com/aFarkas/lazysizes
	wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/js/vendor/lazysizes.min.js', '4.0.0', null,  true );
	
	
	//Contact Page
		if ( is_page(34)  ) {
	
			add_action('wp_enqueue_scripts', 'google');
			function google() {
			  wp_enqueue_script('google-maps', '//maps.googleapis.com/maps/api/js', array(), '3', FALSE);
			}
		
			
						
		}
	
	
	wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/js/min/site-wide-min.js', array('jquery'), null, true );
	
}


/**
 * Load stylesheets for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function wp_base_enqueue_styles() {
	
	
	// Load Main Style
	wp_enqueue_style( 'global-style', get_stylesheet_directory_uri() . '/css/global.css' );
	
}



/**
 * Remove Unwanted JS
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function wp_base_unused_scripts(){
	wp_deregister_script( 'comment-reply' );
 }
add_action('init','wp_base_unused_scripts');