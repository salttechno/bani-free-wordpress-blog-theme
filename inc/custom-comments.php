<?php
/**
 * Implementation of the Custom Comments
 *
 * @package Bani
 */

if ( ! function_exists( 'bani_comments' ) ) {
    function bani_comments( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;

    	?>
    	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

            <div class="media bani-comment">
                <?php if (! empty(get_avatar_url( $comment ) )) : ?>
                    <img class="d-flex align-self-start mr-3 comment-img rounded" src="<?php echo get_avatar_url( $comment ); ?>" alt="" width="60">
                <?php else : ?>
                    <img class="d-flex align-self-start mr-3 comment-img rounded" src="<?php echo get_template_directory_uri() . '/images/default-img.png'; ?>" alt="" width="60">
                <?php endif; ?>
                <div class="media-body">
                    <h6 class="mt-0 comment-author">
                        <?php echo get_comment_author_link(); ?>
                        <?php if ( $comment->comment_author_email == get_the_author_meta( 'email' ) ) : ?>
                            <small class="bani-comment-by-author"><?php echo esc_html__( '&#8226; Post Author &#8226;', 'bani' ) ?></small>
                        <?php endif; ?>
                    </h6>
                    <small class="date"><?php printf(esc_html__('%1$s at %2$s', 'bani'), get_comment_date(),  get_comment_time()) ?></small>
                    <?php if ($comment->comment_approved == '0') : ?>
    					<em class="comment-awaiting"><i class="fa fa-info-circle"></i> <?php esc_html_e('Comment is awaiting approval', 'bani'); ?></em>
    					<br />
    				<?php endif; ?>
    				<?php comment_text(); ?>

                    <?php
                        $args['before'] = '<i class="fa fa-reply mr-2"></i>'
                    ?>

                    <small class="reply">
    					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'bani' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ), $comment->comment_ID ); ?>
    					<?php edit_comment_link( esc_html__( 'Edit', 'bani' ), '<i class="fa fa-pencil mr-2 ml-4"></i>' ); ?>
    				</small>
                </div>
            </div>

    	</li>

    	<?php
    }
}
