<?php
/**
 * Color customizer
 *
 * @package SKDD
 */

// Default values.
$defaults = SKDD_options();

// Theme color.
$wp_customize->add_setting(
	'SKDD_setting[theme_color]',
	array(
		'default'           => $defaults['theme_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[theme_color]',
		array(
			'label'    => __( 'Theme Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[theme_color]',
		)
	)
);

// Secondary Theme color.
$wp_customize->add_setting(
	'SKDD_setting[secondary_theme_color]',
	array(
		'default'           => $defaults['secondary_theme_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[secondary_theme_color]',
		array(
			'label'    => __( 'Secondary Theme Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[secondary_theme_color]',
		)
	)
);

// Background color.
$wp_customize->add_setting(
	'SKDD_setting[background_color]',
	array(
		'default'           => $defaults['background_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[background_color]',
		array(
			'label'    => __( 'Background Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[background_color]',
		)
	)
);


// Second background color.
$wp_customize->add_setting(
	'SKDD_setting[second_background_color]',
	array(
		'default'           => $defaults['second_background_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[second_background_color]',
		array(
			'label'    => __( 'Second Background Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[second_background_color]',
		)
	)
);

// ----------------------------------------------------------------------------------------------------------

$wp_customize->add_setting(
	'color_divider_section_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	new SKDD_Divider_Control(
		$wp_customize,
		'color_divider_section_1',
		array(
			'section'  => 'SKDD_color',
			'settings' => 'color_divider_section_1',
			'type'     => 'divider',
		)
	)
);

// Heading color.
$wp_customize->add_setting(
	'SKDD_setting[heading_color]',
	array(
		'default'           => $defaults['heading_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[heading_color]',
		array(
			'label'    => __( 'Heading Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[heading_color]',
		)
	)
);

// Text Color.
$wp_customize->add_setting(
	'SKDD_setting[text_color]',
	array(
		'default'           => $defaults['text_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[text_color]',
		array(
			'label'    => __( 'Text Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[text_color]',
		)
	)
);

// Accent Color.
$wp_customize->add_setting(
	'SKDD_setting[accent_color]',
	array(
		'default'           => $defaults['accent_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[accent_color]',
		array(
			'label'    => __( 'Link / Accent Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[accent_color]',
		)
	)
);

// offset color.
$wp_customize->add_setting(
	'SKDD_setting[offset_color]',
	array(
		'default'           => $defaults['offset_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[offset_color]',
		array(
			'label'    => __( 'Offset Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[offset_color]',
		)
	)
);


// ----------------------------------------------------------------------------------------------------------

$wp_customize->add_setting(
	'color_divider_section_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	new SKDD_Divider_Control(
		$wp_customize,
		'color_divider_section_2',
		array(
			'section'  => 'SKDD_color',
			'settings' => 'color_divider_section_2',
			'type'     => 'divider',
		)
	)
);

// Background color.
$wp_customize->add_setting(
	'SKDD_setting[header_background_color]',
	array(
		'default'           => $defaults['header_background_color'],
		'sanitize_callback' => 'SKDD_sanitize_rgba_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new SKDD_Color_Control(
		$wp_customize,
		'SKDD_setting[header_background_color]',
		array(
			'label'    => __( 'Header Background', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[header_background_color]',
		)
	)
);

// Primary parent menu color.
$wp_customize->add_setting(
	'SKDD_setting[primary_menu_color]',
	array(
		'default'           => $defaults['primary_menu_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[primary_menu_color]',
		array(
			'label'    => __( 'Parent Menu Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[primary_menu_color]',
		)
	)
);

// Primary sub menu color.
$wp_customize->add_setting(
	'SKDD_setting[primary_sub_menu_color]',
	array(
		'default'           => $defaults['primary_sub_menu_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'option',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'SKDD_setting[primary_sub_menu_color]',
		array(
			'label'    => __( 'Sub-menu Color', 'SKDD' ),
			'section'  => 'SKDD_color',
			'settings' => 'SKDD_setting[primary_sub_menu_color]',
		)
	)
);