<?php
/**
 * Sitewide Hooks
 *
 * @package    SimonTownsley
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2016, Justin Tadlock
 * @link       http://themehybrid.com/themes/SimonTownsley
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */


/* Sub Menu Control */
add_action('wpsites_header', 'simontownsley_menu_appearence_control' );


/* Add Font Icons After Footer */
add_action( 'wp_footer', 'footer_font_icons', 100 );


/**
 * Sub Menu Navigations Control
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simontownsley_menu_control() {
	do_action('wpsites_header');
}





/**
 * Add Sub Menu Navigations
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simontownsley_menu_appearence_control() {
    
    //About Pages Sub Menu
    if( is_page( 2 ) || is_tax( 'area', 'archive' ) ) {
            hybrid_get_menu( 'about' );
    }
    //Project Pages Sub Menu
    elseif ( is_post_type_archive('project') || is_singular( 'project' )   ) {
	        hybrid_get_menu( 'projects' );
    }
    else {
//            hybrid_get_menu( 'about' );
    }
   
  
    
};




/**
 * Add Font Icons Import
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function footer_font_icons() {
    get_template_part( 'template-parts/icon', 'import' );
}
