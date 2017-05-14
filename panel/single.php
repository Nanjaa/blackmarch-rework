<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Panel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		

		<?php while ( have_posts() ) : the_post(); ?>

		<?php if ( 'jetpack-comic' == get_post_type() ) : ?>

			<div id="content" class="site-content" role="main">

				<div class="entry-comic">

					<?php panel_content_nav( 'nav-below' ); ?>

					<?php get_template_part( 'content', 'comic' ); ?>

					<?php panel_content_nav( 'comics-nav-below' ); ?>

				</div>

		<?php else : ?>

			<div id="content" class="non-comic-page site-content" role="main">

			<?php get_template_part( 'content', 'single' ); ?>

			<?php panel_content_nav( 'nav-below' ); ?>

		<?php endif; ?>



		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>