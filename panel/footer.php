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
			<?php add_action( 'pre_get_posts', 'your_function_name' ); ?>
			blog
		</div>
		<div id="footer-sidebar" class="white-bg">
			<!-- patreon -->
			<a href="#"><div class="sidebar-square" id="sidebar-patreon"></div></a>
			<!-- support -->
			<a href="#"><div class="sidebar-rectangle" id="sidebar-support"></div></a>
			<!-- divider -->
			<div class="sidebar-divider"></div>
			<!-- connect -->
			<a href="#"><div class="sidebar-rectangle" id="sidebar-connect"></div></a>
			<!-- rss -->
			<a href="#"><div class="sidebar-square" id="sidebar-rss"></div></a>
			<!-- divider -->
			<div class="sidebar-divider"></div>
			<!-- tumblr -->
			<a href="#"><div class="sidebar-square" id="sidebar-tumblr"></div></a>
			<!-- twitter -->
			<a href="#"><div class="sidebar-square" id="sidebar-twitter"></div></a>
			<!-- instagram -->
			<a href="#"><div class="sidebar-square" id="sidebar-instagram"></div></a>
			<!-- divider -->
			<div class="sidebar-divider"></div>
		</div>
		<div id="footer-comments" class="white-bg">
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>