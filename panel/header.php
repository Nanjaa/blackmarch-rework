<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Panel
 */
global $post;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<?php $header_image = get_header_image(); ?>

	<header role="banner">
		<!-- Hidden h1 and h2 for SEO purposes -->
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

		<?php if ( is_singular() && '' != get_the_post_thumbnail() && 'jetpack-comic' != get_post_type() ) : //Featured header images on posts and pages ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php elseif ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			</a>
		<?php endif; ?>
		

		<nav role="navigation">

			<!-- about -->
			<a href="<?php the_field('about_url', 93); ?>"><img src="<?php the_field('nav_about', 93); ?>"/></a>
			<!-- cast -->
			<a href="<?php the_field('cast_url', 93); ?>"><img src="<?php the_field('nav_cast', 93); ?>"/></a>
			<!-- support -->
			<a href="<?php the_field('support_url', 93); ?>"><img src="<?php the_field('nav_support', 93) ?>"/></a>
			<!-- links -->
			<a href="<?php the_field('links_url', 93); ?>"><img src="<?php the_field('nav_links', 93); ?>"/></a>
			<!-- store -->
			<a href="<?php the_field('store_url', 93); ?>"><img src="<?php the_field('nav_store', 93); ?>"/></a>
			<!-- extras -->
			<a href="<?php the_field('extras_url', 93); ?>"><img src="<?php the_field('nav_extras', 93); ?>"/></a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="main" class="site-main">
