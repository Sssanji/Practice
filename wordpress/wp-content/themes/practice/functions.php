<?php


/**
 * Practice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Practice
 */

function enqueue_styles() {
    /** REGISTER css/screen.css **/
    wp_register_style( 'screen-style', get_template_directory_uri() . '/style/style.css', array(), '1', 'all' );
    wp_enqueue_style( 'screen-style' );
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
function enqueue_scripts() {
     
    /** REGISTER HTML5 Shim **/
    wp_register_script( 'html5-shim', 'https://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'html5-shim' );
         
    /** REGISTER HTML5 OtherScript.js **/
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array(), NULL, false);
	wp_enqueue_script( 'jquery' );
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function practice_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Practice, use a find and replace
		* to change 'practice' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'practice', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'practice' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'practice_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'practice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function practice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'practice_content_width', 640 );
}
add_action( 'after_setup_theme', 'practice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function practice_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'practice' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'practice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'practice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function practice_scripts() {
	wp_enqueue_style( 'practice-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'practice-style', 'rtl', 'replace' );

	wp_enqueue_script( 'practice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'practice_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

remove_filter('the_content', 'wpautop');

remove_filter('the_excerpt', 'wpautop');

remove_filter('comment_text', 'wpautop');

remove_filter('the_content', 'wptexturize');


## ?????????????????????? PHP ?????? ?? ???????????????? ???????????? WordPress.
## [exec]PHP_??????[/exec]
##
## @version: 1.0
if( '?????????????????????? PHP ?????? ?? ????????????????' ){

	add_filter( 'the_content', 'content_exec_php', 0 );

	function content_exec_php( $content ){
		return preg_replace_callback( '/\[exec( off)?\](.+?)\[\/exec\]/s', '_content_exec_php', $content );
	}

	function _content_exec_php( $matches ){

		if( ' off' === $matches[1] ){
			return "\n\n<".'pre>'. htmlspecialchars( $matches[2] ) .'</pre'.">\n\n";
		}
		else {
			eval("ob_start(); {$matches[2]}; \$exec_php_out = ob_get_clean();");
			return $exec_php_out;
		}

	}

}


function create_post_type(){
	register_post_type('lecture', 
	array(
		'labels' => array(
			'name' => __('Lectures'),
			'singular_name' => __('Lecture'),
		),
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-welcome-learn-more',
	)
	);
}
add_action('init', 'create_post_type');



function create_post_type_test(){
	register_post_type('test', 
	array(
		'labels' => array(
			'name' => __('Tests'),
			'singular_name' => __('Test'),
		),
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-list-view',
	)
	);
}
add_action('init', 'create_post_type_test');


