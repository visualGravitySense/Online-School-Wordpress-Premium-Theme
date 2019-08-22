/** <?php
/**
 * wordpress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress


if ( ! function_exists( 'wordpress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wordpress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wordpress, use a find and replace
		 * to change 'wordpress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wordpress', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'wordpress' ),
			'footerfirst' => esc_html__( 'Support Menu', 'wordpress' ),
			'footersecond' => esc_html__( 'Footer Menu', 'wordpress' ),
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
		add_theme_support( 'custom-background', apply_filters( 'wordpress_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wordpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordpress_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wordpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'wordpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wordpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wordpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wordpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wordpress_scripts() {
	wp_enqueue_style( 'wordpress-style', get_stylesheet_uri() );
	wp_enqueue_style( 'wordpress-components', get_template_directory_uri() .'/layouts/component.css');
	wp_enqueue_style( 'flexslider', get_template_directory_uri() .'/layouts/flexslider.css');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() .'/layouts/prettyPhoto.css');
	wp_enqueue_style( 'wordpress-main', get_template_directory_uri() .'/layouts/style.css');

	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/libs/jquery.flexslider.js', array(), '', false );
	wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/js/libs/jquery.prettyPhoto.js', array(), '', false );
	wp_enqueue_script( 'responsiveTabs', get_template_directory_uri() . '/js/libs/jquery.responsiveTabs.js', array(), '', false );
	wp_enqueue_script( 'modernizr.custom', get_template_directory_uri() . '/js/libs/jquery.modernizr.custom.js', array(), '', false );
	wp_enqueue_script( 'wordpress-script', get_template_directory_uri() . '/js/script.js', array(), '', false );

	wp_enqueue_script( 'wordpress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wordpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordpress_scripts' );

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

/**
 * Redux Options Panel.
 */
require get_template_directory() . '/inc/sample-config.php';




/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wordpress_custompost_type_gallery() {
    $labels = array(
        'name'                  => _x( 'Galleries', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Gallery', 'Post type singular name', 'textdomain' ),
        );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'gallery', $args );
}

add_action( 'init', 'wordpress_custompost_type_gallery' );

function wordpress_custompost_type_deals() {
    $labels = array(
        'name'                  => _x( 'Deals', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Deal', 'Post type singular name', 'textdomain' ),
        );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'deal', $args );
}

add_action( 'init', 'wordpress_custompost_type_deals' );

function wordpress_custompost_type_testimonials() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'textdomain' ),
        );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'testimonial', $args );
}

add_action( 'init', 'wordpress_custompost_type_testimonials' );

*/
