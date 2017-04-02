<?php
	function add_theme_scripts() {
	    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	    wp_enqueue_script( 'home', get_template_directory_uri() . '/assets/js/home.js', array ( 'jquery' ), 1.1, true);
	    wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/menu.js', array ( 'jquery' ), 1.1, true);
	}

	function mytheme_customize_register( $wp_customize ) {
	   //All our sections, settings, and controls will be added here
		$wp_customize->add_section( 'contact_and_opening', array(
		    'title'          => __( 'Contact and Opening', 'themename' ),
		    'priority'       => 35,
		) );
		$wp_customize->add_section( 'background_color', array(
		    'title'          => __( 'Background Color', 'themename' ),
		    'priority'       => 40,
		) );
		$wp_customize->add_setting( 'background_color_scheme', array(
		    'default'        => '#443333',
		    'type'           => 'theme_mod',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		$wp_customize->add_setting( 'contact_text', array(
		    'default'        => 'some-default-value',
		    'type'           => 'theme_mod',
		    'capability'     => 'edit_theme_options',
		    'transport' 	 => 'refresh', // update by completely reloading itself when this setting is changed
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
			'label'      => __( 'Background Color', 'mytheme' ),
			'section'    => 'background_color',
			'settings'   => 'background_color_scheme',
		) ) );
	}

	function mytheme_customize_css()
	{
	    ?>
	         <style type="text/css">
	         	section.event,
	         	section.menu {
	         		background-color: <?php echo get_theme_mod('background_color_scheme', '#443333'); ?>;
	         	}
	         </style>
	    <?php
	}

	add_action( 'wp_head', 'mytheme_customize_css');
	add_action( 'customize_register', 'mytheme_customize_register' );
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>