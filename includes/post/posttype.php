<?php

function icesi_posttype_eventos() {
  $labels = array(
      'name'                  => _x( 'Eventos', 'icesi' ),
      'singular_name'         => _x( 'Evento',  'icesi' ),
      'menu_name'             => _x( 'Eventos', 'Admin Menu text', 'icesi' ),
      'name_admin_bar'        => _x( 'Evento', 'Add New on Toolbar', 'icesi' ),
      'add_new'               => __( 'Agregar Nuevo', 'icesi' ),
      'add_new_item'          => __( 'Agregar Nuevo Evento', 'icesi' ),
      'new_item'              => __( 'Nueva Evento', 'icesi' ),
      'edit_item'             => __( 'Editar Evento', 'icesi' ),
      'view_item'             => __( 'Ver Evento', 'icesi' ),
      'all_items'             => __( 'Todas los Eventos', 'icesi' ),
      'search_items'          => __( 'Buscar Evento', 'icesi' ),
      'parent_item_colon'     => __( 'Padre Evento:', 'icesi' ),
      'not_found'             => __( 'No se encontraron Eventos.', 'icesi' ),
      'not_found_in_trash'    => __( 'No se encontraron eventos en la Papelera', 'icesi' ),
      'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'icesi' ),
      'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'icesi' ),
      'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'icesi' ),
      'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'icesi' ),
      'archives'              => _x( 'Archivo de Eventos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'icesi' ),
      'insert_into_item'      => _x( 'Insertar en Eventos', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'icesi' ),
      'uploaded_to_this_item' => _x( 'Cargadas En Eventos', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'icesi' ),
      'filter_items_list'     => _x( 'Filtrar Lista de Eventos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'icesi' ),
      'items_list_navigation' => _x( 'Evento navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'icesi' ),
      'items_list'            => _x( 'Evento lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'icesi' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'eventos' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'menu_icon'          => 'dashicons-calendar-alt',
      // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
      'hierarchical'       => false,
      'menu_position'      => 6,
      'supports'           => array( 'title', 'editor',  'thumbnail' ),
      'show_in_rest'       => true,
      'rest_base'          => 'eventos'
  );

  register_post_type( 'icesi_eventos', $args );
}

add_action( 'init', 'icesi_posttype_eventos' );


 /* Agrega el post type de Egresados Instructores */
 function icesi_posttype_egresados() {
  $labels = array(
      'name'                  => _x( 'Experiencia de Egresados', 'icesi' ),
      'singular_name'         => _x( 'Experiencia de Egresado',  'icesi' ),
      'menu_name'             => _x( 'Egresados', 'Admin Menu text', 'icesi' ),
      'name_admin_bar'        => _x( 'Experiencia Egresados', 'Add New on Toolbar', 'icesi' ),
      'add_new'               => __( 'Agregar Nuevo', 'icesi' ),
      'add_new_item'          => __( 'Agregar Nuevo Egresado', 'icesi' ),
      'new_item'              => __( 'Nuevo Egresado', 'icesi' ),
      'edit_item'             => __( 'Editar Egresado', 'icesi' ),
      'view_item'             => __( 'Ver Egresado', 'icesi' ),
      'all_items'             => __( 'Todos los Egresados', 'icesi' ),
      'search_items'          => __( 'Buscar Experiencia Egresados', 'icesi' ),
      'parent_item_colon'     => __( 'Padre Experiencia Egresados:', 'icesi' ),
      'not_found'             => __( 'No se encontraron Egresados.', 'icesi' ),
      'not_found_in_trash'    => __( 'No se encontrar Egresados en la Papelera', 'icesi' ),
      'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'icesi' ),
      'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'icesi' ),
      'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'icesi' ),
      'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'icesi' ),
      'archives'              => _x( 'Archivo de Egresados', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'icesi' ),
      'insert_into_item'      => _x( 'Insertar en Egresados', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'icesi' ),
      'uploaded_to_this_item' => _x( 'Cargadas En Egresados', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'icesi' ),
      'filter_items_list'     => _x( 'Filtrar Lista de Egresados', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'icesi' ),
      'items_list_navigation' => _x( 'Egresados navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'icesi' ),
      'items_list'            => _x( 'Egresados lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'icesi' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'egresados' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'menu_icon'          => 'dashicons-businessperson',
      // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
      'hierarchical'       => false,
      'menu_position'      => 7,
      'supports'           => array( 'title', 'editor',  'thumbnail' ),
      'show_in_rest'       => true,
      'rest_base'          => 'egresados'
  );

  register_post_type( 'icesi_egresados', $args );
}

add_action( 'init', 'icesi_posttype_egresados' );