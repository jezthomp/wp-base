<?php
/**
 * Displays site social media
 *
 * @package WordPress
 * @subpackage wp-base
 * @since 1.0
 * @version 1.0
 */
 
// $facebook = get_field('facebook_url', 'option');
// $twitter = get_field('twitter_username', 'option');
// $youtube = get_field('youtube_url', 'option');
// $instagram = get_field('instagram_username', 'option');
// $vimeo = get_field('vimeo_url', 'option');
// $linkedin = get_field('linkedin_url', 'option');

?>

 
<ul class="icons-row__list icons--block">
		
		
			
		
				<li>
					<a href="https://twitter.com/<?php echo $twitter; ?>" title="Twitter" target="_blank">
						<svg class="svg-icon svg-icon-md"><use class="twitter-footer" xlink:href="#icon-twitter" /></svg>
					</a>
				</li>
			
			<?php if ($twitter) : ?><?php endif; ?>
			
				<li>
					<a href="<?php echo $facebook; ?>" title="FaceBook" target="_blank">
						<svg class="svg-icon svg-icon-md"><use class="facebook-footer" xlink:href="#icon-facebook" /></svg>
					</a>
				</li>
			
				
				
			<?php if ($facebook) : ?><?php endif; ?>
			
			
			
					<li><a href="<?php echo $youtube; ?>" title="Facebook" target="_blank"><span>YouTube</span></a></li>
				
			<?php if ($youtube) : ?><?php endif; ?>
			
				<li>
					<a href="https://instagram.com/<?php echo $instagram; ?>" title="Instagram" target="_blank">
						<svg class="svg-icon svg-icon-md"><use class="instagram-footer" xlink:href="#icon-instagram" /></svg>
					</a>
				</li>
			
					
			<?php if ($instagram) : ?><?php endif; ?>
			
			
			
					<li><a href="<?php echo $vimeo; ?>" title="Facebook" target="_blank"><span>Vimeo</span></a></li>
				
			<?php if ($vimeo) : ?><?php endif; ?>
			
			
				<li>
					<a href="<?php echo $linkedin; ?>" title="Linkedin" target="_blank">
						<svg class="svg-icon svg-icon-md"><use class="linkedin-footer" xlink:href="#icon-linkedin" /></svg>
					</a>
				</li>
			
					<li><a href="<?php echo $linkedin; ?>" title="Facebook" target="_blank"><span>Linkedin</span></a></li>
				
			<?php if ($linkedin) : ?><?php endif; ?>
				
	
		
		
		
	
			
</ul>