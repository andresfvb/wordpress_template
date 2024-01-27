<?php

function Icesi_enqueue() {
  wp_register_style( 
    'Icesi_font_ubuntu',
    'https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap',
    [],
    null
  );
  wp_register_style( 
    'Icesi_bootstrap_css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
    [],
    null
  );
  wp_register_style( 
    'icesi_bootstrap_icons',
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
    [],
    null
  );

  wp_register_style( 
    'icesi_theme',
    get_theme_file_uri( 'styles/index.css' )
  );

  wp_enqueue_style( 'Icesi_font_ubuntu' );
  wp_enqueue_style( 'icesi_bootstrap_icons' );
  wp_enqueue_style( 'icesi_theme' );
  wp_enqueue_style( 'Icesi_bootstrap_css' );


}