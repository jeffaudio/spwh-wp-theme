<?php get_header(); ?>

<div id="blog">
<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>                
<?php include("article.php"); ?>
<?php endwhile; ?> 

</div>

<?php FoundationPress_pagination(); ?>

<?php endif; ?>

<?php get_footer(); ?>