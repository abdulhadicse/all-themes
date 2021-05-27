<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <!--favicon and touch icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon-114x114.png">

    <!--web font-->
    <?php wp_head(); ?>

</head>
<body <?php body_class('archive  woocommerce'); ?> >

<!--header start-->
<header class="app-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg mainmenu">
                    <!--logo-->
                    <a class="navbar-brand mr-5 text-dark float-left" href="<?php echo site_url(); ?>">
                        <img class="" src="<?php echo get_theme_file_uri() ?>/assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt=""/>
                    </a>
                    <!--logo-->

                    <!--responsive toggle icon-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"> </i>
                            </span>
                    </button>
                    <!--responsive toggle icon-->

                    <!--search start-->
                    <div id="form-search" class="form-search">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button id="form-search-close-btn" class="btn" type="button">
                                    <span class="svg svg--cross">
                                        <svg class="svg__icon" width="32px" height="32px" viewBox="0 0 32 32">
                                            <path d="M16.7,16L31.9,0.9c0.2-0.2,0.2-0.5,0-0.7s-0.5-0.2-0.7,0L16,15.3L0.9,0.1C0.7,0,0.3,0,0.1,0.1S0,0.7,0.1,0.9L15.3,16
                                            L0.1,31.1c-0.2,0.2-0.2,0.5,0,0.7C0.2,32,0.4,32,0.5,32s0.3,0,0.4-0.1L16,16.7l15.1,15.1c0.1,0.1,0.2,0.1,0.4,0.1s0.3,0,0.4-0.1
                                            c0.2-0.2,0.2-0.5,0-0.7L16.7,16z"/>
                                        </svg>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <!--search end-->
                   
                    <!--nav link-->
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul id="menu" class="navbar-nav ml-auto">
                            <li class=""><a href="<?php echo site_url(); ?>" class="" >Home</a></li>
                            <li class=""><a href="<?php echo site_url('/shop/'); ?>" class="" >Shop</a></li>
                            <li><a href="<?php echo site_url('/my-account/'); ?>" class="" ><i class="fa fa-user"></i></a></li>
                            <!--<li><a href="#" class="" ><i class="fa fa-shopping-basket"></i></a></li>-->
                            <li>
                                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="wcmenucart-contents">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="cart-value"><?php echo wp_kses_data ( WC()->cart->get_cart_contents_count() ); ?></span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!--nav link-->
                </nav>
            </div>
        </div>
    </div>

</header>
<!--header end-->