<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Base
 */

get_header(); ?>

	
<main <?php hybrid_attr( 'content' ); ?>>



			
			<div class="site-inner-wrap">
					
				
								
								<?php if ( have_posts() ) : ?>
								 
								 	<?php while ( have_posts() ) : the_post(); ?>
								
								
																
										<h1 class="page-title__main"><?php single_post_title(); ?></h1>
										
																		
									<?php endwhile; ?>
										 	
									
								<?php endif;  wp_reset_query(); ?>
							
					
				
				
			</div> <!--site-inner-wrap-->
	
	
		

</main>


<?php get_footer(); ?>
