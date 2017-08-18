<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bani
 */

get_header(); ?>

<div class="bani-cover-wrapper short-cover">
	<div class="bani-cover-bg"></div><!-- /.bani-cover-bg -->
	<div class="bani-cover-content row align-items-center justify-content-center">
		<div class="col-md-6 bani-content-height">
			<h5 class="sub-title"></h5>
			<?php the_archive_title( '<h3 class="title">', '</h3>' ); ?>
			<?php the_archive_description( '', '' ); ?>
		</div><!-- /.col -->
	</div><!-- /.bani-cover-content -->
</div>

<div class="st-primary-wrapper post-hover-effect col-lg-9">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			bani_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .st-primary-wrapper -->

<?php
get_sidebar();
get_footer();
