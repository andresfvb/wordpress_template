<?php
/*
* PostType 
*/
require_once dirname(__FILE__) . '/includes/post/posttype.php';

/*
* querys eventos 
*/
require_once dirname(__FILE__) . '/includes/querys/evento.php';


/*
*Agregar CMB2
*/
require_once dirname(__FILE__) . '/cmb2.php';


/*
*Carga de campos personalizados CMB2
*/
require_once dirname(__FILE__) . '/includes/fields/custom-fields.php';

// Variables
//Cargar script de Bootstrap
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);

/*
* Agrega la clases al nav de bootstrap
*/
function icesi_enlace_class($atts, $item, $args){
  if($args->theme_location == 'menu_principal'){
    $atts['class'] = 'd-flex align-items-center flex-fill justify-content-center';

  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'icesi_enlace_class', 10, 3);

class Icesi_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = null, $id=0) {
      $output .= '<li class="nav-item d-flex align-items-stretch flex-fill">';
      
      $atts = array();
      $atts['href'] = esc_url($item->url);
      $atts['class'] = 'nav-link d-flex align-items-center flex-fill justify-content-center';
      $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);
      
      $output .= '<a';
      foreach ($atts as $attr => $value) {
          $output .= ' ' . $attr . '="' . $value . '"';
      }
      $output .= '><span>' . esc_html($item->title) . '</span></a>';
  }
}


// Includes
include(get_theme_file_path( '/includes/front/enqueue.php' ));
include(get_theme_file_path( '/includes/front/head.php' ));
include(get_theme_file_path( '/includes/setup.php' ));

//Hooks
add_action( 'wp_enqueue_scripts', 'Icesi_enqueue' );
add_action( 'wp_head', 'Icesi_head', 5 );
add_action( 'after_setup_theme', 'icesi_setup_theme' );