<?php
/**
 * @package Panel
 */

get_header();

	//Get the latest comic
	$comic_args = array(
		'posts_per_page' => 1,
		'post_type'      => 'jetpack-comic',
	);
	$comic = new WP_Query( $comic_args );
?>

	<?php if ( $comic->have_posts() ) : ?>

		<div class="entry-comic">

			<?php /* Start the comic Loop */ ?>
			<?php while ( $comic->have_posts() ) : $comic->the_post(); ?>

				<?php get_template_part( 'content', 'comic' ); ?>

				<?php panel_content_nav( 'comic-nav-below' ); ?>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>