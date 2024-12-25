<?php 
  /*  
    This is the template for the header
    @package mbsit
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if(is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
   
</head>

<body <?php body_class(); ?>>
<?php 
  if( function_exists( 'wp_body_open' ) ){
    wp_body_open(); 
  }
?>

<div id="page" class="site">
  <header id="masthead" class="site-header">
    <?php get_template_part( 'template-parts/header/nav' ); ?>
  </header>
    <div id="content" class="site-content">

    
 
  <!-- <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Header</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
  </div> -->

  <?php 
    // Display primary menu
    // if(has_nav_menu("header-menu")){
    //   wp_nav_menu( array(
    //     'theme_location' => 'header-menu',
    //     'container' => '',
    //     'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>'
    //   ) );
    // }
  ?>
