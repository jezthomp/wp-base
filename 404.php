<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Base
 */

get_header(); ?>

<main <?php hybrid_attr( 'content' ); ?>>

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-base' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-base' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( wp_base_categorized_blog() ) :
					?>

					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

<?php
get_footer();
