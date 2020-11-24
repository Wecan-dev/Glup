<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='ie=edge' http-equiv='X-UA-Compatible'>
  <meta content='#fff' name=' theme-color'>
  <meta content='' name='description'>
  <meta content='' name='keywords'>
  <meta content='website' property='og:type'>
  <meta content='' property='og:title'>
  <meta content='' property='og:description'>
  <meta content='' property='og:image'>
  <title>Glup | Creamos vinculos</title>
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/animate/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/main.css' rel='stylesheet'>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/services.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/apps.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/jobs.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/stories.css" rel="stylesheet">
  <?php wp_head();?>
</head>

<body>
  <nav class='navbar navbar-expand-lg'>
    <a class='navbar-brand' href='<?php bloginfo('url');?>/'>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo@3x.png'>
    </a>
    <button aria-controls='glupNavbar' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-target='#glupNavbar' data-toggle='collapse' type='button'>
      <i class='fa fa-bars'></i>
    </button>
    <div class='collapse navbar-collapse' id='glupNavbar'>
      <ul class='navbar-nav margin-auto'>
        <li class='nav-item'>
          <a class='nav-link' href='<?php bloginfo('url');?>/'>Inicio</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='<?php bloginfo('url');?>/service'>
            Servicios
            <i class='fa fa-chevron-down'></i>
          </a>
          <ul class='nav-dropdown'>
            <li>
              <a href='<?php bloginfo('url');?>/pagina_servicios/soporte'>Soporte</a>
            </li>
            <li>
              <a href='<?php bloginfo('url');?>/pagina_servicios/consultoria'>Consultoría</a>
            </li>
            <li>
              <a href='<?php bloginfo('url');?>/pagina_servicios/desarrollo'>Desarrollo</a>
            </li>
            <li>
              <a href='<?php bloginfo('url');?>/pagina_servicios/licenciamiento'>Licenciamiento</a>
            </li>
          </ul>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='<?php bloginfo('url');?>/apps'>Apps y Soluciones</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='<?php bloginfo('url');?>/historia'>Historias de Éxito</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='<?php bloginfo('url');?>/jobs'>Jobs</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='<?php bloginfo('url');?>/contacto'>Contacto</a>
        </li>
      </ul>
      <ul class='navbar-nav'>
        <li>
          <a class='btn btn-custom gradient' href='<?php bloginfo('url');?>/#cotiza'>¡Cotiza ahora!</a>
        </li>
      </ul>
    </div>
  </nav>