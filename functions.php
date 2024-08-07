<?php

/**
 * basic_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package basic_theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function basic_theme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on basic_theme, use a find and replace
		* to change 'basic_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('basic_theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'basic_theme'),
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
			'basic_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'basic_theme_setup');

add_action('customize_register', 'my_customize_register');
function my_customize_register($wp_customize)
{


	$wp_customize->add_section('example', array(

		'title' => __('Add Your Logo Name', 'TextDomain'),
		'priority' => 201
	));

	$wp_customize->add_setting('logo_name');
	$wp_customize->add_control('logo_name', array(
		'id' => 'logo_name',
		'label' => __('Logo Name:', 'TextDomain'),
		'section' => 'example'
	));
}


add_action('after_setup_theme', 'register_my_menu');
function register_my_menu()
{
	register_nav_menu('primary', __('Primary Menu', 'johnmackey'));
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function basic_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('basic_theme_content_width', 640);
}
add_action('after_setup_theme', 'basic_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function basic_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'basic_theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'basic_theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'basic_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function basic_theme_scripts()
{
	wp_enqueue_style('basic_theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('basic_theme-style', 'rtl', 'replace');

	wp_enqueue_script('basic_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'basic_theme_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function my_custom_function()
{
	if (is_page('resume')) {
?>

		<style>
			* {
				/*border: 1px solid red;*/
				margin: 0;
				padding: 0;
			}

			.left-col,
			.right-col {
				min-height: 95vh;
			}

			a,
			a:hover,
			a:active,
			a:focus,
			a:focus-visible,
			a:focus-within {
				text-decoration: none;
				color: rgb(127, 64, 187);

			}

			h1 {
				font-size: 1.6rem;
				margin: 0;

			}

			h2 {
				font-size: 1.2rem;
				margin: 0;

			}

			h3 {
				font-size: 1.1rem;
				margin: 0;

			}

			h4 {
				font-size: 1rem;
				margin: 0;

			}

			li {
				font-size: .8rem;
				margin-left: 15px;
				width: 100%;
				list-style-type: bullets;
			}

			.navbar-nav {
				display: none !important;
			}

			ul {
				margin-bottom: 2px;
				list-style: bullets;
			}

			p {
				margin: 0;
			}

			.jobs div,
			.education div {
				width: 95%;
			}


			.flower-box {
				border: 3px solid black;
				margin: 10px 0 10px 0;
				padding-bottom: 15px;
			}

			.flower-box>*:first-child {
				padding: 20px;
				background-color: black;
				color: white;
				font-size: 2rem;
				font-weight: bold;
				opacity: 0.8;
				background-image: linear-gradient(135deg, #000 25%, #000000e6 25%), linear-gradient(225deg, #000 25%, transparent 25%), linear-gradient(45deg, #000 25%, transparent 25%), linear-gradient(315deg, #000 25%, #e5e5f7 25%);
				background-position: 10px 0, 10px 0, 0 0, 0 0;
				background-size: 10px 10px;
				background-repeat: repeat;
			}

			.flower-box>* {
				padding: 10px 10px 0px 10px;
				width: 100%;
			}

			.flower-box .mx-auto {
				margin: 10px -10px 0 10px !important;
				background-color: white;
			}

			.flower-box.skills .mx-auto,
			.flower-box.websites .mx-auto {
				background-color: transparent;
			}

			.job-title {
				font-weight: bold;
			}

			@media screen and (min-width:900px) {

				.jobs .mx-auto:hover,
				.education .mx-auto:hover {

					transform: scale(1.4, 1.4);
				}
			}

			.jobs .mx-auto:hover,
			.education .mx-auto:hover {
				border-radius: 20px;
				box-shadow: 0 0 5px 5px rgba(0, 0, 0, .25);
				transition: 1s ease-in-out;
				background-color: white;
				position: relative;
				z-index: 1;
			}

			.jobs .mx-auto:hover before,
			.education .mx-auto:hover before {
				content: '';
				position: absolute;
				inset: 0;
				background-color: rgba(0, 0, 0, .25);
			}

			.college {
				font-weight: bold;
			}
		</style>
		<script>
			jQuery(window).on('load', function($) {
				jQuery('.umass').on('click', function() {
					window.open("https://www.umass.edu");
					console.log(this);
				})
				jQuery('.salem').on('click', function() {
					window.open("https://www.salemstate.edu");
					console.log(this);
				})
				jQuery('.northshore').on('click', function() {
					window.open("https://www.northshore.edu");
					console.log(this);
				})
				jQuery('.promosis').on('click', function() {
					window.open("https://www.promosis.com");
					console.log(this);
				})
				jQuery('.cornell').on('click', function() {
					window.open("https://www.cornell.edu");
					console.log(this);
				})
				jQuery('.nl-softworks').on('click', function() {
					window.open("https://www.nlsoftworks.com");
					console.log(this);
				})
				jQuery('.guildhall').on('click', function() {
					window.open("https://www.guildhalllearning.com");
					console.log(this);
				})
				jQuery('.globalchildrenschool').on('click', function() {
					window.open("https://www.globalchildrenschool.com");
					console.log(this);
				})
				jQuery('.college, .job-title').each(function() {
					var text = jQuery(this).html();
					var text = text.replace('<p>', '');
					var text = text.replace('</p>', '');
					var text = text.replace('<br>', '');
					var text = text.trim();
					jQuery(this).html(text + '<i class="pl-2 d-inline ml-auto fa-solid fa-up-right-from-square"></i>');
					console.log(this);
				})
			})
		</script>
<?php
	}
}
add_action('wp_footer', 'my_custom_function');

function add_file_types_to_uploads($file_types)
{

	$new_filetypes = array();
	$new_filetypes['png'] = 'image/png';
	$file_types = array_merge($file_types, $new_filetypes);

	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


function display_category_posts($atts)
{
	// Extract shortcode attributes
	$atts = shortcode_atts(
		array(
			'category' => '', // Category slug or ID
			'posts_per_page' => -1, // Number of posts to display, -1 for all
		),
		$atts,
		'categoryposts'
	);

	// Arguments for WP_Query
	$args = array(
		'category_name'  => $atts['category'], // Category slug
		'posts_per_page' => $atts['posts_per_page'],
	);

	// Query the posts
	$query = new WP_Query($args);

	// Start output buffering
	ob_start();

	// Check if there are posts
	if ($query->have_posts()) {
		echo '<ul>'; // Start a list (or customize this to your needs)
		while ($query->have_posts()) {
			$query->the_post();
			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			echo '<p>' . the_content() . '</p>';
		}
		echo '</ul>';
	} else {
		echo 'No posts found.';
	}

	// Reset post data
	wp_reset_postdata();

	// Return the buffered content
	return ob_get_clean();
}

// Register the shortcode
add_shortcode('categoryposts', 'display_category_posts');
