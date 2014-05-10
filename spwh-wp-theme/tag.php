<?php get_header(); ?>

<section id="blog">
    
<?php if(have_posts()) : ?>
<header class="page-header">
  <h1><?php single_tag_title(); ?></h1>
</header>   

        
<?php while(have_posts()) : the_post(); ?>
<?php include("article.php"); ?>
<?php endwhile; ?>
	 
<div class="navigation">
	<div id="previous"><? previous_posts_link(); ?></div>
	<div id="next"><? next_posts_link(); ?></div>
</div>

<?php endif; ?>
</section>

<?php get_footer(); ?>