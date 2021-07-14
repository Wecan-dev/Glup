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
  <section class="main-jobs">
    <div class="container">
      <div class="jobs-grid">
        <div class="jobs-img">
          <img src="<?php echo get_theme_mod('jobs_imagen_principal'); ?>">
        </div>
        <div class="jobs-tabs-box">
          <div class="jobs-tabs">
            <ul class="nav nav-tabs" id="cotization">
              <li class="nav-item">
                <a aria-controls="perfil" aria-selected="true" class="nav-link active" data-toggle="tab" href="#perfil" id="perfil-tab" role="tab"><?php echo get_theme_mod('jobs_perfil'); ?></a>
              </li>
              <li class="nav-item">
                <a aria-controls="experiencia" aria-selected="false" class="nav-link" data-toggle="tab" href="#experiencia" id="experiencia-tab" role="tab"><?php echo get_theme_mod('jobs_experiencia_main_title'); ?></a>
              </li>
              <li class="nav-item">
                <a aria-controls="requisitos" aria-selected="false" class="nav-link" data-toggle="tab" href="#requisitos" id="requisitos-tab" role="tab"><?php echo get_theme_mod('jobs_requisitos_main_title'); ?></a>
              </li>
            </ul>
            <div class="tab-content" id="cotizationContent">
              <div aria-labelledby="perfil-tab" class="tab-pane fade show active" id="perfil" role="tabpanel">
                <div class="job-position">
                  <h2><?php echo get_theme_mod('jobs_perfil_titulo'); ?></h2>
                  <h3><?php echo get_theme_mod('jobs_perfil_subtitulo'); ?></h3>
                </div>
                <ul class="icons">
                  <li>
                    <img src="<?php echo get_theme_mod('jobs_perfil_icono_1'); ?>">
                  </li>
                  <li>
                    <img src="<?php echo get_theme_mod('jobs_perfil_icono_2'); ?>">
                  </li>
                </ul>
                <div class="job-description">
                  <p><?php echo get_theme_mod('jobs_perfil_parrafo'); ?></p>
                  <p>
                    <span><?php echo get_theme_mod('jobs_perfil_subtitulo_item'); ?></span>
                  </p>
                  <ul>
                    <li><?php echo get_theme_mod('jobs_perfil_item_1'); ?></li>
                    <li><?php echo get_theme_mod('jobs_perfil_item_2'); ?></li>
                    <li><?php echo get_theme_mod('jobs_perfil_item_3'); ?></li>
                  </ul>
                </div>
              </div>
              <div aria-labelledby="experiencia-tab" class="tab-pane fade" id="experiencia" role="tabpanel">
                <div class="job-position">
                  <h2><?php echo get_theme_mod('jobs_experiencia_titulo'); ?></h2>
                  <h3><?php echo get_theme_mod('jobs_experiencia_subtitulo'); ?></h3>
                </div>
                <ul class="icons">
                  <li>
                    <img src="<?php echo get_theme_mod('jobs_experiencia_icono_1'); ?>">
                  </li>
                  <li>
                    <img src="<?php echo get_theme_mod('jobs_experiencia_icono_2'); ?>">
                  </li>
                </ul>
                <div class="job-description">
                  <p><?php echo get_theme_mod('jobs_experiencia_parrafo'); ?></p>
                  <p>
                    <span><?php echo get_theme_mod('jobs_experiencia_subtitulo_item'); ?></span>
                  </p>
                  <ul>
                    <li><?php echo get_theme_mod('jobs_experiencia_item_1'); ?></li>
                    <li><?php echo get_theme_mod('jobs_experiencia_item_2'); ?></li>
                    <li><?php echo get_theme_mod('jobs_experiencia_item_3'); ?></li>
                  </ul>
                </div>
              </div>
              <div aria-labelledby="requisitos-tab" class="tab-pane fade" id="requisitos" role="tabpanel">
                <div class="job-position">
                  <h2><?php echo get_theme_mod('jobs_requisitos_titulo'); ?></h2>
                  <h3><?php echo get_theme_mod('jobs_requisitos_subtitulo'); ?></h3>
                </div>
                <ul class="icons">
                  <li>
                    <img src="<?php echo get_theme_mod('jobs_requisitos_icono_1'); ?>">
                  </li>
                  <li>
                    <img src="<?php echo get_theme_mod('jobs_requisitos_icono_2'); ?>">
                  </li>
                </ul>
                <div class="job-description">
                  <p><?php echo  get_theme_mod('jobs_requisitos_parrafo'); ?></p>
                  <p>
                    <span><?php echo get_theme_mod('jobs_requisitos_subtitulo_item'); ?></span>
                  </p>
                  <ul>
                      
                    <li><?php echo get_theme_mod('jobs_requisitos_item_1'); ?></li>
                    <li><?php echo get_theme_mod('jobs_requisitos_item_2'); ?></li>
                    <li><?php echo get_theme_mod('jobs_requisitos_item_3'); ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main-jobs-contact bg-lightgray">
    <div class="svg-element">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections-2.svg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections.svg">
    </div>
    <div class="contact-form">
      <p>Envíanos tu hoja de vida, cuéntanos sobre lo que te motiva para ser parte de nuestro equipo de trabajo. </p>
     <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
    </div>
  </section>
 <?php get_footer(); ?>