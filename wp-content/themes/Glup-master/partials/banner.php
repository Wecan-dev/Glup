<section class="main-banner-slider">
<?php $loop = new WP_Query( 'post_type=banner&categorias_banner=inicio' ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="main-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <div class="container"> 
        <div class="banner-content">
          <h3><?php the_field('primer_subtitle'); ?></h3>
          <h1><?php the_title(); ?></h1>
          <p><?php the_field('segundo_subtitle'); ?></p>
          <a class="btn btn-custom dark" href="http://159.89.229.55/Glup/contacto/">Contáctanos</a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </section>