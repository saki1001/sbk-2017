<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shinbudokai
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="inner">
			<div class="site-branding">
				<p class="site-title">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/sbk-logo-white.png" alt ="Shin Budo Kai Logo" />
					</a>
				</p>
			</div>

			<div class="site-info">
				<p>
					77 8th Ave. (on the corner of 14th St)
					New York, NY
				</p>

				<p>(212) 691-1378</p>

				<p>
					<a href="mailto:info@shinbudokai.org">info@shinbudokai.org</a>
				</p>

			<?php
				wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-2'  ) );
			?>

			</div><!-- .site-info -->

    <?php
    	if( !is_page('visit') ) {
    ?>
    	<div id="map"></div><!-- #map -->
    <?php
    	}
    ?>

		</div><!-- .inner -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
