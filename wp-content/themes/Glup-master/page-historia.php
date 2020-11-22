<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'banner' , 'category_name' => 'historias' ) ); ?>
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
  <section class="main-clients">
    <div class="title">
      <h3>nuestros</h3>
      <h2>clientes</h2>
    </div>
    <div class="main-clients-text">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <div class="main-clients-slider">
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-1.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-2.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-3.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-4.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-5.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-6.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-1.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-2.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-3.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-4.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-5.png">
      </div>
      <div class="main-client-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-6.png">
      </div>
    </div>
  </section>
  <section class="main-stories bg-lightgray">
    <div class="svg-element">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections-2.svg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections-3.svg">
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="main-stories-text">
          <div class="side-title">
            <h3>nuestras</h3>
            <h2>historias</h2>
          </div>
          <div class="stories-text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          </div>
          <div class="main-stories-controls">
            <img class="custom-prev" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow_left_blue.png">
            <img class="custom-next" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow_right_blue.png">
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="main-stories-slider">
          <div class="main-story-item">
            <div class="story-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-1.png">
              <div class="story-item-badge">2017</div>
            </div>
            <div class="story-item-text">
              <h4>Cerámica italia</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
              <a class="hiperlink" href="#">
                Siguiente
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
            </div>
          </div>
          <div class="main-story-item">
            <div class="story-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-2.png">
              <div class="story-item-badge">2018</div>
            </div>
            <div class="story-item-text">
              <h4>Caffam</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
              <a class="hiperlink" href="#">
                Siguiente
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
            </div>
          </div>
          <div class="main-story-item">
            <div class="story-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-6.png">
              <div class="story-item-badge">2019</div>
            </div>
            <div class="story-item-text">
              <h4>Acción Fiduciaria</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
              <a class="hiperlink" href="#">
                Siguiente
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
            </div>
          </div>
          <div class="main-story-item">
            <div class="story-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-1.png">
              <div class="story-item-badge">2017</div>
            </div>
            <div class="story-item-text">
              <h4>Cerámica italia</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
              <a class="hiperlink" href="#">
                Siguiente
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
            </div>
          </div>
          <div class="main-story-item">
            <div class="story-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-2.png">
              <div class="story-item-badge">2018</div>
            </div>
            <div class="story-item-text">
              <h4>Caffam</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
              <a class="hiperlink" href="#">
                Siguiente
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
            </div>
          </div>
          <div class="main-story-item">
            <div class="story-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/client-6.png">
              <div class="story-item-badge">2019</div>
            </div>
            <div class="story-item-text">
              <h4>Acción Fiduciaria</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
              <a class="hiperlink" href="#">
                Siguiente
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cta cta-padding">
    <h2>Contáctanos para darte el mejor servicio</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-custom light small" href="contact.html">Contacto</a>
  </section>
 <?php get_footer(); ?>