<?php get_header(); ?>

<div id="blog_container">
<div id="blog">

	<?php if (have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

		<article class="post">
		<header>
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="tagline">
				<?php _e("Posted on"); ?> <?php the_time("l, M. j, Y"); ?> <?php _e("at"); ?> <?php the_time("g:i A"); ?> <?php _e("by"); ?> <?php the_author_posts_link(); ?> <?php edit_post_link('Edit', '&#124; ', ''); ?>
			</div>
		</header>
		
		<div class="entry">
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
		</div>
		
		<footer>
			<div class="postmetadata">
				<div class="label"><?php _e('Categories'); ?></div> <?php the_category(', ') ?> <br />
				<div class="label"><?php _e('Tags'); ?></div> <?php the_tags('', ', ', '') ?>
			</div>
			
			<div class="social-counts">
				<div class="interaction"><?php if (function_exists('sfc_like_button')) echo sfc_like_button(array()); ?></div>
				<div class="interaction">
			
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="jeffandhillary">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>

			
					</footer>
		

		
	</article>

		<div class="comments-template">
					<?php comments_template( '', true ); ?>
				</div>
				
	<?php endwhile; ?>
	
	<div class="navigation">
		<div id="previous"><?php previous_post_link() ?></div>
		<div id="next"><?php next_post_link(' %link >') ?></div>
	</div>
	
<?php endif; ?>
</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>