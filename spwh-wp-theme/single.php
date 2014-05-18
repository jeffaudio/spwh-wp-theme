<?php get_header(); ?>

<div id="blog">    
<?php if(have_posts()) : ?>
        
<?php while(have_posts()) : the_post(); ?>
<?php include("article.php"); ?>
<?php endwhile; ?>

<div class="fb-comments" 
	data-href="<?php echo get_permalink( $id ); ?>" 
	data-width="100%" 
	data-numposts="5" 
	data-colorscheme="light">
</div>

<div class="row navigation">
	<div class="small-6 columns"><?php previous_post_link("%link", "<i class=\"fi-rewind\"></i> %title") ?></div>
	<div class="small-6 columns"><?php next_post_link("%link", "%title <i class=\"fi-fast-forward\"></i>") ?></div>
</div>


<?php endif; ?>
</div>

<?php get_footer(); ?>