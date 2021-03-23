<?php
    add_theme_support( 'menus' );

function my_scripts() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'calendar', get_template_directory_uri() . '/css/calendar.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
  wp_enqueue_script( 'menu-fixed', get_template_directory_uri() . '/js/menu-fixed.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'moment', '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js' . '/js/menu-fixed.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'calendar', get_template_directory_uri() . '/js/calendar.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'calendar-custom', get_template_directory_uri() . '/js/calendar-custom.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'ofi.min', get_template_directory_uri() . '/js/ofi.min.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'tab', get_template_directory_uri() . '/js/tab.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );