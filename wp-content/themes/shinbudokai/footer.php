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
					62 East 4th Street (Sassi Karate Center)<br/>
					New York, NY 10003
				</p>

				<p>(212) 691-1378</p>

				<p>
					<a href="mailto:info@shinbudokai.org">info@shinbudokai.org</a>
				</p>

			<?php
				wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-2'  ) );
			?>

				<p class="disclaimer">Shin-Budo Kai, Inc. is a non-profit educational organization (501c) formed to disseminate the principles of Aikido and Ki. It admits students of any race, color, and national or ethnic origin.</p>

			</div><!-- .site-info -->

    <?php
    	if( !is_page('visit') ) {
    ?>
    	<a href="https://www.google.com/maps/place/Shin+Budo+Kai+Inc/@40.7264515,-73.9929278,17z/data=!3m1!4b1!4m5!3m4!1s0x89c259be461957c9:0x45e1e308c57766c0!8m2!3d40.7264515!4d-73.9907391" target="_blank">
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
