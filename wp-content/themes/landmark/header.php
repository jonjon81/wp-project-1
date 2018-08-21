<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landmark
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'landmark' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();

			$landmark_description = get_bloginfo( 'description', 'display' );
			if ( $landmark_description || is_customize_preview() ) :
				?>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation desktop-version">
			<a class="logo-link" href="<?php echo get_option("siteurl"); ?>">
				<div class="logo">
					<img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/landmark-logo.png" alt="logo">
				</div>
			</a>
<!-- 			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'landmark' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		<div  class="menu-popup">
			<div class="first quarter left widget-area">
				<?php dynamic_sidebar( 'first-nav-widget-area' ); ?>
			</div><!-- .first .widget-area -->

			<div class="right-menu-section">
				<div class="second quarter widget-area">
				    <?php dynamic_sidebar( 'second-nav-widget-area' ); ?>
				</div><!-- .second .widget-area -->

				<div class="third quarter widget-area">
				    <?php dynamic_sidebar( 'third-nav-widget-area' ); ?>
				</div><!-- .third .widget-area -->

				<div class="fourth quarter right widget-area">
				    <?php dynamic_sidebar( 'fourth-nav-widget-area' ); ?>
				</div><!-- .fourth .widget-area -->
			</div>
		</div>

		<div class="search-popup">
			<?php get_search_form(); ?>
		</div>

		<nav id="site-navigation" class="main-navigation mobile-version">
			<div class="left-side-menu-mobile">
				<div class="hamburger hamburger-closed"><span></span></div>
				<div class="hamburger hamburger-open"><span>X</span></div>
				<div class="phone-icon"><a href="tel:1-866-355-3332"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/phone-icon-mobile.png" alt="Telephone Icon"></a></div>
			</div>

			<a class="logo-link" href="<?php echo get_option("siteurl"); ?>">
				<div class="logo">
					<img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/landmark-logo.png" alt="logo">
				</div>
			</a>
<!-- 			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'landmark' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<ul class="mobile-icons">
				<li class="chat-icon-mobile"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/chat-icon-mobile.png" alt="Chat Icon"></li>
				<li class="search-icon-mobile"><img src="<?php echo get_option("siteurl"); ?>/wp-content/uploads/2018/07/search-icon-mobile.png" alt="Search Icon"></li>
			</ul>
		</nav><!-- #site-navigation -->



		<nav id="site-navigation-mobile" class="main-navigation mobile-version" role="navigation">
            <div class="mobile-menu">
            	<?php dynamic_sidebar( 'hamburger-mobile-menu' ); ?>
            </div>
		</nav>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
