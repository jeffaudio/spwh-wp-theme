<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

	<script src=http://use.edgefonts.net/source-sans-pro;merriweather.js></script>
</head>

<body>
<div id="page">
	<a href="/"><header id="banner" role="banner"></header></a>
	
	<h1>BOB!</h1>
	<main role="main">
		<div class="widget_search" id="small-search">
			<?php get_search_form( $echo ); ?>
		</div>
		
		<nav id="navigation" role="navigation">
			<?php 
			$menu = wp_nav_menu(array('sort_column'=>'menu_order', 
						'container' => '', 
						'theme_location'=>'primary-menu',
						'echo'=>0));
			$menu = str_replace("/li><li", "/li> <li", $menu);
			echo $menu;
			?>
		</nav>							