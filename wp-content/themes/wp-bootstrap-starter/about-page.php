<?php

/**
 * Template Name: About-page
 */
$mainassets = get_template_directory_uri();
get_header();

?>
<!-- Welcome Area Start -->
<section class="pelum-welcome-area" data-scroll-index="0" style="height:30vh; background-image:url(<?= get_field('fotografiya_bannera') ?>);background-color:#cecece05; background-position:center;background-size:cover;">
    <!-- Shape Start -->
    <!-- Shape End -->
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="welcome-text text-center h-100 d-flex justify-content-center align-items-center">
            <h2><?= get_field('zagolovok_bannera') ?></h2>
        </div>
    </div>
</section>
<!-- Welcome Area End -->


<!-- Features Area Start -->
<section class="pelum-features-area" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="feature-text">
                        <h4 style="color:#3a3a3a; font-size:22px;"><?= get_field('tekst_bannera') ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area End -->


<?php get_footer(); ?>