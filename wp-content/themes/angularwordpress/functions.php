<?php

function add_scripts(){
  wp_register_script('angularjs', get_stylesheet_directory_uri() . '/node_modules/angular/angular.min.js');
  wp_register_script('angularjs-route', get_stylesheet_directory_uri() . '/node_modules/angular-route/angular-route.min.js');
  wp_register_script('angularjs-sanitize', get_stylesheet_directory_uri() . '/node_modules/angular-sanitize/angular-sanitize.min.js');
  wp_enqueue_script('my-scripts', get_stylesheet_directory_uri(). '/js/scripts.js', array('angularjs', 'angularjs-route', 'angularjs-sanitize') );
  wp_localize_script('my-scripts', 'myLocalized', array('partials' => trailingslashit( get_template_directory_uri() ) . 'partials/', 'nonce' => wp_create_nonce( 'wp_rest' ) ) );
}
add_action('wp_enqueue_scripts', 'add_scripts' );
