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

<head>
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
	</style>' .

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open();
	$logo = get_theme_mod('logo_name'); ?>
	<div id="page" class="site">

		<body>
			<nav class="navbar-wrapper">
				<div class=" container">
					<div class="navbar row">
						<div class="logo col-md-3">
							<a href="/">
								<h1><?= $logo ?></h1>
							</a>

						</div>
						<ul class="col-md-9" id="menu_nav">
							<?php echo wp_nav_menu(array(
								'theme_location' => 'header_nav',
								'container' => '<ul>',
								'container_class' => 'fkjldsaflkjf',
								'echo' => false,
								'menu_id' => 'nav_menu',
								'items_wrap'  => '<li class="nav-item nav-link">%1$s</li>',
								'menu_class' => 'navbar-nav',
							));



							?></ul>
					</div>
				</div>
			</nav>
			</nav><!-- #site-navigation -->
			</header><!-- #masthead -->