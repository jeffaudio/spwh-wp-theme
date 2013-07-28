<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />

	
	<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php
		// This is to support sites with threaded comments.
		if (is_singular() && get_option('thread_comments'))
			wp_enqueue_script('comment-reply');
			
		wp_head();
		
		wp_get_archives('type=monthly&format=link');
	?>
	
	<script> 
		// Load ie.css for IE browsers including IE 10, which doesn't 
		// support conditional statements anymore.
		if (/*@cc_on!@*/false) {
		  var headHTML = document.getElementsByTagName('head')[0].innerHTML;
		  headHTML += '<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css">';
		  document.getElementsByTagName('head')[0].innerHTML = headHTML; 
		} 
	</script>

	<!--[if lt IE 9]>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/selectivizr-min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/css3-mediaqueries.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/html5shiv.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie8.css"  />
	<![endif]-->

	<script src=http://use.edgefonts.net/source-sans-pro;merriweather.js></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=374432455973695";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="page">
	<a href="/"><header id="banner" role="banner"></header></a>
	
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