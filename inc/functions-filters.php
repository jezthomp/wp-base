<?php
/**
 * Filters the theme adds.
 *
 * @package    SimonTownsley
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2016, Justin Tadlock
 * @link       http://themehybrid.com/themes/SimonTownsley
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */


/* Remove WP Version Generator */
remove_action('wp_head', 'wp_generator');


#Remove Unwanted JS
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


#Remove Query String from Static Resources
add_action('init','simon_townsley_unused_scripts');


# Remove Emoj icons
add_action( 'init', 'simon_townsley_remove_emojicons' );	


/* Custom Login Logo */
add_action( 'login_enqueue_scripts', 'admin_custom_login', 0 );


/* Remove Default WP Sizes */
add_filter('intermediate_image_sizes_advanced', 'simon_townsley_remove_default_image_sizes');	


/* Move Yoast SEO Metabox to the bottom*/
add_filter( 'wpseo_metabox_prio', 'simon_townsley_yoast_seo_metabox' );



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


/**
 * Remove Unwanted JS
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simon_townsley_unused_scripts(){
	wp_deregister_script( 'comment-reply' );
 }



/**
 * Remove Emoj icons
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simon_townsley_remove_emojicons() 
{
    // Remove from comment feed and RSS
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // Remove from emails
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

    // Remove from head tag
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

    // Remove from print related styling
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    // Remove from admin area
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
}



/**
 * Custom Login Logo
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function admin_custom_login() {

	wp_enqueue_style( 'login-logo', trailingslashit(get_template_directory_uri()) . "/css/login-min.css" );

}




/**
 * Remove Default WP Sizes.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simon_townsley_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}






/**
 * Move Yoast SEO Metabox to the bottom
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simon_townsley_yoast_seo_metabox() {
	
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
