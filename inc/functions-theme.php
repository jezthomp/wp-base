<?php
/**
 * Control Front End Scripts
 *
 * 
 */
 
# Register custom image sizes.
add_action( 'init', 'wp_base_register_image_sizes', 5 );

# Register custom menus.
add_action( 'init', 'wp_base_register_menus', 5 );

# Remove Annoying emoji styles.
add_action( 'init', 'pw_remove_emojicons' );	


/**
 * Registers nav menu locations.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function wp_base_register_menus() {
	register_nav_menu( 'primary',    esc_html_x( 'Primary',    'nav menu location', 'wp-base' ) );

}

		/**
	 * Registers image sizes.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	function wp_base_register_image_sizes() {

		//	add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
		//	add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
		//	add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode
	}


/**
 * Add Page Name to Custom Nav
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function wpa_category_nav_class( $classes, $item ){
    if( 'page' == $item->object ){
        $page = get_post( $item->object_id );
        $classes[] = 'page-' . $page->post_name;
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'wpa_category_nav_class', 10, 2 );


/**
 * Add Current Menu Class to Archive Parent Button
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function custom_active_item_classes($classes = array(), $menu_item = false){            
        global $post;
        $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type)) ? 'current-menu-item active' : '';
        return $classes;
    }
add_filter( 'nav_menu_css_class', 'custom_active_item_classes', 10, 2 );
	
/**
 * Remove Emoj icons
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function pw_remove_emojicons() 
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
add_action( 'init', 'pw_remove_emojicons' );

/**
 * Remove Roles from Elements
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_filter( 'hybrid_attr_menu', 'my_attr_menu' );
add_filter( 'hybrid_attr_content', 'my_attr_content' );
function my_attr_menu( $attr ) {

	if ( isset( $attr['role'] ) )
		unset( $attr['role'] );

	return $attr;
}
function my_attr_content( $attr ) {

	if ( isset( $attr['role'] ) )
		unset( $attr['role'] );

	return $attr;
}	