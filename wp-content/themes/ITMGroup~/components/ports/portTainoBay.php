<?php
define('TB_LOGO_IMG', '/assets/ports/taino-bay/Logo-Taino-Bay-1.png');
define('TB_PLACE_ONE_IMG', '/assets/ports/taino-bay/tainobay-01.jpg');
define('TB_PLACE_TWO_IMG', '/assets/ports/taino-bay/tainobay-02.jpg');

define('TB_PINEAPPLE_IMG', '/ports/taino-bay/tainobay-03.jpg');
define('TB_COUPLE_IMG', '/ports/taino-bay/tainobay-04.jpg');

define('TB_RIVER_IMG', '/ports/taino-bay/tainobay-05.jpg');
define('TB_BUGGIE_IMG', '/ports/taino-bay/tainobay-06.jpg');
define('TB_BEACH_IMG', '/ports/taino-bay/tainobay-07.jpg');
?>

<section id="taino-bay">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= TB_LOGO_IMG ?>" alt="taino bay logo" width="100%" height="100%" class="TB-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <?php if(Lang\getLang() == 'en'){ ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
        Inspired by the beauty of Puerto Plata, Taino Bay is an unforgettable cruise port. 
      </p>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        With a capacity to receive up to 14,000 passengers in a day and 3 berths, Taino Bay has become a reference for unforgettable experiences in the Caribbean.
      </p>
    <?php } else { ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
        Inspirado en la belleza de Puerto Plata, Taino Bay es un puerto de cruceros inolvidable. 
      </p>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        Con una capacidad de recibir hasta 14,000 pasajeros en un día y 3 posiciones de atraque, Taino Bay se ha convertido en un referente para experiencias inolvidables en el Caribe. 
      </p>
    <?php } ?>
  </div>

  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= TB_PLACE_ONE_IMG ?>" alt="taino bay place" width="100%" height="100%" class="TB-place wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <?php if(Lang\getLang() == 'en'){ ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        Cruise passengers will find a lazy river, pools, bodies of water, restaurants and themed bars during their stay.
      </p>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.3s'>
        As a cultural showcase of the destination's history, the entertainment at the port is a MUST!
      </p>
    <?php } else { ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        Los cruceristas podrán encontrar río lento, albercas, cuerpos de agua, restaurantes y bares temáticos durante su estancia.
      </p>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.3s'>
        No podemos dejar atrás el entretenimiento, que es una muestra cultural de la historia del destino.
      </p>
    <?php } ?>
  </div>

  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= TB_PLACE_TWO_IMG ?>" alt="taino bay place" width="100%" height="100%" class="TB-place wow fadeInUp bannerImg" />
  </div>

  <div class="content images two-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'TB-pineapple-img',
      'img' => TB_PINEAPPLE_IMG,
      'alt' => 'Pineapple',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'TB-couple-img',
      'img' => TB_COUPLE_IMG,
      'alt' => 'Couple',
      'delay' => '0.4s'
    ));
    ?>
  </div>

  <?php if(Lang\getLang() == 'en'){ ?>
    
  <?php } else { ?>
    <div class="content d-flex align-center justify-center bottom-description">
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        El puerto de Taino Bay, ahora establecido como <b>destino atlántico.</b>
      </p>
    </div>
  <?php } ?>

  <div class="content unset-content images three-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'TB-river-img',
      'img' => TB_RIVER_IMG,
      'alt' => 'Lazy River',
      'title' => 'Lazy River',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'TB-buggie-img',
      'img' => TB_BUGGIE_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Buggy adventure' : 'Aventura en Buggie',
      'title' => (Lang\getLang() == 'en') ? 'Buggy <br> adventure' : 'Aventura en <br> Buggie',
      'delay' => '0.4s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'TB-beach-img',
      'img' => TB_BEACH_IMG,
      'alt' => 'Playa Dorada',
      'title' => 'Playa <br> Dorada',
      'delay' => '0.6s'
    ));
    ?>
  </div>
</section>

<style type="text/css">
  div>.TB-logo {
    height: 250px;
    max-height: 30vw;
    overflow: hidden;
  }

  .TB-logo {
    width: 40vw;
    max-width: 400px;
    object-fit: cover;
  }

  .TB-place {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }
</style>