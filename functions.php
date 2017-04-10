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
	add_theme_support( 'post-thumbnails', array( 'event' ) ); 
	add_theme_support( 'post-thumbnails', array( 'dishes' ) );      
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
	function wpt_dish_posttype() {
		 
		register_post_type( 'dishes',
			array(
				'labels' => array(
					'name' => __( 'Dishes' ),
					'singular_name' => __( 'Dish' ),
					'add_new' => __( 'Add New Dish' ),
					'add_new_item' => __( 'Add New Dish' ),
					'edit_item' => __( 'Edit Dish' ),
					'new_item' => __( 'Add New Dish' ),
					'view_item' => __( 'View Dish' ),
					'search_items' => __( 'Search Dish' ),
					'not_found' => __( 'No dishes found' ),
					'not_found_in_trash' => __( 'No dishes found in trash' )
				),
				'public' => true,
				'supports' => array( 'title', 'editor', 'thumbnail', 'comments' ),
				'capability_type' => 'post',
				'rewrite' => array("slug" => "dishes"), // Permalinks format
				'menu_position' => 5,
				'register_meta_box_cb' => 'add_dishes_metaboxes'
			)
		);
		register_taxonomy( 'dish_custom_category', 'dishes', array(
				'hierarchical' => true,
				'label' => 'Food Category'
		      	)
		); 
	}
	function add_dishes_metaboxes() {
		add_meta_box('wpt_dishes_category', 'Dish Category', 'wpt_dishes_catgeory', 'dishes', 'side', 'default');
	}
	// The Event Location Metabox

	function wpt_dishes_catgeory() {
		global $post;
		// Noncename needed to verify where the data originated
		echo '<input type="hidden" name="dishmeta_noncename" id="dishmeta_noncename" value="' . 
		wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
		// Get the location data if its already been entered
		$category = get_post_meta($post->ID, '_category', true);
		$sickname = get_post_meta($post->ID, '_sickname', true);
		$url = get_post_meta($post->ID, '_url', true);
		// Echo out the field
		echo '<p>Enter the Category:</p>';
		echo '<input type="text" name="_category" value="' . $category  . '" class="widefat" />';
        /*echo '<p>Enter the Sick Name:</p>';
        echo '<input type="text" name="_sickname" value="' . $sickname  . '" class="widefat" />';
        echo '<p>Enter the Image URL:</p>';
        echo '<input type="text" name="_url" value="' . $url  . '" class="widefat" />';*/

	}
	// Save the Metabox Data

	function wpt_save_dishes_meta($post_id, $post) {
		
		// verify this came from the our screen and with proper authorization,
		// because save_post can be triggered at other times
		if ( !wp_verify_nonce( $_POST['dishmeta_noncename'], plugin_basename(__FILE__) )) {
			return $post->ID;
		}

		// Is the user allowed to edit the post or page?
		if ( !current_user_can( 'edit_post', $post->ID ))
			return $post->ID;

		// OK, we're authenticated: we need to find and save the data
		// We'll put it into an array to make it easier to loop though.
		
		$events_meta['_category'] = $_POST['_category'];
		$events_meta['_url'] = $_POST['_url'];
		$events_meta['_sickname'] = $_POST['_sickname'];
		// Add values of $events_meta as custom fields
		
		foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
			if( $post->post_type == 'revision' ) return; // Don't store custom data twice
				$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
			if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
				update_post_meta($post->ID, $key, $value);
			} else { // If the custom field doesn't have a value
				add_post_meta($post->ID, $key, $value);
			}
			if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
		}

	}

	add_action('save_post', 'wpt_save_dishes_meta', 1, 2); // save the custom fields
	add_action( 'init', 'wpt_dish_posttype' );


	// AJAX to load more past events
	wp_enqueue_script( 'ajax-load-more-posts',  get_template_directory_uri() . '/assets/js/functions.js', array ( 'jquery' ), 1.1, true );

	wp_localize_script( 'ajax-load-more-posts', 'ajaxmoreposts', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		//'detail_url' => admin_url('admin-ajax.php')
	));

	function ajax_more_posts(){
		/*$out ="hellp";
		wp_reset_postdata();
		die($out);
		*/
		if($_POST["call_type"]==2){
			$out = "Success";
			$id = $_POST['post_id'];
			wp_reset_postdata();
		    die($out);
		}else{
		    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 4;
		    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

		    header("Content-Type: text/html");

		    $args = array(
				'post_type' => 'event',
				'tax_query' => array(
					array(
						'taxonomy' => 'event',
						'field'    => 'name',
						'terms'    => 'past',
					),
				),
				'posts_per_page' => $ppp,
				'paged'    		 => $page,
				'order'			 => 'DESC',
				'orderby' 		 => 'meta_value',
				'meta_key'  	 => 'event_datenbegintime',
			);

			$wp_query = new WP_Query($args);
			$out = '';
			if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); 
			$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
			$begintime = DateTime::createFromFormat('Y-m-d\T H:i', get_post_meta(get_the_ID(),'event_datenbegintime',true));
			$endtime = get_post_meta(get_the_ID(),'event_endtime', true);
			$res = '';
			if ($endtime != '') {  
				$res = $begintime->format('d/m/Y H:i').' - '.$endtime;
			} else {
				$res = $begintime->format('d/m/Y h:i A');
			}
	        $out .= '<div class="flex-item">
					<div class="cell">		
						<span ><span  ></span></span>
						<a href=""><div class="clip" style="background-image:url('.$feat_image_url.')"></div>
						<h3>'.get_post_meta(get_the_ID(),'event_title',true).'</h3>
						<h2>'.$res.'</h2></a></div></div>';
		    endwhile;
		    endif;
		    $out = "Head";
		    wp_reset_postdata();
		    die($out);
		}
	}
	add_action( 'wp_ajax_nopriv_ajax_more_posts', 'ajax_more_posts' );
	add_action( 'wp_ajax_ajax_more_posts', 'ajax_more_posts' );

	
?>