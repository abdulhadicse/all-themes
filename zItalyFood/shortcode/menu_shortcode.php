<?php 

add_shortcode( 'menu', 'zitalyfood_menu_shortcode' );

function zitalyfood_menu_shortcode($one,$two){

	$menu_atts = shortcode_atts( [
		'menu_category'				=>'',
		'food_name'					=>'',
		'food_img'					=>'',
		'food_price'				=>'',
		'food_all_data'				=>'',
	], $one );

	ob_start();
	?>
			
			<div class="wrap-col">
				<h3><?php echo $menu_atts['menu_category'] ?></h3>
			<?php 

				 $menu_full_data = vc_param_group_parse_atts($menu_atts['food_all_data']);
				 
				 foreach($menu_full_data  as $menu_single_data ):

			 ?>

				<div class="post">
					<a href="#"><img src="<?php echo wp_get_attachment_image_url($menu_single_data['food_img']) ?>"/></a>
					<div class="wrapper">
					  <h5><a href="#"><?php echo $menu_single_data['food_name'] ?></a></h5>
					  <span><?php echo $menu_single_data['food_price'] ?></span>
					</div>
				</div>
			<?php endforeach; ?>



			</div>



	<?php
	return ob_get_clean();


}

vc_map([
	'base'			=>'menu',
	'name'			=>'Menu',
	'category'		=>'Food',
	'icon'			=> get_theme_file_uri().'/assets/images/menu.png',
	'params'		=>[
		[
			'param_name'	=>'menu_category',
			'type'			=>'textfield',
			'heading'		=>'Food Category Name',
		],
		[
			'param_name'	=>'food_all_data',
			'type'			=>'param_group',
			'heading'		=>'Add Food',
			'params'		=>[
				[
					'param_name'	=>'food_name',
					'type'			=>'textfield',
					'heading'		=>'Food Name',
				],
				[
					'param_name'	=>'food_img',
					'type'			=>'attach_image',
					'heading'		=>'Food Image',
				],
				[
					'param_name'	=>'food_price',
					'type'			=>'textfield',
					'heading'		=>'Food Price',
				],

			],
		],

	],
]);


 ?>


