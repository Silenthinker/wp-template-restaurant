<main class="content">

	<!--<section class="welcome">
		<div class="welcome-items">
			<nav class="hidden-list">
				<div class="dropdown">
						<button class="dropbtn">Dropdown</button>
						<div class="dropdown-content">
						<a href="#">About</a>
						<a href="#">Menu</a>
						<a href="#">Events</a>
						<a href="#">Contacts</a>
						</div>
				</div>
			</nav>
			<p class="headline"><?php echo get_bloginfo( 'name' ); ?></p>
			<div class="book-button">
				<a href="#book" class="book">Book a Table</a>
			</div>
		</div>
	</section>-->

	<!-- First About-->
	<?php get_template_part('welcome')?>
	<section>
		<article class="intro welcome-intro">
			<!--<header>Welcome</header>
			<p>
			LaPlace Restaurant was founded in May of 2015. The cuisine we serve
			is created with the utmost attention to details. Our emphasis is on
			providing fresh, locally sourced, exquisite food. As such our menus
			change on a regular basis, allowing us to offer you mouth watering,
			perfectly prepared dishes.<br /></details>-->
			
			<?php
				$page = get_page_by_title( 'Welcome' );
				smk_get_template_part('page.php', array(
	   					'title' => $page->post_title,
	   					'content' =>$page->post_content
				));
			?>
			
		</article>



		<!-- Second About -->


		<article class="intro intro-with-image">
			<?php
				$page = get_page_by_title( 'High Quality Cuisine' );
				smk_get_template_part('page.php', array(
	   					'title' => $page->post_title,
	   					'content' =>$page->post_content
				));
			?>
			<!--
			<header>High Quality Cuisine</header>
			<p>
				Our cuisine is a melting pot of different cultures which have come
				together to form a unique blend of flavours and techniques.<br />
			</p>-->
		</article>


		<!-- Third About -->


		<article class="intro best-intro">
			<!--<header>Only the Best Ingredients</header>
			<p>
				It's vital to our operation to make sure everybody is aware of the
				quality of the ingredients we use. As the choices we make in terms
				of which supplies we buy for our recipes is intrinsic to factors
				such as the healthiness of the food we make to the price you pay for
				it. That's why on our menus you find the origins of each of our
				ingredients.<br />
			</p>-->
			<?php
				$page = get_page_by_title( 'Only the Best Ingredients' );
				smk_get_template_part('page.php', array(
	   					'title' => $page->post_title,
	   					'content' =>$page->post_content
				));
			?>
		</article>
	</section>


	<!-- Menu -->
	<section class="popup">
	<div id="bruschettetomato" class="modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <header class="container group"> 
	        <h2>Bruschette with Tomatoes</h2><a href="#modal" class="closebtn">×</a>
	      </header>
	      <figure>
	      </figure>
	      <article class="container">
	        <p>Ah bruschette, one of the best ways to enjoy the bounty of summer. Pronounced “brusketta”, this classic Italian appetizer is a perfect way to capture the flavors of garden ripened tomatoes, fresh basil, garlic, and olive oil. Think of it as summer on toast!.</p>
	      </article>
	    </div>
	  </div>
	</div>

	<div id="rolls" class="modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <header class="container group"> 
	        <h2>Green Rolls</h2><a href="#modal" class="closebtn">×</a>
	      </header>
	      <figure>
	      </figure>
	      <article class="container">
	        <p>The green roll is a great vegetarian option for sushi lovers. Fully wrapped with avocado this roll is both beautiful and delicious.</p>
	      </article>
	    </div>
	  </div>
	</div>

	<div id="eggplants" class="modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <header class="container group"> 
	        <h2>Eggplants</h2><a href="#modal" class="closebtn">×</a>
	      </header>
	      <figure>
	      </figure>
	      <article class="container">
	        <p>Basic grilled eggplant is a simple side dish that lets the vegetable's flavor shine through. To dress things up a bit, try grilled eggplant topped with Toasted-Breadcrumb Salsa Verde.</p>
	      </article>
	    </div>
	  </div>
	</div>

	<div id="bruschette" class="modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <header class="container group"> 
	        <h2>Bruschette</h2><a href="#modal" class="closebtn">×</a>
	      </header>
	      <figure>
	      </figure>
	      <article class="container">
	        <p>Bruschette is an antipasto from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.</p>
	      </article>
	    </div>
	  </div>
	</div>

	<div id="meatballs" class="modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <header class="container group"> 
	        <h2>Meatballs</h2><a href="#modal" class="closebtn">×</a>
	      </header>
	      <figure>
	      </figure>
	      <article class="container">
	        <p>A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.</p>
	      </article>
	    </div>
	  </div>
	</div>

	<div id="beans" class="modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <header class="container group"> 
	        <h2>Spicy Beans</h2><a href="#modal" class="closebtn">×</a>
	      </header>
	      <figure>
	      </figure>
	      <article class="container">
	        <p>This vegetarian dish is delicious and versatile. You can eat it on its own, with rice, as a topping for nachos, or as a filling for tacos or burritos.</p>
	      </article>
	    </div>
	  </div>
	</div>
	</section>

	<section class="menu">
		<div>
			<div class="menu-table" style="width:100%">
				<div class="row">
					<section class="overview col-5" width="36%">
						<div >
							<header>Our Menu</header>
							<h3>Appetizers</h3>
							<p>We serve a seasonal tasting menu that focuses on local
								ingredients. Our appetizers may vary during the year to always
								ensure the best quality. For the appetizers, we are famous for
								our bruschettas that we serve in several different variants.</p>
							<nav class="overview-list">
								<a alt="appetizer">Appetizers</a> 
								<a alt="pasta">Fresh Pasta</a> 
								<a alt="meat">Meat-Fish</a> 
								<a alt="dessert">Dessert</a>
							</nav>

						</div>
					</section>
					<section  class="imageview col-7" width="64%">
							<section class="row">
								<section width="50%" class="col-6">

									<div class="view-content" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/appetizer-0.jpg')">
										<!--<img width = "90%" height="90%"  src="images/appetizer-0.jpg" alt="" />-->

										<div class="tag">
											<div class="card special">
												<div class="front face">
													<a href="#bruschettetomato"> Bruschette with Tomatoes </a>
												</div>
												<div class="back face">
													<a> Bruschette with Tomatoes </a>
												</div>
											</div>
										</div>
										
									</div>
								</section>
								<section width="50%" class="col-6">
									<div class="view-content" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/appetizer-1.jpg')">
										<!--<img width="90%" height="90%"  src="images/appetizer-1.jpg" alt="" />-->
										<div class="tag">
											<div class="card">
												<div class="front face">
													<a href="#rolls"> Green Rolls </a>
												</div>
												<div class="back face">
													<a> Green Rolls </a>
												</div>
											</div>
										</div>

										

									</div>
								</section>
							</section>
							<section class="row">
								<section width="50%" class="col-6">

									<div class="view-content" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/appetizer-2.jpg')">
										<!--<img width= "90%" height="90%"  src="images/appetizer-2.jpg" alt="" />-->
										
										<div class="tag">
											<div class="card">
												<div class="front face">
													<a href="#eggplants">Eggplants </a>
												</div>
												<div class="back face">
													<a> Eggplants </a>
												</div>
											</div>
										</div>
										
									</div>
								</section>
								<section width="50%" class="col-6">
									<div class="view-content" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/appetizer-3.jpg')">
										<!--<img width= "90%"  height="90%"  src="images/appetizer-3.jpg" alt="" />-->
										
										<div class="tag">
											<div class="card">
												<div class="front face">
													<a href="#bruschette">Bruschette </a>
												</div>
												<div class="back face">
													<a> Bruschette </a>
												</div>
											</div>
										</div>
										

									</div>
								</section>
							</section>
							<section class="row">
								<section width="50%" class="col-6">

									<div class="view-content" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/appetizer-4.jpg')">
										<!--<img width = "90%" height="90%" src="images/appetizer-4.jpg" alt="" />-->
										
										<div class="tag">
											<div class="card">
												<div class="front face">
													<a href="#meatballs">Meatballs </a>
												</div>
												<div class="back face">
													<a> Meatballs </a>
												</div>
											</div>
										</div>
										
									</div>
								</section>
								<section width="50%" class="col-6">
									<div class="view-content" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/appetizer-5.jpg')">
										<!--<img width="90%" height="90%"  src="images/appetizer-5.jpg" alt="" />-->
										<div class="tag">
											<div class="card">
												<div class="front face">
													<a href="#beans">Spicy Beans</a>
												</div>
												<div class="back face">
													<a>Spicy Beans </a>
												</div>
											</div>
										</div>

										

									</div>
								</section>
							</section>
					</section>
				</div>
			</div>
		</div>
	</section>


	<!-- Third -->


	<article class="intro event-intro">
					<!--<header>Our Events</header>
					<p>In our Philosophy, a restaurant is not only a place where to eat but also to communicate and know new people. For these reasons we organize various events every month.<br />
					</p>-->
					<?php
						$page = get_page_by_title( 'Our Events' );
						smk_get_template_part('page.php', array(
			   					'title' => $page->post_title,
			   					'content' =>$page->post_content
						));
					?>
	</article>
			
	<section class="event">
		<div class="container upcoming-events">
			<h3><b> Upcoming Events </b></h3>
			<div class="table flex-container">
				<?php 
				$args = array(
					'post_type' => 'event',
					'tax_query' => array(
						array(
							'taxonomy' => 'event',
							'field'    => 'name',
							'terms'    => 'upcoming',
						),
					),
					'posts_per_page' => '3',
					'order'		=> 'ASC',
					'orderby' 	=> 'meta_value',
					'meta_key'  => 'event_datenbegintime',
				);
					$eventPosts = new WP_Query($args);
					if ($eventPosts->have_posts()) :
						while ($eventPosts->have_posts()) :
						$eventPosts->the_post(); 
				?> 
				<div class="flex-item">
				<div class="cell">
				<span ><span  ></span></span>
				
				<a href="">
					
					<?php echo the_post_thumbnail( 'thumbnail' ); ?>
					<h3><?php echo get_post_meta(get_the_ID(),'event_title',true);?></h3>
					<h2><?php $begintime = DateTime::createFromFormat('Y-m-d\T H:i', get_post_meta(get_the_ID(),'event_datenbegintime',true));
						$endtime = get_post_meta(get_the_ID(),'event_endtime', true);
						if ($endtime != '') { echo $begintime->format('d/m/Y H:i').' - '.$endtime;}
						else {
							echo $begintime->format('d/m/Y h:i A');
						}
						?></h2>
				</a>
				
				<p><?php 
					$description = get_post_meta(get_the_ID(), 'event_description', true);
					if ($description != '') { echo $description; }?> <a href=""> [Read More]</a> </p>
				</div>
				</div>
				<?php endwhile;
				endif; ?>
				<!--
				<div class="flex-item">
				<div class="cell">	
						<span ><span  ></span></span>
						
						<a href="">
							<img width = "50%" height="50%"  src="<?php bloginfo('template_directory'); ?>/images/2.jpg" alt="" />
							<h3>Pasta Day</h3>
							<h2>11/03/2017 18:00 - 23:00</h2>
						</a>
						
						<p>The fresh pastas offered at LaPlace are made right in our restaurant. And if you've only ever had boxed pastas, you are truly missing out! Once evert two months we celebrate Pasta with an event <a href=""> [Read More]</a></p>
				</div>	
				</div>
				<div class="flex-item">
				<div class="cell">	
						<span ><span  ></span></span>
						
						<a href="">
							<img width = "50%" height="50%"  src="<?php bloginfo('template_directory'); ?>/images/3.png" alt="" />
							<h3>Happy Hour</h3>
							<h2>03/03/2017 18:00 - 23:00</h2>
						</a>
						
						<p>It's Friday!!! Come and enjoy the start of the weekend with us. Our Happy Hours offer the best combination of nice drinks and food. To reserve a sit please register to the event <a href=""> [Read More]</a> </p>
				</div>	
				</div>
				-->
			</div>
		</div>
		</br> </br>
		
		<div  class="container past-events">
			<h3> <b> Past Events </b> </h3>
			<div class="table flex-container">
				<?php 
					$args = array(
						'post_type' => 'event',
						'tax_query' => array(
							array(
								'taxonomy' => 'event',
								'field'    => 'name',
								'terms'    => 'past',
							),
						),
						'posts_per_page' => '4',
						'order'		=> 'DESC',
						'orderby' 	=> 'meta_value',
						'meta_key'  => 'event_datenbegintime',
					);
						$eventPosts = new WP_Query($args);
						if ($eventPosts->have_posts()) :
							while ($eventPosts->have_posts()) :
							$eventPosts->the_post(); 
				?> 
				<div class="flex-item">
				<div class="cell">		
				<span ><span  ></span></span>
				
				<a href="">
					<?php echo the_post_thumbnail('cropped'); ?>
					<h3><?php echo get_post_meta(get_the_ID(),'event_title',true);?></h3>
					<h2><?php $begintime = DateTime::createFromFormat('Y-m-d\T H:i', get_post_meta(get_the_ID(),'event_datenbegintime',true));
					$endtime = get_post_meta(get_the_ID(),'event_endtime', true);
					if ($endtime != '') { echo $begintime->format('d/m/Y H:i').' - '.$endtime;}
					else {
						echo $begintime->format('d/m/Y h:i A');
					}
					?></h2>
				</a>
				</div>
				</div>
				<?php endwhile;
				endif; ?>
				<!--
				<div class="flex-item">
				<div class="cell">		
							<span ><span  ></span></span>
							
							<a href="">
								<div class="clip img-anniversary">
								</div>	

								<h3>10th Anniversary</h3>
								<h2>01/12/2016 18:00 - 23:00</h2>
							</a>
							
							
					</div>
					</div>
				<div class="flex-item">
				<div class="cell">		
							<span ><span  ></span></span>
							
							<a href="">
								<div class="clip img-pasta"></div>
								<h3>Pasta Day</h3>
								<h2>20/11/2016 18:00 - 23:00</h2>
							</a>
							
							
					</div>
					</div>
				
				<div class="flex-item">
				<div class="cell">		
							<span ><span  ></span></span>
							
							<a href="">
								<div class="clip img-happy"></div>
								<h3>Happy Hour</h3>
								<h2>11/11/2016 18:00 - 23:00</h2>
							</a>
							
							
				</div>
				</div>

				<div class="flex-item">
				<div class="cell">		
							<span ><span  ></span></span>
							
							<a href="">
							<div class="clip img-cooking"></div>
								<h3>Salsa</h3>
								<h2>01/11/2016 18:00 - 23:00</h2>
							</a>
							
							
					</div>	
					</div>	
				-->		
			</div>
		</div>
		</br> </br>
		<div class="container">
			<div class="button">
				
					<a href="#second">See More</a>
				
			</div>
		</div>
	</section>
		
	<!-- Basic Elements -->

	<!-- Fourth -->
	<article class="intro contact-intro">
		<header>Contact us</header>
		<p>Feel free to contact us for any kind of issues or questions</p>
	</article>
			
	<section class="contact-us-now">
		<div class="container contact-us">
			<form method="post" action="#">
				<div class="table">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input class="input" type="text" placeholder="Name" /></div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input class="input" type="text" placeholder="Email" /></div>
				</div>
				<div >
					<div class="table"><textarea class="input" name="message" placeholder="Message"></textarea></div>
				</div>
				<div >
					<div class="container">
						<ul class="row">
							<li><input class="button col-6" type="submit"  value="Send Message" /></li>
							<li><input class="button col-6" type="reset"  value="Clear Form" /></li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</section>
		

	<!-- 5th -->	

	<section class="container book-table">
	<article class="intro">
				<header>Book a table</header>
			<div class="container">
				<div  class="table">
					<form method="post" action="#">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input type="text" placeholder="Name" /></div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input type="text" placeholder="Phone" /></div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input type="text" placeholder="Date" /></div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input type="text" placeholder="Time" /></div>
						</div>
						<div class="row">
							<div ><textarea name="message" placeholder="Message"></textarea></div>
						</div>
						<!--</br> -->
						<input class="button" type="submit"  value="Book" />
					</form>
				</div>
			</div>
	</article>
	</section>