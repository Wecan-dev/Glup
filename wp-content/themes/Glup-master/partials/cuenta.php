<section class="cta">
    <img alt="Linked in logo" class="cta-img" src="<?php echo get_theme_mod('prenavbar2_image'); ?>">
    <p><?php echo get_theme_mod('texto_red_social'); ?></p>
    <?php if (get_theme_mod('boton_red_social_texto') != NULL){?>  
    <a class="btn btn-custom light small" href="<?php echo get_theme_mod('boton_red_social_url'); ?>"> <?php echo get_theme_mod('boton_red_social_texto'); ?></a>
             <?php }
         ?>
  </section>
  <section id="cotiza" class="main-cotization bg-lightgray">
    <div class="title">
      <h2><?php echo get_theme_mod('cotizacion_title'); ?></h2>
      <p><?php echo get_theme_mod('cotizacion_subtitle'); ?></p>
    </div>
    <div class="row cotization-grid">
      <div class="col-lg-6">
        <div class="cotization-img">
          <img src="<?php echo get_theme_mod('cotizacion_image_1'); ?>">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cotization-form">
          <ul class="nav nav-tabs" id="cotization">
            <li class="nav-item">
              <a aria-controls="productA" aria-selected="true" class="nav-link active" data-toggle="tab" href="#productA" id="productA-tab" role="tab"><?php echo get_theme_mod('producto_title'); ?></a>
            </li>
            <li class="nav-item">
              <a aria-controls="productB" aria-selected="false" class="nav-link" data-toggle="tab" href="#productB" id="productB-tab" role="tab"><?php echo get_theme_mod('productob_title'); ?></a>
            </li>
            <li class="nav-item">
              <a aria-controls="productC" aria-selected="false" class="nav-link" data-toggle="tab" href="#productC" id="productC-tab" role="tab"><?php echo get_theme_mod('productoc_title'); ?></a>
            </li>
          </ul>
          <div class="tab-content" id="cotizationContent">
            <div aria-labelledby="productA-tab" class="tab-pane fade show active" id="productA" role="tabpanel">
              <p class="mb-3"><?php echo get_theme_mod('producto_subtitle'); ?></p>
              <form>
                
                  
                 <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 4, 'title' => false, 'description' => false ) ); ?>
                  
                 
              </form>
            </div>
            <div aria-labelledby="productB-tab" class="tab-pane fade" id="productB" role="tabpanel">
              <p class="mb-3"><?php echo get_theme_mod('productob_subtitle'); ?></p>
              <form>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/user.png">
                        </span>
                      </div>
                      <input class="form-control" placeholder="Nombre" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.png">
                        </span>
                      </div>
                      <input class="form-control" placeholder="Teléfono" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/envelope.png">
                        </span>
                      </div>
                      <input class="form-control" placeholder="Correo" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/multimedia-option.png">
                        </span>
                      </div>
                      <input class="form-control" placeholder="Adjunto" type="text">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text align-items-start">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/draw.png">
                        </span>
                      </div>
                      <textarea class="form-control" placeholder="Mensaje" type="text"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="text-center">
                      <button class="btn btn-custom secondary radius-8" type="submit">Enviar</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div aria-labelledby="productC-tab" class="tab-pane fade" id="productC" role="tabpanel">
              <p class="mb-3"><?php echo get_theme_mod('productoc_subtitle'); ?></p>
              <form>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/user.png">
                        </span>
                      </div>
                      <input class="form-control" placeholder="Nombre" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.png">
                        </span>
                      </div>
                      <input class="form-control" placeholder="Teléfono" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/envelope.png">
                        </span>
                      </div>
                      <input class="form-control" placeholder="Correo" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/multimedia-option.png">
                        </span>
                      </div>
                      <input class="form-control" placeholder="Adjunto" type="text">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text align-items-start">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/draw.png">
                        </span>
                      </div>
                      <textarea class="form-control" placeholder="Mensaje" type="text"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="text-center">
                      <button class="btn btn-custom secondary radius-8" type="submit">Enviar</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>