<?php
/*
Template Name: Resources Page
*/
 get_header() ?>
	<!-- FEATURE IMAGE
	================================================== -->
	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		<h1>Resources</h1>
	</section>
    
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<p class="lead">Welcome to the Bootstrap to WordPress resources page! On this page, I will provide you with useful resources, plugins, tools, applications, and websites to help make your life as a coder a little bit easier. <strong>I recommend adding this page to your bookmarks for convenient future reference.</strong></p>
			    	
			    	<p><em>Please keep in mind that some of the following resources are my affiliate links, and should you decide to make a purchase, I will earn a small commission &mdash; at no extra cost to you! I am recommending these resources only because I have found them to be incredibly helpful. Don&rsquo;t spend your money on any products or resources unless you think they will benefit you.</em></p>
			    	
			    	<hr>
			    	
			    	<div class="resource-row clearfix">
			    		<?php 

			    			$theme_resources = new WP_Query(array(
			    				'post_type'		=>'resources'
			    			));

			    			while($theme_resources->have_posts()):$theme_resources->the_post();

			    		 ?>
				    	<div class="resource">
					    	<?php the_post_thumbnail(); ?>
					    	<h3><a href="http://bradhussey.ca/justhost"><?php the_title() ?></a></h3>
					    	<?php the_content() ?>
					    	<a href="http://bradhussey.ca/justhost" class="btn btn-success">Get started with Justhost</a>
				    	</div>
				    <?php endwhile;
				    	wp_reset_query();
				     ?>
			    	</div>
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	
	
	<?php get_footer(); ?>