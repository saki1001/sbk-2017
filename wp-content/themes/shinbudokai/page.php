<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shinbudokai
 */

get_header();

while ( have_posts() ) : the_post();

	if ( is_front_page() ) :
		get_template_part( 'template-parts/content', 'home' );

	else :
			get_template_part( 'template-parts/content', 'page' );

	endif;

endwhile; // End of the loop.
get_footer();
