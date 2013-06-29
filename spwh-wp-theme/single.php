<?php get_header(); ?>

<section id="blog">    
<?php if(have_posts()) : ?>
        
<?php while(have_posts()) : the_post(); ?>
<article class="post">
	<header>
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			
		<div class="post-information">
			<div class="post-information-item date-published"><?php the_time("l, M. j, Y"); ?></div>
			<div class="post-information-item author"><?php the_author_posts_link(); ?></div>
			
			<?php if ( comments_open() ) : echo '<div class="post-information-item comment-count">';
				comments_popup_link( '0', '1', '%', 'comments-link', 'Comments Disabled');
			echo '</div>';
				endif;
			?>
			

			<?php if (current_user_can( 'manage_options' )) : echo '<div class="post-information-item edit">';
			  edit_post_link('Edit', '', '');
			  echo '</div>';
			  endif;
			?>		</div>
	</header>
	
	<?php the_content('Continue Reading...'); ?>
				
	<footer>
		<div class="postmetadata">
			<div class="label"><?php _e('Categories'); ?></div> <?php the_category(', ') ?>
			<br>
			<div class="label"><?php _e('Tags'); ?></div> <?php the_tags('', ', ', '') ?>
			
			<!-- TODO: Add Social Media -->
		</div>
	</footer>
</article>
<?php endwhile; ?>
	 
<div class="navigation">
  <div id="previous"><?php previous_post_link() ?></div>
  <div id="next"><?php next_post_link() ?></div>
</div>

<?php endif; ?>
</section>

<?php get_footer(); ?>