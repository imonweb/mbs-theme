<?php 
/*
================================================
   Theme Functions
   @package mbs 
================================================
*/

if(!defined('MBS_DIR_PATH')){
  define( 'MBS_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if( ! defined( 'MBSIT_DIR_URI' ) ){
  define( 'MBS_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once MBS_DIR_PATH .'/inc/helpers/autoloader.php';

function mbs_get_theme_instance() {
  \MBS_THEME\Inc\MBS_THEME::get_instance();
}
mbs_get_theme_instance();

 
// add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
// function special_nav_class($classes, $item){
//      if( in_array('current-menu-item', $classes) ){
//              $classes[] = 'active ';
//      }
//      return $classes;
// }

require get_template_directory() . '/inc/classes/class-walker.php';

register_nav_menu('main-menu', 'Main menu');

