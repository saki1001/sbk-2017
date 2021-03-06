<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shinbudokai
 */

if ( !is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

?>
	<!-- Default Sidebar -->
	<aside id="secondary" class="widget-area" role="complementary">

    <?php
        $customSidebar = get_field('sidebar');
        if ( !empty($customSidebar) ) :
          echo $customSidebar;

        else :
    ?>
		<div class="sidebar schedule">
			<?php dynamic_sidebar(); ?>
		</div>
    <?php
        endif;
    ?>
	</aside><!-- #secondary -->