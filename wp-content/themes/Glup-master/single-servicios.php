<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="page-header" style="background-image: url(http://159.89.229.55/Glup/wp-content/uploads/2020/11/page-header-about-scaled.jpg)">
    <div class="container">
      <div class="page-header-content">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      </div>
    </div>
  </div>
  <section class="single-service">
    <div class="container">
      <div class="row">
        <div class="side-title">
          <h3>Acerca de</h3>
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="single-service-text">
          <p><?php the_field( 'descripcion_larga' ); ?></p>
        </div>
        <div class="single-service-list">
          <?php the_field( 'items_de_descripcion' ); ?>
          <div class="list-image">
            <?php $imagen_de_servicio = get_field( 'imagen_de_servicio' ); ?>
			<?php if ( $imagen_de_servicio ) : ?>
				<img src="<?php echo esc_url( $imagen_de_servicio['url'] ); ?>" alt="<?php echo esc_attr( $imagen_de_servicio['alt'] ); ?>" />
			<?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cta">
	  <?php if ( get_field( 'icono_de_soporte' ) ) : ?>
			<img alt="Brindamos soporte"  src="<?php the_field( 'icono_de_soporte' ); ?>" />
		<?php endif ?>
    
    <h2><?php the_field( 'titulo_del_soporte' ); ?></h2>
    <p><?php the_field( 'descripcion_de_soporte' ); ?></p>
	  <?php $boton_mas_informacion = get_field( 'boton_mas_informacion' ); ?>
	  <?php if ( $boton_mas_informacion ) : ?>
	  <a class="btn btn-custom light small" href="<?php echo esc_url( $boton_mas_informacion['url'] ); ?>" target="<?php echo esc_attr( $boton_mas_informacion['target'] ); ?>"><?php echo esc_html( $boton_mas_informacion['title'] ); ?></a>
	  <?php endif; ?>
	  
    
  </section>
  <section class="service-features bg-lightgray">
    <div class="svg-element">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections-2.svg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections.svg">
    </div>
    <div class="container">
      <div class="title">
        <h3>Nuestros</h3>
        <h2>Pilar <?php the_title(); ?> es:</h2>
      </div>
      <div class="row">
		  <?php if ( have_rows( 'agregar_pilares' ) ) : ?>
			<?php while ( have_rows( 'agregar_pilares' ) ) : the_row(); ?>
		  
		  	  <div class="col-lg-4">
				  <div class="icon-text-box">
					<div class="icon">
						<?php if ( get_sub_field( 'icono_de_pilar' ) ) : ?>
						<img src="<?php the_sub_field( 'icono_de_pilar' ); ?>" />
						<?php endif ?>
					</div>
					<div class="text">
					  <h3>	<?php the_sub_field( 'titulo_de_pilar' ); ?></h3>
					  <p><?php the_sub_field( 'descripcion_de_pilar' ); ?></p>
						
						<?php $boton_de_pilar = get_sub_field( 'boton_de_pilar' ); ?>
						<?php if ( $boton_de_pilar ) : ?>
							<a class="hiperlink" href="<?php echo esc_url( $boton_de_pilar['url'] ); ?>" target="<?php echo esc_attr( $boton_de_pilar['target'] ); ?>">
							<?php echo esc_html( $boton_de_pilar['title'] ); ?>
							<i class="fa fa-arrow-right"></i>
						</a>
						<?php endif; ?>
				
					</div>
				  </div>
				</div>
		  
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		  
      
      </div>
    </div>
  </section>
  <section class="gallery">
    <div class="container">
      <div class="title">
        <h2><?php the_field( 'titulo_de_galeria' ); ?></h2>
        <p><?php the_field( 'descripcion_de_galeria' ); ?></p>
      </div>
      <div class="gallery-slider">
		  
		  <?php $galeria_urls = get_field( 'galeria' ); ?>
		  <?php if ( $galeria_urls ) :  ?>
		  <?php foreach ( $galeria_urls as $galeria_url ): ?>
		    <div class="gallery-item">
			 <img src="<?php echo esc_url( $galeria_url ); ?>" />
			</div>
		  
		  <?php endforeach; ?>
		  <?php endif; ?>
      

      </div>
    </div>
  </section>

<?php
$cta_img = get_theme_mod('cta_contacto_img');
$cta_title = get_theme_mod('cta_contacto_title');
$cta_description = get_theme_mod('cta_contacto_subtitle');
$cta_textbtn = get_theme_mod('cta_contacto_boton_texto');
$cta_urlbtn = get_theme_mod('cta_contacto_boton_url');

?>
  <section class="cta-bg" style="background-image: url(<?php echo $cta_img; ?>)">
    <h2><?php echo $cta_title; ?> </h2>
    <p><?php echo $cta_description; ?> </p>
    <a class="btn btn-custom light small" href="<?php echo $cta_urlbtn; ?>"><?php echo $cta_textbtn; ?></a>
  </section>


  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
<?php get_footer(); ?>