<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage wp-base
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<img class="lazyload" data-srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/main-logo.svg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/main-logo.svg" alt="<?php bloginfo( 'name' ); ?> Logo" />
	</a>
	
</div><!-- .site-branding -->
