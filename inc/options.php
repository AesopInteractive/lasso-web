<?php

class lassoThemeOptions {

	public static function register($wp_customize){

		// APPEARENCE

		$wp_customize->add_section( 'lasso_theme_options', array(
			'title'	=> __('Theme Options', 'ah-core')
		) );

		$wp_customize->add_setting( 'lt_dl_id', array(
			'type' 		=> 'theme_mod',
			'default'	=> '',
			'label'		=> __('Download ID', 'ah-core'),
			'transport' => 'postMessage'
		) );
		$wp_customize->add_control( 'lt_dl_id', array(
			'label' 	=> __('Download ID', 'ah-core'),
			'section' 	=> 'lasso_theme_options',
			'settings' 	=> 'lt_dl_id',
			'description' => __('Download ID','ah-core')
		) );

		$wp_customize->add_setting( 'faq_id', array(
			'type' 		=> 'theme_mod',
			'default'	=> '',
			'label'		=> __('FAQ Page ID', 'ah-core'),
			'transport' => 'postMessage'
		) );
		$wp_customize->add_control( 'faq_id', array(
			'label' 	=> __('FAQ Page ID', 'ah-core'),
			'section' 	=> 'lasso_theme_options',
			'settings' 	=> 'faq_id',
			'description' => __('FAQ Page ID','ah-core')
		) );
	}


}
// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'lassoThemeOptions' , 'register' ) );