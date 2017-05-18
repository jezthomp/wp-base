<?php


/* Register custom styles. */
add_action( 'admin_enqueue_scripts', 'admin_custom_login', 0 );

/* Remove Admin Bar */
show_admin_bar(false);

/* Remove WP Version Generator */
remove_action('wp_head', 'wp_generator');



/**
 * Custom Login Logo
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function admin_custom_login() {
	$suffix = hybrid_get_min_suffix();

	wp_register_style( 'login-logo', trailingslashit( get_template_directory_uri() ) . "css/login{$suffix}.css" );

}

/**
 * Remove Default WP Sizes.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
// Remove Default WordPress Image Sizes
function wp_base_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'wp_base_remove_default_image_sizes');	



/**
 * Move Yoast SEO Metabox to the bottom
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_filter( 'wpseo_metabox_prio', 'wp_base_yoast_seo_metabox' );
function wp_base_yoast_seo_metabox() {
	
	if ( is_plugin_active( 'wordpress-seo/wp-seo-main.php' ) ) {
	  return 'low';
	}
	
	
}

/**
 * Block WP enum scans
 *http://tinyurl.com/hthshdq
 * @since  1.0.0
 * @access public
 * @return void
 */
if (!is_admin()) {
	// default URL format
	if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
	add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
function shapeSpace_check_enum($redirect, $request) {
	// permalink URL format
	if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
	else return $redirect;
}
