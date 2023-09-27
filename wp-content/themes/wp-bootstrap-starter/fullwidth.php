<?php

/**
 * Template Name: Full Width
 */

get_header(); ?>

<!-- Welcome Area Start -->
<section class="pelum-welcome-area" style="height:30vh; background-image:url(<?= get_field('fotografiya_bannera') ?>);background-color:#cecece05; background-position:center;background-size:cover;">
	<!-- Shape Start -->
	<!-- Shape End -->
	<div class="container h-100 d-flex justify-content-center align-items-center">
		<div class="welcome-text text-center h-100 d-flex justify-content-center align-items-center">
			<h2><?= get_field('zagolovok_bannera') ?></h2>
		</div>
	</div>
</section>
<!-- Welcome Area End -->
<section class="pelum-features-area mt-3">
	<!-- Shape Start -->
	<!-- Shape End -->
	<div class="container-fluid d-flex justify-content-center align-items-center">
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
<?php
get_footer();
