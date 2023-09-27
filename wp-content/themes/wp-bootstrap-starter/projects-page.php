<?php

/**
 * Template Name: Project-page
 */
$mainassets = get_template_directory_uri();
get_header();

?>
<!-- Welcome Area Start -->
<section class="pelum-welcome-area"style="height:30vh; background-image:url(<?= get_field('fotografiya_bannera') ?>);background-color:#cecece05; background-position:center;background-size:cover;">
    <!-- Shape Start -->
    <!-- Shape End -->
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="welcome-text text-center h-100 d-flex justify-content-center align-items-center">
            <h2 class="p-3"><?= get_field('zagolovok_bannera') ?></h2>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- Partners Area Start-->
<section class="pelum-features-area">
    <div class="container">
        <div class="row text-center">
            <?php for ($j = 1; $j <= 8; $j++) { ?>
                <?php if (!empty(get_field("tekst_proekta_$j"))) { ?>
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="<?= get_field("foto_proekt_$j"); ?>" class="img-fluid" alt="Project<?= $j ?>">
                       
                            <p class="text-center mt-2"><b><?= get_field("tekst_proekta_$j"); ?></b></p>
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