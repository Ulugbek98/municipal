<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

<!-- Footer Area Start -->
<footer class="pelum-footer-area">
	<div class="ocean">
		<div class="wave"></div>
		<div class="wave"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-box">
					<div class="footer-copyright wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
						<h3 style="color:aliceblue;font-size:20px;"> OOO «MUNICIPAL FAST SERVICE» </h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Area End -->

<?php wp_footer(); ?>

<!-- //// SCRIPTS //// -->
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>

<script src="<?= get_template_directory_uri() ?>/assets/js/popper.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<!-- <script src="<?= get_template_directory_uri() ?>/assets/js/scrollIt.min.js"></script> -->
<!-- <script src="<?= get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script> -->
<!-- <script src="<?= get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script> -->
<script src="<?= get_template_directory_uri() ?>/assets/js/init.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/wow.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>
</body>

</html>