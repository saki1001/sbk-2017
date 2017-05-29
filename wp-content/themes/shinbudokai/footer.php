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
					77 8th Ave. (southwest corner of 14th St)<br/>
					New York, NY 10014
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
    	<a href="https://www.google.com/maps/place/Shin-Budo+Kai+Inc/@40.7397002,-74.005173,17z/data=!4m13!1m7!3m6!1s0x89c259be48bf39d5:0x220600687d887047!2s77+8th+Ave,+New+York,+NY+10014!3b1!8m2!3d40.7397002!4d-74.0029843!3m4!1s0x89c259be461957c9:0x45e1e308c57766c0!8m2!3d40.7396669!4d-74.0027968" target="_blank">
	    	<div id="map"></div><!-- #map -->
	    </a>
    <?php
    	}
    ?>

		</div><!-- .inner -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
