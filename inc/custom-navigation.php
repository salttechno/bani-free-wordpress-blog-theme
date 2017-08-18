<?php
/**
 * Implementation of the Custom Navigation
 *
 * @package Bani
 */

if ( ! function_exists( 'bani_navigation' ) ) {
    function bani_navigation() { ?>
    	<div class="bani-navigation row">

    		<div class="bani-newer col-sm-6"><?php previous_posts_link(wp_kses( __( '<i class="fa fa-angle-left"></i> Newer Posts', 'bani' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>
            <div class="bani-older col-sm-6 text-right"><?php next_posts_link(wp_kses( __( 'Older Posts <i class="fa fa-angle-right"></i>', 'bani' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>

    	</div>
    <?php }
}
