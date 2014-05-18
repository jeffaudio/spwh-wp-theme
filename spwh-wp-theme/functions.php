<?php

// Various clean up functions
require_once('library/cleanup.php'); 

// Required for Foundation to work properly
require_once('library/foundation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Add scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add support for WordPress 3.0's custom menus.
add_action('init', 'register_my_menu');

add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="flex-video">' . $html . '</div>';
}

add_filter('next_post_link', 'next_post_link_attributes');
add_filter('previous_post_link', 'previous_post_link_attributes');

function previous_post_link_attributes($output) {
  $code = 'class="button small left"';
  return str_replace('<a href=', '<a '.$code.' href=', $output);
}

function next_post_link_attributes($output) {
  $code = 'class="button small right"';
  return str_replace('<a href=', '<a '.$code.' href=', $output);
}


register_nav_menus(array(
  "primary-menu" => "Primary Menu",
  "social-menu" =>"Left Social Menu",
));

// Add editor style
add_editor_style( 'editor.css' );




/* Image Sizes for Blog */
if ( function_exists( 'add_image_size' ) ) {
	add_image_size('desktop', 720);
	add_image_size('desktop-retina', 1440);
	add_image_size('tablet', 600);
	add_image_size('tablet-retina', 1200);
	add_image_size('mobile', 480);
	add_image_size('moble-retina', 960);
}

add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
        $customsizes = array(
                'desktop' => 'Large Image',
                'desktop-retina' => 'Large Retina Image',
                'tablet' => 'Medium Image',
                'tablet-retina' => 'Medium Retina Image',
                'mobile' => 'Small Image',
                'mobile-retina' => 'Small Image'
                );
        return array_merge($sizes, $customsizes);
}




