<?php

/**
* ------------------------------------------------------------------------------------
* bani-customizer-logo-header.php
*
* For adding customizer settings - header & logo settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'bani_logo_header_section' , array(
	'title' => esc_html__( 'Logo & Header Settings', 'bani' ),
	'priority' => 22,
) );




/**
* Add logo
*/
$wp_customize->add_setting(
	'bani_logo',
	array(
		'sanitize_callback' => 'esc_url_raw'
	)
);
// Add control
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'bani_logo',
		array(
			'label' => esc_html__( 'Upload Logo', 'bani' ),
			'section' => 'bani_logo_header_section',
			'settings' => 'bani_logo'
		)
	)
);



/**
* Add logo height
*/
$wp_customize->add_setting(
	'bani_logo_height',
	array(
		'default' => '50',
		'sanitize_callback' => 'bani_sanitize_number'
	)
);
// Add control
$wp_customize->add_control(
    'bani_logo_height',
    array(
        'type' => 'number',
        'label' => esc_html__( 'Logo Height (in px)', 'bani' ),
        'section' => 'bani_logo_header_section',
        'description' => 'Width will be adjusted proportionally.'
    )
);




/**
* Display Tagline option
*/
$wp_customize->add_setting(
	'bani_display_tagline',
	array(
        'default' => false,
		'sanitize_callback' => 'bani_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'bani_display_tagline',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Display Tagline Under Logo', 'bani' ),
        'section' => 'bani_logo_header_section'
    )
);
