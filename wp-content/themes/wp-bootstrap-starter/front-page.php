<?php

/**
 * Template Name: Front-page
 */
$mainassets = get_template_directory_uri();
get_header();

?>
<!-- Welcome Area Start -->
<section class="pelum-welcome-area" data-scroll-index="0" style="background-image:url(<?= get_field('fotografiya_bannera') ?>);background-color:#cecece05; background-position:center;background-size:cover;">
    <!-- Shape Start -->
    <!-- Shape End -->
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="welcome-text text-center h-100 d-flex justify-content-center align-items-center">
            <h2 class="p-3"><?= get_field('banner_text') ?></h2>
        </div>
    </div>
</section>
<!-- Welcome Area End -->


<!-- Features Area Start -->
<section class="pelum-features-area mt-3" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading">
                    <h2><?= get_field('zagolovok_bloka_czel_kompanii') ?></h2>
                    <span class="heading_overlay"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="feature-text">
                        <h4 style="color:#3a3a3a; font-size:22px;"><?= get_field('text_czel_kompanii') ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area End -->
<!-- Features Area Start -->
<section class="pelum-features-area" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="feature-icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="feature-text">
                        <h3><?= get_field("zagolovok_preimushhestva_1"); ?></h3>
                        <p><?= get_field("tekst_preimushhestva_1"); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="feature-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="feature-text">
                        <h3><?= get_field("zagolovok_preimushhestva_2"); ?></h3>
                        <p><?= get_field("tekst_preimushhestva_2"); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="feature-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="feature-text">
                        <h3><?= get_field("zagolovok_preimushhestva_3"); ?></h3>
                        <p><?= get_field("tekst_preimushhestva_3"); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="feature-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="feature-text">
                        <h3><?= get_field("zagolovok_preimushhestva_4"); ?></h3>
                        <p><?= get_field("tekst_preimushhestva_4"); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area End -->
<!-- Partners Area Start-->
<section class="pelum-features-area">
    <div class="container">
        <div class="site-heading">
            <h2><?= get_field('zagolovok_bloka_parnerov'); ?></h2>
            <span class="heading_overlay"></span>
        </div>
        <div class="row text-center">
            <?php for ($j = 1; $j <= 8; $j++) { ?>
                <?php if (!empty(get_field("partner_$j"))) { ?>
                    <div class="col-3 col-sm-3 col-xs-3 col-md-2">
                        <div class="card h-100">
                            <img src="<?= get_field("partner_$j"); ?>" class="img-fluid" alt="Bank<?= $j ?>">
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <!-- Add more partners as needed -->
        </div>
    </div>
</section>
<!-- Partners Area END-->



<?php get_footer(); ?>