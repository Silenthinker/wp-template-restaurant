<!-- Footer -->
			
			<section class="time-contact">
				<div class="table">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div  class="cell">
							<h2> Opening Hour </h2>
							<p> <b> MONDAY : </b><?php echo get_theme_mod('mon', 'Closed'); ?></p> </br>
							<p> <b>TUE-FRI : </b><?php echo get_theme_mod('tue_to_fri', '8am - 12am'); ?></p> </br>
							<p> <b>SAT-SUN : </b><?php echo get_theme_mod('sat_to_sun', '7am - 1am'); ?></p> </br>
							<p> <b>HOLYDAYS : </b><?php echo get_theme_mod('holiday', '12pm-12am'); ?></p> </br>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div  class="cell">
							<h2>  Contacts </h2>
							<p> <b>ADDRESS : </b><?php echo get_theme_mod('address_1', '4578 Zurich'); ?></p> </br>
							<p> <?php echo get_theme_mod('address_2', 'Badenerstrasse 500'); ?></p> </br>
							<p> <b>PHONE : </b><?php echo get_theme_mod('phone', '(606) 144-0100'); ?></p> </br>
							<p> <b>EMAIL : </b><?php echo get_theme_mod('email', 'admin@laplace.com'); ?></p> </br>
						</div>	
						</div>
					</div>
				</div>
				<footer id="copyright">
					<ul >
						<li>&copy; Untitled. All rights reserved.</li><li>Design: ETH Zurich, Globis Group</li>
					</ul>
				</footer>
			</section>	
				
	</main>
	<?php wp_footer(); ?>
	</body>
</html>