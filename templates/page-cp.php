<?php
/**
 * Template Name: Full Width
 *
 *
* @package    iggy-jimenez
* @subpackage Template
 */

get_header(); 

?>


<main <?php hybrid_attr( 'content' ); ?>>
	
	
	<div class="site-main__inner">
	

		
		
						<?php 
						
							$args = array(
							
								'post_type' => 'works',
								'orderby' => 'menu_order',
								'order'     => 'ASC',
								'showposts' => -1
								
							);
							
							
							$home_work_posts = new WP_Query( $args );
							
							if ( $home_work_posts->have_posts() ) : 
							
							
						?>
						<div class="grid home-works_grid">
						
						<?php while ( $home_work_posts->have_posts() ) : $home_work_posts->the_post() ?>	
						
						
								<div class="grid__col grid__col--1-of-2">
						
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>	
									</a>
								
							
								</div>	<!-- grid__col-->
																				
															
						<?php endwhile ?>
							
							</div>		<!-- home-works_grid-->	
							
						<?php else : ?>
						
						
							<h2>Ooops, no posts here!</h2>
							
							
						<?php endif; wp_reset_query(); ?>	
						
						
						
		</div> <!--site-main__inner-->	
	
</main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>