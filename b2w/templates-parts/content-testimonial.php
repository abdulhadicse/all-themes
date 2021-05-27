<section id="kudos">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8 col-sm-offset-2">
					<h2>What People Are Saying About Brad</h2>
					
					<!-- TESTIMONIAL -->
					<?php 
						$testimomnial = new WP_Query([
							'post_type'			=>'testimonial',
							'posts_per_page'	=>50,
						]);
						while($testimomnial->have_posts()  ):$testimomnial->the_post()
					 ?>
					<div class="row testimonial">
						<div class="col-sm-4">
							<?php the_post_thumbnail(); ?>
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								<?php the_content() ?>
								<cite>&mdash; <?php the_title(); ?></cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
					<?php endwhile; wp_reset_query(); ?>
					
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>