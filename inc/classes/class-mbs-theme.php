<?php 
/*
================================================
   Bootstraps the theme.
   @package mbs
================================================
*/

namespace MBS_THEME\Inc;

use MBS_THEME\Inc\Traits\Singleton;

class MBS_THEME
{
  use Singleton;

  protected function __construct() {
    // wp_die('hello');
    // load class
    Assets::get_instance();
    Menus::get_instance();
    
    $this->setup_hooks();
  }

  protected function setup_hooks(){
    
    /*  
    * Actions
    */
    add_action( 'after_setup_theme', [ $this, 'setup_theme'] );
 
  } // setup_hooks

  public function setup_theme(){

    add_theme_support('title-tag');

    // custom logo
    add_theme_support( 'custom-logo', [
      'header-text' => [ 'site-title', 'site-description' ],
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width' => true,
    ]);

    // custom background
    add_theme_support( 'custom-background', [
      'default-color' => '#FFFFFF',
      'default-image' => '',
      'default-repeat' => 'no-repeat',
    ]);

    // post-thumbnails
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

    add_image_size( 'featured-thumbnail', 350, 233, true );

    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
		);

    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );

    global $content_width;
    if( !isset( $content_width ) ){
      $content_width = 1240;
    }

  }  
 
}