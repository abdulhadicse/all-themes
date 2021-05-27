<?php 

add_shortcode( 'location', 'zitalyfood_location_shortcode' );

function zitalyfood_location_shortcode($one,$two){

	$location_atts = shortcode_atts( [
		'address'				=>'',
		'mon_fri'				=>'',
		'sun_sat'				=>'',
		'email'					=>'',
		'cell'					=>'',
		'fax'					=>'',
	], $one );

	ob_start();
	?>			

	<div class="wrap-col">
		<h3>Address</h3>
		<p><?php echo $location_atts['address'] ?></p><br/>
		<h3>Hours Of Operation</h3>
		<p><span>MONDAY-FRIDAY: </span><?php echo $location_atts['mon_fri'] ?></p>
		<p><span>SATURDAY-SUNDAY: </span><?php echo $location_atts['sun_sat'] ?></p><br/>
		<h3>Contact Info</h3>
		<p><span>EMAIL ADDRESS: </span><?php echo $location_atts['email'] ?></p>
		<p><span>TELEPHONE: </span><?php echo $location_atts['cell'] ?></p>
		<p><span>FAX: </span><?php echo $location_atts['fax'] ?></p>
	</div>

	<?php
	return ob_get_clean();


}

vc_map([
	'base'			=>'location',
	'name'			=>'Address Box',
	'category'		=>'Food',
	'icon'			=> get_theme_file_uri().'/assets/images/address_box.png',
	'params'		=>[
		[
			'param_name'	=>'address',
			'type'			=>'textarea',
			'heading'		=>'Address',
		],
		[
			'param_name'	=>'mon_fri',
			'type'			=>'textfield',
			'heading'		=>'Mon-Fri',
		],
		[
			'param_name'	=>'sun_sat',
			'type'			=>'textfield',
			'heading'		=>'Sat-Sun',
		],
		[
			'param_name'	=>'email',
			'type'			=>'textfield',
			'heading'		=>'Email',
		],
		[
			'param_name'	=>'cell',
			'type'			=>'textfield',
			'heading'		=>'Phone',
		],
		[
			'param_name'	=>'fax',
			'type'			=>'textfield',
			'heading'		=>'Fax',
		],
	],
]);


 ?>