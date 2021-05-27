<!-- SIGN UP SECTION
	================================================== -->
	<style>
		#custom_bg{
			background:<?php echo the_field('button_background'); ?>; 
		}
	</style>
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
					<p><a href="<?php 
						$button_link = the_field('button_link');
						echo esc_url($button_link,'http');

					 ?>" class="btn btn-lg btn-block btn-success" id="custom_bg"><?php echo the_field('button_text'); ?></a></p>
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- signup -->


	<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<p><a href="/"><img src="<?php echo get_theme_file_uri() ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
			</div><!-- end col -->
			<div class="col-sm-6">
				<nav><!-- 
					<ul class="list-unstyled list-inline">
						<li><a href="">Home</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Resources</a></li>
						<li><a href="">Contact</a></li>
						<li class="signup-link"><a href="">Sign up now</a></li>
					</ul> -->
					<?php wp_nav_menu( [
							'theme_location'			=> 'bottom_menu',
							'container'					=>'',
							'menu_class'				=>'list-unstyled list-inline',
							'menu_id'					=>'',
					] ) ?>
				</nav>
			</div><!-- end col -->
			<div class="col-sm-3">
				<p class="pull-right">&copy; 2014 Brad Hussey</p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>


	<!-- MODAL
	================================================== -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
				</div><!-- modal-header -->
				
				<div class="modal-body">
					<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
					
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div>
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div>
						<input type="submit" class="btn btn-danger" value="Subscribe!">
					</form>
					
					<hr>
					
					<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
				</div><!-- modal-body -->
				
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->


	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

	<?php wp_footer(); ?>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  
</body>
</html>