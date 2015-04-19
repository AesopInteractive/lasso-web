<?php

class lassoThemeFunctions {

	function __construct(){

		// Set some constants
		define('LASSO_THEME_VERSION', '0.1');
		define('LASSO_THEME_DIR', get_stylesheet_directory());
		define('LASSO_THEME_URL', get_stylesheet_directory_uri());

		add_action('after_setup_theme', array($this,'setup'));
		add_action('init', 				array($this,'editor_styles'));
		add_action( 'init', 							array($this,'track_demo') );

		require_once(LASSO_THEME_DIR.'/inc/helpers.php');
		require_once(LASSO_THEME_DIR.'/inc/options.php');
		require_once(LASSO_THEME_DIR.'/inc/scripts.php');
	}

	function setup(){

		// set theme width
		if ( ! isset( $content_width ) ) {
			$content_width = 700;

		}

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list',
		) );

		register_nav_menus(
			array(
			  'primary' => 'Primary'
			)
		);

		// Add extended style support for aesop
		add_theme_support("aesop-component-styles", array("parallax", "image", "quote", "gallery", "content", "video", "audio", "collection", "chapter", "document", "character", "map", "timeline" ) );
	}

	public function editor_styles(){

		add_editor_style( 'editor-style.css' );
	}

	function track_demo(){
		add_action( 'ninja_forms_post_process', array($this,'track_demo_emails') );
	}

	function track_demo_emails(){

		if ( class_exists('trackWP') ) {

			$user_id = rand();

		  	global $ninja_forms_processing;

		  	//Get all the user submitted values
		  	$data = $ninja_forms_processing->get_all_fields();

		  	// the email field
		  	$email = $data[6];

		  	$traits = array(
				'userId' 	=>  $user_id,
				'email' 	=>  $email,
			);

			// track the discount code within customerio
			$args = array(
	        	'email' 	=> $email,
	        	'created'		=> time()
			);

	  		trackWP::identify_user( $user_id, $traits );
		  	trackWP::track_event( 'demo_created', $args, $traits, $user_id );

		}

	}

}

new lassoThemeFunctions;