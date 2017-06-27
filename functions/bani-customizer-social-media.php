<?php

/**
* ------------------------------------------------------------------------------------
* bani-customizer-social-media.php
*
* For adding customizer settings - social media settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'bani_social_media_section' , array(
	'title'      => esc_html__( 'Social Media Settings', 'bani' ),
	'priority'   => 22,
) );




/**
* Social Links
*/
// Add Settings
$wp_customize->add_setting(
	'bani_facebook',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_twitter',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_instagram',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_pinterest',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_tumblr',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_bloglovin',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_tumblr',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_google',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_youtube',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_dribbble',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_soundcloud',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_vimeo',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_linkedin',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_snapchat',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'bani_rss',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'facebook',
		array(
			'label'      => esc_html__( 'Facebook', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_facebook',
			'type'		 => 'text',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'twitter',
		array(
			'label'      => esc_html__( 'Twitter', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_twitter',
			'type'		 => 'text',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram',
		array(
			'label'      => esc_html__( 'Instagram', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_instagram',
			'type'		 => 'text',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'pinterest',
		array(
			'label'      => esc_html__( 'Pinterest', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_pinterest',
			'type'		 => 'text',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bloglovin',
		array(
			'label'      => esc_html__( 'Bloglovin', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_bloglovin',
			'type'		 => 'text',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'google',
		array(
			'label'      => esc_html__( 'Google Plus', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_google',
			'type'		 => 'text',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'tumblr',
		array(
			'label'      => esc_html__( 'Tumblr', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_tumblr',
			'type'		 => 'text',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'youtube',
		array(
			'label'      => esc_html__( 'Youtube', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_youtube',
			'type'		 => 'text',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'dribbble',
		array(
			'label'      => esc_html__( 'Dribbble', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_dribbble',
			'type'		 => 'text',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'soundcloud',
		array(
			'label'      => esc_html__( 'Soundcloud', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_soundcloud',
			'type'		 => 'text',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'vimeo',
		array(
			'label'      => esc_html__( 'Vimeo', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_vimeo',
			'type'		 => 'text',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'linkedin',
		array(
			'label'      => esc_html__( 'Linkedin', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_linkedin',
			'type'		 => 'text',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'snapchat',
		array(
			'label'      => esc_html__( 'Snapchat', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_snapchat',
			'type'		 => 'text',
			'priority'	 => 13
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'rss',
		array(
			'label'      => esc_html__( 'RSS Link', 'bani' ),
			'section'    => 'bani_social_media_section',
			'settings'   => 'bani_rss',
			'type'		 => 'text',
			'priority'	 => 14
		)
	)
);
