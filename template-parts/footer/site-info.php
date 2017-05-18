<?php
/**
 * Displays footer site info
 *
* @package WordPress
* @subpackage wp-base
* @since 1.0
* @version 1.0
 */

?>
<div class="site-info">
	 <p class="footer_details">  &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p> 
	 <p>Designed By <?php echo esc_url( __( 'https://wordpress.org/', 'wp-base' ) ); ?></p>
</div><!-- .site-info -->
