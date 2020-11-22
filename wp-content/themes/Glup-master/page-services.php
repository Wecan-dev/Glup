<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'banner' , 'category_name' => 'servicios' ) ); ?>
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
  <section class="main-services">
    <div class="container">
      <div class="title">
        <h3>Acerca de</h3>
        <h2>nuestros servicios</h2>
      </div>
      <div class="row">
      <?php $args = array( 'post_type' => 'nuestros_servicios', 'posts_per_page' => '4' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-3 col-md-6">
          <a class="icon-text-box" href="<?php echo the_field('servicios_texto-boton'); ?>">
            <div class="icon">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
            <div class="text">
              <h3> <?php the_title(); ?> </h3>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
    </div>
  </section>
  <section class="services-img">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <img src="https://cdn.zeplin.io/5f68cf344bf05f0c8b273356/assets/C5B15DC4-BEA0-47DB-A3AE-61CA5E5C7F69.png">
        </div>
      </div>
    </div>
  </section>
  <section class="main-services-list">
    <div class="container">
      <div class="row">
      <?php $args = array( 'post_type' => 'servicio_de_soporte', 'posts_per_page' => '1' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-12">
          <div class="main-services-list-text">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <ul class="list-checks green">
              <li><?php the_field('servicio_soporte_item_1'); ?></li>
              <li><?php the_field('servicio_soporte_item_2'); ?></li>
              <li><?php the_field('servicio_soporte_item_3'); ?></li>
              <li><?php the_field('servicio_soporte_item_4'); ?></li>
              <li><?php the_field('servicio_soporte_item_5'); ?></li>
              <li><?php the_field('servicio_soporte_item_6'); ?></li>
              <li><?php the_field('servicio_soporte_item_7'); ?></li>
              <li><?php the_field('servicio_soporte_item_8'); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </section>
  <?php get_footer(); ?>