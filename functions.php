<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_tk' ),
	) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
//add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
//	wp_enqueue_style( '_tk-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
//	wp_enqueue_style( '_tk-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_tk-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	// load css for template
	wp_enqueue_style( 'loaders-css', get_template_directory_uri() . '/vendor/loaders.css/loaders.min.css');
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/fontawesome/css/font-awesome.min.css');
	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/vendor/swiper/css/swiper.min.css');
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/vendor/animate.css/animate.min.css');
	wp_enqueue_style( 'formstone-ligthbox-css', get_template_directory_uri() . '/vendor/formstone/css/lightbox.css');
	wp_enqueue_style( 'formstone-background-css', get_template_directory_uri() . '/vendor/formstone/css/background.css');
	wp_enqueue_style( 'mediaelement-css', get_template_directory_uri() . '/vendor/mediaelement/mediaelementplayer.min.css');
	wp_enqueue_style( 'text-animation-css', get_template_directory_uri() . '/vendor/text-animation/css/index.css');
	wp_enqueue_style( 'app-css', get_template_directory_uri() . '/assets/css/app.css');


	// load _tk styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	// load bootstrap js
//	wp_enqueue_script('_tk-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );

	// load bootstrap wp js
//	wp_enqueue_script( '_tk-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

//	wp_enqueue_script( '_tk-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	// load js for template
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.css', array(), '', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'gmap3-js', get_template_directory_uri() . '/vendor/gmap3/gmap3.min.js', array(), '', true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/vendor/isotope/isotope.pkgd.min.js', array(), '', true );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/vendor/swiper/js/swiper.min.js', array(), '', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/vendor/wow/wow.min.js', array(), '', true );
	wp_enqueue_script( 'formstone-core-js', get_template_directory_uri() . '/vendor/formstone/js/core.js', array(), '', true );
	wp_enqueue_script( 'formstone-touch-js', get_template_directory_uri() . '/vendor/formstone/js/touch.js', array(), '', true );
	wp_enqueue_script( 'formstone-transition-js', get_template_directory_uri() . '/vendor/formstone/js/transition.js', array(), '', true );
	wp_enqueue_script( 'formstone-lightbox-js', get_template_directory_uri() . '/vendor/formstone/js/lightbox.js', array(), '', true );
	wp_enqueue_script( 'formstone-background-js', get_template_directory_uri() . '/vendor/formstone/js/background.js', array(), '', true );
	wp_enqueue_script( 'jquery-appear-js', get_template_directory_uri() . '/vendor/jquery.appear/jquery.appear.js', array(), '', true );
	wp_enqueue_script( 'countUp-js', get_template_directory_uri() . '/vendor/countUp.js/js/countUp.min.js', array(), '', true );
	wp_enqueue_script( 'mediaelement-and-player-js', get_template_directory_uri() . '/vendor/mediaelement/mediaelement-and-player.min.js', array(), '', true );
	wp_enqueue_script( 'SmoothScroll-js', get_template_directory_uri() . '/vendor/smoothscroll/SmoothScroll.js', array(), '', true );
	wp_enqueue_script( 'text-animation-js', get_template_directory_uri() . '/vendor/text-animation/js/index.js', array(), '', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array(), '', true );
	wp_enqueue_script( 'color-switcher-js', get_template_directory_uri() . '/assets/js/color-switcher.js', array(), '', true );
//	wp_enqueue_script( '', get_template_directory_uri() . '/vendor/', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
