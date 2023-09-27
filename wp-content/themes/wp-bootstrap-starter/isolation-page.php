<?php

/**
 * Template Name: Isolation-page
 */

get_header(); ?>

<!-- Welcome Area Start -->
<section class="pelum-welcome-area" style="height:30vh; background-image:url(<?= get_field('fotografiya_bannera') ?>);background-color:#cecece05; background-position:center;background-size:cover;">
	<!-- Shape Start -->
	<!-- Shape End -->
	<div class="container h-100 d-flex justify-content-center align-items-center">
		<div class="welcome-text text-center h-100 d-flex justify-content-center align-items-center">
			<h3><?= get_field('zagolovok_bannera') ?></h3>
		</div>
	</div>
</section>
<!-- Welcome Area End -->

<!-- Shape Start -->
<section class="pelum-features-area">
	<div class="container-fluid h-100 d-flex justify-content-center align-items-center">
		<div class="row">
			<div class="col-md-4">
				<img src="<?= get_field('kontent_foto') ?>" alt="banner" class="img-fluid">
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" style="color: #1c1c1c;">
						<?= get_field('kontent_tekst') ?>
					</div>​
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Shape End -->


<!-- Features Area Start -->
<section class="pelum-features-area" data-scroll-index="1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-snowflake-o"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_1"); ?></h5>
						<p><?= get_field("tekst_opisaniya_1"); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-umbrella"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_2"); ?></h5>
						<p><?= get_field("tekst_opisaniya_2"); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-flask"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_3"); ?></h5>
						<p><?= get_field("tekst_opisaniya_3"); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 pt-5">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-fire"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_4"); ?></h5>
						<p><?= get_field("tekst_opisaniya_4"); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 pt-5">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-dot-circle-o"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_5"); ?></h5>
						<p><?= get_field("tekst_opisaniya_5"); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 pt-5">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-recycle"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_6"); ?></h5>
						<p><?= get_field("tekst_opisaniya_6"); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 pt-5">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-wifi"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_7"); ?></h5>
						<p><?= get_field("tekst_opisaniya_7"); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 pt-5">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-tint"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_8"); ?></h5>
						<p><?= get_field("tekst_opisaniya_8"); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 pt-5">
				<div class="single-feature wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="feature-icon">
						<i class="fa fa-microphone-slash"></i>
					</div>
					<div class="feature-text">
						<h5><?= get_field("zagolovok_opisaniya_9"); ?></h5>
						<p><?= get_field("tekst_opisaniya_9"); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Features Area End -->
<?php
get_footer();
