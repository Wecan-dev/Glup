<section class="main-license">
    <img class="dots-mask" src="<?php echo get_template_directory_uri(); ?>/assets/img/dots.png">
    <div class="container">
      <div class="title">
        <h3>Acerca de</h3>
        <h2>Nuestras licencias</h2>
      </div>
    </div>
    <div class="main-license-box">
      <div class="main-license-slider">
        <?php $args = array( 'post_type' => 'licencia' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="license-item slick-active">
          <h3><?php the_field('licencia_titulo'); ?></h3>
          <h4><?php the_field('licencia_subtitulo'); ?></h4>
          <p><?php the_field('licencia_contenido'); ?></p>
          <img src="https://fellow.app/wp-content/uploads/2020/09/Leadership-Meetings.jpg">
        </div>
         <?php endwhile; ?>
      </div>

    </div>
     
  </section>