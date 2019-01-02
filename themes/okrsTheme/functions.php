<?php

function ok_setup_theme(){

  add_theme_support("title-tag");

  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1568, 9999 );


  register_nav_menus(array(
    'header' => 'menuHeader',
  ));

}

add_action('after_setup_theme','ok_setup_theme');

/******CSS**********/
function ok_style(){
  wp_enqueue_style('ok-css', get_template_directory_uri() .'/css/style.css');
}

add_action('wp_enqueue_scripts','ok_style');

function ok_script(){
  wp_enqueue_script('ok-js',get_template_directory_uri() .'/js/main.js', array('jquery'),null,true);
}

add_action('wp_enqueue_scripts','ok_script');




 ?>
