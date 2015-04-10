<?php

class lassoThemeScripts {

	public function __construct(){

		add_action('wp_enqueue_scripts', array($this,'load_scripts'));
		add_action('wp_head', 			array($this,'typekit'));

	}

	public function load_scripts(){

		wp_enqueue_style('dashicons');
		wp_enqueue_style('lasso-theme-style', get_stylesheet_directory_uri().'/assets/css/lasso-theme.css', LASSO_THEME_VERSION);

		if ( is_page('time-saving') ) {
			wp_enqueue_script('jquery-ui-slider');
			wp_enqueue_script('lasso-theme-script', get_stylesheet_directory_uri().'/assets/js/lasso-theme.js', array('jquery'), LASSO_THEME_VERSION, true);
		}
	}

	public function typekit(){
		?>
		<script src="//use.typekit.net/ipv5mvn.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<?php
	}
}
new lassoThemeScripts;