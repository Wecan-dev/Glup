<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'banner' , 'category_name' => 'jobs' ) ); ?>
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jobs.jpg">
        </div>
        <div class="jobs-tabs-box">
          <div class="jobs-tabs">
            <ul class="nav nav-tabs" id="cotization">
              <li class="nav-item">
                <a aria-controls="perfil" aria-selected="true" class="nav-link active" data-toggle="tab" href="#perfil" id="perfil-tab" role="tab">Perfil</a>
              </li>
              <li class="nav-item">
                <a aria-controls="experiencia" aria-selected="false" class="nav-link" data-toggle="tab" href="#experiencia" id="experiencia-tab" role="tab">Experiencia</a>
              </li>
              <li class="nav-item">
                <a aria-controls="requisitos" aria-selected="false" class="nav-link" data-toggle="tab" href="#requisitos" id="requisitos-tab" role="tab">Requisitos especiales</a>
              </li>
            </ul>
            <div class="tab-content" id="cotizationContent">
              <div aria-labelledby="perfil-tab" class="tab-pane fade show active" id="perfil" role="tabpanel">
                <div class="job-position">
                  <h2>Recepcionista</h2>
                  <h3>Bilingue</h3>
                </div>
                <ul class="icons">
                  <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/salario.png">
                  </li>
                  <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/horario.png">
                  </li>
                </ul>
                <div class="job-description">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever.Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever.</p>
                  <p>
                    <span>Lorem Ipsum is simply:</span>
                  </p>
                  <ul>
                    <li>Lorem Ipsum is simply</li>
                    <li>Lorem Ipsum is simply</li>
                    <li>Lorem Ipsum is simply</li>
                  </ul>
                </div>
              </div>
              <div aria-labelledby="experiencia-tab" class="tab-pane fade" id="experiencia" role="tabpanel">
                <div class="job-position">
                  <h2>Recepcionista</h2>
                  <h3>Bilingue</h3>
                </div>
                <ul class="icons">
                  <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/salario.png">
                  </li>
                  <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/horario.png">
                  </li>
                </ul>
                <div class="job-description">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever.Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever.</p>
                  <p>
                    <span>Lorem Ipsum is simply:</span>
                  </p>
                  <ul>
                    <li>Lorem Ipsum is simply</li>
                    <li>Lorem Ipsum is simply</li>
                    <li>Lorem Ipsum is simply</li>
                  </ul>
                </div>
              </div>
              <div aria-labelledby="requisitos-tab" class="tab-pane fade" id="requisitos" role="tabpanel">
                <div class="job-position">
                  <h2>Recepcionista</h2>
                  <h3>Bilingue</h3>
                </div>
                <ul class="icons">
                  <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/salario.png">
                  </li>
                  <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/horario.png">
                  </li>
                </ul>
                <div class="job-description">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever.Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever.</p>
                  <p>
                    <span>Lorem Ipsum is simply:</span>
                  </p>
                  <ul>
                    <li>Lorem Ipsum is simply</li>
                    <li>Lorem Ipsum is simply</li>
                    <li>Lorem Ipsum is simply</li>
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
      <p>Envíanos tu hoja de vida y cuéntanos por qué te gustaría hacer parte de nuestro equipo.</p>
      <form>
      <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
      </form>
    </div>
  </section>
 <?php get_footer(); ?>