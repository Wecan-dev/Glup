<?php get_header(); ?>
<?php $loop = new WP_Query( 'post_type=banner&categorias_banner=servicios' ); ?>
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
      <?php $args = array( 'post_type' => 'servicios', 'posts_per_page' => '4' ); ?>
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
          <img src="http://159.89.229.55/Glup/wp-content/uploads/2020/11/Servicios.jpg">
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
				<?php if(get_field('servicio_soporte_item_1')): ?>
					<li><?php the_field('servicio_soporte_item_1'); ?></li>
				<?php endif; ?>
				<?php if(get_field('servicio_soporte_item_2')): ?>
					<li><?php the_field('servicio_soporte_item_2'); ?></li>
				<?php endif; ?>
				<?php if(get_field('servicio_soporte_item_3')): ?>
					<li><?php the_field('servicio_soporte_item_3'); ?></li>
				<?php endif; ?>
				<?php if(get_field('servicio_soporte_item_4')): ?>
					<li><?php the_field('servicio_soporte_item_'); ?></li>
				<?php endif; ?>
				<?php if(get_field('servicio_soporte_item_5')): ?>
					<li><?php the_field('servicio_soporte_item_5'); ?></li>
				<?php endif; ?>
				<?php if(get_field('servicio_soporte_item_6')): ?>
					<li><?php the_field('servicio_soporte_item_6'); ?></li>
				<?php endif; ?>
				<?php if(get_field('servicio_soporte_item_7')): ?>
					<li><?php the_field('servicio_soporte_item_7'); ?></li>
				<?php endif; ?>
				<?php if(get_field('servicio_soporte_item_8')): ?>
					<li><?php the_field('servicio_soporte_item_8'); ?></li>
				<?php endif; ?>
          
            </ul>
          </div>
        </div>
      </div>   
		<?php endwhile; ?>
    </div>

  </section>
  <?php get_footer(); ?>