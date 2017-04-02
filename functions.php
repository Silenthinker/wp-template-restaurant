<?php
	function add_theme_scripts() {
	    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	    wp_enqueue_script( 'home', get_template_directory_uri() . '/assets/js/home.js', array ( 'jquery' ), 1.1, true);
	    wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/menu.js', array ( 'jquery' ), 1.1, true);
	}

	function mytheme_customize_register( $wp_customize ) {
		/*=====================*/
		$wp_customize->add_section( 'head_background_image_section', array(
		    'title'          => __( 'Head Background Image', 'themename' ),
		    'priority'       => 35,
		));
		$wp_customize->add_setting( 'head_background_image_setting', array(
		    'default'        => 'http://localhost:8888/wordpress/images/header.jpg',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'link_color', array(
		    'label'   => __( 'Head Background Image', 'themename' ),
		    'section' => 'head_background_image_section',
		    'settings'   => 'head_background_image_setting',
		) ) );
		/*===================*/
	    //All our sections, settings, and controls will be added here
		// section
		$wp_customize->add_section( 'opening_time', array(
		    'title'          => __( 'Opening Hour', 'themename' ),
		    'priority'       => 35,
		) );
		$wp_customize->add_section( 'contact', array(
		    'title'          => __( 'Contacts', 'themename' ),
		    'priority'       => 35,
		) );
		$wp_customize->add_section( 'background_color', array(
		    'title'          => __( 'Background Color', 'themename' ),
		    'priority'       => 40,
		) );
		// setting
		$wp_customize->add_setting( 'background_color_scheme', array(
		    'default'        => '#443333',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		// opening hour
		$wp_customize->add_setting( 'mon', array(
		    'default'        => 'Closed',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		$wp_customize->add_setting( 'tue_to_fri', array(
		    'default'        => '8am - 12am',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		$wp_customize->add_setting( 'sat_to_sun', array(
		    'default'        => '7am - 1am',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		$wp_customize->add_setting( 'holiday', array(
		    'default'        => '12pm-12am',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		// contact
		$wp_customize->add_setting( 'address_1', array(
		    'default'        => '4578 Zurich',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		$wp_customize->add_setting( 'address_2', array(
		    'default'        => 'Badenerstrasse 500',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		$wp_customize->add_setting( 'phone', array(
		    'default'        => '(606) 144-0100',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		$wp_customize->add_setting( 'email', array(
		    'default'        => 'admin@laplace.com',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		// background color control
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
			'label'      => __( 'Background Color', 'mytheme' ),
			'section'    => 'background_color',
			'settings'   => 'background_color_scheme',
		) ) );
		// contact and opening
		$wp_customize->add_control(
		    new WP_Customize_Control(
		        $wp_customize,
		        'mon',
		        array(
		            'label'          => __( 'Monday', 'theme_name' ),
		            'section'        => 'opening_time',
		            'settings'       => 'mon',
		            'type'           => 'text',
		        )
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Control(
		        $wp_customize,
		        'tue_to_fri',
		        array(
		            'label'          => __( 'Tuesday-Friday', 'theme_name' ),
		            'section'        => 'opening_time',
		            'settings'       => 'tue_to_fri',
		            'type'           => 'text',
		        )
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Control(
		        $wp_customize,
		        'sat_to_sun',
		        array(
		            'label'          => __( 'Saturday-Sunday', 'theme_name' ),
		            'section'        => 'opening_time',
		            'settings'       => 'sat_to_sun',
		            'type'           => 'text',
		        )
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Control(
		        $wp_customize,
		        'holiday',
		        array(
		            'label'          => __( 'Holidays', 'theme_name' ),
		            'section'        => 'opening_time',
		            'settings'       => 'holiday',
		            'type'           => 'text',
		        )
		    )
		);

		$wp_customize->add_control(
		    new WP_Customize_Control(
		        $wp_customize,
		        'address_1',
		        array(
		            'label'          => __( 'Address', 'theme_name' ),
		            'section'        => 'contact',
		            'settings'       => 'address_1',
		            'type'           => 'text',
		        )
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Control(
		        $wp_customize,
		        'address_2',
		        array(
		            'label'          => __( 'Detailed Address', 'theme_name' ),
		            'section'        => 'contact',
		            'settings'       => 'address_2',
		            'type'           => 'text',
		        )
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Control(
		        $wp_customize,
		        'phone',
		        array(
		            'label'          => __( 'Phone', 'theme_name' ),
		            'section'        => 'contact',
		            'settings'       => 'phone',
		            'type'           => 'text',
		        )
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Control(
		        $wp_customize,
		        'email',
		        array(
		            'label'          => __( 'Email', 'theme_name' ),
		            'section'        => 'contact',
		            'settings'       => 'email',
		            'type'           => 'email',
		        )
		    )
		);
	}

	function mytheme_customize_css()
	{
		// background
	    ?>
	         <style type="text/css">
	         	section.event,
	         	section.menu {
	         		background-color: <?php echo get_theme_mod('background_color_scheme', '#443333'); ?>;
	         	}
	         	section.welcome{
	         		background-image: url(<?php echo get_theme_mod('head_background_image_setting');?>);
	         	}
	         </style>
	    <?php
	}

	add_action( 'wp_head', 'mytheme_customize_css');
	add_action( 'customize_register', 'mytheme_customize_register' );
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

	if ( ! class_exists('Smk_ThemeView') ) {
		class Smk_ThemeView{
			private $args;
			private $file;
	 
			public function __get($name) {
				return $this->args[$name];
			}
	 
			public function __construct($file, $args = array()) {
				$this->file = $file;
				$this->args = $args;
			}
	 
			public function __isset($name){
				return isset( $this->args[$name] );
			}
	 
			public function render() {
				if( locate_template($this->file) ){
					include( locate_template($this->file) );//Theme Check free. Child themes support.
				}
			}
		}
	}
	if( ! function_exists('smk_get_template_part') ){
		function smk_get_template_part($file, $args = array()){
			$template = new Smk_ThemeView($file, $args);
			$template->render();
		}
	}

?>