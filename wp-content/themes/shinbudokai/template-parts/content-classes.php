<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shinbudokai
 */

?>
	<h1>Schedule</h1>

	<div id="weekly-schedule">
	<?php
		$days = get_field('weekly_schedule');

		foreach( $days as $day ) :
			// error_log(print_r($day, true));
			$dayName = $day['day'];
			$description = $day['class_description'];
			$teacher = $day['teacher'];
			$tags = $day['tags'];
	?>
		<div class="day">

			<div class="day-header">
				<p><?php echo $dayName; ?></p>
			<?php
				foreach( $tags as $tag ) :
			?>
				<span class="tag <?php echo $tag; ?>"></span>
			<?php
				endforeach;
			?>
			</div><!-- .day-header -->

			<div class="day-body">
				<?php echo $description; ?>
				<p class="teacher"><?php echo $teacher; ?></p>
			</div><!-- .day-body -->

		</div><!-- .day -->
	<?php
		endforeach;
	?>

		<div class="day legend">
			<div class="legend-header">Legend</div>

			<p>
				<span class="tag basic-aikido"></span>
				Basic Aikido/Genkido<!--  (all&nbsp;levels) -->
			</p>
			<p>
				<span class="tag advanced-aikido"></span>
				Advanced Aikido<!--  (3rd&nbsp;kyu&nbsp;&amp;&nbsp;up) -->
			</p>
			<p>
				<span class="tag basic-weapons"></span>
				Basic Weapons<!--  (all&nbsp;levels) -->
			</p>
			<p>
				<span class="tag advanced-weapons"></span>
				Advanced Weapons<!--  (3rd&nbsp;kyu&nbsp;&amp;&nbsp;up) -->
			</p>
		</div>
	</div><!-- #weekly-schedule -->

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php
				the_content();
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

<?php
	include(locate_template('/template-parts/content-tertiary.php'));
?>