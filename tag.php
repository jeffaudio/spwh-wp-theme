<?php get_header(); ?>



<div id="blog_container">
    <section id="blog">
    
	<?php if(have_posts()) : ?>
	<header class="page-header">
        <h1><?php single_tag_title(); ?></h1>
    </header>   
	
	<?php while(have_posts()) : the_post(); ?>
                 
	<article class="post">
		<header>
			<?php if ( comments_open() ) : echo '<div class="comments">';
				comments_popup_link( '0', '1', '%', 'comments-link', 'Comments Disabled');
			echo '</div>';
				endif;
			?>
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="tagline">
				<?php _e("Posted on"); ?> <?php the_time("l, M. j, Y"); ?> <?php _e("at"); ?> <?php the_time("g:i A"); ?> <?php _e("by"); ?> <?php the_author_posts_link(); ?> <?php edit_post_link('Edit', '&#124; ', ''); ?>
			</div>
		</header>
		
		<div class="entry">
			<?php the_content('Continue Reading...'); ?>
		</div>
		
		<footer>
			<div class="postmetadata">
				<div class="label"><?php _e('Categories'); ?></div> <?php the_category(', ') ?> <br />
				<div class="label"><?php _e('Tags'); ?></div> <?php the_tags('', ', ', '') ?>
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
 
