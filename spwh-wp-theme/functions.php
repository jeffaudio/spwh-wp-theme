<?php

// Add support for WordPress 3.0's custom menus.
add_action('init', 'register_my_menu');

// Register area for custom menu.
function register_my_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}

// Add editor style
add_editor_style( 'editor.css' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

// Enable widgets for sidebar
if (function_exists('register_sidebar')) {
	register_sidebar();
}
	
// Enable automatic feed links.
add_theme_support('automatic-feed-links');

// Enable multisite feature (WP 3.0)
define('WP_ALLOW_MULTISITE', true);

/* Image Sizes for Blog */
if ( function_exists( 'add_image_size' ) ) {
	add_image_size('desktop', 720);
	add_image_size('desktop-retina', 1440);
	add_image_size('tablet', 600);
	add_image_size('tablet-retina', 1200);
	add_image_size('mobile', 480);
	add_image_size('moble-retina', 960);
}

add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
        $customsizes = array(
                'desktop' => 'Large Image',
                'desktop-retina' => 'Large Retina Image',
                'tablet' => 'Medium Image',
                'tablet-retina' => 'Medium Retina Image',
                'mobile' => 'Small Image',
                'mobile-retina' => 'Small Image'
                );
        return array_merge($sizes, $customsizes);
}




if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'twentyeleven' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for twentyeleven_comment()