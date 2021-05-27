 <section id="hero" data-type="background" style="background-image: url(' <?php 
			
		$hero_bg = get_field('hero_background');

		echo $hero_bg['url'];
		

  ?> ')" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    			
    				<div class="col-sm-5">
		    			<img src="<?php 
		    			$hero_img = get_field('hero_main_image');
		    			echo $hero_img['url'];
		    			 ?>" alt="Bootstrap to Wordpress" class="logo">
    				</div><!-- col -->
		    		
		    		<div class="col-sm-7 hero-text">
			    		<h1><?php  
			    			if(function_exists('the_field')){
			    				the_field('hero_title');
			    			}
			    		  ?></h1>
			            <p class="lead"> <?php 
			            	the_field('hero_content');
			             ?> </p>
			            
			            <div id="price-timeline">
			            	<div class="price active">
			            		<h4>Pre-Launch Price <small>Ends soon!</small></h4>
			            		<span><?php 
			            	the_field('pre-launch_price_');
			             ?> </span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4>Launch Price <small>Coming soon!</small></h4>
			            		<span><?php 
			            	the_field('launch_price_');
			             ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4>Final Price <small>Coming soon!</small></h4>
			            		<span><?php 
			            	the_field('final_price_');
			             ?></span>
			            	</div><!-- end price -->
			            </div><!-- price-timeline -->

			            <p><a class="btn btn-lg btn-danger" href="/" role="button">Enroll now &raquo;</a></p>
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>