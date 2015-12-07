<?php
/**
 * Functions file for this theme
 * Include functions and defines
 * @package UBPress
 * @since 1.0
 * @author UBTeam
 * 
 */

/**
 * Define constant need use for this theme
 */
if ( ! defined( 'DIR_URI' ) ) {
	define( 'DIR_URI', trailingslashit( get_template_directory_uri() ) );
}

// Define theme directory
if ( ! defined( 'THEME_DIR' ) ) {
	define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
}

// Define libraries directory
if ( ! defined( 'LIB_DIR') ) {
	define( 'LIB_DIR', trailingslashit( THEME_DIR . 'lib' ) );
}

// Define assets directory
if ( ! defined( 'ASSETS_DIR') ) {
	define( 'ASSETS_DIR', trailingslashit( DIR_URI . 'assets' ) );
}

// Define includes directory
if ( ! defined( 'INC_DIR') ) {
	define( 'INC_DIR', trailingslashit( THEME_DIR . 'inc' ) );
}

// Define languages directory
if ( ! defined( 'LANG_DIR') ) {
	define( 'LANG_DIR', THEME_DIR . 'languages' );
}

add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );

// Required: include OptionTree.
require( LIB_DIR . 'option-tree/ot-loader.php' );

/* Disable load css to Contact form 7 */
add_filter( 'wpcf7_load_css', '__return_false' );

// Setup with default for theme
if ( ! isset( $content_width ) ) {
	$content_width = 1000;
}

// Set up for theme
if ( ! function_exists( 'ubpress_setup' ) ) {
	function ubpress_setup() {
		// Load language theme
		load_theme_textdomain( 'ubpress', LANG_DIR );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );
		
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );
	}
	add_action( 'after_setup_theme', 'ubpress_setup' );
}

/* Add jQuery 1.11.3 into Theme */
if (!is_admin()) {
	function ubpress_jquery_enqueue() {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ASSETS_DIR . 'js/jquery.min.js', false, '1.11.3');
	   wp_enqueue_script('jquery');
	   if ( is_singular() && get_option( 'thread_comments' ) )	{ wp_enqueue_script( 'comment-reply' ); }
	}
	add_action("wp_enqueue_scripts", "ubpress_jquery_enqueue", 11);
}

if ( ! function_exists( 'ubpress_fonts_url' ) ) :
/**
 * Register Google fonts for UBPress.
 *
 * @since UBPress 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function ubpress_fonts_url() {
	$fonts_url = '';
	$fonts     = array();

	/* translators: If there are characters in your language that are not supported by Raleway, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Raleway font: on or off', 'ubpress' ) ) {
		$fonts[] = 'Raleway';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/* Register Scripts for theme */
if ( ! function_exists( 'ubpress_scripts_enqueue' ) ) {
	function ubpress_scripts_enqueue()
	{
		wp_enqueue_style( 'raleway-fonts', ubpress_fonts_url(), array(), null );

		wp_enqueue_style( 'bootstrap', ASSETS_DIR . 'css/bootstrap.min.css', array(), '3.3.5' );

		wp_enqueue_style( 'bxslider', ASSETS_DIR . 'css/jquery.bxslider.css', array(), '4.1.2' );

		wp_enqueue_style( 'style', get_stylesheet_uri(), array() );

		wp_enqueue_script( 'bootstrap', ASSETS_DIR . 'js/bootstrap.min.js', false, '3.3.5', true );

		wp_enqueue_script( 'bxslider', ASSETS_DIR . 'js/jquery.bxslider.min.js', false, '4.1.2', true );

		wp_enqueue_script( 'config', ASSETS_DIR . 'js/config.js', array(), '1.0', true );

		if ( is_single() || is_category( 13 ) ) {
		wp_enqueue_script( 'flexaccordionmenu', ASSETS_DIR . 'js/flexaccordionmenu.js', false, '1.1.0', true );
		}
	}
	add_action( 'wp_enqueue_scripts', 'ubpress_scripts_enqueue' );
}

/* Structure for theme */
require_once( LIB_DIR . 'structure/header.php' );

/* Load Menu Bootstrap */
require_once( LIB_DIR . 'wp_bootstrap_navwalker.php' );

/* Load theme options */
require_once( LIB_DIR . 'theme-options.php' );

/* Load post types */
require_once( LIB_DIR . 'post-types.php' );

/* Load meta boxes */
require_once( LIB_DIR . 'meta-box.php' );


/* Load functions */

//require_once( LIB_DIR . 'functions/category-type.php' );

/* Fix Pagination Tax */
add_filter( 'option_posts_per_page', 'tdd_tax_filter_posts_per_page' );
function tdd_tax_filter_posts_per_page( $value ) {
	$tax = array( '' );
	return (is_tax($tax)) ? 10 : $value;
}

/* Register Navigation */
function register_ub_menu()
{
    register_nav_menus(array( 
        'menu-primary-first'    => __('Primær (første)', 'ubpress'),
        'menu-primary-second'    => __('Primær (sekund)', 'ubpress'),
        'extra'    => __('Ekstra', 'ubpress')
    ));

}
add_action('init', 'register_ub_menu');

/* Register Sidebar	*/
if ( ! function_exists( 'ubp_sidebars' ) ) {

	function ubp_sidebars()	{
		register_sidebar( array(
			'name'          => __( 'Footer Sidebar 1', 'ubpress' ),
			'id'            => 'sidebar-footer-1',
			'description'   => __( 'Dette er hjemmesiden menu fødder.', 'ubpress' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
		register_sidebar( array(
			'name'          => __( 'Footer Sidebar 2', 'ubpress' ),
			'id'            => 'sidebar-footer-2',
			'description'   => __( 'Dette er hjemmesiden menu fødder.', 'ubpress' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
		register_sidebar( array(
			'name'          => __( 'Footer Sidebar 3', 'ubpress' ),
			'id'            => 'sidebar-footer-3',
			'description'   => __( 'Dette er hjemmesiden menu fødder.', 'ubpress' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
		register_sidebar( array(
			'name'          => __( 'Footer Sidebar 4', 'ubpress' ),
			'id'            => 'sidebar-footer-4',
			'description'   => __( 'Dette er hjemmesiden menu fødder.', 'ubpress' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
		register_sidebar( array(
			'name'          => __( 'Footer Sidebar 5', 'ubpress' ),
			'id'            => 'sidebar-footer-5',
			'description'   => __( 'Dette er hjemmesiden menu fødder.', 'ubpress' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}
}
add_action( 'widgets_init', 'ubp_sidebars' );

/**
 * Remove Actions
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'index_rel_link' );
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* Include Posts and Exclude Pages */
function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('post_type', 'post');
    }
  }
}
add_action('pre_get_posts','search_filter');

/* Length for post */
if ( ! function_exists( 'length_post_excerpt' ) ) {
	function length_post_excerpt( $lenght ) {
		return 36;
	}
}

/* Custom More Excerpt */
if ( ! function_exists( 'more_excerpt' ) ) {
	function more_excerpt( $excerpt ) {
		return '...';
	}
}

/* General Excerpt */
function ubpress_excerpt( $length_callback = '', $more_callback = '' ) {
    global $post;
    if ( function_exists( $length_callback ) ) {
        add_filter( 'excerpt_length', $length_callback );
    }
    if ( function_exists( $more_callback ) ) {
        add_filter( 'excerpt_more', $more_callback );
    }
    $output = get_the_excerpt();
    $output = apply_filters( 'wptexturize', $output );
    $output = apply_filters( 'convert_chars', $output );
    $output = '<p>' . $output . '</p>';
    echo $output;
}

/* Remove Category, Tag, Author from the_archive_title() */
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
    	$title = single_tag_title( '', false );
    } elseif ( is_author() ) {
    	$title = '<span class="vcard">' . get_the_author() . '</span>' ;
    }
    return $title;
});

/**
* Returns ID of top-level parent category, or current category if you are viewing a top-level
*
* @param    string      $catid      Category ID to be checked
* @return   string      $catParent  ID of top-level parent category
*/
function smart_category_top_parent_id ($catid) {
    while ($catid) {
        $cat = get_category($catid); // get the object for the catid
        $catid = $cat->category_parent; // assign parent ID (if exists) to $catid
        // the while loop will continue whilst there is a $catid
        // when there is no longer a parent $catid will be NULL so we can assign our $catParent
        $catParent = $cat->cat_ID;
    }
    return $catParent;
}

/**
 * Get top level Category
 * @param   string     $post_id   Post ID get the category
 * @return  string     $top_level_cat
 */
function top_level_cat($post_id) {
	// get the top level cat id of a single post
	$category = get_the_category($post_id);
	$catid = $category[0]->cat_ID;
	$top_level_cat = smart_category_top_parent_id ($catid);
	return $top_level_cat;
}

/**
 * Setup image default link type is none
 */
function ubp_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'ubp_imagelink_setup', 10);

/**
 * function current_page_url() for website
 */
function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

/**
 * This is an example of a custom shortcode parser.
 * It's really easy to implement.
 * We already automatically parse all shortcodes with this notation for you: [custom:my_value]
 * You just have to add a filter and return the value you prefer.
 * In the following example we added [custom:my_name] and [custom:blog_name] to our newsletter.
 * We have now to return the preferred values, as string.
 */
// [custom:my_name]
// [custom:blog_name]
function mailpoet_shortcodes_custom_filter( $tag_value , $user_id) {
 
    // $tag_value contains the string after custom:
    // This function will be called the first time with $tag_value = my_name
    // The second time with $tag_value = blog_name
 
    // $user_id contains the corresponding MailPoet's subscriber id,
    // this could be useful to fetch extra data from the WordPress user's meta for instance
    // e.g.: https://gist.github.com/benheu/cf9eb925b0e17e6dbd6c
 
    if ($tag_value === 'name') {
    	// get the wpuser_id of that subscriber
        $model_user = WYSIJA::get('user','model');
        $subscriber_data = (array)$model_user->getOne( false, array( 'user_id' => $user_id ) );
        $replacement = $subscriber_data['cf_1'];
    }
 
    return $replacement;
 
}
add_filter('wysija_shortcodes', 'mailpoet_shortcodes_custom_filter',10 ,2);
