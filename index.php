<?php get_header(); ?>

<div id="blog_container">
<section id="blog">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
	<article class="post">
		<header>
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="tagline">
				<?php _e("Posted on"); ?> <?php the_time("l, M. j, Y"); ?> <?php _e("at"); ?> <?php the_time("g:i A"); ?> <?php _e("by"); ?> <?php the_author_posts_link(); ?> <?php edit_post_link('Edit', '&#124; ', ''); ?>
			</div>
		</header>
		
		<div class="entry">
			<?php the_post_thumbnail(); ?>
			<?php the_content('Continue Reading...'); ?>
		</div>
		
		<footer>
			<div class="postmetadata">
				<div class="label"><?php _e('Categories'); ?></div> <?php the_category(', ') ?> <br />
				<div class="label"><?php _e('Tags'); ?></div> <?php the_tags('', ', ', '') ?>
			</div>
			<div class="social">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="jeffandhillary">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


			<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
			</div>
		</footer>
	</article>
	
	<?php endwhile; ?>
	
	<div class="navigation">
		<div id="previous"><? previous_posts_link(); ?></div>
		<div id="next"><? next_posts_link(); ?></div>
	</div>
	
	<?php endif; ?>
</section>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>