<?php
/**
 *
 * @package    WP Base
 * @subpackage Functions
 * @version    1.0.0
 * @author     Jez Thompson <mailme@jezthompson.co.uk>
 * @copyright  Copyright (c) 2015
 * @link       http://themehybrid.com/themes/wp-base
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
	
	
// Get the template directory and make sure it has a trailing slash.
$wp_base_dir = trailingslashit( get_template_directory() );

// Load the Hybrid Core framework and theme files.
require_once( $wp_base_dir . 'lib/hybrid.php'        );
require_once( $wp_base_dir . 'inc/functions-scripts.php'   );
require_once( $wp_base_dir . 'inc/functions-theme.php'   );
require_once( $wp_base_dir . 'inc/functions-admin.php'             );
require_once( $wp_base_dir . 'inc/functions-acf.php'             );


//Custom Post Types
require_once( $wp_base_dir . 'inc/functions-custom-post-types/extended-cpts.php'             );
require_once( $wp_base_dir . 'inc/functions-custom-post-types/extended-taxos.php'             );
require_once( $wp_base_dir . 'inc/functions-custom-post-types/custom-post-one.php'             );


// Launch the Hybrid Core framework.
new Hybrid();

// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'wp_base_theme_setup', 5 );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function wp_base_theme_setup() {

	// Theme layouts.
//	add_theme_support( 'theme-layouts', array( 'default' => is_rtl() ? '2c-r' :'2c-l', 'post_meta'   => true   ) );

	// Enable custom template hierarchy.
	add_theme_support( 'hybrid-core-template-hierarchy' );

	// The best thumbnail/image script ever.
	add_theme_support( 'get-the-image' );

	// Breadcrumbs. Yay!
	add_theme_support( 'breadcrumb-trail' );

	// Nicer [gallery] shortcode implementation.
	add_theme_support( 'cleaner-gallery' );

	// Automatically add feed links to <head>.
	add_theme_support( 'automatic-feed-links' );
	
	
	// Add Support for Header Videos.
	add_theme_support( 'custom-header', array(
	 'video' => true,
	) );
	
	// Post formats.
//	add_theme_support(
//		'post-formats',
//		array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' )
//	);

	// Handle content width for embeds and images.
	hybrid_set_content_width( 1280 );
}
