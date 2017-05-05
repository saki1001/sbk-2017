<?php
/**
 * Tertiary content sections:
 * Student Profiles, Images, Videos 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shinbudokai
 */

?>

	<div id="tertiary" class="featured-content-area">

	<?php
		$sections = get_field('sections');
		// error_log(print_r($sections, true));

		foreach( $sections as $section ) :
			$layout = $section['acf_fc_layout'];
			$title = $section['title'];
			$blurb = $section['blurb'];

			// error_log(print_r($section, true));

			switch($layout) {

				// STUDENT PROFILES
				case 'student_profiles' :
			?>
				<section id="student-profiles" role="featured-content">
				<h3><?php echo $title; ?></h3>
			<?php
				if( $blurb ) :
			?>
				<p class="blurb"><?php echo $blurb; ?></p>
			<?php
				endif;

				$profiles = $section['profiles'];
			?>
				<div class="profiles">
				<?php
					foreach( $profiles as $profile ) :
						$ID = $profile->ID;
						$name = $profile->post_title;
						$caption = get_post(get_post_thumbnail_id($ID))->post_excerpt;
						$rank = get_field('rank', $ID);
						$description = $profile->post_excerpt;
				?>
					<div class="profile">
						<figure>
							<?php echo get_the_post_thumbnail($ID); ?>
							<figcaption>
								<?php echo $caption; ?>
							</figcaption>
						</figure>
						<p class="name">
							<?php echo $name; ?> <span class="rank"><?php echo $rank; ?></span>
						</p>
						<p class="description"><?php echo $description; ?></p>
					</div><!-- .profile -->
				<?php
					endforeach;
				?>
				</div><!-- .profiles -->
				</section><!-- #student-profiles -->

			<?php
					break;
				default:

			}

		endforeach;
	?>

	</div><!-- #tertiary -->