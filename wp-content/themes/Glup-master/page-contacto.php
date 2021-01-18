<?php get_header(); ?>
<?php $loop = new WP_Query( 'post_type=banner&categorias_banner=jobs&posts_per_page=-1' ); ?>
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
  <section class="main-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/envelope-2.png">
                Correo electrónico
              </h3>
              <ul>
                <li>
                  <a href="mailto:info@glup.com"><?php echo get_theme_mod('contacto'); ?> </a>
                </li>
              </ul>
            </div>
            <div class="contact-info-item">
              <h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone-2.png">
                Líneas de Atención
              </h3>
              <ul>
                <li>
                  <a href="tel:3446775436"><?php echo get_theme_mod('telefono'); ?></a>
                </li>
                <li>
                  <a href="tel:3245776788"><?php echo get_theme_mod('telefono_2'); ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="contact-form contact-form--full">
            <h3>Contacto</h3>
            <p>Si deseas alguno de nuestros servicios estamos para ayudarte</p>
            <form>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php get_footer(); ?>