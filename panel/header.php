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
			<a href="/about"><img src="/wp-content/uploads/2017/04/bm-about.png"/></a>
			<!-- cast -->
			<a href="/cast"><img src="/wp-content/uploads/2017/04/bm-cast.png"/></a>
			<!-- support -->
			<a href="/support"><img src="/wp-content/uploads/2017/04/bm-support.png"/></a>
			<!-- links -->
			<a href="/links"><img src="/wp-content/uploads/2017/04/bm-links.png"/></a>
			<!-- store -->
			<a href="/store"><img src="/wp-content/uploads/2017/04/bm-store.png"/></a>
			<!-- extras -->
			<a href="/extras"><img src="/wp-content/uploads/2017/04/bm-extras.png"/></a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="main" class="site-main">
