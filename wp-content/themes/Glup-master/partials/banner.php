<section class="main-banner-slider">
<?php $loop = new WP_Query( array( 'post_type' => 'banner' , 'category_name' => 'inicio' ) ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="main-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <div class="container"> 
        <div class="banner-content">
          <h3><?php the_field('primer_subtitle'); ?></h3>
          <h1><?php the_title(); ?></h1>
          <p><?php the_field('segundo_subtitle'); ?></p>
          <a class="btn btn-custom dark" href="<?php echo the_field('link_del_boton'); ?>"><?php the_field('boton-banner'); ?></a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </section>