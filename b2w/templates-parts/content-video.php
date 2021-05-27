	<style>
		#featurette{
			background: url('<?php 
				$video_bg = get_field('video_section_background');
				echo $video_bg['url']
			  ?>');
		}
	</style>
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php the_field('video_section_title'); ?></h2>
					<?php the_field('video'); ?>
				</div><!-- end col -->
			</div><!-- row -->			
		</div><!-- container -->
	</section>
