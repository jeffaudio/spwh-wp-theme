<?php get_header(); ?>

<div id="blog">    
<?php if(have_posts()) : ?>
        
<?php while(have_posts()) : the_post(); ?>
<?php include("article.php"); ?>
<?php endwhile; ?>
	 
<div class="navigation">
  <div id="previous"><?php previous_post_link() ?></div>
  <div id="next"><?php next_post_link() ?></div>
</div>

<?php endif; ?>
</div>

<?php get_footer(); ?>