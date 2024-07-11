<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basic_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<?php
function header_add()
{
?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>John Mackey</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="' . get_stylesheet_uri() . '">


	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<style>
		.body {
			background-color: ' . get_theme_mod(' background_color') . '
		}
	</style>
<?php
}
add_action('wp_head', 'header_add'); ?>


<?php wp_head(); ?>


<body <?php body_class(); ?>>
	<?php wp_body_open();
	$logo = get_theme_mod('logo_name'); ?>
	<div id="page" class="site">

		<body>
			<nav class="navbar-wrapper">
				<div class=" container">
					<div class="navbar row">
						<div class="logo col-md-3 d-flex mr-auto my-auto pl-0">
							<a href="/">
								<h2><?= $logo ?></h2>
							</a>

						</div>
						<ul class="col justify-content-end d-flex navbar-nav ml-auto my-auto" id="menu_nav">
							<?php echo wp_nav_menu(array(
								'menu' => '',
								'container' => '',
								'theme_location' => 'primary',
								'echo' => true,
								'menu_id' => '',
								'items_wrap'  => '<li class="nav-item nav-link">%3$s</li>',
								'menu_class' => 'navbar-nav'
							));



							?></ul>
					</div>
				</div>
			</nav>
			</nav><!-- #site-navigation -->
			</header><!-- #masthead -->