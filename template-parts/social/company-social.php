<?php
/**
 * Displays site social media
 *
 * @package WordPress
 * @subpackage wp-base
 * @since 1.0
 * @version 1.0
 */
 
 $facebook = get_field('facebook_url', 'option');
 $twitter = get_field('twitter_username', 'option');
 $youtube = get_field('youtube_url', 'option');
 $instagram = get_field('instagram_username', 'option');
 $vimeo = get_field('vimeo_url', 'option');
 $linkedin = get_field('linkedin_url', 'option');

?>

 
<ul class="social right-side">
		
		
			<?php if ($twitter) : ?>
		
				<li><a href="https://twitter.com/<?php echo $twitter; ?>" title="Twitter" target="_blank"><span>Twitter</span></a></li>
			
			<?php endif; ?>
			
			<?php if ($facebook) : ?>
			
					<li><a href="https://<?php echo $facebook; ?>" title="Facebook" target="_blank"><span>Facebook</span></a></li>
				
			<?php endif; ?>
			
			<?php if ($youtube) : ?>
			
					<li><a href="<?php echo $youtube; ?>" title="Facebook" target="_blank"><span>YouTube</span></a></li>
				
			<?php endif; ?>
			
			<?php if ($instagram) : ?>
			
					<li><a href="https://instagram.com/<?php echo $instagram; ?>" title="Facebook" target="_blank"><span>Instagram</span></a></li>
				
			<?php endif; ?>
			
			<?php if ($vimeo) : ?>
			
					<li><a href="<?php echo $vimeo; ?>" title="Facebook" target="_blank"><span>Vimeo</span></a></li>
				
			<?php endif; ?>
			
			
			<?php if ($linkedin) : ?>
			
					<li><a href="<?php echo $linkedin; ?>" title="Facebook" target="_blank"><span>Linkedin</span></a></li>
				
			<?php endif; ?>
				
	
		
		
		
	
			
</ul>