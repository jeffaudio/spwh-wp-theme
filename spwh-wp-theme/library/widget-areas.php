<?php

function foundationpress_sidebar_widgets() {
  // Enable widgets for sidebar
  register_sidebar(array(
    'id' => 'sidebar-widgets',
    'name' => __('Sidebar widgets', 'foundationpress'),
    'description' => __('Drag widgets to this footer container', 'foundationpress')
  ));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );

?>