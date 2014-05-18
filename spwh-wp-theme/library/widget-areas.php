<?php

function foundationpress_sidebar_widgets() {
  // Enable widgets for sidebar
  register_sidebar(array(
    'id' => 'sidebar-widgets',
    'name' => __('Sidebar widgets', 'foundationpress'),
    'description' => __('Drag widgets to this footer container', 'foundationpress')
  ));

  register_sidebar(array(
  	'id' => 'offcanvas-menu',
  	'name' => 'Off-Canvas Menu',
  	'description' => 'Add an HTML field for the off canvas menu.'
  ));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );

?>