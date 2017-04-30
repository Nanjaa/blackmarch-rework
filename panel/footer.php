<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Panel
 */

$facebook = get_theme_mod( 'jetpack-facebook' );
$twitter = get_theme_mod( 'jetpack-twitter' );
$tumblr = get_theme_mod( 'jetpack-tumblr' );
?>

	</div><!-- #main -->
	<footer>
		<?php get_sidebar( 'tertiary' ); ?>
		
		<div id="latest-blog" class="white-bg">

			<div id="latest-blog-bar"></div>
			<div id="latest-blog-wrap">	
				<h2>Latest News</h2>
				<?php 
					$front_posts = new WP_Query( array(
						'posts_per_page' => 1,
					) );
				?>
				<?php while ( $front_posts->have_posts() ) : $front_posts->the_post(); ?>
					
					<?php get_template_part( 'content', 'featured' ); ?>

				<?php endwhile; ?>
			</div>
		</div>
		<div id="footer-sidebar" class="white-bg">
			<div class="footer-sidebar-wrap">
				<div class="footer-sidebar-first">
					<!-- patreon -->
					<a href="#" class="footer-large-margin"><div class="sidebar-square" id="sidebar-patreon"></div></a>
					<!-- support -->
					<a href="#"><div class="sidebar-rectangle" id="sidebar-support"></div></a>
				</div>
				<!-- divider -->
				<div class="sidebar-divider"></div>
				<div class="footer-sidebar-second">
					<!-- connect -->
					<a href="#" class="footer-large-margin"><div class="sidebar-rectangle" id="sidebar-connect"></div></a>
					<!-- rss -->
					<a href="#"><div class="sidebar-square" id="sidebar-rss"></div></a>
				</div>
				<!-- divider -->
				<div class="sidebar-divider"></div>
					<div class="sidebar-divider-third">
					<!-- tumblr -->
					<a href="#" class="footer-small-margin"><div class="sidebar-square" id="sidebar-tumblr"></div></a>
					<!-- twitter -->
					<a href="#" class="footer-small-margin"><div class="sidebar-square" id="sidebar-twitter"></div></a>
					<!-- instagram -->
					<a href="#"><div class="sidebar-square" id="sidebar-instagram"></div></a>
				</div>
				<!-- divider -->
				<div class="sidebar-divider"></div>
			</div>
		</div>
		<div id="footer-comments" class="white-bg">

		<?php if (is_front_page()) : ?>
			<?php
				//Get the latest comic
				$comic_args = array(
					'posts_per_page' => 1,
					'post_type'      => 'jetpack-comic',
				);
				$comic = new WP_Query( $comic_args );
			?>

			<?php if ( $comic->have_posts() ) : ?>
					<?php while ( $comic->have_posts() ) : $comic->the_post(); ?>
							<?php
								// If comments are open or we have at least one comment, load up the comment template
								print(comments_open());
								print(get_comments_number());
								if ( comments_open() || '0' != get_comments_number() )
									comments_template();
									print('this is a test');
							?>
						<?php endwhile; ?>
			<?php endif; ?>

			<?php wp_reset_postdata(); ?>
		<?php endif; ?> 



			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
			<?php endwhile; ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>