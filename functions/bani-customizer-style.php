<?php

/**
* ------------------------------------------------------------------------------------
* bani-customizer-style.php
*
* For adding styling to page as per customizer
* ------------------------------------------------------------------------------------
*/


function bani_customizer_style() {
    ?>

    <style type="text/css">
        <?php if ( get_theme_mod( 'bani_logo_height' ) ) : ?> .bani-logo-img { height: <?php echo get_theme_mod( 'bani_logo_height' ); ?>px; } <?php endif; ?>
        
    </style>

    <?php
}
add_action( 'wp_head', 'bani_customizer_style' );
