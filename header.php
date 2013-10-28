<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package nick
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script type="text/javascript" src="//use.typekit.net/dtr7rzg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="the-rainbow"></div>
	<div id="page" class="hfeed site">
		<div class="site-container">
			<div class="row-fluid">
				<?php do_action( 'before' ); ?>
				<header id="masthead" class="main-header" role="banner">

					<div class="site-branding">
						<h1 class="site-title sr-only"><?php bloginfo( 'name' ); ?></h1>
						<h2 class="site-description sr-only"><?php bloginfo( 'description' ); ?></h2>
						<a class="nicholas-rowe" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/nicholasrowe.png" alt=""></a>
						</div>

						<nav class="main-nav">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>about">About</a>
						<!-- 	<a href="<?php echo esc_url( home_url( '/' ) ); ?>resources">Resources</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>toolbox">Toolbox</a> -->
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a>
						</nav>

					</header><!-- #masthead -->

					<div id="content" class="site-content">
