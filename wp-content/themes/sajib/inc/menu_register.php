<?php 

// Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'mhsajib') );


// Walker Menu Properties it shows a warning
function mh_nav_description( $item_output, $item, $args){
  if( !empty ($item->description)){
    $item_output = str_replace( '</a>', '<span class="walker_nav">' . $item->description . '</span>' . '</a>', $item_output);
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'mh_nav_description', 10, 3);