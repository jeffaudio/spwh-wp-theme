<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	
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
<div id="wrapper">
	<header>
		<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		<p id="tagline"><?php bloginfo('description') ?></p>
	</header>
	
	<nav>
	<?php 
			wp_nav_menu(array('sort_column'=>'menu_order', 
						'menu_class'=>'nav', 
						'theme_location'=>'primary-menu')); 	
		?>
	</nav>
							