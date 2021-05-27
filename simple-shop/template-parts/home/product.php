<section class="space-3 space-adjust">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h2 class="title ">New Arrival</h2>
                    <div class="sub-title">37 New fashion products arrived recently in our showroom for this
                        winter
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <?php echo do_shortcode( '[products limit="6" columns="3" orderby="id" order="DESC" visibility="visible"]' ); ?>
                <a href="<?php echo site_url( '/shop/','' ); ?>" class="view-all-product mt-md-5">View All Products</a>
            </div>

        </div>
    </div>
</section>