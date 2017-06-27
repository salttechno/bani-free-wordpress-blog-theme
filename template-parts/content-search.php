<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bani
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="card bani-card">
		<div class="card-block">
			<header class="entry-header">
				<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php bani_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div><!-- /.card-block -->

		<?php if ( 'post' === get_post_type() ) : ?>
			<footer class="entry-footer card-footer">
				<?php bani_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
