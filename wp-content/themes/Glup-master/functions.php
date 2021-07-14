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
            'title' => 'Galeria',
            'priority' => 1,
            )
        );
  /////Galeria
  
  $wp_customize->add_section('galeria', array (
    'title' => 'Galeria',
    'panel' => 'panel1'
  ));
  // texto de red
    $wp_customize->add_setting('galeria_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_galeria_titulo', array (
      'description' => 'titulo de la galeria',
      'section' => 'galeria',
      'settings' => 'galeria_titulo',
    )));  
    // texto de red
    $wp_customize->add_setting('galeria_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_galeria_subtitulo', array (
      'description' => 'subtitulo de la galeria',
      'section' => 'galeria',
      'settings' => 'galeria_subtitulo',
		'type' => 'textarea'
    )));  
  //image
  $wp_customize->add_setting('galeria_item_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeria_item_1', array (
    'label' => 'Item 1',
    'description' => 'Ícono',
    'section' => 'galeria',
    'settings' => 'galeria_item_1'
  )));
  //image
  $wp_customize->add_setting('galeria_item_2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeria_item_2', array (
    'label' => 'Item 2',
    'description' => 'Ícono',
    'section' => 'galeria',
    'settings' => 'galeria_item_2'
  )));
  //image
  $wp_customize->add_setting('galeria_item_3');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeria_item_3', array (
    'label' => 'Item 3',
    'description' => 'Ícono',
    'section' => 'galeria',
    'settings' => 'galeria_item_3'
  )));
  //image
  $wp_customize->add_setting('galeria_item_4');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeria_item_4', array (
    'label' => 'Item 4',
    'description' => 'Ícono',
    'section' => 'galeria',
    'settings' => 'galeria_item_4'
  )));
  //image
  $wp_customize->add_setting('galeria_item_5');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeria_item_5', array (
    'label' => 'Item 5',
    'description' => 'Ícono',
    'section' => 'galeria',
    'settings' => 'galeria_item_5'
  )));
  //image
  $wp_customize->add_setting('galeria_item_6');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeria_item_6', array (
    'label' => 'Item 6',
    'description' => 'Ícono',
    'section' => 'galeria',
    'settings' => 'galeria_item_6'
  )));
   //image
  $wp_customize->add_setting('galeria_item_7');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeria_item_7', array (
    'label' => 'Item 7',
    'description' => 'Ícono',
    'section' => 'galeria',
    'settings' => 'galeria_item_7'
  )));
   //image
  $wp_customize->add_setting('galeria_item_8');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeria_item_8', array (
    'label' => 'Item 8',
    'description' => 'Ícono',
    'section' => 'galeria',
    'settings' => 'galeria_item_8'
  )));
  /////soporte Técnico
  $wp_customize->add_panel('panel2',
        array(
            'title' => 'CTA Contacto',
            'priority' => 2,
            )
        );
 
  $wp_customize->add_section('cta_contacto', array (
      'title' => 'CTA Contacto',
      'panel' => 'panel2',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

     //imagen
    $wp_customize->add_setting('cta_contacto_img');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cta_contacto_img', array (
      'description' => 'Ícono',
      'section' => 'cta_contacto',
      'settings' => 'cta_contacto_img'
    )));
    // texto de red
    $wp_customize->add_setting('cta_contacto_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_soporte_tecnico_title', array (
      'description' => 'titulo',
      'section' => 'cta_contacto',
      'settings' => 'cta_contacto_title',
    )));  
    // texto de red
    $wp_customize->add_setting('cta_contacto_subtitle', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_cta_contacto_subtitle', array (
      'description' => 'contenido',
      'section' => 'cta_contacto',
      'settings' => 'cta_contacto_subtitle',
		'type' => 'textarea'
    )));  
    // texto de soporte tecnico boton texto
    $wp_customize->add_setting('cta_contacto_boton_texto', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_cta_contacto_boton_texto', array (
      'description' => 'Texto del Boton',
      'section' => 'cta_contacto',
      'settings' => 'cta_contacto_boton_texto',
    )));  
    // texto de soporte tecnico boton URL
    $wp_customize->add_setting('cta_contacto_boton_url', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_cta_contacto_boton_url', array (
      'description' => 'URL del Boton',
      'section' => 'cta_contacto',
      'settings' => 'cta_contacto_boton_url',
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
    //imagen
    $wp_customize->add_setting('servicio_background');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicio_background_image_control', array (
      'label' => 'Imagen',
      'description' => 'Background',
      'section' => 'Contáctanos/servicio',
      'settings' => 'servicio_background'
    )));

     
    // texto de CONTACTO DE SERVICOS 
    $wp_customize->add_setting('Contáctanos/servicio_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_Contáctanos/servicio_title', array (
      'description' => 'titulo',
      'section' => 'Contáctanos/servicio',
      'settings' => 'Contáctanos/servicio_title',
    )));  
    // texto de red
    $wp_customize->add_setting('Contáctanos/servicio_subtitle', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_Contáctanos/servicio_subtitle', array (
      'description' => 'contenido',
      'section' => 'Contáctanos/servicio',
      'settings' => 'Contáctanos/servicio_subtitle',
		'type' => 'textarea'
    )));  

     // texto de red
    $wp_customize->add_setting('Contáctanos/servicio_texto_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_Contáctanos/servicio_texto_boton', array (
      'description' => 'Texto del Boton',
      'section' => 'Contáctanos/servicio',
      'settings' => 'Contáctanos/servicio_texto_boton',
    )));  

     // texto de red
    $wp_customize->add_setting('Contáctanos/servicio_url_boton', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_Contáctanos/servicio_url_boton', array (
      'description' => 'URL del Boton',
      'section' => 'Contáctanos/servicio',
      'settings' => 'Contáctanos/servicio_url_boton',
    )));  

   //////////////////////////////////////////////////////////////
   //cotizacion//////////////////////////////////
   $wp_customize->add_panel('cotizacion',
          array(
              'title' => 'Cotizacion',
              'priority' => 160,
              'capability' => 'edit_theme_options',
              )
          );

    //seccion cotizacion
    $wp_customize->add_section('cotizacion', array (
      'title' => 'cotizacion',
      'panel' => 'cotizacion',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
    
    // texto de red
    $wp_customize->add_setting('cotizacion_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_cotizacion_title', array (
      'description' => 'Titulo Principal',
      'section' => 'cotizacion',
      'settings' => 'cotizacion_title',
    )));  
	 // texto de red
    $wp_customize->add_setting('cotizacion_subtitle', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_cotizacion_subtitle', array (
      'description' => 'Subtitulo Principal',
      'section' => 'cotizacion',
      'settings' => 'cotizacion_subtitle',
		'type' => 'textarea'
    )));  
    //imagen
    $wp_customize->add_setting('cotizacion_image_1');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cotizacion_image_1_image_control', array (
      'label' => 'Imagen',
      'description' => 'Imagen',
      'section' => 'cotizacion',
      'settings' => 'cotizacion_image_1'
    )));
	
	///Productos/////////////////////////////////
	   //seccion producto
 $wp_customize->add_section('producto', array (
      'title' => 'Producto A',
      'panel' => 'cotizacion',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
    
    // texto de red
    $wp_customize->add_setting('producto_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_producto_title', array (
      'description' => 'Titulo Principal',
      'section' => 'producto',
      'settings' => 'producto_title',
    ))); 
	  // texto de red
    $wp_customize->add_setting('producto_subtitle', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_producto_subtitle', array (
      'description' => 'Subtitulo Principal',
      'section' => 'producto',
      'settings' => 'producto_subtitle',
		'type' => 'textarea'
    ))); 
	///////////////////////////////////////////////////////
	 //seccion producto B
 $wp_customize->add_section('productob', array (
      'title' => 'Producto B',
      'panel' => 'cotizacion',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
    
    // texto de red
    $wp_customize->add_setting('productob_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_productob_title', array (
      'description' => 'Titulo Principal',
      'section' => 'productob',
      'settings' => 'productob_title',
    ))); 
	  // texto de red
    $wp_customize->add_setting('productob_subtitle', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_productob_subtitle', array (
      'description' => 'Subtitulo Principal',
      'section' => 'productob',
      'settings' => 'productob_subtitle',
		'type' => 'textarea'
    ))); 
 ///////////////////////
 
	   //seccion producto C
 $wp_customize->add_section('productoc', array (
      'title' => 'Producto C',
      'panel' => 'cotizacion',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
    
    // texto de red
    $wp_customize->add_setting('productoc_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_productoc_title', array (
      'description' => 'Titulo Principal',
      'section' => 'productoc',
      'settings' => 'productoc_title',
    ))); 
	  // texto de red
    $wp_customize->add_setting('productoc_subtitle', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_productoc_subtitle', array (
      'description' => 'Subtitulo Principal',
      'section' => 'productoc',
      'settings' => 'productoc_subtitle',
		'type' => 'textarea'
    ))); 
 ///////////////////////
 ///////////////////////
    /////jobs/experiencia
  $wp_customize->add_panel('job',
        array(
            'title' => 'jobs/Requisitos',
            'priority' => 2,
            )
        );

 $wp_customize->add_section('jobs_imagen', array (
      'title' => 'Jobs Imagen',
      'panel' => 'job',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
     //imagen
    $wp_customize->add_setting('jobs_imagen_principal');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jobs_imagen_principal_image_control', array (
      'label' => 'Jobs Imagen',
      'description' => 'Imagen',
      'section' => 'jobs_imagen',
      'settings' => 'jobs_imagen_principal'
    )));

  $wp_customize->add_section('jobs_perfil', array (
      'title' => 'Perfil',
      'panel' => 'job',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

    // texto de perfil
    $wp_customize->add_setting('jobs_perfil', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_perfil', array (
      'description' => 'titulo principal',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil',
    )));  

// texto de perfil
    $wp_customize->add_setting('jobs_perfil_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_perfil_titulo', array (
      'description' => 'Titulo ',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_titulo',
    )));  

    // texto de perfil
    $wp_customize->add_setting('jobs_perfil_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_perfil_subtitulo', array (
      'description' => 'subtitulo ',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_subtitulo',
    )));  

 //imagen
    $wp_customize->add_setting('jobs_perfil_icono_1');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jobs_perfil_icono_1_image_control', array (
      'description' => 'Ícono_1',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_icono_1'
    )));
//imagen
    $wp_customize->add_setting('jobs_perfil_icono_2');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jobs_perfil_icono_2_image_control', array (
      'description' => 'Ícono_2',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_icono_2'
    )));
    // texto de perfil
    $wp_customize->add_setting('jobs_perfil_parrafo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_perfil_parrafo', array (
      'description' => 'parrafo',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_parrafo',
		'type' => 'textarea'
    )));  
// texto de perfil
    $wp_customize->add_setting('jobs_perfil_subtitulo_item', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_perfil_subtitulo_item', array (
      'description' => 'Subtitulo Item',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_subtitulo_item',
    ))); 
    // texto de perfil
    $wp_customize->add_setting('jobs_perfil_item_1', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_perfil_item_1', array (
      'description' => 'Item 1',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_item_1',
    )));  
    // texto de perfil
    $wp_customize->add_setting('jobs_perfil_item_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_perfil_item_2', array (
      'description' => 'Item 2',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_item_2',
    )));  
    // texto de perfil
    $wp_customize->add_setting('jobs_perfil_item_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_perfil_item_3', array (
      'description' => 'Item 3',
      'section' => 'jobs_perfil',
      'settings' => 'jobs_perfil_item_3',
    )));  

     //seccion Experiencia///////////////////////////////////////////////////////////////
    $wp_customize->add_section('jobs_experiencia', array (
      'title' => 'Experiencia',
      'panel' => 'job',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

     
    // texto de CONTACTO DE SERVICOS 
    $wp_customize->add_setting('jobs_experiencia_main_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_experiencia_main_title', array (
      'description' => 'Titulo principal',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_main_title',
    )));  

    // texto de perfil
    $wp_customize->add_setting('jobs_experiencia_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_experiencia_titulo', array (
      'description' => 'Titulo ',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_titulo',
    )));  

    // texto de experiencia
    $wp_customize->add_setting('jobs_experiencia_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_experiencia_subtitulo', array (
      'description' => 'subtitulo ',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_subtitulo',
    )));  

 //imagen
    $wp_customize->add_setting('jobs_experiencia_icono_1');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jobs_experiencia_icono_1_image_control', array (
      'description' => 'Ícono_1',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_icono_1'
    )));
//imagen
    $wp_customize->add_setting('jobs_experiencia_icono_2');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jobs_experiencia_icono_2_image_control', array (
      'description' => 'Ícono_2',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_icono_2'
    )));
    // texto de experiencia
    $wp_customize->add_setting('jobs_experiencia_parrafo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_experiencia_parrafo', array (
      'description' => 'parrafo',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_parrafo',
		'type' => 'textarea'
    )));  
// texto de experiencia
    $wp_customize->add_setting('jobs_experiencia_subtitulo_item', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_experiencia_subtitulo_item', array (
      'description' => 'Subtitulo Item',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_subtitulo_item',
    ))); 
    // texto de experiencia
    $wp_customize->add_setting('jobs_experiencia_item_1', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_experiencia_item_1', array (
      'description' => 'Item 1',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_item_1',
    )));  
    // texto de experiencia
    $wp_customize->add_setting('jobs_experiencia_item_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_experiencia_item_2', array (
      'description' => 'Item 2',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_item_2',
    )));  
    // texto de experiencia
    $wp_customize->add_setting('jobs_experiencia_item_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_experiencia_item_3', array (
      'description' => 'Item 3',
      'section' => 'jobs_experiencia',
      'settings' => 'jobs_experiencia_item_3',
    )));  
    ///////
    
       //seccion requisitos///////////////////////////////////////////////////////////////
    $wp_customize->add_section('jobs_requisitos', array (
      'title' => 'Requisitos',
      'panel' => 'job',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));

     
    // texto de CONTACTO DE SERVICOS 
    $wp_customize->add_setting('jobs_requisitos_main_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_requisitos_main_title', array (
      'description' => 'Titulo principal',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_main_title',
    )));  

    // texto de perfil
    $wp_customize->add_setting('jobs_requisitos_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_requisitos_titulo', array (
      'description' => 'Titulo ',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_titulo',
    )));  

    // texto de requisitos
    $wp_customize->add_setting('jobs_requisitos_subtitulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_requisitos_subtitulo', array (
      'description' => 'subtitulo ',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_subtitulo',
    )));  

 //imagen
    $wp_customize->add_setting('jobs_requisitos_icono_1');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jobs_requisitos_icono_1_image_control', array (
      'description' => 'Ícono_1',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_icono_1'
    )));
//imagen
    $wp_customize->add_setting('jobs_requisitos_icono_2');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jobs_requisitos_icono_2_image_control', array (
      'description' => 'Ícono_2',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_icono_2'
    )));
    // texto de requisitos
    $wp_customize->add_setting('jobs_requisitos_parrafo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_requisitos_parrafo', array (
      'description' => 'Párrafo',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_parrafo',
      'type' => 'textarea'
    )));  
// texto de requisitos
    $wp_customize->add_setting('jobs_requisitos_subtitulo_item', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_requisitos_subtitulo_item', array (
      'description' => 'Subtitulo Item',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_subtitulo_item',
    ))); 
    // texto de requisitos
    $wp_customize->add_setting('jobs_requisitos_item_1', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_requisitos_item_1', array (
      'description' => 'Item 1',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_item_1',
    )));  
    // texto de requisitos
    $wp_customize->add_setting('jobs_requisitos_item_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_requisitos_item_2', array (
      'description' => 'Item 2',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_item_2',
    )));  
    // texto de requisitos
    $wp_customize->add_setting('jobs_requisitos_item_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_jobs_requisitos_item_3', array (
      'description' => 'Item 3',
      'section' => 'jobs_requisitos',
      'settings' => 'jobs_requisitos_item_3',
    )));  
  
   //////////////////////////////////////////////////////////////
 $wp_customize->add_panel('integracion_producto',
          array(
              'title' => 'Integración/Producto',
              'priority' => 160,
              'capability' => 'edit_theme_options',
              )
          );

    //seccion integracion_producto
    $wp_customize->add_section('integracion_producto', array (
      'title' => 'Integración Producto',
      'panel' => 'integracion_producto',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
 // texto de red
    $wp_customize->add_setting('integracion_producto_subtitle', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_integracion_producto_subtitle', array (
      'description' => 'Subtitulo Principal',
      'section' => 'integracion_producto',
      'settings' => 'integracion_producto_subtitle',
    )));  
    
    // texto de red
    $wp_customize->add_setting('integracion_producto_title', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_integracion_producto_title', array (
      'description' => 'Titulo Principal',
      'section' => 'integracion_producto',
      'settings' => 'integracion_producto_title',
    )));  
    //imagen
    $wp_customize->add_setting('integracion_producto_image_1');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'integracion_producto_image_1_image_control', array (
      'label' => 'Imagen',
      'description' => 'Imagen',
      'section' => 'integracion_producto',
      'settings' => 'integracion_producto_image_1'
    )));
// texto de red
    $wp_customize->add_setting('integracion_producto_title_img_1', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_integracion_producto_title_img_1', array (
      'description' => 'Subtitulo Imagen',
      'section' => 'integracion_producto',
      'settings' => 'integracion_producto_title_img_1',
    )));  
    //imagen
    $wp_customize->add_setting('integracion_producto_image_2');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'integracion_producto_image_2_image_control', array (
      'label' => 'Imagen',
      'description' => 'Imagen',
      'section' => 'integracion_producto',
      'settings' => 'integracion_producto_image_2'
    )));
// texto de red
    $wp_customize->add_setting('integracion_producto_title_img_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_integracion_producto_title_img_2', array (
      'description' => 'Subtitulo Imagen',
      'section' => 'integracion_producto',
      'settings' => 'integracion_producto_title_img_2',
    ))); 

     //imagen
    $wp_customize->add_setting('integracion_producto_image_3');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'integracion_producto_image_3_image_control', array (
      'label' => 'Imagen',
      'description' => 'Imagen',
      'section' => 'integracion_producto',
      'settings' => 'integracion_producto_image_3'
    )));
// texto de red
    $wp_customize->add_setting('integracion_producto_title_img_3', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_integracion_producto_title_img_3', array (
      'description' => 'Subtitulo Imagen',
      'section' => 'integracion_producto',
      'settings' => 'integracion_producto_title_img_3',
    )));  

    ////////////////////////////////////////////////////
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
		'type' => 'textarea'
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
////////////////////Correo//////////////////////////////
  // contacto
     $wp_customize->add_panel('contacto',
          array(
              'title' => 'Contacto',
              'priority' => 160,
              'capability' => 'edit_theme_options',
              )
          );

    //seccion correo
    $wp_customize->add_section('contacto', array (
      'title' => 'Correo',
      'panel' => 'contacto',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
    // texto de red
    $wp_customize->add_setting('contacto', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contacto', array (
      'description' => 'Correo electronico',
      'section' => 'contacto',
      'settings' => 'contacto',
    ))); 
	
	  //seccion correo
    $wp_customize->add_section('telefono', array (
      'title' => 'Correo',
      'panel' => 'telefono',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
    // texto de red
    $wp_customize->add_setting('telefono', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_telefono', array (
      'description' => 'Telefono 1',
      'section' => 'telefono',
      'settings' => 'telefono',
    ))); 

     // texto de red
    $wp_customize->add_setting('telefono_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_telefono_2', array (
      'description' => 'Telefono 2',
      'section' => 'telefono_2',
      'settings' => 'telefono_2',
    ))); 
//seccion correo
    $wp_customize->add_section('telefono', array (
      'title' => 'Telefonos',
      'panel' => 'contacto',
      'priority' => 1,
      'capability' => 'edit_theme_options',
    ));
    // texto de red
    $wp_customize->add_setting('telefono', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_telefono', array (
      'description' => 'Telefono 1',
      'section' => 'telefono',
      'settings' => 'telefono',
    ))); 

     // texto de red
    $wp_customize->add_setting('telefono_2', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_telefono_2', array (
      'description' => 'Telefono 2',
      'section' => 'telefono',
      'settings' => 'telefono_2',
    ))); 
	
	
/////////////////////////////////////////////////777777
   

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
// Register Proyectos Custom Taxonomy
function categorias_banner_taxonomy() {
	$labels = array(
		'name'                       => _x( '<span class="name_none">Banners</span>', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Banner', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Banner', 'text_domain' ),
		'all_items'                  => __( 'Todos los banners', 'text_domain' ),
		'parent_item'                => __( 'Parent Vista', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Vista:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva Vista', 'text_domain' ),
		'add_new_item'               => __( 'Agregar Nueva Vista', 'text_domain' ),
		'edit_item'                  => __( 'Editar Vista', 'text_domain' ),
		'update_item'                => __( 'Actualizar Vista', 'text_domain' ),
		'view_item'                  => __( 'Ver Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Buscar Vista', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		
	);
	register_taxonomy( 'categorias_banner', array( 'banner' ), $args );
}
add_action( 'init', 'categorias_banner_taxonomy', 0 );
      // Register Custom Post Type
if ( ! function_exists('servicios') ) {
  
    // Register Custom Post Type
    function servicios() {
    
        $labels = array(
            'name'                  => _x( 'servicio', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'servicio', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Servicios', 'text_domain' ),
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
            'taxonomies'            => true,
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
if ( ! function_exists('historia') ) {
  
    // Register Custom Post Type
    function historia() {
    
        $labels = array(
            'name'                  => _x( 'Historias', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Historias', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Historias', 'text_domain' ),
            'name_admin_bar'        => __( 'Historias', 'text_domain' ),
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
            'label'                 => __( 'historia', 'text_domain' ),
            'description'           => __( 'historia', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 7,
            'menu_icon'             => 'dashicons-book-alt',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'historia', $args );
    
    }
    add_action( 'init', 'historia', 0 );
    
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
            'menu_icon'             => 'dashicons-edit-page',
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
               // Register Custom Post Type
if ( ! function_exists('procesos') ) {
  
    // Register Custom Post Type
    function procesos() {
    
        $labels = array(
            'name'                  => _x( 'procesos', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'procesos', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Procesos', 'text_domain' ),
            'name_admin_bar'        => __( 'Procesos', 'text_domain' ),
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
            'label'                 => __( 'procesos', 'text_domain' ),
            'description'           => __( 'procesos', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 9,
            'menu_icon'             => 'dashicons-admin-links',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'procesos', $args );
    
    }
    add_action( 'init', 'procesos', 0 );
    
    }


    }
    

    

    

  