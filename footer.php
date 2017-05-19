<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Base
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		
		<div  class="site-main__inner">
		
		<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
		
		<p class="footer_details"><?php bloginfo('name'); ?>  &copy; <?php echo date("Y"); ?></p>
		
		<?php get_template_part( 'template-parts/social/company', 'social' ); ?>
		
		</div> <!--site-footer__inner-->
		
		
	</footer><!-- #footer -->
</div><!-- #page -->




<?php wp_footer(); ?>


<?php get_template_part( 'template-parts/social/icon', 'import' ); ?>
</body>
</html>
