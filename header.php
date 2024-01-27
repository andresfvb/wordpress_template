<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head(  ); ?>
</head>
<body>
<?php wp_body_open(  ); ?>
<header class="container-fluid bg-dark navbar-dark align-items-stretch justify-content-between ps-5 sticky-top" style="--bs-bg-opacity: .8;">
    <div class="row">
      <!-- Menu -->
      <nav class="navbar navbar-expand-lg navbar-dark p-0 col-10" >
        <div class="container-fluid d-flex align-items-stretch p-0">
          <a class="navbar-brand d-flex flex-row mb-2 align-items-center" href="<?php echo esc_url('/');?>">
            <h2 class="subtitle border-end pe-3">Postgrados</h2>
            <img class="logo" src="<?php echo get_theme_file_uri();?>/img/logo-icesi-a-otro-nivel-blanco.png" alt="Logotipo" width="250"
              class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php 
            $args = array(
              'container_id'    => 'nav_principal',
              'container_class' => 'collapse navbar-collapse align-items-stretch',
              'theme_location'  => 'menu_principal',
              'menu_class'      => 'navbar-nav mb-2 mb-lg-0 d-flex justify-content-between align-items-stretch', // Clase para <ul>
              'menu_item_class' => 'nav-item d-flex align-items-stretch flex-fill', // Clase para <li>
              'walker'          => new Icesi_Walker_Nav_Menu()
            );
          wp_nav_menu($args);
          

          ?>
        </div>
      </nav>
      <!-- Formulario -->
      <div class="forminfo d-grid col-2 p-0">
        <button class="btn btn-primary forminfo__button rounded-0" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-chat-left-dots"></i> Solicitar información</button>
  
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
          aria-labelledby="offcanvasWithBothOptionsLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
    
  </header>