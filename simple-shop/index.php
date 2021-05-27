<?php get_header(); ?>

<!--hero section start-->
<?php get_template_part( 'template-parts/home/hero' ); ?>
<!--hero section end-->

<main class="site-main">
    <!--shop category start-->
    <?php get_template_part( 'template-parts/home/category' ); ?>    
    <!--shop category end-->

    <!--product section start-->
    <?php get_template_part( 'template-parts/home/product' ); ?>
    <!-- product section end-->

    <!--promo section start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-box space-3">
                        <div class="promo-img rounded bg-overlay" data-overlay="1" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/img/sb.jpg);"></div>
                        <div class="container">
                            <div class="row justify-content-center align-items-center text-center">
                                <div class="col-md-8">
                                    <!-- heading -->
                                    <h2 class="text-white mb-0 promo-title">
                                        Sale
                                    </h2>
                                    <h3 class="text-white promo-sub-title mt-0">Up to 50% off</h3>

                                    <a href="<?php echo site_url( '/shop/','' ); ?>" class="promo-link">in store and online</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--product section start-->
    <?php  get_template_part( 'template-parts/home/popular' ); ?>
    <!-- product section end-->

    <!--offer section start-->
    <section class="space-3 space-adjust">
        <div class="container ">
            <div class="row no-gutters text-center">
                <div class="col-md-4">
                    <div class="offer-box border p-5">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0">Free Shipping</h5>
                        <p class="mb-0">On all order over $39.00</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="offer-box border p-5 border-adjust">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0">30 Days Return</h5>
                        <p class="mb-0">Money back Guarantee</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="offer-box border p-5">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0">Secure Checkout</h5>
                        <p class="mb-0">100% Protected by paypal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--offer section end-->
</main>

<?php get_footer(); ?>