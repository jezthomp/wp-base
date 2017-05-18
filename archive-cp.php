<?php
/**
 * @package    wp-base
 * @subpackage cp type archive 
 */

get_header(); 

?>

<main <?php hybrid_attr( 'content' ); ?>>

		
		<div class="site-main__inner">
				
				
				<?php if ( have_posts() ) : ?>
				 	
				 	<div class="site-grid_three sargy-lecture_blocks equal_height grid">
				 	
				 	
				 	<?php while ( have_posts() ) : the_post(); ?>
					
					
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>	
							</a>							
							
							
				
					<?php endwhile; ?>
				
				</div> <!--sargy-publications_blocks-->
					 	
				<?php endif;  wp_reset_query(); ?>
					
		</div>
		
		

</main>


<?php get_footer(); ?>
	