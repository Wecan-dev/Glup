<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'banner' , 'category_name' => 'single-servicios' ) ); ?>
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
            <li><?php the_field('nuestros_servicios_item-1'); ?></li>
            <li><?php the_field('nuestros_servicios_item-2'); ?></li>
            <li><?php the_field('nuestros_servicios_item-3'); ?></li>
            <li><?php the_field('nuestros_servicios_item-4'); ?></li>
            <li><?php the_field('nuestros_servicios_item-5'); ?></li>
            <li><?php the_field('nuestros_servicios_item-6'); ?></li>
            <li><?php the_field('nuestros_servicios_item-7'); ?></li>
            <li><?php the_field('nuestros_servicios_item-8'); ?></li>
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
    <img alt="Brindamos soporte técnico" class="cta-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/team.png">
    <h2>Brindamos soporte técnico</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-custom light small" href="#">Ver más</a>
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
        <h2>Galería</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi, amet consectetur adipiscing</p>
      </div>
      <div class="gallery-slider">
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/1.jpg">
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/2.jpg">
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/3.jpg">
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/4.jpg">
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/1.jpg">
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/2.jpg">
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/3.jpg">
        </div>
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/4.jpg">
        </div>
      </div>
    </div>
  </section>
  <section class="cta-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/cta-bg.jpg)">
    <h2>Contáctanos para darte el mejor servicio</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-custom light small" href="contact.html">Contacto</a>
  </section>
  <?php get_footer(); ?>