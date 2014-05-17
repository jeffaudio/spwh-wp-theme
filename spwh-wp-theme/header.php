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

	<ul class="off-canvas-list">
		<li><label><i class="fi-info"></i> Main</label></li>
		<li><a href="#">About Us</a></li>
	</ul>

	<ul class="off-canvas-list">
		<li><label><i class="fi-paw"></i> Soft Puppy</label></li>
		<li><a href="#">Training Nova</a></li>
		<li><a href="#">Puppy Projects</a></li>
		<li><a href="#">Puppy News</a></li>
	</ul>

	<ul class="off-canvas-list">
		<li><label><i class="fi-home"></i> Warm House</label></li>
		<li><a href="#">The List</a></li>
		<li><a href="#">Projects</a></li>
		<li><a href="#">Technology</a></li>
	</ul>

	
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
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2225099296195937"
     data-ad-slot="2858944790"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>

	<div class="row content">
		<div class="small-12 medium-9 columns">

			<div class="row collapse show-for-small">
				<h3></h3>
				<?php get_search_form(); ?>
			</div>
				
