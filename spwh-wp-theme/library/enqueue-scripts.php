<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(), '2.1.1', true );
    wp_register_script( 'foundation', '//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/js/foundation.min.js', array('jquery'), '5.2.2', true );

    // enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('foundation');

  }

  add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

?>