<footer>
    <div class='footer-top'>
      <nav class='navbar navbar-expand-lg'>
        <a class='navbar-brand' href='#'>
          <img src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo@3x.png'>
        </a>
        <ul class='navbar-nav margin-auto menu'>
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url');?>/'>Inicio</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url');?>/Service'>Servicios</a>
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
          <li class='nav-item'>
            <a class='nav-link' href='#'>Aviso de privacidad</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='contact.html'>Ley de protección de datos</a>
          </li>
        </ul>
        <ul class='navbar-nav button'>
          <li>
            <a class='btn btn-custom gradient' href='<?php bloginfo('url');?>/#cotiza'>¡Cotiza ahora!</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class='footer-bottom'>
      <div class='footer-rrss'>
        <ul>
          <?php if (get_theme_mod('texto_linkedln') != NULL){?>  
           <li>
            <a target=”_blank href="<?php echo get_theme_mod('texto_linkedln') ?>">
              <i class='fa fa-linkedin'></i>
            </a>
          </li>
         <?php }
         ?> 
         <?php if (get_theme_mod('texto_instagram') != NULL){?>  
          <li>
            <a target=”_blank href='<?php echo get_theme_mod('texto_instagram') ?>'>
              <i class='fa fa-instagram'></i>
            </a>
          </li>
           <?php }
         ?> 
          <?php if (get_theme_mod('texto_twiter') != NULL){?>  
          <li>
            <a target=”_blank href='<?php echo get_theme_mod('texto_twiter') ?>'>

              <i class='fa fa-twitter'></i>
            </a>
          </li>
          <?php }
         ?> 
        </ul>
      </div>
      <span>Copyright @ 2020 Glup / Developed by Sigma</span>
    </div>
    <?php wp_footer(); ?>
  </footer>

  <script src='https://use.fontawesome.com/70a3cb5d53.js'></script>
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/main.js'></script>

</body>

</html>