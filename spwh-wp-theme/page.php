<?php get_header(); ?>

<div id="blog_container">
<section id="blog">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

			<article class="post">
		<header>
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php edit_post_link('Edit', '&#124; ', ''); ?>
		</header>
		
		<div class="entry">
			<?php the_content(); ?>
		</div>
		
		<footer>
		<footer>
			
			<div class="social-counts">
				<div class="interaction"><?php if (function_exists('sfc_like_button')) echo sfc_like_button(array()); ?></div>
				<div class="interaction">
			
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="jeffandhillary">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>

			
		</footer>
	</article>
	<?php endwhile; ?>
	
	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

</div>

