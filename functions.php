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
		    'default'        => get_template_directory_uri() . '/images/header.jpg',
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
	         		background-image: url(<?php echo get_theme_mod('head_background_image_setting', get_template_directory_uri() . '/images/header.jpg');?>);
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

	// Custom Post Types
	/***** custom type event ******/
	if(!function_exists( 'create_event_post_type')): 
		function create_event_post_type() {
		    $labels = array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' ),
				'menu_name' => __( 'Events' ),
				'add_new' => __( 'Add event' ),
				'all_items' => __( 'All events' ),
				'add_new_item' => __( 'Add event' ),
				'edit_item' => __( 'Edit event' ),
				'new_item' => __( 'New event' ),
				'view_item' => __( 'View event' ),
				'search_items' => __( 'Search events' ),
				'not_found' => __( 'No events found' ), 
				'not_found_in_trash' => __( 'No events found in trash' ), 
				'parent_item_colon' => __( 'Parent event' )
				//'menu_name' => default to 'name' 
			);
		    $args = array(
				'labels' => $labels,
				'public' => true, 
				'publicly_queryable' => true, 
				'show_in_nav_menus' => true, 
				'query_var' => true, 
				'rewrite' => true, 
				'capability_type' => 'post', 
				'hierarchical' => false, 
				'supports' => array(
					'title',
					'thumbnail', 
					//'editor', 
					//'author', 
					//'excerpt', 
					//'trackbacks', 
					//'custom-fields', 
					//'comments', 
					//'revisions', 
					//'page-attributes', 
					//'post-formats',
				), 
				'menu_position' => 5,
				'register_meta_box_cb' => 'add_event_post_type_metabox' 
			);
			register_post_type( 'event', $args );
			register_taxonomy( 'event', 'event', array(
				'hierarchical' => true,
				'label' => 'type'
		      	)
			); 
		}
		add_action( 'init', 'create_event_post_type' ); 
	endif;
	// metabox
	function add_event_post_type_metabox() {
		add_meta_box( 'event_metabox', 'Event Data', 'event_metabox', 'event', 'normal' );
	}
	function event_metabox() {
		global $post;
		$custom = get_post_custom($post->ID); 
		$title = $custom['event_title'][0]; 
		$datenbegintime = $custom['event_datenbegintime'][0]; 
		$endtime = $custom['event_endtime'][0]; 
		$description = $custom['event_description'][0]; 
		?>

		<div class="event">
			<p> <label>Title<br> <input type="text" name="title" size="50"
				value="<?php echo $title; ?>"> </label> 
			</p>
			<p>
				<label>Start and Ending Time
					<br> <input type="datetime-local" name="datenbegintime" size="50" 
						value="<?php echo $datenbegintime; ?>"> 
					 <input type="time" name="endtime" size="50" 
						value="<?php echo $endtime; ?>"> 
				</label>
			</p>
			<p> <label>Description<br> <textarea name="description" cols="50" rows="4"><?php echo $description; ?></textarea></label>
			</p>
	  	</div>
		<?php 
	}
	add_theme_support( 'post-thumbnails', array( 'event' ) );       
	// save the data
	function event_post_save_meta( $post_id, $post ) { 
		// is the user allowed to edit the post or page? 
		if( ! current_user_can( 'edit_post', $post->ID )){
	    	return $post->ID;
	  	}
		$event_post_meta['event_title'] = $_POST['title']; 
		$event_post_meta['event_datenbegintime'] = $_POST['datenbegintime'];
		$event_post_meta['event_endtime'] = $_POST['endtime'];
		$event_post_meta['event_description'] = $_POST['description']; 
		// add values as custom fields
		foreach( $event_post_meta as $key => $value ) { 
			if( get_post_meta( $post->ID, $key, FALSE ) ) {
				// if the custom field already has a value
				update_post_meta($post->ID, $key, $value); 
			} else {
				// if the custom field doesn't have a value
				add_post_meta( $post->ID, $key, $value ); 
			}
			if( !$value ) {
			// delete if blank
			delete_post_meta( $post->ID, $key );
			} 
		}
	}
	add_action( 'save_post', 'event_post_save_meta', 1, 2 ); // save the custom fields

?>