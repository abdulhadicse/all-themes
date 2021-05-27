<?php get_header(); ?>


    <!-- HERO
    ================================================== -->
   <?php get_template_part( 'templates-parts/content', 'hero' ) ?>
	
	
	<!-- OPT IN SECTION
	================================================== -->
    <section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8">
					<p class="lead"><strong>Subscribe to our mailing list.</strong> We'll send something special as a thank you.</p>
				</div><!-- end col -->
				
				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						Click here to subscribe
					</button>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin -->
    
    
    <!-- BOOST YOUR INCOME
	================================================== -->
	<?php get_template_part( 'templates-parts/content','boost' ) ?>
	<!-- boost-income -->
	
	
	<!-- WHO BENEFITS
	================================================== -->
	<?php get_template_part( 'templates-parts/content', 'course' ) ?>
	<!-- who-benefits -->
    

	<!-- COURSE FEATURES
	================================================== -->
		<?php get_template_part( 'templates-parts/content', 'features' ) ?>
	<!-- course-features -->
	
	
	<!-- PROJECT FEATURES
	================================================== -->
	<?php get_template_part( 'templates-parts/content', 'project_features' ) ?>
	<!-- project-features -->
	
	
	<!-- VIDEO FEATURETTE
	================================================== -->
	<?php get_template_part( 'templates-parts/content', 'video' ) ?>
	<!-- featurette -->
	
	
	<!-- INSTRUCTOR
	================================================== -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2>Your Instructor <small>Brad Hussey</small></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
							<a href="https://twitter.com/bradhussey" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://facebook.com/bradhussey" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://plus.google.com/+BradHussey" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
						</div><!-- end col -->
					
					</div><!-- row -->
					
					<p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.<p>
					
					<p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>
					
					<p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.</p>
					
					<p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>
					
					<hr>
					
					<h3>The Numbers <small>They Don't Lie</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									41,000+ <span>students</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									568 <span>reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									8 <span>courses</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->
	
	
	<!-- TESTIMONIALS
	================================================== -->
	<?php get_template_part( 'templates-parts/content', 'testimonial' ) ?>
	<!-- kudos -->
	
	
	<?php get_footer(); ?>