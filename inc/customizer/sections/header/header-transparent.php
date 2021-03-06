<?php
/**
 * Header Transparent
 *
 * @package SKDD
 */

// Default values.
$defaults = SKDD_options();

// Enable/disable Header transparent.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent]',
	array(
		'default'           => $defaults['header_transparent'],
		'type'              => 'option',
		'sanitize_callback' => 'SKDD_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new SKDD_Switch_Control(
		$wp_customize,
		'SKDD_setting[header_transparent]',
		array(
			'label'    => __( 'Enable Transparent Header', 'SKDD' ),
			'settings' => 'SKDD_setting[header_transparent]',
			'section'  => 'SKDD_header_transparent',
		)
	)
);

// Disable on 404, Search and Archive.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_disable_archive]',
	array(
		'default'           => $defaults['header_transparent_disable_archive'],
		'type'              => 'option',
		'sanitize_callback' => 'SKDD_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_disable_archive]',
		array(
			'label'    => __( 'Disable on 404, Search & Archives', 'SKDD' ),
			'settings' => 'SKDD_setting[header_transparent_disable_archive]',
			'section'  => 'SKDD_header_transparent',
			'type'     => 'checkbox',
		)
	)
);

// Disable on Index.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_disable_index]',
	array(
		'default'           => $defaults['header_transparent_disable_index'],
		'type'              => 'option',
		'sanitize_callback' => 'SKDD_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_disable_index]',
		array(
			'label'    => __( 'Disable on Blog page', 'SKDD' ),
			'settings' => 'SKDD_setting[header_transparent_disable_index]',
			'section'  => 'SKDD_header_transparent',
			'type'     => 'checkbox',
		)
	)
);

// Disable on Pages.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_disable_page]',
	array(
		'default'           => $defaults['header_transparent_disable_page'],
		'type'              => 'option',
		'sanitize_callback' => 'SKDD_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_disable_page]',
		array(
			'label'    => __( 'Disable on Pages', 'SKDD' ),
			'settings' => 'SKDD_setting[header_transparent_disable_page]',
			'section'  => 'SKDD_header_transparent',
			'type'     => 'checkbox',
		)
	)
);

// Disable on Posts.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_disable_post]',
	array(
		'default'           => $defaults['header_transparent_disable_post'],
		'type'              => 'option',
		'sanitize_callback' => 'SKDD_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_disable_post]',
		array(
			'label'    => __( 'Disable on Posts', 'SKDD' ),
			'settings' => 'SKDD_setting[header_transparent_disable_post]',
			'section'  => 'SKDD_header_transparent',
			'type'     => 'checkbox',
		)
	)
);

// Disable on Shop page.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_disable_shop]',
	array(
		'default'           => $defaults['header_transparent_disable_shop'],
		'type'              => 'option',
		'sanitize_callback' => 'SKDD_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_disable_shop]',
		array(
			'label'    => __( 'Disable on Shop page', 'SKDD' ),
			'settings' => 'SKDD_setting[header_transparent_disable_shop]',
			'section'  => 'SKDD_header_transparent',
			'type'     => 'checkbox',
		)
	)
);

// Disable on Product page.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_disable_product]',
	array(
		'default'           => $defaults['header_transparent_disable_product'],
		'type'              => 'option',
		'sanitize_callback' => 'SKDD_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_disable_product]',
		array(
			'label'    => __( 'Disable on Product page', 'SKDD' ),
			'settings' => 'SKDD_setting[header_transparent_disable_product]',
			'section'  => 'SKDD_header_transparent',
			'type'     => 'checkbox',
		)
	)
);

// Enable on devices.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_enable_on]',
	array(
		'default'           => $defaults['header_transparent_enable_on'],
		'type'              => 'option',
		'sanitize_callback' => 'SKDD_sanitize_choices',
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_enable_on]',
		array(
			'label'    => __( 'Enable On', 'SKDD' ),
			'settings' => 'SKDD_setting[header_transparent_enable_on]',
			'section'  => 'SKDD_header_transparent',
			'type'     => 'select',
			'choices'  => array(
				'desktop'     => __( 'Desktop', 'SKDD' ),
				'mobile'      => __( 'Mobile', 'SKDD' ),
				'all-devices' => __( 'Desktop + Mobile', 'SKDD' ),
			),
		)
	)
);

// Logo Transparent.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_logo]',
	array(
		'type'              => 'option',
		'default'           => $defaults['header_transparent_logo'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_logo]',
		array(
			'label'    => __( 'Header Transparent Logo', 'SKDD' ),
			'section'  => 'SKDD_header_transparent',
			'settings' => 'SKDD_setting[header_transparent_logo]',
		)
	)
);

// Menu Transparent color.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_menu_color]',
	array(
		'default'           => $defaults['header_transparent_menu_color'],
		'sanitize_callback' => 'SKDD_sanitize_rgba_color',
		'type'              => 'option',
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	new SKDD_Color_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_menu_color]',
		array(
			'label'    => __( 'Menu Transparent Color', 'SKDD' ),
			'section'  => 'SKDD_header_transparent',
			'settings' => 'SKDD_setting[header_transparent_menu_color]',
		)
	)
);

// Icon Transparent color.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_icon_color]',
	array(
		'default'           => $defaults['header_transparent_icon_color'],
		'sanitize_callback' => 'SKDD_sanitize_rgba_color',
		'type'              => 'option',
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	new SKDD_Color_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_icon_color]',
		array(
			'label'    => __( 'Icon Transparent Color', 'SKDD' ),
			'section'  => 'SKDD_header_transparent',
			'settings' => 'SKDD_setting[header_transparent_icon_color]',
		)
	)
);

// Count Transparent background.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_count_background]',
	array(
		'default'           => $defaults['header_transparent_count_background'],
		'sanitize_callback' => 'SKDD_sanitize_rgba_color',
		'type'              => 'option',
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	new SKDD_Color_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_count_background]',
		array(
			'label'    => __( 'Count Transparent Background', 'SKDD' ),
			'section'  => 'SKDD_header_transparent',
			'settings' => 'SKDD_setting[header_transparent_count_background]',
		)
	)
);


// Border divider.
$wp_customize->add_setting(
	'header_transparent_border_divider',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	new SKDD_Divider_Control(
		$wp_customize,
		'header_transparent_border_divider',
		array(
			'section'  => 'SKDD_header_transparent',
			'settings' => 'header_transparent_border_divider',
			'type'     => 'divider',
		)
	)
);

// Border width.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_border_width]',
	array(
		'default'           => $defaults['header_transparent_border_width'],
		'sanitize_callback' => 'absint',
		'type'              => 'option',
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	new SKDD_Range_Slider_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_border_width]',
		array(
			'label'    => __( 'Bottom Border Width', 'SKDD' ),
			'section'  => 'SKDD_header_transparent',
			'settings' => array(
				'desktop' => 'SKDD_setting[header_transparent_border_width]',
			),
			'choices'  => array(
				'desktop' => array(
					'min'  => apply_filters( 'SKDD_header_transparent_border_width_min_step', 0 ),
					'max'  => apply_filters( 'SKDD_header_transparent_border_width_max_step', 20 ),
					'step' => 1,
					'edit' => true,
					'unit' => 'px',
				),
			),
		)
	)
);

// Border color.
$wp_customize->add_setting(
	'SKDD_setting[header_transparent_border_color]',
	array(
		'default'           => $defaults['header_transparent_border_color'],
		'sanitize_callback' => 'SKDD_sanitize_rgba_color',
		'type'              => 'option',
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	new SKDD_Color_Control(
		$wp_customize,
		'SKDD_setting[header_transparent_border_color]',
		array(
			'label'    => __( 'Border Color', 'SKDD' ),
			'section'  => 'SKDD_header_transparent',
			'settings' => 'SKDD_setting[header_transparent_border_color]',
		)
	)
);
