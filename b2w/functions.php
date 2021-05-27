<?php 
	
	function b_theme_theme_supports(){
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		load_theme_textdomain( 'b_theme' );

		/* Menu Registration  */
		register_nav_menus(array(
			'top_menu'				=> 'Top Menu',
			'bottom_menu'			=> 'Bottom Menu'
		));
	}

	add_action('after_setup_theme','b_theme_theme_supports');






	function b_theme_assets(){

		wp_enqueue_style('fontAwesome-5', get_theme_file_uri().'/assets/FontAwesome/css/all.min.css',null, true,'all' );
		wp_enqueue_style('bootstrap', get_theme_file_uri().'/assets/css/bootstrap.min.css',null, true,'all' );
		wp_enqueue_style('font-awesome', get_theme_file_uri().'/assets/css/font-awesome/css/font-awesome.min.css',null, true,'all' );
		wp_enqueue_style('google-font', 'http://fonts.googleapis.com/css?family=Raleway:400,700',null, true,'all' );
		wp_enqueue_style('main', get_stylesheet_uri() );


		wp_enqueue_script( 'bootstrap', get_theme_file_uri().'/assets/js/bootstrap.min.js', array('jquery') ,true, true );
		wp_enqueue_script( 'main', get_theme_file_uri().'/assets/js/main.js', array('jquery') ,true, true );
		wp_enqueue_script( 'typekit', '//use.typekit.net/gla7wnd.js', array('jquery') ,true, true );

	}

	add_action('wp_enqueue_scripts','b_theme_assets');


	// function b_theme_custom_post_type(){
	// 	register_post_type('project_features',[
	// 		'public'			=>true,
	// 		'labels'			=>[
	// 			'name'			=>'Project Features',
	// 			'all_items'		=>'All Project',
	// 			'add_new'		=>'New Project',
	// 		],
	// 		'menu_icon'			=>'dashicons-cart',
	// 		'supports'			=>['title','editor','thumbnail'],
	// 	]);
	// }
	// add_action('init','b_theme_custom_post_type');










