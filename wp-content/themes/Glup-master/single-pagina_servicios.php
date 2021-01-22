<?php get_header(); ?>
<?php $loop = new WP_Query( 'post_type=banner&categorias_banner=single-servicios' ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="page-header" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="container">
      <div class="page-header-content">
        <h1><?php the_title(); ?></h1>
        <p><?php the_field('segundo_subtitle'); ?></p>
      </div>
    </div>
  </div>
<?php endwhile; ?>
  <section class="single-service">
    <div class="container">
      <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
      <div class="row">
        <div class="side-title">
          <h3>Acerca de</h3>
          <h2> <?php the_title() ?> </h2>
        </div>
        <div class="single-service-text">
          <p><?php the_field('nuestros_servicios_primer_párrafo'); ?></p>
          <p><?php the_field('nuestros_servicios_segundo_parrafo'); ?></p>
        </div>
        <div class="single-service-list">
          <ul class="list-checks primary">
           <li><?php the_content()?></li>
          </ul>
          <div class="list-image">
               <?php $image = get_field('nuestros_servicios_imagen'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        </div>
      </div>
       <?php
            }
    } ?>
    </div>
  </section>
  <section class="cta">
     <?php if (get_theme_mod('soporte_tecnico_img') != NULL){?>  
    <img alt="Brindamos soporte técnico" class="cta-icon" src="<?php echo get_theme_mod('soporte_tecnico_img'); ?>">
    <?php }
         ?> 
    <h2><?php echo get_theme_mod('soporte_tecnico_title'); ?></h2>
    <p><?php echo get_theme_mod('soporte_tecnico_subtitle'); ?></p>
    <?php if (get_theme_mod('soporte_tecnico_boton_texto') != NULL){?>  
    <a class="btn btn-custom light small" href="<?php echo get_theme_mod('soporte_tecnico_boton_url'); ?>"><?php echo get_theme_mod('soporte_tecnico_boton_texto'); ?></a>
  <?php }
  ?>
  </section>
  <section class="service-features bg-lightgray">
    <div class="svg-element">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections-2.svg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections.svg">
    </div>
    <div class="container">
      <div class="title">
        <h3>Nuestros</h3>
        <h2>Pilares en soporte</h2>
      </div>
      <div class="row">
      <?php $args = array( 'post_type' => 'pilares_soporte', 'posts_per_page' => '3' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-4">
          <div class="icon-text-box">
            <div class="icon">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
            <div class="text">
              <h3><?php the_title() ?> </h3>
              <p><?php the_content() ?> </p>
              <a class="hiperlink" href="<?php echo the_field('pilares_link_del_boton'); ?>">
              <?php the_field('boton-pilares'); ?>
                <i class="fa fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <section class="gallery">
    <div class="container">
      <div class="title">
         <?php if (get_theme_mod('galeria_titulo') != NULL){?>  
        <h2><?php echo get_theme_mod('galeria_titulo'); ?></h2>
         <?php }
  ?>
    <?php if (get_theme_mod('galeria_subtitulo') != NULL){?>  
        <p><?php echo get_theme_mod('galeria_subtitulo'); ?></p>
              <?php }
  ?>
      </div>
      <div class="gallery-slider">
		   <?php if (get_theme_mod('galeria_item_1') != NULL){?>  
        <div class="gallery-item">
          <img src="<?php echo get_theme_mod('galeria_item_1'); ?>">
        </div>
		           <?php }
  ?>
		    <?php if (get_theme_mod('galeria_item_2') != NULL){?>  
        <div class="gallery-item">
          <img src="<?php echo get_theme_mod('galeria_item_2'); ?>">
        </div>
		   <?php }
  ?>
		   <?php if (get_theme_mod('galeria_item_3') != NULL){?>  
        <div class="gallery-item">
          <img src="<?php echo get_theme_mod('galeria_item_3'); ?>">
        </div>
		  <?php }
  ?>
		    <?php if (get_theme_mod('galeria_item_4') != NULL){?>  
        <div class="gallery-item">
          <img src="<?php echo get_theme_mod('galeria_item_4'); ?>">
        </div>
		    <?php }
  ?>
		   <?php if (get_theme_mod('galeria_item_5') != NULL){?>  
        <div class="gallery-item">
          <img src="<?php echo get_theme_mod('galeria_item_5'); ?>">
        </div>
		    <?php }
  ?>
		   <?php if (get_theme_mod('galeria_item_6') != NULL){?>  
        <div class="gallery-item">
          <img src="<?php echo get_theme_mod('galeria_item_6'); ?>">
        </div>
		   <?php }
  ?>
		    <?php if (get_theme_mod('galeria_item_7') != NULL){?>  
        <div class="gallery-item">
          <img src="<?php echo get_theme_mod('galeria_item_7'); ?>">
        </div>
		    <?php }
  ?>
		    <?php if (get_theme_mod('galeria_item_8') != NULL){?>  
        <div class="gallery-item">
          <img src="<?php echo get_theme_mod('galeria_item_8'); ?>">
        </div>
		    <?php }
  ?>
      </div>
    </div>
  </section>
  <section class="cta-bg" style="background-image: url(<?php echo get_theme_mod('servicio_background'); ?>)">
    <?php if (get_theme_mod('Contáctanos/servicio_title') != NULL){?>  
    <h2><?php echo get_theme_mod('Contáctanos/servicio_title'); ?></h2>
     <?php }
  ?>
   <?php if (get_theme_mod('Contáctanos/servicio_subtitle') != NULL){?>  
    <p><?php echo get_theme_mod('Contáctanos/servicio_subtitle'); ?></p>
    <?php }
  ?>
     <?php if (get_theme_mod('Contáctanos/servicio_texto_boton') != NULL){?>  
    <a class="btn btn-custom light small" href="<?php echo get_theme_mod('Contáctanos/servicio_url_boton'); ?>"><?php echo get_theme_mod('Contáctanos/servicio_texto_boton'); ?></a>
     <?php }
  ?>
  </section>
  <?php get_footer(); ?>