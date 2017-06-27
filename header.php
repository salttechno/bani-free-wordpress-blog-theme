<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bani
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="loading-screen d-flex align-items-center">
		<div class="spinner">
		  <div class="rect1"></div>
		  <div class="rect2"></div>
		  <div class="rect3"></div>
		  <div class="rect4"></div>
		  <div class="rect5"></div>
		</div>
	</div>

	<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bani' ); ?></a>

			<div class="st-header-area fixed-top">
				<div class="container">
					<header id="masthead" class="site-header row align-items-center" role="banner">

							<div class="site-branding col-sm-3">

								<?php if ( !get_theme_mod( 'bani_logo' ) ) : ?>

									<?php if(is_front_page()) : ?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php else : ?>
										<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
									<?php endif; ?>

								<?php else : ?>

									<?php if(is_front_page()) : ?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('bani_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" class="bani-logo-img" height="<?php if ( get_theme_mod( 'bani_logo_height' ) ) : echo get_theme_mod( 'bani_logo_height' ); endif; ?>" /></a></h1>
									<?php else : ?>
										<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('bani_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" class="bani-logo-img" height="<?php if ( get_theme_mod( 'bani_logo_height' ) ) : echo get_theme_mod( 'bani_logo_height' ); endif; ?>" /></a></h2>
									<?php endif; ?>

								<?php endif; ?>

								<?php
								if ( get_theme_mod( 'bani_display_tagline' ) ) :
									$description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) : ?>
										<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
									<?php
									endif;
								endif; ?>
							</div><!-- .site-branding -->

							<nav id="site-navigation" class="main-navigation ml-auto col text-right" role="navigation">
								<button class="menu-toggle btn btn-primary btn-sm" aria-controls="primary-menu" aria-expanded="false" ><i class="fa fa-bars"></i></button>
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id' => 'primary-menu',
										'menu_class' => 'row bani-main-menu'
									) );
								?>
							</nav><!-- #site-navigation -->

					</header><!-- #masthead -->
				</div><!-- /.container -->
			</div><!-- /.st-header-area -->

			<div class="st-content-area">
				<div class="container">
					<div id="content" class="site-content row">
