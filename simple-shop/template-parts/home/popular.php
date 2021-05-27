<section class="space-3">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h2 class="title ">Popular Product</h2>
                    <!--<div class="sub-title">37 New fashion products arrived recently in our showroom for this-->
                    <!--winter-->
                    <!--</div>-->
                </div>
            </div>

            <div class="col-md-12">
                <?php echo do_shortcode( '[products limit="3" columns="3" best_selling="true" ]' ) ?>
                <a href="<?php echo site_url( '/shop/','' ); ?>" class="view-all-product mt-md-5">View All Products</a>
            </div>

        </div>
    </div>
</section>