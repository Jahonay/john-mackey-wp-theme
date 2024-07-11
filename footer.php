<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basic_theme
 */
$logo = get_theme_mod('logo_name');
?>
</div>
<footer id="colophon" class="site-footer">
	<div class="site-info">
		<footer class="bg-dark pt-5">
			<div class="container">
				<div class="row">
					<div class="logo col-md-12 text-center text-white">
						<h4><?= $logo ?></h4>
						<p>Copyright <?= date('Y') ?> by <?= $logo ?></p>
					</div>
				</div>
			</div>
		</footer>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>