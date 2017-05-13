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
		



		<!-- ****** LATEST BLOG ****** -->
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






		<!-- ****** SIDEBAR LINKS ****** -->

		<div id="footer-sidebar" class="white-bg">
			<div class="footer-sidebar-wrap">
				<div class="footer-sidebar-first">
					<!-- patreon -->
					<a href="<?php the_field('patreon_url', 93); ?>" class="footer-large-margin">
						<img class="sidebar-square" src="<?php the_field('patreon_unbroken', 93)?>" />
						<?php if(get_field('patreon_broken', 93)) : ?>
							<img class="sidebar-square broken" src="<?php the_field('patreon_broken', 93)?>" />
						<?php endif ?>
					</a>

					<!-- support -->
					<a href="<?php the_field('support_url', 93);?>">
						<img class="sidebar-rectangle" src="<?php the_field('support_unbroken', 93);?>"/>
						<?php if(get_field('support_broken', 93)) : ?>
							<img class="sidebar-rectangle broken" src="<?php the_field('support_broken', 93);?>"/>
						<?php endif ?>
					</a>
				</div>

				<!-- divider -->
				<img class="sidebar-divider" src="<?php the_field('divider_image', 93);?>" />
				<div class="footer-sidebar-second">

					<!-- connect -->
					<a href="<?php the_field('connect_url', 93);?>" class="footer-large-margin">
						<img class="sidebar-rectangle" src="<?php the_field('connect_unbroken', 93);?>" />
						<?php if (get_field('connect_broken', 93)) : ?>
							<img class="sidebar-rectangle broken" src="<?php the_field('connect_broken', 93);?>" />
						<?php endif ?>
					</a>
					
					<!-- rss -->
					<a href="<?php the_field('rss_url', 93);?>">
						<img class="sidebar-square" src="<?php the_field('rss_unbroken', 93);?>" />
						<?php if (get_field('rss_broken', 93)) : ?>
							<img class="sidebar-square broken" src="<?php the_field('rss_broken', 93);?>" />
						<?php endif ?>
					</a>
				</div>

				<!-- divider -->
				<img class="sidebar-divider" src="<?php the_field('divider_image', 93);?>" />
					<div class="sidebar-divider-third">
					
					<!-- tumblr -->
					<a href="<?php the_field('tumblr_url', 93);?>" class="footer-small-margin">
						<img class="sidebar-square" src="<?php the_field('tumblr_unbroken', 93);?>" />
						<?php if(get_field('tumblr_broken', 93)) : ?>
							<img class="sidebar-square broken" src="<?php the_field('tumblr_broken', 93);?>" />
						<?php endif; ?>
					</a>
					
					<!-- twitter -->
					<a href="<?php the_field('twitter_url', 93);?>" class="footer-small-margin">
						<img class="sidebar-square" src="<?php the_field('twitter_unbroken', 93);?>" />
						<?php if(get_field('twitter_broken', 93)) : ?>
							<img class="sidebar-square broken" src="<?php the_field('twitter_broken', 93);?>" />
						<?php endif; ?>
					</a>
					
					<!-- instagram -->
					<a href="<?php the_field('instagram_url', 93);?>">
						<img class="sidebar-square" src="<?php the_field('instagram_unbroken', 93);?>" />
						<?php if(get_field('instagram_broken', 93)) : ?>
							<img class="sidebar-square broken" src="<?php the_field('instagram_broken', 93);?>" />
						<?php endif; ?>
					</a>
				
				</div>
				<!-- divider -->
				<img class="sidebar-divider" src="<?php the_field('divider_image', 93);?>" />
			</div>
		</div>







		<!-- ****** COMMENTS ****** -->

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
								if ( comments_open() || '0' != get_comments_number() )
									comments_template();
							?>
						<?php endwhile; ?>
			<?php endif; ?>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>
				<?php endwhile; ?>
			<?php endif; ?> 
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>