<?php get_header(); ?>

<!--page title start-->
<?php get_template_part( 'template-parts/common/breadcrump' ); ?>
<!--page title end-->

<div class="site-main">
    <!--shop category start-->
    <section class="space-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="display-1 font-weight-bold">404</h1>
                    <h2>Oops! Page Not Found</h2>
                    <p>Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.</p>
                    <a href="<?php echo site_url(); ?>" class="btn btn-solid-dark">Go Home</a>
                </div>
            </div>
        </div>
    </section>
    <!--shop category end-->
</div>

<?php get_footer(); ?>
