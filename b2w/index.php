<?php get_header(); ?>
    
    <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">Blog</h1>
	</section>
    
    <!-- BLOG CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">


		    <main id="content" class="col-sm-8" role="main">
		    	
		    <?php while(have_posts()):the_post() ?>
		    	<article class="post">
		    		<header>
		    			<h3><a href="post.html"><?php the_title(); ?></a></h3>
		    			<div class="post-details">
			    			<i class="fa fa-user"></i> <?php the_author(); ?>
							<i class="fa fa-clock-o"></i> <time> <?php the_time('M d,Y'); ?> </time>
							<i class="fa fa-folder"></i> <a href=""><?php the_category('-') ?>
							<i class="fa fa-tags"></i> <?php the_tags(null,',' ) ?>
							
							<div class="post-comments-badge">
								<a href=""><i class="fa fa-comments"></i> <?php comments_number(0,1,'%') ?>  </a>
							</div><!-- post-comments-badge -->
		    			</div><!-- post-details -->
		    		</header>
		    		<div class="post-image">
		    			<?php the_post_thumbnail(); ?>
		    		</div><!-- post-image -->
		    		<div class="post-excerpt">
		    			<p> <?php echo wp_trim_words( get_the_content(), 50, false) ?> <a href="<?php the_permalink(); ?>">continue reading &raquo;</a></p>
		    		</div><!-- post-excerpt -->
		    	</article><!-- post -->
		    <?php endwhile;
		    	wp_reset_query();
		     ?>

		    	
		    	
		    	
		    </main><!-- content -->
		    
					    <!-- SIDEBAR
			================================================== -->
		    <aside class="col-sm-4">		    	
				<?php get_sidebar(); ?>
					
			</aside>
	    
	    
	    </div><!-- primary -->
    </div><!-- container -->
	
	<?php get_footer(); ?>