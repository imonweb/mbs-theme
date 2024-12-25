<?php 
/*
================================================
   Headedr Navigation template 
   @package mbs
================================================
*/  
$menu_class = \MBS_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'mbsit-header-menu');

$header_menus = wp_get_nav_menu_items( $header_menu_id );
 
// echo '<pre>';
// print_r($header_menus);
// echo '</pre>';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <?php 
      if ( has_custom_logo( ) ) {
        the_custom_logo();
      } else { ?>
        <a class="navbar-brand site-title" href="<?= get_home_url() ?>">
          <?php bloginfo('name'); ?>
        </a>
        <?php 
      }
    ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php 

         wp_nav_menu(array(
                'theme_location' => 'mbsit-header-menu',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarNavDropdown',
                'menu_class'      => 'navbar-nav ms-auto',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'depth'           => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
                // 'walker' => new Walker_Nav_Menu()
            ));

      ?>
    
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
    </div>
  </div>
</nav>
<?php 
  // wp_nav_menu(
  //   [
  //     'theme_location' => 'mbsit-header-menu',
  //     'container_class' => 'my_extra_menu_class'
  //   ]
  // );
?>