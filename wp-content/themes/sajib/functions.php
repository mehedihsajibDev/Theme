<?php
add_theme_support('title-tag');


function sa_css_js_calling(){
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.3', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');


  //jQuery
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.3.3', 'true' );
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );

}

add_action( 'wp_enqueue_scripts', 'sa_css_js_calling' );




// Google font Enque
function mh_google_font(){
  wp_enqueue_style("mh_google_font", "https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap",false);
}
add_action('wp_enqueue_scripts', 'mh_google_font');


//Theme Function
function mh_customizar_register($wp_customize){
  $wp_customize->add_section('mh_header_area', array(
    'title' =>__('Header Area', 'mhsajib'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('mh_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'mh_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'mh_logo',
    'section' => 'mh_header_area',
  ) ));

}

add_action('customize_register', 'mh_customizar_register');


// Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'mhsajib') );