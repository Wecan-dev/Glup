<?php get_header(); ?>

  <div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/page-header-about.jpg)">
    <div class="container">
      <div class="page-header-content">
        <h1>Acerca de Nosotros</h1>
        <p>Disfrutamos lo que hacemos y transmitimos intensidad técnica en todas nuestras actividades. Conoce más de nosotros y de nuestro trabajo. </p>
      </div>
    </div>
  </div>
  <section class="main-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-text">
            <div class="side-title">
              <h3>Acerca de</h3>
              <h2>Nosotros</h2>
            </div>
            <p>GLUP es una compañía colombiana fundada en el año 2009 por un grupo de expertos consultores asociados que buscan ofrecer las mejores alternativas para las compañías que requieren estar a la vanguardia tecnológica, obteniendo soluciones informáticas de valor para el beneficio de sus negocios. Atendiendo las múltiples demandas de soluciones informáticas del mundo digital y para que las empresas se enfoquen en hacer crecer sus negocios, nace GLUP para convertirse en el socio tecnológico de nuestros clientes ofreciendo servicios de  licenciamiento, consultoría, soporte y administración TI, para apoyar la implementación de sus proyectos alineados con los presupuestos financieros, calidad y tiempo exigidos por el mundo de hoy. GLUP es una compañía organizada en torno a procesos y calidad, siendo sus pilares el desarrollo de talentos internos y su relación con fabricantes y clientes</p>
           
            <div class="about-buttons">
              <a class="hiperlink" href="#Equipo">
                Nuestro equipo
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
              <a class="hiperlink" href="<?php bloginfo('url');?>/trabaja-con-nosotros">
                Vacantes
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/small_arrow_blue.svg">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-img">
            <img src="http://159.89.229.55/Glup/wp-content/uploads/2021/05/Team1.jpg">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main-team bg-lightgray" id="Equipo">
    <div class="svg-element">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections-2.svg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connections.svg">
    </div>
    <div class="container">
      <div class="title">
        <h2>Equipo de Trabajo</h2>
        <p>Nuestro equipo esta conformado por personas motivadas y con pasión técnica, enfocadas en dar lo mejor a nuestros clientes a partir del conocimiento y experiencia que construimos en equipo día a día. </p>
      </div>
      <div class="main-team-slider">
        <div class="main-team-item">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80">
          <div class="item-data">
            <div class="team-name">Harold Ordoñez y Javier Mejía</div>
            <div class="team-job">Fundadores - Dirección</div>
          </div>
        </div>
        <div class="main-team-item">
          <img src="https://images.unsplash.com/photo-1489980557514-251d61e3eeb6?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
          <div class="item-data">
            <div class="team-name">Team CDS</div>
            <div class="team-job">Soporte y Consultoría Cloud e Infraestructura On-Premises</div>
          </div>
        </div>
        <div class="main-team-item">
          <img src="https://www.lightstalking.com/wp-content/uploads/stefan-stefancik-QXevDflbl8A-unsplash-1024x1534.jpg">
          <div class="item-data">
            <div class="team-name">Team Solutions Factory</div>
            <div class="team-job">Consultoría y Desarrollo Power Platform</div>
          </div>
        </div>
 
        <div class="main-team-item">
          <img src="https://images.unsplash.com/photo-1489980557514-251d61e3eeb6?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
          <div class="item-data">
            <div class="team-name">Team Cybersecurity</div>
            <div class="team-job">Consultoría y Operación Seguridad y Gobierno Cloud</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
