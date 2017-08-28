<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bani
 */

get_header(); ?>

<div class="bani-cover-wrapper <?php if ( ! has_post_thumbnail() ) : ?> short-cover <?php else : ?> page-cover <?php endif; ?>">
    <div class="bani-cover-bg" <?php if ( has_post_thumbnail() ) : ?> style="background-image: url(<?php echo esc_url( the_post_thumbnail_url() ); ?>); -webkit-filter: brightness(35%); filter: brightness(35%);" <?php endif; ?>></div><!-- /.bani-cover -->
	<div class="bani-cover-content row align-items-center justify-content-center">
		<div class="col-md-6 bani-content-height">
			<h1 class="entry-title"><?php esc_html_e( '404 Page', 'bani' ); ?></h1>
		</div><!-- /.col -->
	</div><!-- /.bani-cover-content -->
</div>

<div class="st-primary-wrapper col-lg-9">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="card bani-card">
              <div class="card-block">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bani' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bani' ); ?></p>

							<?php
								get_search_form();

								the_widget( 'WP_Widget_Recent_Posts' );

								// Only show the widget if site has multiple categories.
								if ( bani_categorized_blog() ) :
							?>

							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'bani' ); ?></h2>
								<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
								</ul>
							</div><!-- .widget -->

							<?php
								endif;

								/* translators: %1$s: smiley */
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'bani' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

								the_widget( 'WP_Widget_Tag_Cloud' );
							?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
                </div><!-- .card-blocks -->
			</div><!-- .card -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .st-primary-wrapper -->
<?php
get_sidebar();
get_footer();
