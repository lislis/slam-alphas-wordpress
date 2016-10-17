<?php
/**
 * slamalphas functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package slamalphas
 */

if ( ! function_exists( 'slamalphas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function slamalphas_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on slamalphas, use a find and replace
	 * to change 'slamalphas' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'slamalphas', get_template_directory() . '/languages' );

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
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'slamalphas' ),
        'social' => esc_html__('Social', 'slamalphas'),
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
	add_theme_support( 'custom-background', apply_filters( 'slamalphas_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'slamalphas_setup' );

/**
 * Enqueue scripts and styles.
 */
function slamalphas_scripts() {
	wp_enqueue_style( 'slamalphas-style', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_script( 'slamalphas-js', get_template_directory_uri() . '/js/main.js', array(), '20161016', false );
}
add_action( 'wp_enqueue_scripts', 'slamalphas_scripts' );


include('inc/template-tags.php');