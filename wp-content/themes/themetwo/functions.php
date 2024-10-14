<?php 
// Theme title
add_theme_support('title-tag');
// Css and Js file Calling from here


function mh_css_js_calling(){
    wp_enqueue_style( 'mh-style', get_stylesheet_uri() );
    wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('customcss', get_template_directory_uri(  ).'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('customcss');

    wp_enqueue_script('jQuery');
    wp_enqueue_script ('bootstrap', get_template_directory_uri(  ).'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script ('mainjs', get_template_directory_uri(  ).'/js/main.js', array(), '5.0.2', 'true'); 
}


add_action('wp_enqueue_scripts', 'mh_css_js_calling');

function mh_google_font(){
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
}
add_action('wp_enqueue_scripts', 'mh_google_font');


//Theme Function
function mh_customize_register($wp_customize){

    $wp_customize->add_section('mh_header_area',array(
       'title'=>__('Header Area', 'mhsajib'),
       'description'=>'If you interested to update your header area, you can do it here.'
    ));

    $wp_customize->add_setting('mh_logo',array(
        'default'=> get_bloginfo('template_directory'). '/img/logo.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'mh_logo', array(
        'label'=>'Logo Upload',
        'description' => 'If you interested to change or update your logo you can do it.//ctrl',
        'setting'=> 'mh_logo',
        'section'=> 'mh_header_area'
       
    )));


   $wp_customize->add_section('mh_menu_option', array(
        'title'=>__('Menu Position Option', 'mhsajib'),
        'description'=>'If you interested to change your menu position you can do it.'
   ));
   $wp_customize->add_setting('mh_menu_position', array(
        'default'=> 'right_menu',
   ));
   $wp_customize->add_control('mh_menu_position', array(
        'label'=>'Menu Position',
        'description'=>'Select your menu position',
        'setting'=>'mh_menu_position',
        'section'=>'mh_menu_option',
        'type' => 'radio',
        'choices'=>array(
        'left_menu'=>'Left Menu',
        'right_menu'=>'Right Menu',
        'center_menu'=>'Center Menu',
        ),
   ));




  // Menu Position Option
//   $wp_customize->add_section('ali_menu_option', array(
//     'title' => __('Menu Position Option', 'alihossain'),
//     'description' => 'If you interested to change your menu position you can do it.'
//   ));

//   $wp_customize->add_setting('ali_menu_position', array(
//     'default' => 'right_menu',
//   ));

//   $wp_customize-> add_control('ali_menu_position', array(
//     'label' => 'Menu Position',
//     'description' => 'Select your menu position',
//     'setting' => 'ali_menu_position',
//     'section' => 'ali_menu_option',
//     'type' => 'radio',
//     'choices' => array(
//       'left_menu' => 'Left Menu',
//       'right_menu' => 'Right Menu',
//       'center_menu' => 'Center Menu',
//     ),
//   ));


}
add_action('customize_register', 'mh_customize_register');




//menu register
register_nav_menu('main_menu', __('Main Menu', 'mhsajib'));