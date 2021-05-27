<?php 
	
	/*
	Template Name: Contact Page
	*/
	get_header();

 ?>
    
    <!-- FEATURE IMAGE
    ================================================== -->
    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    	<h1>Contact</h1>
    </section>
    
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<p class="lead">Have any questions about the course? Feel free to get in touch with me! I&rsquo;ll do my best to get back to you ASAP.</p>
			    	
			    	<?php while (have_posts()) {
			    		the_post();
			    		the_content();
			    	} ?>
			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	
	
	<?php get_footer(); ?>