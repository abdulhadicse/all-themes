<section id="who-benefits">
		<div class="container">
			
			<div class="section-header">
				<img src="<?php 
					$course_img = get_field('course_section_image');
					echo $course_img['url'];
				 ?>" alt="Pad and pencil">
				<h2><?php echo the_field('course_section_title'); ?></h2>
			</div><!-- section-header -->
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
				<?php echo the_field('course_section_description'); ?>
					
				</div><!-- end col -->
			</div><!-- row -->

		</div><!-- container -->
	</section>