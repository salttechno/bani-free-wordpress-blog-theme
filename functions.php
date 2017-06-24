<?php
/**
 * Bani functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bani
 */


/**
 * ------------------------------------------------------------------------------------
 * SET UP THEME DEFAULTS & REGISTER SUPPORTED FUNCTIONS
 * ------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'bani_setup' ) ) :
function bani_setup() {

	load_theme_textdomain( 'bani', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'bani' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'bani_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'bani_setup' );




/**
* ------------------------------------------------------------------------------------
* SET CONTENT WIDTH
* ------------------------------------------------------------------------------------
*/
function bani_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bani_content_width', 640 );
}
add_action( 'after_setup_theme', 'bani_content_width', 0 );




/**
* ------------------------------------------------------------------------------------
* REGISTER WIDGET AREA
* ------------------------------------------------------------------------------------
*/
function bani_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bani' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bani' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bani_widgets_init' );




/**
* ------------------------------------------------------------------------------------
* ENQUEUE STYLES & SCRIPTS
* ------------------------------------------------------------------------------------
*/
function bani_scripts() {
	wp_enqueue_style( 'bani-google-fonts', '//fonts.googleapis.com/css?family=Bitter:400,400i|Source+Sans+Pro' );
	wp_enqueue_style( 'bani-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bani-typed', get_template_directory_uri() . '/js/typed.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bani-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bani-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'bani-main', get_template_directory_uri() . '/js/bani-main.js', array( 'jquery' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bani_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
