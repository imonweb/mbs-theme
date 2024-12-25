<?php 
/*
================================================
   Enqueue theme assets
   @package mbs
================================================
*/

namespace MBS_THEME\Inc;

use MBS_THEME\Inc\Traits\Singleton;

class Assets 
{
   use Singleton;

   protected function __construct() {
    // wp_die('hello');
    // load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    /*   
    * Actions
    */

    add_action('wp_enqueue_scripts', [$this, 'register_styles'] );
    add_action('wp_enqueue_scripts', [$this, 'register_scripts'] );
  }

  public function register_styles() {
     /*  Register Styles */
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( MBS_DIR_PATH . '/style.css') );
    wp_register_style( 'main-style', MBS_DIR_URI . '/assets/css/main.css', [], false, 'all' );
    wp_register_style( 'bootstrap-css', MBS_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );

    /*  Enqueue Styles */
    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'main-style' );
    wp_enqueue_style( 'bootstrap-css' );
  }

  public function register_scripts(){
    /*  Register Scripts */
    wp_register_script( 'main-js', MBS_DIR_URI . '/assets/js/main.js', [], filemtime( MBS_DIR_PATH . '/assets/js/main.js'), true );
    wp_register_script( 'bootstrap-js', MBS_DIR_URI . '/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], false, true );

    /*  Enqueue Scripts */
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-js' );
  }
}