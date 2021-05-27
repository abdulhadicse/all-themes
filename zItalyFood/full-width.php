<?php

/*
Template Name:Full Width/No Sidebar
*/

 get_header(); ?>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<?php while(have_posts()):the_post() ?>
					<li><a href="#"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div id="main-content" class="col-3-3">
			<div class="wrap-content">



				<?php
				 	while(have_posts()):the_post() 

				?>
				
			
				<?php the_content(); ?>

				<?php endwhile; wp_reset_query(); ?>




			</div>
		</div>

	</div>
</section>
<?php get_footer() ?>