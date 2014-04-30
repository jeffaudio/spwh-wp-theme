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
		<h1 class="title small-title">
			<img data-interchange="
				[<?php echo get_template_directory_uri(); ?>/images/logo-sm.png, (default)],
				[<?php echo get_template_directory_uri(); ?>/images/logo-sm@2x.png, (retina)]
			" />
		</h1>
	</div>
</div>

<div class="left-off-canvas-menu">
	<?php wp_nav_menu(array(
		"menu_class" => "off-canvas-list",
		"theme_location" => "mobile-main",
		"depth" => 1,
		"container" => "",
	)); ?>

	<?php wp_nav_menu(array(
		"menu_class" => "off-canvas-list",
		"theme_location" => "mobile-puppy",
		"depth" => 1,
		"container" => "",
	)); ?>

	<?php wp_nav_menu(array(
		"menu_class" => "off-canvas-list",
		"theme_location" => "mobile-house",
		"depth" => 1,
		"container" => "",
	)); ?>

	<?php wp_nav_menu(array(
		"menu_class" => "off-canvas-list",
		"theme_location" => "mobile-social",
		"depth" => 1,
		"container" => "",
	)); ?>
</div>
					
			


<div class="main-section" data-interchange="
	[<?php echo get_template_directory_uri(); ?>/images/background-tile150.gif, (default)],
	[<?php echo get_template_directory_uri(); ?>/images/background-tile150@2x.gif, (retina)]
	">

	<div class="header show-for-medium-up" data-interchange="
	[<?php echo get_template_directory_uri(); ?>/images/dots.png, (default)],
	[<?php echo get_template_directory_uri(); ?>/images/dots@2x.png, (retina)]
	">
		<img data-interchange="
			[<?php echo get_template_directory_uri(); ?>/images/logo.png, (default)],
			[<?php echo get_template_directory_uri(); ?>/images/logo@2x.png, (retina)]
		" />
	</div>

	<div class="row ad">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Top Responsive Banner -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2225099296195937"
     data-ad-slot="8748334797"
     data-ad-format="auto"
     google_adtest="on"></ins>
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
				
