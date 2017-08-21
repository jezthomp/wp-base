<?php
/**
 * Helper functions and filters for scripts, styles, and fonts.
 *
 * @package    SimonTownsley
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2016, Justin Tadlock
 * @link       http://themehybrid.com/themes/SimonTownsley
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

# Load scripts, styles, and fonts.
add_action( 'wp_enqueue_scripts',    'simon_townsley_enqueue',      5 );
add_action( 'enqueue_embed_scripts', 'simon_townsley_enqueue_embed'   );

/**
 * Returns the font args for the theme's Google Fonts call.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function simon_townsley_get_locale_font_args() {

	$fonts  = simon_townsley_get_locale_fonts();
	$locale = strtolower( get_locale() );
	$args   = isset( $fonts[ $locale ] ) ? $fonts[ $locale ] : $fonts['default'];

	return apply_filters( "simon_townsley_{$locale}_font_args", $args );
}

/**
 * Returns an array of locale-specific font arguments
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function simon_townsley_get_locale_fonts() {

	$fonts = array(
		'default' => array( 'family' => simon_townsley_get_font_families(), 'subset' => simon_townsley_get_font_subsets() )	);

	return apply_filters( 'simon_townsley_get_locale_fonts', $fonts );
}

/**
 * Returns an array of the font families to load from Google Fonts.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function simon_townsley_get_font_families() {

	return array(
		'roboto'      => 'Roboto:400,400i,700,700i',
		'roboto-slab' => 'Roboto+Slab:400,700'
	);
}

/**
 * Returns an array of the font subsets to include.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simon_townsley_get_font_subsets() {

	return array( 'latin', 'latin-ext' );
}

/**
 * Loads scripts, styles, and fonts on the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simon_townsley_enqueue() {

	// Deregisters the core media player styles (rolling our own).
	wp_deregister_style( 'mediaelement' );
	wp_deregister_style( 'wp-mediaelement' );

	// Add custom mediaelement inline script.
//	wp_add_inline_script( 'mediaelement', simon_townsley_get_mediaelement_inline_script() );

	// Load scripts.
//	wp_enqueue_script( 'SimonTownsley' );

	// Load fonts.
	hybrid_enqueue_font( 'simon_townsley' );

	
	//	html5shiv.min.js
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-3.3.1.min.js', array('jquery'), '3.3.1', true );
	
	//https://github.com/aFarkas/lazysizes
	wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/js/vendor/lazysizes.min.js', '4.0.0', null,  true );
	
	
	wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/js/min/site-wide-min.js', array('jquery'), null, true );
	
	
	wp_enqueue_style( 'global-style', get_stylesheet_directory_uri() . '/css/global.css' );
	
	
}


/**
 * Returns a stylesheet file.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name   Name of the stylesheet file (without the extension).
 * @param  string  $path   The folder to look for the stylesheet in.
 * @param  string  $where  template|stylesheet
 * @return string
 */
//function simon_townsley_get_style_uri( $name, $path = 'css', $where = 'template' ) {
//
//	$suffix = hybrid_get_min_suffix();
//	$path   = 'stylesheet' === $where ? '%2$s/' . $path : '%1$s/' . $path;
//
//	$dir = trailingslashit( hybrid_sprintf_theme_dir( $path ) );
//	$uri = trailingslashit( hybrid_sprintf_theme_uri( $path ) );
//
//	return $suffix && file_exists( "{$dir}{$name}{$suffix}.css" ) ? "{$uri}{$name}{$suffix}.css" : "{$uri}{$name}.css";
//}


/**
 * Returns a script file.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name   Name of the script file (without the extension).
 * @param  string  $path   The folder to look for the script in.
 * @param  string  $where  template|stylesheet
 * @return string
 */
//function simon_townsley_get_script_uri( $name, $path = 'js', $where = 'template' ) {
//
//	$suffix = hybrid_get_min_suffix();
//	$path   = 'stylesheet' === $where ? '%2$s/' . $path : '%1$s/' . $path;
//
//	$dir = trailingslashit( hybrid_sprintf_theme_dir( $path ) );
//	$uri = trailingslashit( hybrid_sprintf_theme_uri( $path ) );
//
//	return $suffix && file_exists( "{$dir}{$name}{$suffix}.js" ) ? "{$uri}{$name}{$suffix}.js" : "{$uri}{$name}.js";
//}