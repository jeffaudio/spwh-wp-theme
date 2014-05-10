<div class="article">
	<div class="article-header">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<ul class="inline-list">
			<li><p><i class="fi-calendar"></i> <?php the_time("l, M. j, Y"); ?></p></li>
			<li><p><i class="fi-torso"></i> <?php the_author_posts_link(); ?></p></li>

			<?php if ( comments_open() ) : echo '<li><p><i class="fi-comments"></i> ';
				comments_popup_link( '0 comments', '1 comment', '% comments', 'comments-link', 'Comments Disabled');
			echo '</p></li>';
				endif;
			?>

			<?php if (current_user_can( 'manage_options' )) : echo '<li><p><i class="fi-page-edit"></i> ';
			  edit_post_link('Edit', '', '');
			  echo '</li>';
			  endif;
			?>
		</ul>
	</div>

	<div class="article-body">
		<?php the_content('Continue Reading...'); ?>
	</div>
				
	<div class="article-footer">
		<p><label><?php _e('Categories'); ?></label>: <?php the_category(', ') ?></p>
		<p><label><?php _e('Tags'); ?></label>: <?php the_tags('', ', ', '') ?></p>
	</div>
</div>