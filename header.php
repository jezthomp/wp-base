<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head <?php hybrid_attr( 'head' ); ?>>

<?php wp_head(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	
	
		<?php get_template_part( 'template-parts/header/header', 'branding' ); ?>
	
		
		
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
		
				<button class="main-btn mobile-button" title="mobile navigation"></button>
		
		<?php endif; ?>
		
		
		<?php hybrid_get_menu( 'primary' ); ?>
		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		
		<?php hybrid_get_menu( 'breadcrumbs' );  ?>