<section id="project-features">
		<div class="container">
		
			<h2>Final Project Features</h2>
			<p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website <strong>you</strong> are going to build? <em>You're looking at it!</em> The website you're using right now is the website you will have built entirely by yourself, by the end of this course.</p>
			
			<div class="row">

			<?php

			$project_features =	new WP_Query(array(
					'post_type'			=>'project_features',
					'posts_per_page'	=>3,
					'order'				=>'ASC'
				));

			 while($project_features->have_posts()):$project_features->the_post() 
			 ?>
				<div class="col-sm-4">
					<?php the_post_thumbnail(); ?>
					<h3> <?php the_title(); ?> </h3>
					<p> <?php echo  wp_trim_words(get_the_content(),'-1',false  ); ?>  </p>
				</div><!-- col -->
			<?php 
				endwhile;
				wp_reset_query();

			 ?>
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section>