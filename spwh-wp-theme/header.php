<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>

	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

	<script src=http://use.edgefonts.net/source-sans-pro;merriweather.js></script>

	<?php wp_head(); ?>
</head>

<body>
<div class="off-canvas-wrap">
<div class="inner-wrap">
			
<div class="top-bar hide-for-small" data-offcanvas>
	<div class="top-bar-section">
		<?php wp_nav_menu(array(
			"container" => false,
			"menu_class" => "left",
			"theme_location" => "social-menu",
			"depth" => 1

		)); ?>

		<?php wp_nav_menu(array(
			"menu_class" => "right",
			"theme_location" => "primary-menu",
			"depth" => 2,
			"container" => false,
			"walker" => new top_bar_walker()
		)); ?>
	</div>
</div>

<div class="tab-bar show-for-small">
	<div class="left-small">
		<a href="#" class="left-off-canvas-toggle menu-icon"><span></span></a>
	</div>
		
	<div class="middle tab-bar-section">
		<h2 class="title">Soft Puppy Warm House</h2>
	</div>
</div>



<div class="left-off-canvas-menu">
	<p class="text-center">
		<img class="off-canvas-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" />
	</p>

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('offcanvas-menu') ) : else : ?>
	<?php endif; ?>	
	
</div>
					
			


<div class="main-section" data-interchange="
	[<?php echo get_template_directory_uri(); ?>/images/background-tile150.gif, (default)],
	[<?php echo get_template_directory_uri(); ?>/images/background-tile150@2x.gif, (retina)]
	">

	<a href="/" class="header show-for-medium-up" data-interchange="
	[<?php echo get_template_directory_uri(); ?>/images/dots.png, (default)],
	[<?php echo get_template_directory_uri(); ?>/images/dots@2x.png, (retina)]
	">
		<img data-interchange="
			[<?php echo get_template_directory_uri(); ?>/images/logo.png, (default)],
			[<?php echo get_template_directory_uri(); ?>/images/logo@2x.png, (retina)]
		" />
	</a>

	<div class="row ad">
		<div class="row ad">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

			<style>
				.responsive { width: 320px; height: 50px; }
				@media(min-width: 500px) { .responsive { width: 468px; height: 60px; } }
				@media(min-width: 800px) { .responsive { width: 728px; height: 90px; } }
			</style>

			<!-- responsive -->
			<ins class="adsbygoogle responsive"
				style="display:inline-block"
				data-ad-client="ca-pub-2225099296195937"
				data-ad-slot="1973980798"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>

	<div class="row content">
		<div class="small-12 medium-8 large-9 columns">

			<div class="row collapse show-for-small">
				<h3></h3>
				<?php get_search_form(); ?>
			</div>
				
