<style>
	#course-features{
		background: <?php echo get_field('background'); ?> !important;
	}
</style>
<section id="course-features">
		<div class="container">
		
			<div class="section-header">
				<img src="<?php 
					$features_img = get_field('feature_image');
					echo $features_img['url']
				 ?>" alt="Rocket">
				<h2><?php echo get_field('feature_title'); ?></h2>
			</div><!-- section-header -->
			
			<div class="row">
				
				<div class="col-sm-2">
					<?php echo get_field('lectures_icon'); ?>
					<h4><?php echo get_field('lecture_title'); ?></h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo get_field('lectures_icon'); ?>
					<h4><?php echo get_field('lecture_title'); ?></h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo get_field('lectures_icon'); ?>
					<h4><?php echo get_field('lecture_title'); ?></h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo get_field('lectures_icon'); ?>
					<h4><?php echo get_field('lecture_title'); ?></h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo get_field('lectures_icon'); ?>
					<h4><?php echo get_field('lecture_title'); ?></h4>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo get_field('lectures_icon'); ?>
					<h4><?php echo get_field('lecture_title'); ?></h4>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>