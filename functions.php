<?php

// Add support for WordPress 3.0's custom menus.
add_action('init', 'register_my_menu');

// Register area for custom menu.
function register_my_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

// Enable widgets for sidebar
if (function_exists('register_sidebar')) {
	register_sidebar();
}
	
// Enable automatic feed links.
add_theme_support('automatic-feed-links');

// Enable multisite feature (WP 3.0)
define('WP_ALLOW_MULTISITE', true);