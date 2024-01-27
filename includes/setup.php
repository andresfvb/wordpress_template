<?php

function icesi_setup_theme( ) {
  add_theme_support( 'editor-styles' );
  add_editor_style([
    'https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
    'styles/index.css'
  ]);
  register_nav_menus( array(
    'menu_principal' => esc_html__( 'Menu Principal', 'IcesiTemplate' )
  ));
}