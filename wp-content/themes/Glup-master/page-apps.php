<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'banner' , 'category_name' => 'apps' ) ); ?>
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
  <section class="main-solutions">
    <div class="title">
      <h3>acerca de</h3>
      <h2>NUESTRAS SOLUCIONES</h2>
    </div>
    
    <div class="main-solutions-logos">
    <?php $args = array( 'post_type' => 'soluciones_logos', 'posts_per_page' => '3' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <img src="<?php echo get_the_post_thumbnail_url(); ?>">
      <?php endwhile; ?>
    </div>
    
    <div class="row">
      <div class="col-lg-4">
        <div class="solution-card">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
          <div class="solution-card-text">
            <h4>Para tu empresa</h4>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.Lorem Ipsum es simplemente.</p>
            <a class="btn-custom secondary" href="#">Cotiza ahora</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="solution-card">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
          <div class="solution-card-text">
            <h4>Para tu empresa</h4>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.Lorem Ipsum es simplemente.</p>
            <a class="btn-custom secondary" href="#">Cotiza ahora</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="solution-card">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
          <div class="solution-card-text">
            <h4>Para tu empresa</h4>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.Lorem Ipsum es simplemente.</p>
            <a class="btn-custom secondary" href="#">Cotiza ahora</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="apps-solutions bg-lightgray">
    <div class="svg-element">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections-2.svg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections.svg">
    </div>
    <div class="container">
      <div class="title">
        <h3>Soluciones en</h3>
        <h2>integración de productos</h2>
      </div>
      <div class="icons-box">
        <div class="row">
          <div class="col-lg-4">
            <div class="icon-text-box">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/data.png">
              </div>
              <div class="text">
                <h3>Lorem ipsum</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="icon-text-box">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/tv.png">
              </div>
              <div class="text">
                <h3>Lorem ipsum</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="icon-text-box">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/server.png">
              </div>
              <div class="text">
                <h3>Lorem ipsum</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="solutions-methodologies">
    <div class="title">
      <h3>Soluciones en</h3>
      <h2>metodologías ITIL, PMP e ISO 9000</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi, amet consectetur adipiscing</p>
    </div>
    <div class="container">
      <div class="solutions-slider">
        <div class="solution-item">
          <img src="https://masters.engin.umich.edu/wp-content/uploads/2020/08/ISD-manufacturing-what-you-can-do-314-300x300.jpg">
          <div class="solution-item-text">
            <div class="solution-title custom-collapse">
              <h4>Lorem ipsum</h4>
              <img class="custom-collapse" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow_down.svg">
            </div>
            <p class="content-initial">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
          </div>
        </div>
        <div class="solution-item">
          <img src="https://masters.engin.umich.edu/wp-content/uploads/2020/08/ISD-manufacturing-what-you-can-do-314-300x300.jpg">
          <div class="solution-item-text">
            <div class="solution-title custom-collapse">
              <h4>Lorem ipsum</h4>
              <img class="custom-collapse" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow_down.svg">
            </div>
            <p class="content-initial">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
          </div>
        </div>
        <div class="solution-item">
          <img src="https://masters.engin.umich.edu/wp-content/uploads/2020/08/ISD-manufacturing-what-you-can-do-314-300x300.jpg">
          <div class="solution-item-text">
            <div class="solution-title custom-collapse">
              <h4>Lorem ipsum</h4>
              <img class="custom-collapse" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow_down.svg">
            </div>
            <p class="content-initial">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
          </div>
        </div>
        <div class="solution-item">
          <img src="https://masters.engin.umich.edu/wp-content/uploads/2020/08/ISD-manufacturing-what-you-can-do-314-300x300.jpg">
          <div class="solution-item-text">
            <div class="solution-title custom-collapse">
              <h4>Lorem ipsum</h4>
              <img class="custom-collapse" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow_down.svg">
            </div>
            <p class="content-initial">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="solutions-process">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="process-text">
            <div class="side-title">
              <h3>Conoce nuestros</h3>
              <h2>Procesos</h2>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a class="white-hiperlink" href="about.html">
              Nuestro equipo
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow.svg">
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="process-img" style="background-image: url(https://images.unsplash.com/photo-1577375729152-4c8b5fcda381?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=80);">
            <img class="play-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/play.svg">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>

<script>
  $('.custom-collapse').click(function() {
    const that = $(this)
    const content = $(this).next()
    const initialClass = "content-initial"

    if (content.hasClass(initialClass)) {
      content.removeClass(initialClass, 300)
      that.find("img").css("transform", "rotate(-180deg)")
    } else {
      content.addClass(initialClass, 300)
      that.find("img").css("transform", "rotate(0deg)")
    }
  })
</script>