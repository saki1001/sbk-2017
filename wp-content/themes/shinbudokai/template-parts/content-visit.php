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
    <div id="map"></div>
		<figure class="dojo-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/visit/dojo-front.png" alt="Front view of the dojo" />
			<figcaption>The the dojo is located in an historic bank building at the southwest corner of 14th St and 8th Ave.</figcaption>
		</figure>
	</aside><!-- #secondary -->

	<div id="tertiary" class="affiliate-dojos">
		<section id="affiliate-dojos" class="featured-section" role="featured-content">
			<h3><?php echo get_field('section_title'); ?></h3>

			<div class="dojos">
			<?php
				$dojos = get_field('dojos');
				// error_log(print_r($dojos, true));

				foreach( $dojos as $dojo ) :
					$city = $dojo['city'];
					$name = $dojo['name'];
					$website = $dojo['website'];
					$location_contact = $dojo['location_contact'];

					error_log(print_r($dojo, true));

			?>
				<div class="dojo">
					<h4 class="city"><?php echo $city; ?></h4>
					<p class="name">
						<a href="<?php echo $website; ?>"><?php echo $name; ?></a>
					</p>
					<?php echo $location_contact; ?>
				</div><!-- .dojo -->

			<?php
			endforeach;
			?>
			</div><!-- .dojos -->
		
			<aside class="sidebar" role="complementary">
				<?php
					$sidebarImage = get_field('sidebar_image');
				?>
				<figure>
					<img src="<?php echo $sidebarImage['sizes']['large']; ?>" alt="<?php echo $sidebarImage['title']; ?>" />

					<figcaption>
						<?php echo $sidebarImage['caption']; ?>
					</figcaption>
				</figure>
			</aside>

		</section><!-- #affiliate-dojos -->
	</div><!-- #tertiary -->
