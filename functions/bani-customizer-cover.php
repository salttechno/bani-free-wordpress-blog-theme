<?php

/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'bani_cover_section' , array(
	'title'      => esc_html__( 'Cover Section Settings', 'bani' ),
	'priority'   => 21,
) );


/**
* Hide cover section
*/
$wp_customize->add_setting(
	'bani_hide_cover_section',
	array(
        'default' => false,
		'sanitize_callback' => 'bani_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'bani_hide_cover_section',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Cover Section', 'bani' ),
        'section' => 'bani_cover_section',
        'description' => 'Check this to hide cover section from Homepage.'
    )
);


/**
* Cover Sub Title
*/
$wp_customize->add_setting(
	'bani_cover_subtitle',
	array(
		'default'     => esc_html__( 'Welcome to my blog!', 'bani' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bani_cover_subtitle',
		array(
			'label'      => esc_html__( 'Cover Sub-title (First Line)', 'bani' ),
			'section'    => 'bani_cover_section',
			'settings'   => 'bani_cover_subtitle',
			'type'		 => 'text'
		)
	)
);



/**
* Cover Static Title
*/
$wp_customize->add_setting(
	'bani_cover_static_title',
	array(
		'default'     => esc_html__( 'I am a', 'bani' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bani_cover_static_title',
		array(
			'label'      => esc_html__( 'Cover Title (Static Part)', 'bani' ),
			'section'    => 'bani_cover_section',
			'settings'   => 'bani_cover_static_title',
			'type'		 => 'text',
            'description' => 'Enter static part of the title here. e.g.: "I am a"'
		)
	)
);



/**
* Cover Title Typer
*/
$wp_customize->add_setting(
	'bani_cover_typer_title',
	array(
		'default'     => esc_html__( 'Father...,Son...,Writer...,Designer...,Developer...,Blogger!', 'bani' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bani_cover_typer_title',
		array(
			'label'      => esc_html__( 'Cover Title (Typer Part)', 'bani' ),
			'section'    => 'bani_cover_section',
			'settings'   => 'bani_cover_typer_title',
			'type'		 => 'text',
            'description' => 'Enter comma separated list of typing strings. e.g.: "Father...,Son...,Writer...,Designer...,Developer...,Blogger!"'
		)
	)
);



/**
* Cover Title Paragraph
*/
$wp_customize->add_setting(
	'bani_cover_paragraph',
	array(
		'default'     => esc_html__( 'This is a perfect place to introduce yourself and this blog. You can easily customize this text from WordPress admin panel. If you want, you can disable this section. You can also customize colors used for this template easily.', 'bani' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bani_cover_paragraph',
		array(
			'label'      => esc_html__( 'Cover Intro Paragraph', 'bani' ),
			'section'    => 'bani_cover_section',
			'settings'   => 'bani_cover_paragraph',
			'type'		 => 'textarea'
		)
	)
);
