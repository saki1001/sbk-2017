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
		<figure class="top-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/instructor/sensei-smile.jpg" alt="Sensei Smiling" />
		</figure>
		<figure class="middle-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/instructor/sensei-portrait.jpg" alt="Sensei in Seiza" />
		</figure>
		<figure class="bottom-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/instructor/sensei-frame.jpg" alt="Sensei and O-Sensei" />
			<figcaption>Above: A picture of sensei as uke for O-Sensei when he was a <em>shidoin</em>.</figcaption>
		</figure>
	</aside><!-- #secondary -->

<?php
	include(locate_template('/template-parts/content-tertiary.php'));
?>