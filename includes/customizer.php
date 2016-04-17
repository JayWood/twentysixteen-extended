<?php

/**
 * Twentysixteen Extended
 * Customizer File
 */

/**
 * @param WP_Customize_Manager $wp_customize
 */
function twe_customize_register( $wp_customize ) {

	$wp_customize->add_setting( 'page_bg_image', array(
		'default' => '',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'page_bg_image',
			array(
				'label' => 'Page background image',
				'settings' => 'page_bg_image',
				'section' => 'colors',
			)
		)
	);
}
add_action( 'customize_register', 'twe_customize_register', 12 );
