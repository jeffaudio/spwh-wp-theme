<?php get_header(); ?>

<div id="blog">
    
<?php if(have_posts()) : ?>	
<?php the_post(); ?>
<h1 class="text-center">Posts by <?php the_author(); ?></h1>
<?php rewind_posts(); ?>
        
<?php while(have_posts()) : the_post(); ?>
<?php include("article.php"); ?>
<?php endwhile; ?>
	 
<?php FoundationPress_pagination(); ?>

<?php endif; ?>
</div>

<?php get_footer(); ?> 