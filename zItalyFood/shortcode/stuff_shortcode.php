<?php 

add_shortcode( 'stuff', 'zitalyfood_stuff_shortcode' );

function zitalyfood_stuff_shortcode($one,$two){

	$team_atts = shortcode_atts( [
		'stuff_img'				=>'',
		'stuff_name'				=>'',
		'stuff_fb'				=>'',
		'stuff_tw'				=>'',
		'stuff_li'				=>'',
		'stuff_in'				=>'',
	], $one );

	ob_start();
	?>
			<div class="chef">
				<div class="wrap-col">
					<div class="zoom-container">
						<a href="#">
							<img src="<?php echo wp_get_attachment_image_url($team_atts['stuff_img'],'full') ?>" />
						</a>
					</div>
					<h3><?php echo $team_atts['stuff_name'] ?></h3>
					<ul class="social t-center">
						<li><a href="<?php echo $team_atts['stuff_fb'] ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $team_atts['stuff_tw'] ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $team_atts['stuff_li'] ?>"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="<?php echo $team_atts['stuff_in'] ?>"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>



	<?php
	return ob_get_clean();


}

vc_map([
	'base'			=>'stuff',
	'name'			=>'Stuff',
	'category'		=>'Food',
	'icon'			=> get_theme_file_uri().'/assets/images/team.png',
	'params'		=>[
		[
			'param_name'	=>'stuff_img',
			'type'			=>'attach_image',
			'heading'		=>'Team Member Image',
		],
		[
			'param_name'	=>'stuff_name',
			'type'			=>'textfield',
			'heading'		=>'Team Member Name',
		],
		[
			'param_name'	=>'stuff_fb',
			'type'			=>'textfield',
			'heading'		=>'Facebook',
		],
		[
			'param_name'	=>'stuff_tw',
			'type'			=>'textfield',
			'heading'		=>'Twitter',
		],
		[
			'param_name'	=>'stuff_li',
			'type'			=>'textfield',
			'heading'		=>'LinkedIn',
		],
		[
			'param_name'	=>'stuff_in',
			'type'			=>'textfield',
			'heading'		=>'Instagram',
		],
	],
]);


 ?>