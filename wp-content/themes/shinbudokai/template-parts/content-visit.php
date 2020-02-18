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
		<a href="https://www.google.com/maps/place/Shin+Budo+Kai+Inc/@40.7264515,-73.9929278,17z/data=!3m1!4b1!4m5!3m4!1s0x89c259be461957c9:0x45e1e308c57766c0!8m2!3d40.7264515!4d-73.9907391" target="_blank">
    	<div id="map"></div>
    </a>
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
						<a href="<?php echo $website; ?>" target="_blank"><?php echo $name; ?></a>
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
