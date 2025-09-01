<?php
define('SAMANA_LOGO_IMG', '/assets/ports/samana/Samana.png');
define('SAMANA_PLACE_ONE_IMG', '/assets/ports/samana/samana-01.jpg');

define('SAMANA_CULTURE_IMG', '/ports/samana/samana-02.jpg');
define('SAMANA_FISHES_IMG', '/ports/samana/samana-03.jpg');
define('SAMANA_BIKING_IMG', '/ports/samana/samana-04.jpg');
?>

<section id="samana">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= SAMANA_LOGO_IMG ?>" alt="samana logo" width="100%" height="100%" class="samana-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        Extreme adventures, lush jungle, and crystal clear waters...
        <br> This is Port Samana! 
      <?php } else { ?>
        Aventuras extremas, selva exuberante y aguas cristalinas...
        <br> ¡Esto es Port Samaná!
      <?php } ?>
    </p>
    <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        Located in the stunning <b> northeast of the Dominican Republic, </b> this port will feature a <b> dock for two Oasis class cruise ships and 3 recreational areas.</b> Restaurants, bars, slow river spa with stilt houses on the sea and floating platforms, get ready to live fascinating experiences in the natural beauty of this paradise.
      <?php } else { ?>
        Ubicado en el impresionante
        <b> noreste de la República Dominicana, </b> este puerto contará con un
        <b> muelle para dos cruceros de la clase Oasis y 3 zonas recreativas.</b>
        Restaurantes, bares, rio lento spa con palafitos en el mar y plataformas flotantes. preparate para vivir experiencias fascinantes en la belleza natural de este paraíso.
      <?php } ?>
    </p>
  </div>

  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= SAMANA_PLACE_ONE_IMG ?>" alt="samana place" width="100%" height="100%" class="wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text big-port-text wow fadeInUp" data-wow-delay='0.4s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        <b>SAMANA WILL SURPRISE YOU!</b>
      <?php } else { ?>
        <b>¡SAMANÁ TE SORPRENDERÁ!</b>
      <?php } ?>
    </p>
  </div>

  <div class="content unset-content images three-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'samana-culture-img',
      'img' => SAMANA_CULTURE_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Culture and Traditions' : 'Cultura y Tradiciones',
      'title' => (Lang\getLang() == 'en') ? 'Culture and Traditions' : 'Cultura y Tradiciones',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'samana-fishes-img',
      'img' => SAMANA_FISHES_IMG,
      'alt' => 'Samana Fishes',
      'title' => (Lang\getLang() == 'en') ? 'Incomparable beauty' : 'Belleza Incomparable',
      'delay' => '0.4s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'samana-biking-img',
      'img' => SAMANA_BIKING_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Explore the destination' : 'Explora el destino',
      'title' => (Lang\getLang() == 'en') ? 'Explore the destination' : 'Explora el destino',
      'delay' => '0.6s'
    ));
    ?>
  </div>
</section>

<style type="text/css">
  div>.samana-logo {
    overflow: hidden;
  }

  .samana-logo {
    width: 40vw;
    max-width: 340px;
    object-fit: cover;
  }
</style>