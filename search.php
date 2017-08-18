<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bani
 */

get_header(); ?>

<div class="bani-cover-wrapper short-cover">
	<div class="bani-cover-bg"></div><!-- /.bani-cover-bg -->
	<div class="bani-cover-content row align-items-center justify-content-center">
		<div class="col-md-6 bani-content-height">
			<h3 class="title"><?php printf( esc_html__( 'Search Results for: %s', 'bani' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
		</div><!-- /.col -->
	</div><!-- /.bani-cover-content -->
</div>

<div class="st-primary-wrapper col-lg-9">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			bani_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
</div><!-- .st-primary-wrapper -->

<?php
get_sidebar();
get_footer();
