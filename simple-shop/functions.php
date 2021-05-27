<?php

/**
 * Add Theme Default Setup
 */
if ( ! function_exists( 'simple_shop_setup' ) ) {
    function simple_shop_setup() {
        load_theme_textdomain( 'simple-shop', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'widgets' );
        add_theme_support( 'menus' );
     
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu',      'simple-shop' ),
            'shop_menu'  => __( 'Shop Menu', 'simple-shop' ),
        ) );
     
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
     
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );
    }
}
add_action( 'after_setup_theme', 'simple_shop_setup' );

/**
 * Enqueue Scripts
 */
if( ! function_exists( 'simple_shop_enqueue_setup' ) ) {
    function simple_shop_enqueue_setup() {
        //enqueue css
        wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900', array() , null );
        wp_enqueue_style( 'bootstrap', get_theme_file_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array() , '1.0.0' );
        wp_enqueue_style( 'font-awesome', get_theme_file_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', array() , '1.0.0' );
        wp_enqueue_style( 'bicon', get_theme_file_uri() . '/assets/vendor/bicon/css/bicon.css', array() , '1.0.0' );
        wp_enqueue_style( 'woocommerce-layouts', get_theme_file_uri() . '/assets/css/woocommerce-layouts.css', array() , '1.0.0' );
        // wp_enqueue_style( 'woocommerce-small-screen', get_theme_file_uri() . '/assets/css/woocommerce-small-screen.css', array() , '1.0.0' );
        wp_enqueue_style( 'woocommerce', get_theme_file_uri() . '/assets/css/woocommerce.css', array() , '1.0.0' );
        wp_enqueue_style( 'main', get_theme_file_uri() . '/assets/css/main.css', array() , '1.0.0' );
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        //enqueue jQuery

        wp_enqueue_script( 'bootstrap', get_theme_file_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0' , true  );
        wp_enqueue_script( 'popper', get_theme_file_uri() . '/assets/vendor/popper.min.js', array('jquery'), '1.0.0' , true  );
        wp_enqueue_script( 'scripts', get_theme_file_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0' , true  );

    }
}

add_action( 'wp_enqueue_scripts', 'simple_shop_enqueue_setup' );

// Remove the category count for WooCommerce categories
add_filter( 'woocommerce_subcategory_count_html', '__return_null' );
add_filter( 'wp_calculate_image_sizes', '__return_empty_array' );
add_filter( 'wp_calculate_image_srcset', '__return_empty_array' );

//shop page markup design
//remove actions
// remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
// remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
// remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
// remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

//Add Actions
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );

if( ! function_exists( 'simple_shop_product_add_to_cart_text' ) ) {
    function simple_shop_product_add_to_cart_text( $text ) {
        return '<i class="fa fa-shopping-basket"></i>';
    }
}
add_filter( 'woocommerce_product_add_to_cart_text', 'simple_shop_product_add_to_cart_text' );

if( ! function_exists( 'simple_shop_before_shop_loop_item' ) ) {
    function simple_shop_before_shop_loop_item( ) {
        echo '<div class="product-wrap">';
    }
}
add_action( 'woocommerce_before_shop_loop_item', 'simple_shop_before_shop_loop_item' );

if( ! function_exists( 'simple_shop_before_shop_loop_item_title' ) ) {
    function simple_shop_before_shop_loop_item_title( ) {
        echo '</div>';
    }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'simple_shop_before_shop_loop_item_title' );

if( ! function_exists( 'simple_shop_loop_shop_columns' ) ) {
    function simple_shop_loop_shop_columns() {
        return 3;
    }
}
add_action( 'loop_shop_columns', 'simple_shop_loop_shop_columns' );
if( ! function_exists( 'simple_shop_before_shop_loop' ) ) {
    function simple_shop_before_shop_loop() {
        ?>
        <div class="section-title"> <h2 class="title d-block text-left-sm">
            <?php the_title(); ?>
        </h2>
        <?php
    }
}
add_action( 'woocommerce_before_shop_loop', 'simple_shop_before_shop_loop', 19 );

if( ! function_exists( 'simple_shop_before_shop_loop_2' ) ) {
    function simple_shop_before_shop_loop_2() {
        echo '</div>';
    }
}
add_action( 'woocommerce_before_shop_loop', 'simple_shop_before_shop_loop_2', 31 );

//single product title
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 4 );

//single page related product display
if( ! function_exists( 'simple_shop_output_related_products_args' ) ) {
    function simple_shop_output_related_products_args( $args ) {
        $args = array(
			'posts_per_page' => 3,
			'columns'        => 3,
			'orderby'        => 'rand',
		);
        return $args;
    }
}
add_filter( 'woocommerce_output_related_products_args', 'simple_shop_output_related_products_args' );

//upsell product display settings
if( !function_exists( 'simple_shop_woocommerce_upsell_display_args' ) ) {
    function simple_shop_woocommerce_upsell_display_args( $args ) {
        $args = array(
            'posts_per_page' => 3,
            'columns'        => 3,
        );
        return $args;
    }
}
add_action( 'woocommerce_upsell_display_args', 'simple_shop_woocommerce_upsell_display_args' );

//cart Table content
if( !function_exists( 'simple_shop_before_cart' ) ) {
    function simple_shop_before_cart() {
        echo '<div class="row"><div class="col-lg-8">';
    }
}
add_action( 'woocommerce_before_cart', 'simple_shop_before_cart' );

if( !function_exists( 'simple_shop_before_cart_collaterals' ) ) {
    function simple_shop_before_cart_collaterals() {
        echo '</div> <div class="col-lg-4">';
    }
}
add_action( 'woocommerce_before_cart_collaterals', 'simple_shop_before_cart_collaterals' );

//cart Table content
if( !function_exists( 'simple_shop_after_cart' ) ) {
    function simple_shop_after_cart() {
        echo '</div> </div>';
    }
}
add_action( 'woocommerce_after_cart', 'simple_shop_after_cart' );

//checkout page field remove

if( ! function_exists( 'simple_shop_checkout_fields' ) ) {
    function simple_shop_checkout_fields( $fields ) {
        unset( $fields['billing']['billing_company'] );
        unset( $fields['billing']['billing_country'] );
        unset( $fields['billing']['billing_state'] );
        unset( $fields['billing']['billing_postcode'] );
        return $fields;
    }
}
add_filter( 'woocommerce_checkout_fields', 'simple_shop_checkout_fields' );


 

