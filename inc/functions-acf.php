<?php

	
	/**
	 * Enable ACF Site Options
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	
		
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'position' => 64,
			'icon_url' => 'dashicons-welcome-widgets-menus'
			
		));
		
		acf_add_options_page(array(
		        'page_title'    => 'Social Media',
		        'menu_title'    => 'Social Media',
		        'menu_slug'     => 'social-media-settings',
		        'capability'    => 'edit_posts',
		        'parent_slug'	=> 'theme-general-settings',
		        'redirect'              => false
		));
		
		acf_add_options_page(array(
		        'page_title'    => 'Contact Details',
		        'menu_title'    => 'Contact Info',
		        'menu_slug'     => 'contact-details-settings',
		        'capability'    => 'edit_posts',
		        'parent_slug'	=> 'theme-general-settings',
		        'redirect'              => false
		));
		
//		acf_add_options_sub_page(array(
//			'page_title' 	=> 'Theme Header Settings',
//			'menu_title'	=> 'Header',
//			'parent_slug'	=> 'theme-general-settings',
//		));
//		
//		acf_add_options_sub_page(array(
//			'page_title' 	=> 'Theme Footer Settings',
//			'menu_title'	=> 'Footer',
//			'parent_slug'	=> 'theme-general-settings',
//		));
		
	}	
	
	
	
	

/**
 * Prevent ACF from being turned off
 *
 * @since  1.0.0
 * @access public
 * @return void
 */

add_filter( 'plugin_action_links', 'slt_lock_plugins', 10, 4 );
function slt_lock_plugins( $actions, $plugin_file, $plugin_data, $context ) {
    // Remove edit link for all
    if ( array_key_exists( 'edit', $actions ) )
        unset( $actions['edit'] );
    // Remove deactivate link for crucial plugins
    if ( array_key_exists( 'deactivate', $actions ) && in_array( $plugin_file, array(
        'advanced-custom-fields-pro/acf.php'
    )))
        unset( $actions['deactivate'] );
    return $actions;
}

/**
 * Register ACF Google Map
 * http://tinyurl.com/zarbkcy
 *
 * @since  1.0.0
 * @access public
 * @return void
 */

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'XXXXX');
}

add_action('acf/init', 'my_acf_init');

	