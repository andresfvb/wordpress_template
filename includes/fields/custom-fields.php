<?php 
/*
* HOME PAGE
*/
add_action( 'cmb2_admin_init', 'icesi_slider' );
add_action( 'cmb2_admin_init', 'repeteable' );
add_action( 'cmb2_admin_init', 'icesi_evento' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function repeteable() {

	/**
	 * Repeatable Field Groups
	 */
	$prefix = 'icesi_';
	$id_home = get_option( 'page_on_front' );
	$repeteable = new_cmb2_box( array(

		'id'           => $prefix . 'repeteable',
		'title'        => esc_html__( 'Crear secciones', 'cmb2' ),
		'object_types' => array( 'page' ),
		'show_on'      => array(
			'id' => array( $id_home ),
		)
	) );
	$group_field_id = $repeteable->add_field( array(
		'id'          => $prefix . 'group',
		'type'        => 'group',
		'description' => esc_html__( 'Generar seccion', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Seccion {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );
	$repeteable->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Fondo iconos', 'cmb2' ),
		'desc'    => esc_html__( '', 'cmb2' ),
		'id'      => $prefix . 'color',
		'type'    => 'colorpicker',
		'default' => '#FF810A',
	) );
	  /*Campo numero 1*/
	  $repeteable->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo', 'cmb2' ),
		'id'   => $prefix . 'title',
		'type' => 'text_medium',
		'attributes' => array(
			'required' => 'required',
		),
	) );
 	$repeteable->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Description', 'cmb2' ),
		'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
		'id'          => $prefix . 'description',
		'type'        => 'textarea_small',
		'attributes' => array(
			'required' => 'required',
		),
  	));
  	$repeteable->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen fondo', 'cmb2' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
		'attributes' => array(
			'required' => 'required',
		),
	) );
	$repeteable->add_group_field($group_field_id, array(
		'name' => esc_html__('Icono', 'cmb2'),
		'desc' => esc_html__('Colocar el SVG', 'cmb2'),
		'id'   => $prefix . 'iconOne',
		'type' => 'textarea_code',
		'options' => array(
			'disable_codemirror' => true, // Desactivar CodeMirror si no es necesario
			'escape_cb' => false, // Permitir HTML
		),
		'attributes' => array(
			'required' => 'required',
		),
	));
	
	
  $repeteable->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo', 'cmb2' ),
		'desc' => esc_html__( 'Titulo del icono', 'cmb2' ),
		'id'   => $prefix . 'titleIconOne',
		'type' => 'text_medium',
		'attributes' => array(
			'required' => 'required',
		),
	) );
	$repeteable->add_group_field($group_field_id, array(
		'name' => esc_html__('Icono', 'cmb2'),
		'desc' => esc_html__('Colocar el SVG', 'cmb2'),
		'id'   => $prefix . 'iconTwo',
		'type' => 'textarea_code',
		'options' => array(
			'disable_codemirror' => true, // Desactivar CodeMirror si no es necesario
			'escape_cb' => false, // Permitir HTML
		),
		'attributes' => array(
			'required' => 'required',
		),
	));
  $repeteable->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo', 'cmb2' ),
		'desc' => esc_html__( 'Titulo del icono', 'cmb2' ),
		'id'   => $prefix . 'titleIconTwo',
		'type' => 'text_medium',
	) );
	$repeteable->add_group_field($group_field_id, array(
		'name' => esc_html__('Icono', 'cmb2'),
		'desc' => esc_html__('Colocar el SVG', 'cmb2'),
		'id'   => $prefix . 'iconThree',
		'type' => 'textarea_code',
		'options' => array(
			'disable_codemirror' => true, // Desactivar CodeMirror si no es necesario
			'escape_cb' => false, // Permitir HTML
		),
		'attributes' => array(
			'required' => 'required',
		),
	));
  $repeteable->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo', 'cmb2' ),
		'desc' => esc_html__( 'Titulo del icono', 'cmb2' ),
		'id'   => $prefix . 'titleIconThree',
		'type' => 'text_medium',
		'attributes' => array(
			'required' => 'required',
		),
	) );
	$repeteable->add_group_field($group_field_id, array(
		'name' => esc_html__('Icono', 'cmb2'),
		'desc' => esc_html__('Colocar el SVG', 'cmb2'),
		'id'   => $prefix . 'iconFour',
		'type' => 'textarea_code',
		'options' => array(
			'disable_codemirror' => true, // Desactivar CodeMirror si no es necesario
			'escape_cb' => false, // Permitir HTML
		),
		'attributes' => array(
			'required' => 'required',
		),
	));
  $repeteable->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo', 'cmb2' ),
		'desc' => esc_html__( 'Titulo del icono', 'cmb2' ),
		'id'   => $prefix . 'titleIconFour',
		'type' => 'text_medium',
		'attributes' => array(
			'required' => 'required',
		),
	) );


}

function icesi_slider(){
  $prefix = 'icesi_';
  $id_home = get_option( 'page_on_front' );
  $icesi_slider = new_cmb2_box( array(
		'id'           => $prefix . 'slider',
		'title'        => esc_html__( 'Slider', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );
  $icesi_slider->add_field( array(
		'name' => esc_html__( 'Imagen slider', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'slider1',
		'type' => 'file',
	) );
  $icesi_slider->add_field( array(
		'name' => esc_html__( 'Imagen slider 2', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'slider2',
		'type' => 'file',
	) );
  $icesi_slider->add_field( array(
		'name' => esc_html__( 'Imagen slider 3', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'slider3',
		'type' => 'file',
	) );
}


// CAMPOS PARA EL POSTTYPE EVENTOS
function icesi_evento(){

	$prefix = 'icesi_event_';
	$id_home = get_option( 'page_on_front' );
	$icesi_eventos = new_cmb2_box( array(
		'id'           => $prefix . 'eventos',
		'title'        => esc_html__( 'Eventos', 'cmb2' ),
		'object_types' => array( 'icesi_eventos' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	$icesi_eventos->add_field( array(
		'name'             => esc_html__( 'Modalidad del evento', 'cmb2' ),
		'id'               => $prefix . 'modalidad',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'standard' => esc_html__( 'Presencial', 'cmb2' ),
			'custom'   => esc_html__( 'Virtual', 'cmb2' ),
			'none'     => esc_html__( 'Hibrida', 'cmb2' ),
		),
	) );
	$icesi_eventos->add_field( array(
		'name' => esc_html__( 'Fecha del evento', 'cmb2' ),
		'id'   => $prefix . 'fecha',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
		'column' => true,
	) );
	$icesi_eventos->add_field( array(
		'name' => esc_html__( 'Imagen para el evento', 'cmb2' ),
		'id'   => $prefix . 'imagen',
		'type' => 'file',
	) );
	$icesi_eventos->add_field( array(
		'name' => esc_html__( 'Url del evento', 'cmb2' ),
		'desc' => esc_html__( 'Url para realizar la inscripción', 'cmb2' ),
		'id'   => $prefix . 'url',
		'type' => 'text_url',
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );
}