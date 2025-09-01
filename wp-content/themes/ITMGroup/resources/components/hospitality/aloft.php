<?php

define('ALOFT_IMG', '/assets/hospitality/aloft/aloft cancun.png');
define('ALOFT_PLACE_ONE_IMG', '/assets/hospitality/aloft/hospitalidad-itm-group-4.jpg');

define('ALOFT_ROOF_IMG', '/hospitality/aloft/hospitalidad-itm-group-6.jpg');
define('ALOFT_POOL_ROOM_IMG', '/hospitality/aloft/hospitalidad-itm-group-5.jpg');
define('ALOFT_GYM_IMG', '/hospitality/aloft/cunal-gym-9833-hor-wide.jpg');

?>

<section id="aloft">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= ALOFT_IMG ?>" alt="aloft logo" width="100%" height="100%" class="aloft-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <p class="blue-text aloft wow fadeInUp" data-wow-delay='0.1s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        The perfect escape to enjoy your next vacation. Aloft is a cozy hotel in <b>the heart of Cancun's Hotel Zone.</b> Its privileged location will allow you to enjoy the beaches and the most famous clubs of the city.
      <?php } else { ?>
        El escape ideal para disfrutar tus próximas vacaciones. Aloft es un hotel acogedor en <b>el corazón de la Zona Hotelera de Cancún.</b> Su ubicación privilegiada te permitirá disfrutar de las playas y clubs más famosos de la ciudad.
      <?php } ?>
    </p>
  </div>

  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= ALOFT_PLACE_ONE_IMG ?>" alt="Aloft place" width="100%" height="100%" class="wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text wow fadeInUp" data-wow-delay="0.3s">
      <?php if(Lang\getLang() == 'en'){ ?>
        Feel like relaxing?
      <?php } else { ?>
        ¿Con ganas de descansar?
      <?php } ?>
    </p>
    <p class="blue-text big-port-text wow fadeInUp" data-wow-delay='0.4s'>
      <b class="ff-baskerville">
        <?php if(Lang\getLang() == 'en'){ ?>
          Your stay includes
        <?php } else { ?>
          Tu estancia incluye
        <?php } ?>
      </b>
      <br class="br-aloft" style="display:none">
      <span class="ff-baskerville-italic">
        <?php if(Lang\getLang() == 'en'){ ?>
          an open bar.
        <?php } else { ?>
          una barra libre.
        <?php } ?>
      </span>
    </p>
  </div>

  <div class="content unset-content images three-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'aloft-roof-img',
      'img' => ALOFT_ROOF_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Rooftop' : 'Rooftop en Aloft',
      'title' => 'Rooftop',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'aloft-pool-room-img',
      'img' => ALOFT_POOL_ROOM_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Pool tables' : 'Billar en Aloft',
      'title' =>  (Lang\getLang() == 'en') ? 'Pool tables' : 'Billar',
      'delay' => '0.4s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'aloft-gym-img',
      'img' => ALOFT_GYM_IMG,
      'alt' =>  (Lang\getLang() == 'en') ? 'Gym' : 'Gimnasio en Aloft',
      'title' => (Lang\getLang() == 'en') ? 'Gym' : 'Gimnasio',
      'delay' => '0.6s'
    ));
    ?>
  </div>

  <div class="content justify-end">
    <?php
    get_template_part('/components/shareProjectLink', null, array(
      'href' => 'https://www.marriott.com/en-us/hotels/cunal-aloft-cancun/overview/?scid=f2ae0541-1279-4f24-b197-a979c79310b0',
      'alt' => 'Go to Aloft',
    ));
    ?>
  </div>

</section>

  
<style type="text/css">

  .aloft-logo {
    width: 40vw;
    max-width: 280px;
    object-fit: cover;
  }

  .blue-text.aloft {
    max-width: 1060px;
  }

  @media screen and (max-width: 1160px) {
    .blue-text.aloft {
      max-width: 75vw;
    }
  }
  
  @media screen and (max-width: 830px) {
    .blue-text.aloft {
      max-width: 80vw;
    }
  }
  @media screen and (max-width: 700px) {
    .blue-text.aloft {
      max-width: 95%;
    }
  }

  .images.three-img .hoverAnimated.card {
    max-height: 300px;
    min-height: 200px;
  }

  .big-port-text {
    font-size: 3rem;
  }

  @media screen and (max-width: 950px) {
    #aloft .bottom-description p{
      width: 100vw;
      max-width: 100vw;
    }
  }

  @media screen and (max-width: 800px) {
    .big-port-text {
      font-size: 2.8rem;
    }
  }

  @media screen and (max-width: 600px) {
    .big-port-text {
      font-size: 2rem;
    }
  }

  @media screen and (max-width: 720px) {
    #aloft .bottom-description p{
      line-height: 0.8;
    }

    .br-aloft{
      display: unset !important;
    }
  }
</style>
