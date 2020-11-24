<?php
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) ); 

add_theme_support( 'post-thumbnails' );
/***************Functions theme ********************/
function theme_customize_register($wp_customize){
  $wp_customize->add_panel('panel1',
        array(
            'title' => 'Header Pre-navbar',
            'priority' => 1,
            )
        );
  /////Pre- navbar
  
  $wp_customize->add_section('prenavbar', array (
    'title' => 'Pre-Navbar',
    'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('prenavbar1_image');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'prenavbar1_image_control', array (
    'label' => 'Item 1',
    'description' => 'Ícono',
    'section' => 'prenavbar',
    'settings' => 'prenavbar1_image'
  )));
  /////soporte Técnico
  $wp_customize->add_panel('panel2',
        array(
            'title' => 'Soporte Técnico',
            'priority' => 2,
            )
        );
 
  $wp_customize->add_section('soporte_tecnico', array (
      'title' => 'Soporte Técnico',
      'panel' => 'panel2',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

     //imagen
    $wp_customize->add_setting('soporte_tecnico');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'soporte_tecnico', array (
      'description' => 'Ícono',
      'section' => 'soporte_tecnico',
      'settings' => 'soporte_tecnico'
    )));
    // texto de red
    $wp_customize->add_setting('soporte_tecnico', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_soporte_tecnico', array (
      'description' => 'titulo',
      'section' => 'soporte_tecnico',
      'settings' => 'soporte_tecnico',
    )));  
    // texto de red
    $wp_customize->add_setting('soporte_tecnico_contenido', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_soporte_tecnico_contenido', array (
      'description' => 'contenido',
      'section' => 'soporte_tecnico',
      'settings' => 'soporte_tecnico',
    )));  
  
   //////////////////////////////////////////////////////////////
     /////Contáctanos/servicio
  $wp_customize->add_panel('panel3',
        array(
            'title' => 'Contáctanos/servicio',
            'priority' => 2,
            )
        );
 
  $wp_customize->add_section('Contáctanos/servicio', array (
      'title' => 'Contáctanos/servicio',
      'panel' => 'panel3',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

     
    // texto de red
    $wp_customize->add_setting('Contáctanos/servicio', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_Contáctanos/servicio_1', array (
      'description' => 'titulo',
      'section' => 'Contáctanos/servicio',
      'settings' => 'Contáctanos/servicio',
    )));  
    // texto de red
    $wp_customize->add_setting('soporte_tecnico_contenido', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_Contáctanos/servicio', array (
      'description' => 'contenido',
      'section' => 'Contáctanos/servicio',
      'settings' => 'Contáctanos/servicio',
    )));  
  
   //////////////////////////////////////////////////////////////
   $wp_customize->add_panel('red-social',
          array(
              'title' => 'Red Social',
              'priority' => 160,
              'capability' => 'edit_theme_options',
              )
          );

    //seccion red-social
    $wp_customize->add_section('red-social', array (
      'title' => 'Red-social',
      'panel' => 'red-social',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

    
    // texto de red
    $wp_customize->add_setting('texto_red_social', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control', array (
      'description' => 'red-social Texto',
      'section' => 'red-social',
      'settings' => 'texto_red_social',
    )));  
    //imagen
    $wp_customize->add_setting('prenavbar2_image');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'prenavbar2_image_control', array (
      'label' => 'red-social',
      'description' => 'Ícono',
      'section' => 'red-social',
      'settings' => 'prenavbar2_image'
    )));

     // texto de red
    $wp_customize->add_setting('boton_red_social_url', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_boton_red_social_url', array (
      'description' => 'Boton de red social URL',
      'section' => 'red-social',
      'settings' => 'boton_red_social_url',
    )));  

    // texto de red
    $wp_customize->add_setting('boton_red_social_texto', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_boton_red_social_texto', array (
      'description' => 'Boton de red social texto',
      'section' => 'red-social',
      'settings' => 'boton_red_social_texto',
    )));  
 
 //panel redes sociales footer
   $wp_customize->add_panel('Redes_Sociales_footer',
          array(
              'title' => 'Redes Sociales',
              'priority' => 160,
              'capability' => 'edit_theme_options',
              )
          );

    //seccion redes sociales
    $wp_customize->add_section('Redes_Sociales_footer', array (
      'title' => 'Redes Sociales footer',
      'panel' => 'Redes_Sociales_footer',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

    
    // texto de redes
    $wp_customize->add_setting('facebook', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_1', array (
      'description' => 'Facebook',
      'section' => 'Redes_Sociales_footer',
      'settings' => 'facebook',
    )));  

// texto de red
    $wp_customize->add_setting('texto_linkedln', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_2', array (
      'description' => 'Linkedln',
      'section' => 'Redes_Sociales_footer',
      'settings' => 'texto_linkedln',
    )));  

    // texto de red
    $wp_customize->add_setting('texto_instagram', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_3', array (
      'description' => 'Instagram',
      'section' => 'Redes_Sociales_footer',
      'settings' => 'texto_instagram',
    )));  

    // texto de red
    $wp_customize->add_setting('texto_twiter', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_4', array (
      'description' => 'Twiter',
      'section' => 'Redes_Sociales_footer',
      'settings' => 'texto_twiter',
    ))); 
        // Soluciones Logos
     $wp_customize->add_panel('nuestras_soluciones_logos',
          array(
              'title' => 'Nuestras Soluciones Logos',
              'priority' => 160,
              'capability' => 'edit_theme_options',
              )
          );

    //seccion red-social
    $wp_customize->add_section('nuestras_soluciones_logos', array (
      'title' => 'Nuestras Soluciones Logos',
      'panel' => 'nuestras_soluciones_logos',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

    
    //imagen
    $wp_customize->add_setting('logos_1');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logos_1', array (
      'label' => 'Nuestra soluciones Logos',
      'description' => 'Logo 1',
      'section' => 'nuestras_soluciones_logos',
      'settings' => 'logos_1'
    )));

    //imagen
    $wp_customize->add_setting('logos_2');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logos_2', array (
      'label' => 'Nuestra soluciones Logos',
      'description' => 'Logo 2',
      'section' => 'nuestras_soluciones_logos',
      'settings' => 'logos_2'
    )));

    //imagen
    $wp_customize->add_setting('logos_3');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logos_3', array (
      'label' => 'Nuestra soluciones Logos',
      'description' => 'Logo 3',
      'section' => 'nuestras_soluciones_logos',
      'settings' => 'logos_3'
    )));


} 


add_action('customize_register','theme_customize_register');

// Register Custom Post Type
if ( ! function_exists('banner') ) {
  
    // Register Custom Post Type
    function banner() {
    
        $labels = array(
            'name'                  => _x( 'banners', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'banner', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Banners', 'text_domain' ),
            'name_admin_bar'        => __( 'Banners', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'banner', 'text_domain' ),
            'description'           => __( 'banner de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-home',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'banner', $args );
    
    }
    add_action( 'init', 'banner', 0 );
    
    }
      // Register Custom Post Type
if ( ! function_exists('servicios') ) {
  
    // Register Custom Post Type
    function servicios() {
    
        $labels = array(
            'name'                  => _x( 'servicios', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'servicio', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Servicios ', 'text_domain' ),
            'name_admin_bar'        => __( 'Servicios', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'servicios', 'text_domain' ),
            'description'           => __( 'servicios', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-tools',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'servicios', $args );
    
    }
    add_action( 'init', 'servicios', 0 );

      // Register Custom Post Type
if ( ! function_exists('licencia') ) {
  
    // Register Custom Post Type
    function licencia() {
    
        $labels = array(
            'name'                  => _x( 'licencias', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'licencia', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Licencias Inicio', 'text_domain' ),
            'name_admin_bar'        => __( 'Licencias Inicio', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'licencia', 'text_domain' ),
            'description'           => __( 'Nuestras_licencias', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-home',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'licencia', $args );
    
    }
    add_action( 'init', 'licencia', 0 );
    
    }

    // Register Custom Post Type
if ( ! function_exists('pagina_servicios') ) {
  
    // Register Custom Post Type
    function pagina_servicios() {
    
        $labels = array(
            'name'                  => _x( 'Pagina_servicios', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Pagina Servicio', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Single Servicios', 'text_domain' ),
            'name_admin_bar'        => __( 'Single Servicios', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Pagina_servicios', 'text_domain' ),
            'description'           => __( 'Pagina_servicios', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-home',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'pagina_servicios', $args );
    
    }
    add_action( 'init', 'pagina_servicios', 0 );
    
    }
    
    
       // Register Custom Post Type
if ( ! function_exists('servicio_de_soporte') ) {
  
    // Register Custom Post Type
    function servicio_de_soporte() {
    
        $labels = array(
            'name'                  => _x( 'servicio de soporte', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'servicio de soporte', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Servicio de Soporte', 'text_domain' ),
            'name_admin_bar'        => __( 'Servicio de Soporte', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'servicio_de_soporte', 'text_domain' ),
            'description'           => __( 'servicio_de_soporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 7,
            'menu_icon'             => 'dashicons-admin-tools',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'servicio_de_soporte', $args );
    
    }
    add_action( 'init', 'servicio_de_soporte', 0 );
    
    }
     // Register Custom Post Type
if ( ! function_exists('pilares_soporte') ) {
  
    // Register Custom Post Type
    function pilares_soporte() {
    
        $labels = array(
            'name'                  => _x( 'Pilares Soporte', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Pilares Soporte', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Pilares Soporte', 'text_domain' ),
            'name_admin_bar'        => __( 'Pilares Soporte', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'pilares_soporte', 'text_domain' ),
            'description'           => __( 'pilares_soporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 7,
            'menu_icon'             => 'dashicons-admin-tools',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'pilares_soporte', $args );
    
    }
    add_action( 'init', 'pilares_soporte', 0 );
    
    }
       // Register Custom Post Type
if ( ! function_exists('soluciones_card') ) {
  
    // Register Custom Post Type
    function soluciones_card() {
    
        $labels = array(
            'name'                  => _x( 'Soluciones/Cards', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Soluciones/Card', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Soluciones/Cards', 'text_domain' ),
            'name_admin_bar'        => __( 'Soluciones/Cards', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'soluciones_card', 'text_domain' ),
            'description'           => __( 'soluciones_card', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 9,
            'menu_icon'             => 'dashicons-admin-tools',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'soluciones_card', $args );
    
    }
    add_action( 'init', 'soluciones_card', 0 );
    
    }
           // Register Custom Post Type
if ( ! function_exists('metodologias') ) {
  
    // Register Custom Post Type
    function metodologias() {
    
        $labels = array(
            'name'                  => _x( 'Metodologias', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Metodologias', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Metodologias', 'text_domain' ),
            'name_admin_bar'        => __( 'Metodologias', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'metodologias', 'text_domain' ),
            'description'           => __( 'metodologias', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 9,
            'menu_icon'             => 'dashicons-admin-tools',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'metodologias', $args );
    
    }
    add_action( 'init', 'metodologias', 0 );
    
    }

    }
    

    

    

  