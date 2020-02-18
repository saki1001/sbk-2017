<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package shinbudokai
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">&larr; Back to <?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></a><br>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			$args = array(
				'prev_text' => '&larr; %title',
				'next_text' => '%title &rarr;',
			);
			echo get_the_post_navigation($args);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
