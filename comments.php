<?php
/**
 * The template for displaying comments
 *
 * @package Bani
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<div class="card">

		<?php
		// You can start editing here -- including this comment!
		if ( have_comments() ) : ?>

			<div class="card-block">
				<h6 class="comments-title ">
				<?php
					printf( // WPCS: XSS OK.
						esc_html( _nx( '1 comment', '%1$s comments', get_comments_number(), 'comments title', 'bani' ) ),
						number_format_i18n( get_comments_number() ),
						'<span>' . get_the_title() . '</span>'
					);
				?>
				</h6><!-- .comments-title -->

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bani' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bani' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bani' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-above -->
				<?php endif; // Check for comment navigation. ?>

				<ul class="comment-list">
					<?php
						wp_list_comments( array(
							'style'      => 'ul',
							'short_ping' => true,
							'avatar_size'	=> 60,
							'callback'		=> 'bani_comments',
						) );
					?>
				</ul><!-- .comment-list -->

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bani' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bani' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bani' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
			<?php endif; // Check for comment navigation. ?>

			</div><!-- /.card-block -->


		<?php endif; // Check for have_comments().


		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<div class="card-block">
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bani' ); ?></p>
			</div>
			<!-- /.card-block -->
		<?php endif; ?>

		<div class="card-block">
			<?php
				$bani_comment_field = '<div class="comment-form-textarea form-group col-md-12"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control" placeholder="'. esc_html__('Enter your comment...', 'bani') .'"></textarea></div>';
				$sp_fields =  array(

				  'author' =>
					'<div class="comment-form-author form-group col-md-4"><input id="author" placeholder="'. esc_html__('Name', 'bani') .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" class="form-control" required /></div>',

				  'email' =>
					'<p class="comment-form-email form-group col-md-4"><input id="email" placeholder="'. esc_html__('Email', 'bani') .'" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30" class="form-control" required /></p>',

				  'url' =>
					'<p class="comment-form-url form-group col-md-4"><input id="url" placeholder="'. esc_html__('Website', 'bani') .'" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" class="form-control" /></p>',
				);

				comment_form(array(
					'comment_field' => $bani_comment_field,
					'title_reply_before' => '<h4 class="reply-title bani-reply-title">',
					'title_reply_after' => '</h4>',
					'title_reply' => esc_html__('Leave a Comment', 'bani'),
					'cancel_reply_link' => esc_html__('Cancel Comment', 'bani'),
					'label_submit' => esc_html__('Post Comment', 'bani'),
					'fields' => $sp_fields,
					'class_submit' => 'submit btn btn-primary comment-submit-btn',
					'submit_field' => '<div class="form-submit text-center col">%1$s %2$s</div>',
					'cancel_reply_before' => '<small class="bani-cancel-reply">',
					'class_form' => 'comment-form row align-items-center'
				));
			?>
		</div><!-- /.card-block -->

	</div>
	<!-- /.card -->

</div><!-- #comments -->
