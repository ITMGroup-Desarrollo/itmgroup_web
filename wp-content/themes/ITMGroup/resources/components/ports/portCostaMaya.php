<?php
define('LOGO_IMG', '/assets/ports/costa-maya/costa-maya-02.png');
define('PLACE_ONE_IMG', '/assets/ports/costa-maya/costa-maya-03.jpg');

define('CM_PARROTS_IMG', 'ports/costa-maya/costa-maya-04.jpg');
define('CM_PINK_PARTY_IMG', 'ports/costa-maya/costa-maya-05.jpg');

define('PLACE_TWO_IMG', '/assets/ports/costa-maya/costa-maya-06.jpg');

define('ATV_IMG', '/ports/costa-maya/costa-maya-07.jpg');
define('RUINS_IMG', '/ports/costa-maya/costa-maya-08.jpg');
define('SNORKEL_IMG', '/ports/costa-maya/costa-maya-09.jpg');
?>

<section id="costa-maya">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= LOGO_IMG ?>" alt="costa maya logo" width="100%" height="100%" class="costa-maya-logo wow fadeInUp" />
  </div>
  <div class="content d-flex align-center justify-center top-description">

    <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        A complete experience turned into a port, welcome to Costa Maya. With daily capacity to welcome up to 4 cruises, Costa Maya receives more than one million passengers and 300 cruises a year.
      <?php } else { ?>
        Una experiencia completa convertida en puerto, bienvenido a Costa Maya. Con capacidad para recibir hasta 4 cruceros al día, Costa Maya puede recibir más de un millón de pasajeros y 300 cruceros al año.
      <?php } ?>
    </p>
    <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        With facilities inspired by the Mayan culture of the destination, at Costa Maya you will find attractions for cruisers of all ages.
      <?php } else { ?>
        Con increíbles instalaciones inspiradas en la cultura maya del destino, en Costa Maya encontrarás atracciones para cruceristas de todas las edades.
      <?php } ?>
    </p>
  </div>
  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= PLACE_ONE_IMG ?>" alt="costa maya place" width="100%" height="100%" class="costa-maya-place wow fadeInUp bannerImg" />
  </div>
  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text traditions wow fadeInUp" data-wow-delay='0.2s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        Make new friends and find the magic in Costa Maya! Our experiences at port were created for visitors of all ages to enjoy! If you are looking to explore the beauty of the Mayan jungle, visit our Last-minute booth for extreme and fun experiences outside the port...See you soon!
      <?php } else { ?>
        ¡Haz nuevos amigos y encuentra la magia en Costa Maya! ¡Nuestras experiencias en el puerto fueron creadas para visitantes de todas las edades! Si lo que tú buscas es explorar la selva maya, visita nuestro Last-minute booth para experiencias extremas y divertidas fuera del puerto... ¡Nos vemos en Costa Maya! 
      <?php } ?>
    </p>
  </div>
  <div class="content images two-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'costa-maya-parrots-img',
      'img' => CM_PARROTS_IMG,
      'alt' => 'Parrots',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'costa-maya-party-img',
      'img' => CM_PINK_PARTY_IMG,
      'alt' => 'Party with pink light',
      'delay' => '0.4s'
    ));
    ?>
  </div>
  <div class="content d-flex align-center justify-center bottom-description">

    <p class="blue-text big-port-text wow fadeInUp" data-wow-delay='0.1s'>
      <b class="ff-baskerville">
        <?php if(Lang\getLang() == 'en'){ ?>
          A gem in the
        <?php } else { ?>
          La joya del
        <?php } ?>
      </b>
      <span class="ff-baskerville-italic">
        <?php if(Lang\getLang() == 'en'){ ?>
          Mexican Caribbean
        <?php } else { ?>
          Caribe Mexicano
        <?php } ?>
      </span>
    </p>
  </div>
  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= PLACE_TWO_IMG ?>" alt="costa maya place" width="100%" height="100%" class="costa-maya-place wow fadeInUp bannerImg" />
  </div>


  <div class="content unset-content images three-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'costa-maya-atv-img',
      'img' => ATV_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'ATV tour' : 'Tours ATV',
      'title' => (Lang\getLang() == 'en') ? 'ATV tour' : 'Tours en ATV',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'costa-maya-ruins-img',
      'img' => RUINS_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Chacchoben ruins' : 'Ruinas de Chacchoben',
      'title' => (Lang\getLang() == 'en') ? 'Chacchoben ruins' : 'Ruinas de Chacchoben',
      'delay' => '0.4s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'costa-maya-snorkel-img',
      'img' => SNORKEL_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Snorkel & catamaran' : 'Snorkel y Catamaran',
      'title' => (Lang\getLang() == 'en') ? 'Snorkel & catamaran' : 'Snorkel y Catamaran',
      'delay' => '0.6s'
    ));
    ?>
  </div>
</section>

<style type="text/css">
  div>.costa-maya-logo {
    height: 250px;
    max-height: 30vw;
    overflow: hidden;
  }

  .costa-maya-logo {
    width: 40vw;
    max-width: 400px;
    object-fit: cover;
  }

  .costa-maya-place {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  #costa-maya .two-img .hoverAnimated.card {
    max-height: 380px;
  }

  @media screen and (max-width:700px) {
    #costa-maya .two-img .hoverAnimated.card {
      max-height: 50vw;
    }
  }
  
  .blue-text.traditions {
      max-width: 950px;
    }

  @media screen and (max-width: 1100px) {
    .blue-text.traditions .br {
      display: none;
    }
    .blue-text.traditions {
      max-width: 80vw;
    }
  }
</style>