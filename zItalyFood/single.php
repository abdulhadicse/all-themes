<?php get_header(); ?>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="archive.html">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">



				<?php
				 	while(have_posts()):the_post() 

				?>
				
			
				<article>
					<div class="art-header">
						<a href="<?php the_permalink() ?>"><h3><?php the_title() ?> </h3></a>
						<div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
					</div>
					<div class="art-content">
						<?php the_post_thumbnail(); ?>
						<?php the_content(); ?>
					</div>
				</article>
				<?php endwhile; wp_reset_query(); ?>




			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer() ?>