<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package road-kill
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'road-kill' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
			<a href="/" class="logo-icon"><div></div></a>
			<a href="/" class="logo-full"><div></div></a>
			<a href="#" class="rk-login">Login to RK Nation</a>
		</div>.

	</header><!-- #masthead -->
	<div class="bottom-graphic"></div>
	
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'road-kill' ); ?></button>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		<?php if ( is_active_sidebar( 'navbar-1' ) ) : ?>
			<?php dynamic_sidebar( 'navbar-1' ); ?>
		<?php endif; ?>
	</nav><!-- #site-navigation -->
	

	<div id="content" class="site-content">
