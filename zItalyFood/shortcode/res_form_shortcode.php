<?php 

add_shortcode( 'res_form', 'zitalyfood_res_form_shortcode' );

function zitalyfood_res_form_shortcode($one,$two){

	ob_start();
	?>
	<div class="wrap-col">
		<div class="contact">
			<div id="contact_form">
				<form name="contact" id="contact" method="post" action="">
					<label class="row">
						<div class="col-1-2">
							<div class="wrap-col">
								<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
							</div>
						</div>
						<div class="col-1-2">
							<div class="wrap-col">
								<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
							</div>
						</div>
					</label>
					<label class="row">
						<div class="col-2-4">
							<div class="wrap-col">
							<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
							<input type="date"  name="date" id="date" placeholder="Date"/>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
							<input type="time"  name="time" id="time" placeholder="Time"/>
							</div>
						</div>											
					</label>
					<label class="row">
						<div class="wrap-col">
							<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
							placeholder="Message"></textarea>
						</div>
					</label>
					<center><input class="sendButton" type="submit" name="submit" value="Submit"></center>
				</form>
			</div>
		</div>
	</div>		


	<?php
	return ob_get_clean();


}

vc_map([
	'base'			=>'res_form',
	'name'			=>'Reservation Form',
	'category'		=>'Food',
	'icon'			=> get_theme_file_uri().'/assets/images/team.png',

]);


 ?>