<?php

/**
* ------------------------------------------------------------------------------------
* bani-customizer-footer.php
*
* For adding customizer settings - footer settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'bani_footer_section' , array(
	'title'      => esc_html__( 'Footer Settings', 'bani' ),
	'priority'   => 40,
) );


/**
* Footer Left Text
*/
$wp_customize->add_setting(
	'bani_footer_text_left',
	array(
		'default'     => esc_html__( '(c) Copyright 2017 - All Rights Reserved', 'bani' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bani_footer_text_left',
		array(
			'label'      => esc_html__( 'Footer Text Left', 'bani' ),
			'section'    => 'bani_footer_section',
			'settings'   => 'bani_footer_text_left',
			'type'		 => 'text'
		)
	)
);




/**
* Hide Social Media Icons
*/
$wp_customize->add_setting(
	'bani_hide_social_icons_footer',
	array(
        'default' => false,
		'sanitize_callback' => 'bani_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'bani_hide_social_icons_footer',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Social Icons in Footer', 'bani' ),
        'section' => 'bani_footer_section',
        'priority'	 => 0
    )
);
