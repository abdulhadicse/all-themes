<section id="boost-income">
		<div class="container">
			
			<div class="section-header">
				<img src="<?php 
					if( function_exists('get_field') ){
							$boost_img = get_field('boost_image_');
							echo $boost_img['url'];
					}
				 ?>" alt="Chart">
				<h2> <?php echo the_field('boost_title'); ?> </h2>
			</div><!-- section-header -->
			
			<p class="lead">  <?php echo the_field('boost_description'); ?> </p>
			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo the_field('left_section_title'); ?></h3>
					<p><?php echo the_field('left_section_description'); ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-6">
					<h3><?php echo the_field('right_section_title'); ?></h3>
					<p><?php echo the_field('right_section_description'); ?></p>
				</div><!-- end col -->
			</div><!-- row -->
		
		</div><!-- container -->
	</section>