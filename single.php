<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bani
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( is_single() ) : ?>
		<div class="bani-cover-wrapper">
			<div class="bani-cover-bg" <?php if ( has_post_thumbnail() ) : ?> style="background-image: url(<?php echo the_post_thumbnail_url(); ?>); -webkit-filter: brightness(35%) blur(2px); filter: brightness(35%) blur(2px);" <?php endif; ?>></div><!-- /.bani-cover -->
			<div class="bani-cover-content row align-items-center justify-content-center">
				<div class="col-md-6 bani-content-height">
					<div class="entry-meta ">
						<?php
							$categories_list = get_the_category_list( esc_html__( '  ', 'bani' ) );
							if ( $categories_list && bani_categorized_blog() ) {
								/* translators: 1: list of categories. */
								printf( '<span class="cat-links bani-cat-links">' . esc_html__( '%1$s', 'bani' ) . '</span>', $categories_list ); // WPCS: XSS OK.
							}
						?>
					</div><!-- /.entry-meta -->
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="entry-meta">
						<?php bani_posted_on(); ?>
					</div><!-- .entry-meta -->
				</div><!-- /.col -->
			</div><!-- /.bani-cover-content -->
		</div>
	<?php endif; ?>

	<div class="w-100"></div>

	<?php
		if ( !get_theme_mod( 'bani_full_width_post' ) && get_theme_mod( 'bani_left_sidebar_post' ) ) {
			get_sidebar();
		}
 	?>

	<div class="st-primary-wrapper <?php if ( get_theme_mod( 'bani_full_width_post' ) ) : echo 'col-md-12'; else : echo 'col-lg-9'; endif; ?>">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php

					get_template_part( 'template-parts/content', get_post_format() );

					// the_post_navigation();
					if ( !get_theme_mod( 'bani_hide_related_posts' ) ) {
						get_template_part( 'template-parts/related-posts' );
					}

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .st-primary-wrapper -->

<?php endwhile; ?>
<?php
if ( !get_theme_mod( 'bani_full_width_post' ) && !get_theme_mod( 'bani_left_sidebar_post' ) ) {
	get_sidebar();
}
get_footer();
