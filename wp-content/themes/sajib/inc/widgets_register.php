<?php
// Sidebar Register Function

function mh_widgets_register(){
  register_sidebar(array(
    'name' => __('Main Widget Area', 'mhsajib'),
    'id'   => 'sideber-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mhsajib'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
));

  register_sidebar(array(
    'name' => __('Footer 1', 'mhsajib'),
    'id'   => 'footer-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mhsajib'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 2', 'mhsajib'),
    'id'   => 'footer-2',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mhsajib'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 3', 'mhsajib'),
    'id'   => 'footer-3',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mhsajib'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));


}

add_action('widgets_init', 'mh_widgets_register');

