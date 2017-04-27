<?php
/**
 * @package Panel
 */
?>
<article id="jetpack-comic-<?php the_id(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'panel-comic-strip' ); ?></a>
	<div class="comic-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'panel' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>