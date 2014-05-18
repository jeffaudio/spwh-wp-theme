<div class="article">
	<div class="article-header">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<ul class="inline-list">
			<li><p><i class="fi-calendar"></i> <?php the_time("l, M. j, Y"); ?></p></li>
			<li><p><i class="fi-torso"></i> <?php the_author_posts_link(); ?></p></li>
			<li><p><i class="fi-comments"></i> <a href="<?php the_permalink(); ?>">Comments: <fb:comments-count href="<?php the_permalink(); ?>"></fb:comments-count></a></p></li>

			<?php if (current_user_can( 'manage_options' )) : echo '<li><p><i class="fi-page-edit"></i> ';
			  edit_post_link('Edit', '', '');
			  echo '</li>';
			  endif;
			?>

			<li class="right">
				<p><fb:like 
					href="<?php the_permalink(); ?>" 
					layout="button_count" 
					action="like"
					show_faces="false" 
					share="true">
				</fb:like>
				</p>
			</li>
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