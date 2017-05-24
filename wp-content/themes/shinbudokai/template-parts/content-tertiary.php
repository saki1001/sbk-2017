<?php
/**
 * Tertiary content sections:
 * Student Profiles, Images, Videos 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shinbudokai
 */

$sections = get_field('sections');
error_log(print_r('sections', true));
error_log(print_r($sections, true));

if ( !$sections ) {
	return;
}

?>

	<div id="tertiary" class="featured-content-area">

	<?php
		foreach( $sections as $section ) :
			$layout = $section['acf_fc_layout'];
			$title = $section['title'];
			$blurb = $section['blurb'];

			// error_log(print_r($section, true));

			switch($layout) {

				// STUDENT PROFILES
				case 'student_profiles' :
			?>
				<section id="student-profiles" class="featured-section" role="featured-content">
				<h3><?php echo $title; ?></h3>
			<?php
				if( $blurb ) :
			?>
				<p class="blurb"><?php echo $blurb; ?></p>
			<?php
				endif;

				$profiles = $section['profiles'];
			?>
				<div class="blocks">
				<?php
					foreach( $profiles as $profile ) :
						$ID = $profile->ID;
						$name = $profile->post_title;
						$noImage = '<img src="' . get_template_directory_uri() . '/images/no-image.png" alt="no image placeholder" />';
						$thumbnail = get_the_post_thumbnail($ID);
						$image = $thumbnail ? $thumbnail : $noImage;
						$caption = get_post(get_post_thumbnail_id($ID))->post_excerpt;
						$rank = get_field('rank', $ID);
						$description = $profile->post_content;
				?>
					<div class="block">
						<figure>
							<?php echo $image; ?>
							<figcaption>
								<?php echo $caption; ?>
							</figcaption>
						</figure>
						<p class="name">
							<?php echo $name; ?> <span class="rank"><?php echo $rank; ?></span>
						</p>
						<p class="description"><?php echo $description; ?></p>
					</div><!-- .block -->
				<?php
					endforeach;
				?>
				</div><!-- .blocks -->
				</section><!-- #student-profiles -->

			<?php
					break;

				// IMAGES OR VIDEO
				case 'section_image_video':
			?>
				<section id="image-video-blocks" class="featured-section" role="featured-content">
				<h3><?php echo $title; ?></h3>
			<?php
				if( $blurb ) :
			?>
				<p class="blurb"><?php echo $blurb; ?></p>
			<?php
				endif;

				$blocks = $section['blocks'];
			?>
				<div class="blocks">
				<?php
					foreach( $blocks as $block ) :
						$image = $block['image'];
						$title = $block['title'];
						$subtitle = $block['subtitle'];
						$description = $block['description'];
						$video = $block['video'];
				?>
					<div class="block">
						<figure>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
							<?php echo ($video ? '<a class="video-link" data-fancybox href="' . $video . '"></a>' : null); ?>
						</figure>
						<p class="title">
							<?php echo $title; ?>
							<?php echo ($subtitle ? '<br><em>' . $subtitle . '</em>' : null); ?>
						</p>
						<?php echo $description; ?>
					</div><!-- .block -->
				<?php
					endforeach;
				?>
				</div><!-- .blocks -->
				</section><!-- #image-video-blocks -->

			<?php
					break;
				default:

			}

		endforeach;
	?>

	</div><!-- #tertiary -->