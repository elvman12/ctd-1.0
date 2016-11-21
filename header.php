<?php

/**
 * The header for our theme.
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package ClickTime_Design
*/


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body

<?php /* This is to remove standard body classes from the front page */
if (is_front_page()) {
	//body_class();
} else {
	body_class();
}
?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'clicktimedesign' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
        <div class="site-logo">
        <?php
        if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
		}
		?>
        </div>

			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif;
			?>        

        <!-- EGS Add the Top Right Header Widget Area -->
        <div class="header-top-right">
		<?php if ( is_active_sidebar( 'header_top_right' ) ) : 	
            dynamic_sidebar( 'header_top_right' ); 
        endif; ?>
        </div>

        <!-- EGS Add the Bottom Right Header Widget Area -->

        <div class="header-bottom-right">
        <?php if ( is_active_sidebar( 'header_bottom_right' ) ) :
            dynamic_sidebar( 'header_bottom_right' );
        endif; ?> 
        </div>	

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'clicktimedesign' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
        </div><!-- .site-branding -->
	</header><!-- #masthead -->
    
	<?php
	if (is_front_page()) {
		//echo "<div id=\"content\" class=\"site-content\">";
	} else {
		echo "<div id=\"content\" class=\"site-content\">";
	}
	?>