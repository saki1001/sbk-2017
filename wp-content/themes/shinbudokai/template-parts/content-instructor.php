<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shinbudokai
 */

?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php
				echo the_content();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<aside id="secondary" class="widget-area" role="complementary">
		Images
	</aside><!-- #secondary -->

<?php
	include(locate_template('/template-parts/content-tertiary.php'));
?>