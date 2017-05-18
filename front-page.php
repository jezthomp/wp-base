<?php
/**
 * @package    wp-base
 * @subpackage front page
 */

get_header(); 

?>

<main <?php hybrid_attr( 'content' ); ?>>

	
	<div class="site-main__inner">
	<?php $video = get_header_video_url()
				
				echo($video)
				 ?>
				
	
	<?php if ( have_posts() ) : ?>
	 
	 	<?php while ( have_posts() ) : the_post(); ?>
				
				
				
				<?php the_title(); ?>
				
		
		<?php endwhile; ?>
		 	
	
	<?php endif;  wp_reset_query(); ?>
	
	
		
</main>
	

<?php get_footer();  ?>