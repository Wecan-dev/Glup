<?php get_header(); ?>
<?php $loop = new WP_Query( 'post_type=banner&categorias_banner=apps&posts_per_page=-1' ); ?>
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
      <img src="<?php echo get_theme_mod('logos_1'); ?>">
      <img src="<?php echo get_theme_mod('logos_2'); ?>">
      <img src="<?php echo get_theme_mod('logos_3'); ?>">
    </div>
    
    <div class="row">
       <?php $args = array( 'post_type' => 'soluciones_card', 'posts_per_page' => '3' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-lg-4">
        <div class="solution-card">
           <img src="<?php echo get_the_post_thumbnail_url(); ?>">
           <div class="solution-card-text">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
            <a class="btn-custom secondary" href="<?php the_field('soluciones_card_url'); ?>"><?php the_field('soluciones_card_texto'); ?></a>
          </div>
        </div>
      </div>
       <?php endwhile; ?>
      
    </div>
  </section>
  <section class="apps-solutions bg-lightgray">
    <div class="svg-element">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections-2.svg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections.svg">
    </div>
    <div class="container">
      <div class="title">
        <h3><?php echo get_theme_mod('integracion_producto_subtitle'); ?></h3>
        <h2><?php echo get_theme_mod('integracion_producto_title'); ?></h2>
      </div>
      <div class="icons-box">
        <div class="row">
          <div class="col-lg-4">
            <div class="icon-text-box">
              <div class="icon">
                <img src="<?php echo get_theme_mod('integracion_producto_image_1'); ?>">
              </div>
              <div class="text">
                <h3><?php echo get_theme_mod('integracion_producto_title_img_1'); ?></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="icon-text-box">
              <div class="icon">
                <img src="<?php echo get_theme_mod('integracion_producto_image_2'); ?>">
              </div>
              <div class="text">
                <h3><?php echo get_theme_mod('integracion_producto_title_img_2'); ?></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="icon-text-box">
              <div class="icon">
                <img src="<?php echo get_theme_mod('integracion_producto_image_3'); ?>">
              </div>
              <div class="text">
                <h3><?php echo get_theme_mod('integracion_producto_title_img_3'); ?></h3>
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
      <?php $args = array( 'post_type' => 'metodologias' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="solution-item">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="solution-item-text">
            <div class="solution-title custom-collapse">
              <h4><?php the_title(); ?></h4>
              <img class="custom-collapse" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow_down.svg">
            </div>
            <p class="content-initial"><?php the_content(); ?></p>
          </div>
        </div>
         <?php endwhile; ?>

        
      </div>
    </div>
  </section>
  <section class="solutions-process">
    <div class="container">
      <div class="row">
         <?php $args = array( 'post_type' => 'procesos' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-6">
          <div class="process-text">
            <div class="side-title">
               <h3><?php the_title() ?></h3>
                <h2><?php the_field('procesos_subtitle'); ?></h2>
            </div>
            <p><?php the_content() ?></p>
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
    <?php endwhile; ?>
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