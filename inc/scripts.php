<?php

class lassoThemeScripts {

	public function __construct(){

		add_action('wp_enqueue_scripts', array($this,'load_scripts'));
		add_action('wp_head', 			array($this,'typekit'));

	}

	public function load_scripts(){

		wp_enqueue_style('dashicons');
		wp_enqueue_style('lasso-theme-style', get_stylesheet_directory_uri().'/assets/css/lasso-theme.css', LASSO_THEME_VERSION);

	}

	public function typekit(){
		?>
		<script src="//use.typekit.net/ipv5mvn.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<?php
	}
}
new lassoThemeScripts;