<?php

/**
 * ClickTime Design functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ClickTime_Design
 */

if ( ! function_exists( 'clicktimedesign_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function clicktimedesign_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ClickTime Design, use a find and replace
	 * to change 'clicktimedesign' to the name of your theme in all the template files.
	 */

	load_theme_textdomain( 'clicktimedesign', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.

	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'clicktimedesign' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'clicktimedesign_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}

endif;

add_action( 'after_setup_theme', 'clicktimedesign_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */

function clicktimedesign_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clicktimedesign_content_width', 640 );
}

add_action( 'after_setup_theme', 'clicktimedesign_content_width', 0 );

/**
 * Register widget area.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function clicktimedesign_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'clicktimedesign' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'clicktimedesign' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Header Top Right',
		'id'            => 'header_top_right',
		'description' => __( 'This is a good place for a phone number or CTA message.', 'ClickTime Design' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Header Bottom Right',
		'id'            => 'header_bottom_right',
		'description' => __( 'This could also be a phone number or some social media links.', 'ClickTime Design' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'After Single Content',
		'id'            => 'after_single_content',
		'description' => __( 'This will display at the end of any single content page, such as a blog entry.', 'ClickTime Design' ),
		'before_widget' => '<div class="ctd-after-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="ctd-after-content">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer One',
		'id'            => 'footer_one',
		'description' => __( 'Add content to this footer widget area.', 'ClickTime Design' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="footer-one">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Two',
		'id'            => 'footer_two',
		'description' => __( 'Add content to this footer widget area.', 'ClickTime Design' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="footer-one">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Three',
		'id'            => 'footer_three',
		'description' => __( 'Add content to this footer widget area.', 'ClickTime Design' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="footer-one">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'clicktimedesign_widgets_init' );

// Add Post Formats

add_theme_support( 'post-formats', array( 'standard', 'gallery' ) );

/**
 * Enqueue scripts and styles.
 */

function clicktimedesign_scripts() {

	wp_enqueue_style( 'clicktimedesign-style', get_stylesheet_uri() );

// Move Jetpack Sharing Icons
function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
add_action( 'loop_start', 'jptweak_remove_share' );
// End Jetpack

	wp_enqueue_script( 'clicktimedesign-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'clicktimedesign_scripts' );


/**
 * Implement the Custom Header feature.
 */

require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */

require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */

require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */

require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */

require get_template_directory() . '/inc/jetpack.php';

// Remove Emoji Code from theme

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );

remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Change Excerpt length

function wpdocs_custom_excerpt_length( $length ) {
    return 60;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Change 'Read More' in Excerpts

function wpdocs_excerpt_more( $more ) {
    return ' ... ';
}

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Change Search Button Text

add_filter('get_search_form', 'new_search_button');

function new_search_button($text) {
	$text = str_replace('value="Search"', 'value=""', $text);
return $text;
}
?>