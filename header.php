<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<html xmlns:fb="http://ogp.me/ns/fb#">
	
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?> />
	
	<?php
		// This is to support sites with threaded comments.
		if (is_singular() && get_option('thread_comments'))
			wp_enqueue_script('comment-reply');
			
		wp_head();
		
		wp_get_archives('type=monthly&format=link');
	?>
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


<div id="wrapper">
	<header>
		<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		<p id="tagline"><?php bloginfo('description') ?></p>
	</header>
	
	<nav>
		<div class="nav-banner">
	<?php 
			$menu = wp_nav_menu(array('sort_column'=>'menu_order', 
						'menu_class'=>'nav', 
						'theme_location'=>'primary-menu',
						'echo'=>0));
			$menu = str_replace("/li><li", "/li> <li", $menu);
			echo $menu;
		?>
		</div>
	</nav>
							