<?php

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
  
  
    // menu position
  
    $wp_customize->add_section('mh_menu_option', array(
       'title' => __('Menu Position', 'mhsajib'),
       'description'=> 'If you interested to change your menu position you can do it.'
    ));
  
    $wp_customize->add_setting('mh_menu_position', array(
      'default' => 'right_menu',
    ));
  
    $wp_customize->add_control('mh_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'mh_menu_position',
    'section' => 'mh_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu'
      
    )
    ));
  
  
  // Footer Option
  $wp_customize->add_section('mh_footer_option', array(
    'title' => __('Footer Option', 'alihossain'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));
  
  $wp_customize->add_setting('mh_copyright_section', array(
    'default' => '&copy; Copyright 2021 | Procoder BD',
  ));
  
  $wp_customize-> add_control('mh_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'mh_copyright_section',
    'section' => 'mh_footer_option',
  ));
  

  // color settings

  $wp_customize-> add_section('mh_colors', array(
    'title' => __('Theme Color', 'mhsajib'),
    'description' => 'If need you can change your theme color.',
  ));

  $wp_customize ->add_setting('mh_bg_color', array(
    'default' => '#ffffff',
  ));

  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'mh_bg_color', array(
    'label' => 'Background Color',
    'section' => 'mh_colors',
    'settings' => 'mh_bg_color',
  )));


  $wp_customize ->add_setting('mh_primary_color', array(
    'default' => '#ea1a70',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'mh_primary_color', array(
    'label' => 'Primary Color',
    'section' => 'mh_colors',
    'settings' => 'mh_primary_color',
  )));

  
  }
  
  add_action('customize_register', 'mh_customizar_register');

  function mh_theme_color_cus(){
  ?>
  <style>
    body{background: <?php echo get_theme_mod('mh_bg_color'); ?>}
    :root{ --pink:<?php echo get_theme_mod('mh_primary_color'); ?>}
  </style>
  <?php 
}
add_action('wp_head', 'mh_theme_color_cus');