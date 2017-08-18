<?php
/**
 * The main template file
 *
 * @package Bani
 */

get_header(); ?>


<?php if ( is_home() ) : ?>
	<?php if( ! get_theme_mod( 'bani_hide_cover_section' ) ) : ?>
		<div class="bani-cover-wrapper">
			<div class="bani-cover-bg"></div><!-- /.bani-cover -->
			<div class="bani-cover-content row align-items-center justify-content-center">
				<div class="col-md-6 bani-content-height">
					<h5 class="sub-title"><?php echo wp_kses_post(get_theme_mod('bani_cover_subtitle', 'Welcome to my blog!')); ?></h5>
					<h3 class="title"><?php echo wp_kses_post(get_theme_mod('bani_cover_static_title', 'I am a')); ?> <span id="typed"></span></h3>
					<?php
						$typing_strings = array("Father...","Son...","Writer...","Designer...","Developer...","Blogger!");
						if ( get_theme_mod( 'bani_cover_typer_title' ) ) {
							$typing_strings = explode( ",", get_theme_mod( 'bani_cover_typer_title' ) );
						}
					?>
					<div id="typed-strings">
						<?php
							foreach ($typing_strings as $single_string) {
								echo "<p>" . $single_string . "</p>";
							}
						?>
					</div>
					<p><?php echo wp_kses_post(get_theme_mod('bani_cover_paragraph', 'This is a perfect place to introduce yourself and this blog. You can easily customize this text from WordPress admin panel. If you want, you can disable this section. You can also customize colors used for this template easily.')); ?></p>
				</div><!-- /.col -->
			</div><!-- /.bani-cover-content -->
		</div>

		<div class="w-100"></div>
	<?php else : ?>
		<div class="w-100 height-54"></div>
	<?php endif; ?>
<?php endif; ?>


<?php if ( !get_theme_mod( 'bani_full_width_home' ) && get_theme_mod( 'bani_left_sidebar_home' ) ) : ?>
	<?php get_sidebar(); ?>
<?php endif; ?>

	<div class="st-primary-wrapper post-hover-effect <?php if ( get_theme_mod( 'bani_full_width_home' ) ) : echo 'col-lg-12'; else : echo 'col-lg-9'; endif; ?>">

		<?php if ( is_home() ) : ?>
			<?php if( ! get_theme_mod( 'bani_hide_featured_posts' ) ) : ?>
				<?php get_template_part( 'inc/featured-posts' ); ?>
			<?php endif; ?>
		<?php endif; ?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;
				?>

				<?php if ( get_theme_mod( 'bani_home_layout' ) == 'full' ) : ?>

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;
					?>


				<?php elseif ( get_theme_mod( 'bani_home_layout' ) == 'masonry' ) : ?>

					<div class="row">
						<div class="card-columns">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;
							?>
						</div>
					</div>

				<?php else : ?>

					<div class="row">
						<?php
						while ( have_posts() ) : the_post(); ?>

							<div class="col-md-6 grid-card">

								<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

							</div><!-- /.col-md-6 -->

						<?php
						endwhile;
						?>
					</div>

				<?php endif; ?>

				<?php
				bani_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .st-primary-wrapper -->

<?php
if ( !get_theme_mod( 'bani_full_width_home' ) && !get_theme_mod( 'bani_left_sidebar_home' ) ) {
	get_sidebar();
}
get_footer();
