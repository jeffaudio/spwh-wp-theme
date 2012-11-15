<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<html xmlns:fb="http://ogp.me/ns/fb#">
	
	<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
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
	
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36078501-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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
	<header id="main">
		<div id="logo">
		<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/spwh-logo-white.png" /></a>
		</div>
<!--		<p id="tagline"><?php bloginfo('description') ?></p> -->
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
							