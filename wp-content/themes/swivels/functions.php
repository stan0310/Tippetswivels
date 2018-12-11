<?php 
    ob_start();

    function my_theme_enqueue_styles() {
    	wp_enqueue_style( 'leaflet-style','https://unpkg.com/leaflet@1.3.4/dist/leaflet.css');
    	wp_enqueue_script( 'leaflet-script', 'https://unpkg.com/leaflet@1.3.4/dist/leaflet.js');
    	wp_enqueue_style( 'comforta','https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet');
    	wp_enqueue_style( 'quicksand','https://fonts.googleapis.com/css?Quicksand:300,400,500,700');
    	wp_enqueue_script( 'my-script',
        get_stylesheet_directory_uri() . '/myscript.js',array('jquery'), null, true);

 
   
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

	//register resources
	function register_resources(){

		//register a menu
		register_nav_menu('main-menu','Main Menu');

	
		// register a slider
		$slide = array (
			'labels' => array(
				'name' => 'slides',
				'singular_name' => 'slide',
				'menu_name' => 'slides',
			),
			'public' => true,
			'show_in_nav_menu' => true,
		);

		register_post_type('slide',$slide);

		// register a services/products
		$arg = array(
			'labels' => array(
				'name'=> 'services',
				'singular_name' => 'service',
				'menu_name' => 'services'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);

		register_post_type('service',$arg);

		// register Team Members
		$arg = array(
			'labels' => array(
				'name'=> 'team',
				'singular_name' => 'team',
				'menu_name' => 'team'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('team',$arg);

		// register contact
		$arg = array(
			'labels' => array(
				'name'=> 'contact',
				'singular_name' => 'contact',
				'menu_name' => 'contact'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('contact',$arg);


		// register about
		$arg = array(
			'labels' => array(
				'name'=> 'about',
				'singular_name' => 'about',
				'menu_name' => 'about'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('about',$arg);

		// register special offers
		$arg = array(
			'labels' => array(
				'name'=> 'specials',
				'singular_name' => 'special',
				'menu_name' => 'specials'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('special',$arg);


		// register products
		$arg = array(
			'labels' => array(
				'name'=> 'products',
				'singular_name' => 'product',
				'menu_name' => 'products'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('product',$arg);

		// register products
		$arg = array(
			'labels' => array(
				'name'=> 'industry_solutions',
				'singular_name' => 'industry_solution',
				'menu_name' => 'industry_solutions'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('industry_solution',$arg);

				// register products
		$arg = array(
			'labels' => array(
				'name'=> 'certification',
				'singular_name' => 'certification',
				'menu_name' => 'certification'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('certification',$arg);






	}

	add_action('init','register_resources');



	//menu items hooks

	function add_menu_li_class($classes,$item,$args){
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class','add_menu_li_class',10,3);

	function add_menu_anchor_class($attrs,$item,$args){
		$attrs['class'] = 'nav-link';
		return $attrs;
	}
	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,3);


	// CUSTOMISE

	function mytheme_customize_register( $wp_customize ) {
   		//All our sections, settings, and controls will be added here

   		$wp_customize->add_section( 'section_colors' , array(
		    'title'      => 'Theme Settings',
		    'priority'   => 30,
		) );

		$wp_customize->add_setting( 'heading_color_setting' , array(
		    'default'   => '#fa8072',
		    'transport' => 'refresh',
		) );


		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_color_control', array(
			'label'      => 'Heading Colors',
			'section'    => 'section_colors',
			'settings'   => 'heading_color_setting',
		) ) );

		//------- the text input

		$wp_customize->add_setting( 'font_setting', array(
		  'capability' => 'edit_theme_options',
		  'default' => 'Lato',
		  // 'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( 'font_setting', array(
		  'type' => 'text',
		  'section' => 'section_colors', // Add a default or your own section
		  'label' => 'Theme Fonts',
		  'description' => 'Please specify your font',
		) );

	




	}
	add_action( 'customize_register', 'mytheme_customize_register' );

	function mytheme_customize_css()
	{

	    ?>
	        <style type="text/css">
	            .logo_area .yummy-logo{ 
	            	color: <?php echo get_theme_mod('heading_color_setting', 'salmon');?> !important; 
	            }

	            body,p,div{
	            	font-family: <?php echo get_theme_mod('font_setting', 'quicksand');?> !important;
	            }
	        </style>
	    <?php
	}
	add_action( 'wp_head', 'mytheme_customize_css');





	
 ?>






