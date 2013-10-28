<?php
/**
 * nick functions and definitions
 *
 * @package nick
 */



/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'nick_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function nick_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on nick, use a find and replace
	 * to change 'nick' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nick', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'nick' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'nick_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // nick_setup
add_action( 'after_setup_theme', 'nick_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function nick_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'nick' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'nick_widgets_init' );





// Register Theme Styles
function theme_styles()  {  
    wp_register_style( 'global', get_template_directory_uri() . '/assets/css/global.css', array(), '', 'all' );  
    wp_enqueue_style( 'global' );  

    wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '', 'all' );  
    wp_enqueue_style( 'font-awesome' );  

   
}  
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// Register Theme Scripts
function theme_scripts() {

// Register main-ck-js with jQuery as a dependancy, no version number required and placed in the footer true.
  wp_register_script( 
    'main', 
    get_template_directory_uri() . '/assets/js/main-ck.js',
    array( 'jquery' ),
    '',
    true
    );

  wp_enqueue_script( 'main' );  
 
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );






/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
