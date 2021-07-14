<section class="main-services">
    <div class="container">
      <div class="title">
        <h3>Nuestros</h3>
        <h2>Servicios</h2>
      </div>
      <div class="row">
      <?php $args = array( 'post_type' => 'servicios', 'posts_per_page' => '4' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-3 col-md-6">
          <div class="icon-text-box">
            <div class="icon">
				<?php if ( get_field( 'icono_de_servicio' ) ) : ?>
					<img  alt="Imagen servicios" src="<?php the_field( 'icono_de_servicio' ); ?>" />
				<?php endif ?>
            
            </div>
            <div class="text">
              <h3> <?php the_field( 'titulo_de_servicio' ); ?></h3>
              <p><?php the_field( 'descripcion_de_servicio' ); ?>  </p>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>