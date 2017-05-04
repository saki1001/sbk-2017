<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shinbudokai
 */

?>

	<?php
		$image = get_field('banner_image');
	?>

	<div id="banner">
		<img src="<?php echo $image['url']; ?>" alt="Banner Image" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['title']; ?>" />
	</div>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php
				echo the_content();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<aside id="secondary" class="widget-area" role="complementary">
	
		<div class="sidebar schedule">
			<?php
				$topBox = get_field('sidebar_top_box');

				print $topBox;
			?>
		</div>

		<div class="sidebar second visit">
			<?php
				$bottomBox = get_field('sidebar_bottom_box');

				print $bottomBox;
			?>
		</div>

	</aside><!-- #secondary -->
