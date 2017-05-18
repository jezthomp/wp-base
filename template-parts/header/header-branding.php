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
	<?php
	if ( is_front_page() && is_home() ) : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php else : ?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	<?php endif; ?>
	
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-logo.png" width="300" height="168" alt="Site Logo">
	
</div><!-- .site-branding -->
