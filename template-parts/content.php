<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bani
 */

?>

<?php
	$mesonryClass = '';
	if ( get_theme_mod( 'bani_home_layout' ) == 'masonry' ) {
		$mesonryClass = 'masonry-card';
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($mesonryClass); ?>>

	<div class="card bani-card">

		<?php if ( has_post_thumbnail() ) : ?>
	        <?php if ( !is_single() ) : ?>
	    		<a href="<?php echo get_permalink() ?>" title="<?php the_title_attribute(); ?>" class="bani-thumb-link">
	                <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'card-img-top d-block img-fluid w-100']); ?>
	            </a>
	        <?php endif; ?>
		<?php else : ?>
			<?php if ( get_theme_mod( 'bani_default_image_home' ) ) : ?>
				<?php if ( !is_single() ) : ?>
		    		<a href="<?php echo get_permalink() ?>" title="<?php the_title_attribute(); ?>" class="bani-thumb-link">
		                <img src="<?php echo get_template_directory_uri() . '/images/default-img.png'; ?>" alt="<?php the_title_attribute(); ?>" class="card-img-top d-block img-fluid w-100">
		            </a>
		        <?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<div class="card-block">

			<?php if ( ! is_singular() ) : ?>
			<header class="entry-header">
				<?php

				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php bani_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			<?php endif; ?>

			<?php if ( is_single() ) : ?>
				<div class="entry-content">
					<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bani' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bani' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			<?php else : ?>
		        <div class="entry excerpt entry-summary">
					<?php the_excerpt(); ?>
				</div><!--/.entry-->
		    <?php endif; ?>

			<?php if ( is_sticky() && !is_single() ) : ?>
	            <div class="sticky-icon">
	                <i class="fa fa-bookmark" title="<?php echo esc_html__( 'Sticky Post', 'bani' ) ?>"></i>
	            </div>
	            <!-- /.sticky-icon -->
	        <?php endif; ?>
		</div>

		<footer class="entry-footer card-footer">
			<?php bani_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
