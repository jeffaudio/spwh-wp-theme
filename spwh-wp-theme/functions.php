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

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add support for WordPress 3.0's custom menus.
add_action('init', 'register_my_menu');

register_nav_menus(array(
  "primary-menu" => "Primary Menu",
  "left-menu" =>"Left Menu",
  "mobile-main" => "Main Mobile",
  "mobile-puppy" => "Puppy Mobile",
  "mobile-house" => "House Mobile",
  "mobile-social" => "Social Mobile"
));

// Add editor style
add_editor_style( 'editor.css' );

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

class Foundation_Nav_Menu_Walker extends Walker_Nav_Menu {
 
  // add classes to ul sub-menus
  function start_lvl(&$output, $depth) {
    // depth dependent classes
    $indent = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent
 
    // build html
    $output .= "\n" . $indent . '<ul class="dropdown">' . "\n";
  }
}

if (!function_exists('GC_menu_set_dropdown')) :
function GC_menu_set_dropdown($sorted_menu_items, $args) {
  $last_top = 0;
  foreach ($sorted_menu_items as $key => $obj) {
    // it is a top lv item?
    if (0 == $obj->menu_item_parent) {
      // set the key of the parent
      $last_top = $key;
    } else {
      $sorted_menu_items[$last_top]->classes['dropdown'] = 'has-dropdown not-click';
    }
  }

  return $sorted_menu_items;
}
endif;
add_filter('wp_nav_menu_objects', 'GC_menu_set_dropdown', 10, 2);
