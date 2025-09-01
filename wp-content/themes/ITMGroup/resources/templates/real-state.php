<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/* 
  Template Name: real-state
  */

get_header();

?>
<section id="real-state">
  <div style="height: 235px;"></div>
  <section id="vanguardia">

    <div class="content d-flex align-center justify-center">
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/VANGUARDIA.png" alt="vanguardia logo" width="100%" height="100%" class="vanguardia-logo wow fadeInUp" />
    </div>
    <div class="content d-flex align-center justify-center real-state-top-description">

      <?php if(Lang\getLang() == 'en'){ ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          Welcome to a one of a kind project in Puerto Morelos: <br>
          <b>Vanguardia Residences.</b>
        </p>
      <?php } else { ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          Bienvenidos a un proyecto único en Puerto Morelos: <br>
          <b>Vanguardia Residences.</b>
        </p>
      <?php } ?>
    </div>
    <div class="content d-flex align-center justify-center">
      <div class="vanguardia-place-container  d-flex align-center justify-center">

        <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/vanguardia/VANGUARDIA-MONTAJE-01.jpg" alt="vanguardia place" width="100%" height="100%" class="vanguardia-place wow fadeInUp" />
      </div>
    </div>
    <div class="content d-flex align-center justify-center real-state-bottom-description">


      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        <?php if(Lang\getLang() == 'en'){ ?>
          Vanguardia Residences gives community a new meaning. Commercial area, sport amenities, Wellness Center are a part of what the project has to offer.
        <?php } else { ?>
          Vanguardia Residences es un club residencial que da un giro al significado de comunidad. Zona comercial, amenidades deportivas, wellness center son tan solo algunas de las amenidades que sus habitantes podrán disfrutar.
        <?php } ?>
      </p>

      <p class="blue-text wow fadeInUp" data-wow-delay='0.3s'>
        <?php if(Lang\getLang() == 'en'){ ?>
          By preserving <b>60% of green areas</b>, Vanguardia highlights its vibrant surroundings and privileged location to create an unparalleled space in harmony with the Mexican Caribbean environment.
        <?php } else { ?>
          Conservando el <b>60% de áreas verdes</b>, Vanguardia aprovecha su vibrante entorno y ubicación privilegiada para crear un espacio sin precedentes en armonía con el ambiente del Caribe Mexicano.
        <?php } ?>
      </p>
    </div>

    <div class="content images">
      <?php
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'paddle-img',
        'img' => 'real-state/REAL-ESTATE_VANGUARDIA_ITM-GROUP_15.jpg',
        'alt' => (Lang\getLang() == 'en') ? 'Paddle Courts' : 'Paddle',
        'title' => (Lang\getLang() == 'en') ? 'Paddle Courts' : 'Canchas de <br/> Paddle',
        'delay' => '0.2s'
      ));
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'living-room-img',
        'img' => 'real-state/REAL-ESTATE_VANGUARDIA_ITM-GROUP_17.jpg',
        'alt' => 'living-room',
        'title' => (Lang\getLang() == 'en') ? 'Apartments' : 'Sala',
        'delay' => '0.4s'
      ));

      ?>
      <div class="content">
        <?php
        get_template_part('/components/shareProjectLink', null, array(
          'href' => 'https://vanguardiaresidences.com/',
          'alt' => 'Go to Vanguardia',
        ));
        ?>
      </div>
    </div>
  </section>
  <div class="real-state-divider">

  </div>
  <section id="aldea-umm">

    <div class="content d-flex align-center justify-center">
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/ALDEA UMM.png" alt="Aldea UMM logo" class="aldea-umm-logo wow fadeInUp" width="100%" height="100%" />
    </div>
    <div class="content d-flex align-center justify-center real-state-top-description">
      <?php if(Lang\getLang() == 'en'){ ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          A project like no other! Where luxury, nature, and peace surround you in every corner. Aldea Umm is formed by residential lots in Puerto Morelos. 
        </p>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
          With amenities that invite you to connect with your senses and enjoy natural views, Aldea Umm is everything you need to build the home of your dreams.
        </p>
      <?php } else { ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          ¡Un proyecto espectacular! Donde el lujo, la naturaleza y la tranquilidad están en cada rincón, Aldea Umm es un proyecto de lotes residenciales en Puerto Morelos.
        </p>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
          Con amenidades que te invitan a conectar con tus sentidos y disfrutar de vistas naturales, Aldea Umm es todo lo que necesitabas para construir la casa de tus sueños.
        </p>
      <?php } ?>
    </div>
    <div class="content d-flex align-center justify-center">
      <div class="aldea-umm-place-container  d-flex align-center justify-center">

        <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/REALESTATE_ALDEA_ITM-GROUP_6.jpg" alt="aldea umm place" width="100%" height="100%" class="aldea-umm-place wow fadeInUp" />
      </div>
    </div>
    <div class="content d-flex align-center justify-center real-state-bottom-description">
      <p class="blue-text aldea-umm-bottom-text wow fadeInUp" data-wow-delay='0.2s'>
        <?php if(Lang\getLang() == 'en'){ ?>
          <b class="ff-baskerville">INVEST TODAY,</b>
          <span class="ff-baskerville-italic"> BUILD TODAY </span>
        <?php } else { ?>
          <b class="ff-baskerville">Invierte Hoy,</b>
          <span class="ff-baskerville-italic"> Construye Hoy </span>
        <?php } ?>
      </p>
    </div>

    <div class="content unset-content images">
      <?php
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'aldea-umm-pool-img',
        'img' => 'real-state/REALESTATE_ALDEA_ITM-GROUP_4.jpg',
        'alt' => (Lang\getLang() == 'en') ? 'Pool Aldea Umm' : 'Alberca Aldea Umm',
        'title' => (Lang\getLang() == 'en') ? 'Pool' : 'Casa club <br/> con Alberca',
        'delay' => '0.2s'
      ));
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'aldea-umm-sport-field-img',
        'img' => 'real-state/REALESTATE_ALDEA_ITM-GROUP_5.jpg',
        'alt' => (Lang\getLang() == 'en') ? 'Sport court' : 'Cancha deportiva',
        'title' => (Lang\getLang() == 'en') ? 'Sport <br/> courts' : 'Cancha <br/> Deportiva',
        'delay' => '0.4s'
      ));
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'aldea-umm-access-control-img',
        'img' => 'real-state/REALESTATE_ALDEA_ITM-GROUP_7.jpg',
        'alt' => (Lang\getLang() == 'en') ? 'Controlled access Controlado' : 'Acceso Controlado',
        'title' => (Lang\getLang() == 'en') ? 'Controlled access <br/> Controlado' : 'Acceso <br/> Controlado',
        'delay' => '0.6s'
      ));

      ?>
      <div class="content">
        <?php
        get_template_part('/components/shareProjectLink', null, array(
          'href' => 'https://aldeaumm.com/',
          'alt' => 'Go to Aldea Umm',
        ));
        ?>
      </div>
    </div>
  </section>
  <div class="real-state-divider">

  </div>
  <section id="alborada">

    <div class="content d-flex align-center justify-center">
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/alborada/350x100_logo1.png" alt="Alborada logo" class="alborada-logo wow fadeInUp" width="100%" height="100%" />
    </div>
    <div class="content d-flex align-center justify-center real-state-top-description">

      <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
        <?php if(Lang\getLang() == 'en'){ ?>
          Following the success of Alborada, comes Alborada Condos, apartments in Puerto Morelos ideal for investment and living. Located minutes away from the majestic beach of the destination, this project offers the opportunity not only to enjoy, but also a safe return on investment.          
        <?php } else { ?>
          Ante el éxito de Alborada, llega Alborada Condos, departamentos en Puerto Morelos ideales para invertir y vivir. Ubicados a minutos de la majestuosa de playa del destino y todos los servicios necesarios, este proyecto brinda a sus habitantes la oportunidad no solo de disfrutar, sino también de un retorno de inversión seguro.
        <?php } ?>
      </p>
    </div>
    <div class="content d-flex align-center justify-center">
      <div class="alborada-place-container  d-flex align-center justify-center">

        <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/alborada/ALBORADA_REAL-ESTATE_FACHADA.jpg" alt="alborada place" width="100%" height="100%" class="alborada-place wow fadeInUp" />
      </div>
    </div>
    <div class="content d-flex align-center justify-center real-state-bottom-description">

      <?php if(Lang\getLang() == 'en'){ ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          In Alborada Condos, residents will find amenities such as outdoor gym, swimming pools, gardens for the whole family and covered parking.
        </p>
      <?php } else { ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          En Alborada Condos, sus habitantes encontrarán amenidades como gimnasio al aire libre, albercas, jardines para toda la familia y estacionamiento techado. 
          </b>
        </p>
      <?php } ?>
    </div>

    <div class="content images">
      <?php
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'alborada-bed-img',
        'img' => 'real-state/alborada/REALESTATE_ALBORADA_ITM-GROUP_10.jpg',
        'alt' => 'Alborada bedroom',
        'delay' => '0.2s'
      ));
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'alborada-pool-img',
        'img' => 'real-state/alborada/REALESTATE_ALBORADA_ITM-GROUP_8.jpg',
        'alt' => 'Alborada pool',
        'delay' => '0.4s'
      ));
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'alborada-condos-img',
        'img' => 'real-state/alborada/REALESTATE_ALBORADA_ITM-GROUP_9.jpg',
        'alt' => 'Alborada condos',
        'delay' => '0.6s'
      ));

      ?>
      <div class="content">
        <?php
        get_template_part('/components/shareProjectLink', null, array(
          'href' => 'https://alboradacondos.com.mx/',
          'alt' => 'Go to Alborada condos',
        ));
        ?>
      </div>
    </div>
  </section>
  <div class="real-state-divider">

  </div>
  <section id="ku-mahahual">

    <div class="content d-flex align-center justify-center">
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/ku-mahahual/KU MAHAHUAL.png" alt="Ku Mahahual logo" class="ku-mahahual-logo wow fadeInUp" width="100%" height="100%" />
    </div>
    <div class="content d-flex align-center justify-center real-state-top-description">
      <?php if(Lang\getLang() == 'en'){ ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          An atmosphere of peace in an environment surrounded by greenery... that's what living in Mahahual feels like.
        </p>
      <?php } else { ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          Una atmósfera de paz en un entorno rodeado de vegetación… así es vivir en Mahahual
        </p>
      <?php } ?>
    </div>
    <div class="content d-flex align-center justify-center">
      <div class="ku-mahahual-place-container  d-flex align-center justify-center">

        <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/ku-mahahual/REALESTATE_KU_ITM-GROUP_1.jpg" alt="Ku Mahahual place" width="100%" height="100%" class="ku-mahahual-place wow fadeInUp" />
      </div>
    </div>
    <div class="content d-flex align-center justify-center real-state-bottom-description">
      <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
        <?php if(Lang\getLang() == 'en'){ ?>
          Ku Mahahual, consists of residential lots with exclusive benefits for its residents. Located in the great Costa Maya, Ku Mahahual is a fantastic option for those looking to disconnect and live in the Caribbean. 
        <?php } else { ?>
          Nuestro proyecto residencial, Ku Mahahual, consiste en lotes residenciales con beneficios exclusivos para sus residentes. Ubicado en la gran Costa Maya, Ku Mahahual es una fantástica opción para aquellos que buscan desconectarse y vivir en el Caribe. 
        <?php } ?>
        </b>
      </p>
    </div>

    <div class="content images">
      <?php
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'ku-mahahual-park-img',
        'img' => 'real-state/ku-mahahual/REALESTATE_KU_ITM-GROUP_3.jpg',
        'alt' => 'Ku mahahual Parque Mayá',
        'title' => (Lang\getLang() == 'en') ? 'Balance in one place' : 'El equilibrio en un solo lugar',
        'delay' => '0.2s'
      ));
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'ku-mahahual-birds-img',
        'img' => 'real-state/ku-mahahual/REALESTATE_KU_ITM-GROUP_2.jpg',
        'alt' => 'Aviario',
        'title' => (Lang\getLang() == 'en') ? 'Live in the hidden jewel of the Costa Maya' : 'Vive en la joya escondida de la Costa Maya',
        'delay' => '0.4s'
      ));

      ?>
      <div class="content">
        <?php
        get_template_part('/components/shareProjectLink', null, array(
          'href' => 'https://kumahahual.com/',
          'alt' => 'Go to Mahahual',
        ));
        ?>
      </div>
    </div>
  </section>

  <div class="real-state-divider">

  </div>
  <section id="h-living">

    <div class="content d-flex align-center justify-center">
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/h-living/H LIVING.png" alt="H Living logo" class="h-living-logo wow fadeInUp" width="100%" height="100%" />
    </div>
    <div class="content d-flex align-center justify-center real-state-top-description">

      <?php if(Lang\getLang() == 'en'){ ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          Our first residential project in Cancun. H Living brings together elements of traditional architecture and fuses it with a contemporary style.  A project that provides amenities carefully selected for the needs of its community. 
        </p>
      <?php } else { ?>
        <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
          Nuestro primer proyecto residencial en Cancún. H Living reúne elementos de la arquitectura tradicional y lo fusiona con un estilo contemporáneo.  Un proyecto que brinda amenidades cuidadosamente seleccionadas para las necesidades de sus habitantes. 
        </p>
      <?php } ?>
    </div>
    <div class="content d-flex align-center justify-center">
      <div class="h-living-place-container  d-flex align-center justify-center">

        <img mnr-src="<?= get_template_directory_uri(); ?>/assets/real-state/h-living/REAL-ESTATE_H-LIVING_ITM-GROUP_14.jpg" alt="H Living place" width="100%" height="100%" class="h-living-place wow fadeInUp" />
      </div>
    </div>
    <div class="content d-flex align-center justify-center real-state-bottom-description">
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        <?php if(Lang\getLang() == 'en'){ ?>
          Coworking, rooftop, elevators, gym and a privileged location in the heart of Cancun's most popular avenue, H Living is a fresh project, ideal for those who wish to live in Mexico's most fun destination.
        <?php } else { ?>
          Coworking, rooftop, elevadores, gym y una ubicación privilegiada en el corazón de la avenida más popular de Cancún, H Living es un proyecto contemporáneo y fresco, ideal para aquellos que desean vivir en el destino turístico más divertido de México.
        <?php } ?>
      </p>
    </div>

    <div class="content unset-content images">
      <?php
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'h-living-bedroom-img',
        'img' => 'real-state/h-living/REAL-ESTATE_H-LIVING_ITM-GROUP_11.jpg',
        'alt' => 'H Living bedroom',
        'title' => (Lang\getLang() == 'en') ? '2 bedrooms' : '2 Recámaras',
        'delay' => '0.2s'
      ));
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'h-living-dinning-room-img',
        'img' => 'real-state/h-living/REAL-ESTATE_H-LIVING_ITM-GROUP_12.jpg',
        'alt' => 'H Living dinning room',
        'title' => (Lang\getLang() == 'en') ? 'Dining room <br/> and kitchen' : 'Comedor y <br/> Cocina',
        'delay' => '0.4s'
      ));
      get_template_part('/components/cardHoverAnimated', null, array(
        'id' => 'h-living-lounge-img',
        'img' => 'real-state/h-living/REAL-ESTATE_H-LIVING_ITM-GROUP_13.jpg',
        'alt' => (Lang\getLang() == 'en') ? 'Lounge room' : 'Sala',
        'title' => (Lang\getLang() == 'en') ? 'Lounge room' : 'Sala',
        'delay' => '0.6s'
      ));

      ?>
      <div class="content">
        <?php
        get_template_part('/components/shareProjectLink', null, array(
          'href' => 'https://hliving.mx/',
          'alt' => 'Go to H Living',
        ));
        ?>
      </div>
    </div>
  </section>
  <?php
  get_template_part('/components/realStateOthers');
  ?>

</section>


<?php
get_footer();
?>

<style type="text/css">
  #menu {
    background-color: var(--azulClaro);
  }

  .real-state-top-description {
    padding: 80px 0;
  }

  .real-state-bottom-description {
    padding: 60px 0;
  }

  .real-state-top-description p,
  .real-state-bottom-description p {
    padding: 8px 0;
  }

  .real-state-divider {
    height: 5px;
    width: 100%;
    margin: 50px 0
  }

  @media screen and (max-width:900px) {
    .real-state-top-description {
      padding: 60px 0;
    }

    .real-state-bottom-description {
      padding: 50px 0;
    }

    .real-state-divider {
      height: 4px;
    }
  }

  @media screen and (max-width:600px) {
    .real-state-top-description {
      padding: 50px 0;
    }

    .real-state-bottom-description {
      padding: 40px 0;
    }


    .real-state-divider {
      height: 3px;
    }
  }

  @media screen and (max-width:500px) {
    .real-state-top-description {
      padding: 30px 0;
    }

    .real-state-bottom-description {
      padding: 20px 0;
    }
  }

  div>.alborada-logo {
    height: 135px;
    overflow: hidden;
  }

  .alborada-logo {
    width: 40vw;
    max-width: 500px;
    object-fit: contain;
  }

  div>.h-living-logo {
    height: 160px;
    overflow: hidden;
  }

  .h-living-logo {
    width: 40vw;
    max-width: 140px;
    object-fit: cover;
  }

  .alborada-place-container {
    /* max-width: 1100px;
    width: 85vw;
    height: 62vw;
    max-height: 600px; */
  }

  .aldea-umm-logo {
    width: 36vw;
    max-width: 355px;
  }

  .aldea-umm-bottom-text {
    font-size: 4rem;
  }

  @media screen and (max-width: 800px) {
    .aldea-umm-bottom-text {
      font-size: 3.5rem;
    }
  }

  @media screen and (max-width: 600px) {
    .aldea-umm-bottom-text {
      font-size: 3rem;
    }
  }

  .vanguardia-logo {
    width: 60vw;
    max-width: 610px;
  }

  .ku-mahahual-logo {
    width: 60vw;
    max-width: 550px;
  }

  .ku-mahahual-place-container,
  .h-living-place-container,
  .vanguardia-place-container,
  .aldea-umm-place-container {
    /* max-width: 1100px;
    width: 85vw;
    height: 62vw;
    max-height: 750px; */
  }

  .h-living-place {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  .vanguardia-place,
  .aldea-umm-place {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }


  .images {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .images #paddle-img.hoverAnimated.card,
  .images #living-room-img.hoverAnimated.card,
  .images #ku-mahahual-park-img.hoverAnimated.card,
  .images #ku-mahahual-birds-img.hoverAnimated.card {
    width: 50%
  }

  .images #alborada-bed-img.hoverAnimated.card,
  .images #alborada-pool-img.hoverAnimated.card,
  .images #alborada-condos-img.hoverAnimated.card {
    width: 33.33%;
    /*max-height: 350px;
    min-height: 100px;*/
  }

  .images #aldea-umm-pool-img.hoverAnimated.card,
  .images #aldea-umm-sport-field-img.hoverAnimated.card,
  .images #aldea-umm-access-control-img.hoverAnimated.card,
  .images #h-living-bedroom-img.hoverAnimated.card,
  .images #h-living-dinning-room-img.hoverAnimated.card,
  .images #h-living-lounge-img.hoverAnimated.card {
    width: 33.33%;
    max-height: 350px;
    min-height: 100px;
  }

  .images #aldea-umm-pool-img.hoverAnimated.card .title,
  .images #aldea-umm-sport-field-img.hoverAnimated.card .title,
  .images #aldea-umm-access-control-img.hoverAnimated.card .title,
  .images #h-living-bedroom-img.hoverAnimated.card .title,
  .images #h-living-dinning-room-img.hoverAnimated.card .title,
  .images #h-living-lounge-img.hoverAnimated.card .title {
    font-family: Nexa-Book;
    font-size: 28px;
  }

  @media screen and (max-width: 660px) {

    .images #aldea-umm-pool-img.hoverAnimated.card .title,
    .images #aldea-umm-sport-field-img.hoverAnimated.card .title,
    .images #aldea-umm-access-control-img.hoverAnimated.card .title,
    .images #h-living-bedroom-img.hoverAnimated.card .title,
    .images #h-living-dinning-room-img.hoverAnimated.card .title,
    .images #h-living-lounge-img.hoverAnimated.card .title {
      font-size: 26px;
    }
  }

  @media screen and (max-width: 600px) {

    .images #aldea-umm-pool-img.hoverAnimated.card,
    .images #aldea-umm-sport-field-img.hoverAnimated.card,
    .images #aldea-umm-access-control-img.hoverAnimated.card,
    .images #h-living-bedroom-img.hoverAnimated.card,
    .images #h-living-dinning-room-img.hoverAnimated.card,
    .images #h-living-lounge-img.hoverAnimated.card {
      width: 100%;
      max-height: 210px;
    }

  }
</style>