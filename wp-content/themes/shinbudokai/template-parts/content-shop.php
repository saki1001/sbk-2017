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

		<h1><?php echo the_title(); ?></h1>

		<main id="main" class="site-main" role="main">

			<div class="blurb">
				<?php echo the_content(); ?>
			</div>

		<?php
			$productSections = get_field('product_sections');
			error_log(print_r($productSections, true));

			foreach( $productSections as $productSection ) :
				$layout = $productSection['acf_fc_layout'];
				$title = $productSection['title'];
				$blurb = $productSection['blurb'];

				error_log(print_r($productSection, true));

				switch($layout) {

					// LIST
					case 'featured_product_list' :
				?>
					<section class="featured-products list" role="featured-content">
					<h3><?php echo $title; ?></h3>
				<?php
					if( $blurb ) :
				?>
					<p class="blurb"><?php echo $blurb; ?></p>
				<?php
					endif;

					$products = $productSection['products'];
				?>
					<div class="products">
					<?php
						foreach( $products as $product ) :
							$ID = $product->ID;
							$name = $product->post_title;
							$subtitle = get_field('subtitle', $ID);
							$noImage = '<img src="' . get_template_directory_uri() . '/images/no-image.png" alt="no image placeholder" />';
							$thumbnail = get_the_post_thumbnail($ID);
							$image = $thumbnail ? $thumbnail : $noImage;
							$video = get_field('video', $ID);
							$description = $product->post_content;
							$buyButton = get_field('buy_button', $ID);
							$price = get_field('price', $ID);
					?>
						<div class="product">
							<figure>
								<?php echo $image; ?>
								<?php echo ($video ? '<a class="video-link" data-fancybox href="' . $video . '"></a>' : null); ?>
							</figure>

							<div class="info">
								<p class="name"><?php echo $name; ?></p>
								<?php echo ($subtitle ? '<p class="subtitle">' . $subtitle . '</p>' : null); ?>
								<div class="description">
									<?php echo $description; ?>
								</div>
								<div class="buy">
									<?php echo $buyButton; ?>
									<div class="price">Price: $<?php echo $price; ?></div>
								</div>
							</div>
						</div><!-- .product -->
					<?php
						endforeach;
					?>
					</div><!-- .products -->
					</section><!-- .featured-product-list -->

				<?php
						break;

					// GRID
					case 'featured_product_grid' :
				?>
					<section class="featured-products grid" role="featured-content">
					<h3><?php echo $title; ?></h3>
				<?php
					if( $blurb ) :
				?>
					<p class="blurb"><?php echo $blurb; ?></p>
				<?php
					endif;

					$products = $productSection['products'];
				?>
					<div class="products">
					<?php
						foreach( $products as $product ) :
							$ID = $product->ID;
							$name = $product->post_title;
							$subtitle = get_field('subtitle', $ID);
							$noImage = '<img src="' . get_template_directory_uri() . '/images/no-image.png" alt="no image placeholder" />';
							$thumbnail = get_the_post_thumbnail($ID);
							$image = $thumbnail ? $thumbnail : $noImage;
							$video = get_field('video', $ID);
							$description = $product->post_content;
							$buyButton = get_field('buy_button', $ID);
							$price = get_field('price', $ID);
					?>
						<div class="product">
							<figure>
								<?php echo $image; ?>
								<?php echo ($video ? '<a class="video-link" data-fancybox href="' . $video . '"></a>' : null); ?>
							</figure>

							<div class="info">
								<p class="name"><?php echo $name; ?></p>
								<?php echo ($subtitle ? '<p class="subtitle">' . $subtitle . '</p>' : null); ?>
								<div class="description">
									<?php echo $description; ?>
								</div>
								<div class="buy">
									<?php echo $buyButton; ?>
									<div class="price">Price: $<?php echo $price; ?></div>
								</div>
							</div>
						</div><!-- .product -->
					<?php
						endforeach;
					?>
					</div><!-- .products -->
					</section><!-- .featured-product-grid -->

				<?php
						break;
					default:

				}

			endforeach;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	// include(locate_template('/template-parts/content-tertiary.php'));
?>