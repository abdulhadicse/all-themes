<?php get_header(); ?>

<!--page title start-->
    <?php  get_template_part( 'template-parts/common/breadcrump' ); ?>
<!--page title end-->

<div class="site-main">
    <!--shop category start-->
    <section class="space-3">
        <div class="container">
            <?php 
                if( have_posts() ) {
                    the_post();
                    the_content();
                }
            ?>
        </div>
    </section>
    <!--shop category end-->
</div>

<?php get_footer(); ?>
