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
		<div class="site-info inner">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/sbk-logo.png" alt ="Shin Budo Kai Logo" />
			</a>

			<p>
				77 8th Ave (on the corner of 14th St)
				New York, NY
			</p>

			<p>
				(212) 444-4444
				info@shinbudokai.org
			</p>

			<p>
				Easily accessible by the A,C,E and L trains
				M14A and M14D buses
			</p>

			<p>
				Open hours:
				M - F 6-8pm
				Sat. 11:30 - 1pm
				Sun. 12:30 - 2pm
			</p>

			<p>
				See full schedule <a href="/classes">here</a>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
