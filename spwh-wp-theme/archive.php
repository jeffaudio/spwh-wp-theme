<?php get_header(); ?>

<div id="blog">
		
<?php if(have_posts()) : ?>
<h1 class="text-center">
	<?php if ( is_day() ) : ?>
		<?php printf( __( 'Daily Archives: %s', 'twentyeleven' ), '<span>' . get_the_date() . '</span>' ); ?>
	<?php elseif ( is_month() ) : ?>
		<?php printf( __( 'Monthly Archives: %s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
	<?php elseif ( is_year() ) : ?>
		<?php printf( __( 'Yearly Archives: %s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
	<?php else : ?>
		<?php _e( 'Blog Archives', 'twentyeleven' ); ?>
	<?php endif; ?>
</h1>
				
<?php while(have_posts()) : the_post(); ?>
<?php include("article.php"); ?>
<?php endwhile; ?>
	 
<?php FoundationPress_pagination(); ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>