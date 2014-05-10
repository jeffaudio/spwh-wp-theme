<?php get_header(); ?>

<div id="blog">

<?php if(have_posts()) : ?>
<h1 class="text-center"><?php single_cat_title(); ?></h1>
        
<?php while(have_posts()) : the_post(); ?>
<?php include("article.php"); ?>
<?php endwhile; ?>

<div class="navigation">
	<div id="previous"><? previous_posts_link(); ?></div>
	<div id="next"><? next_posts_link(); ?></div>
</div>

<?php endif; ?>
</div>

<?php get_footer(); ?>