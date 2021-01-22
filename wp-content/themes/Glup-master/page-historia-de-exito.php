<?php get_header(); ?>
<?php $loop = new WP_Query( 'post_type=banner&categorias_banner=historias&posts_per_page=-1' ); ?>
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
    <?php $args = array( 'post_type' => 'galeria', 'posts_per_page' => '1' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="title">
      <h3>nuestros</h3>
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="main-clients-text">
      <p><?php the_content(); ?></p>
    </div>
    <?php if (get_field('clientes_img_item_1') != NULL){?>  
    <div class="main-clients-slider">
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_1'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <?php }
         ?> 
      <?php if (get_field('clientes_img_item_2') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_2'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <?php }
         ?> 
      <?php if (get_field('clientes_img_item_3') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_3'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <?php }
         ?> 
      <?php if (get_field('clientes_img_item_4') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_4'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <?php }
         ?> 
      <?php if (get_field('clientes_img_item_5') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_5'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <?php }
         ?> 
      <?php if (get_field('clientes_img_item_6') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_6'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <?php }
         ?> 
       <?php if (get_field('clientes_img_item_7') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_7'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
       <?php }
         ?> 
          <?php if (get_field('clientes_img_item_8') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_8'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
       <?php }
         ?> 
       <?php if (get_field('clientes_img_item_8') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_8'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
       <?php }
         ?> 
       <?php if (get_field('clientes_img_item_9') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_9'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
       <?php }
         ?> 
       <?php if (get_field('clientes_img_item_10') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_10'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
       <?php }
         ?> 
       <?php if (get_field('clientes_img_item_12') != NULL){?>  
      <div class="main-client-item">
        <?php $image = get_field('clientes_img_item_12'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
       <?php }
         ?> 
    </div>
    <?php endwhile; ?>
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
           <?php $args = array( 'post_type' => 'historia' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-story-item">
            <div class="story-item-img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
              <div class="story-item-badge"><?php the_field('ano'); ?></div>
            </div>
            <div class="story-item-text">
              <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
              <a class="hiperlink" href=" <?php the_field('historia_boton_url'); ?>">
                <?php the_field('historia_boton_texto'); ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
            </div>
          </div> 
           <?php endwhile; ?>
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