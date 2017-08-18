<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bani
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-lg-3 bani-sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
