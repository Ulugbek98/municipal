<?php

/**
 * Template Name: Contact Page
 */

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
<section class="pelum-contact-area" data-scroll-index="9">
    <div class="container">

        <div class="row">


            <div class="col-lg-5">
                <div class="contact-info">
                    <div class="single-contact-info wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="contact-info-icon">
                            <i class="fa fa-location-arrow"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Адрес</h3>
                            <p>ул. Богсарой, 43д</p>
                        </div>
                    </div>
                    <div class="single-contact-info wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="contact-info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Сервисный центр</h3>
                            <p>+998956313030</p>
                        </div>
                    </div>
                    <div class="single-contact-info wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <div class="contact-info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Почта</h3>
                            <p>a.san@linkserv.uz</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>