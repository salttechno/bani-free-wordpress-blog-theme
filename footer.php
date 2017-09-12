<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bani
 */

?>

				</div><!-- #content -->
			</div><!-- /.container -->
		</div><!-- /.st-content-area -->

		<div class="st-footer-area">
			<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
			<div id="footer-instagram">
				<?php dynamic_sidebar( 'sidebar-footer' ) ?>
			</div>
			<?php endif; ?>
			<div class="container">
				<footer id="colophon" class="site-footer row align-items-center" role="contentinfo">
					<div class="col-md-4 site-info self-align-first">
						<h6 class="mb-0"><?php echo wp_kses_post(get_theme_mod('bani_footer_text_left', '(c) Copyright 2017 - All Rights Reserved')); ?></h6>
					</div><!-- .site-info -->
					<div class="col-md-4 text-center site-info">
						<?php if ( !get_theme_mod( 'bani_hide_social_icons_footer' ) ) : ?>
						<div class="social-links-footer">
							<ul class="d-flex justify-content-center">
								<?php bani_get_social_icons(); ?>
							</ul>
						</div>
						<!-- /.social-links-footer -->
						<?php endif; ?>
					</div><!-- .site-info -->
					<div class="col-md-4 site-info self-align-last text-right">
						<h6 class="mb-0"><?php echo wp_kses_post(get_theme_mod('bani_footer_text_right', '<a href="https://themes.salttechno.com/">WordPress Blog Themes</a> by SALT TECHNO')); ?></h6>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>
			<!-- /.container -->

			<div class="scroll-to-top">
				<i class="fa fa-arrow-up"></i>
			</div>
			<!-- /.scroll-to-top -->
		</div>
		<!-- /.st-footer-area -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
