<?php

define('CANCUN_CENTER_IMG', '/assets/hospitality/cancun-center/Logo_CC.png');
define('CANCUN_CENTER_PLACE_ONE_IMG', '/assets/hospitality/cancun-center/hospitalidad-itm-group-2.jpg');

define('CANCUN_CENTER_OUTSIDE_IMG', '/hospitality/cancun-center/hospitalidad-itm-group-1.jpg');
define('CANCUN_CENTER_INSIDE_IMG', '/hospitality/cancun-center/hospitalidad-itm-group-3.jpg');

?>

<section id="cancun-center">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= CANCUN_CENTER_IMG ?>" alt="Cancun center logo" width="100%" height="100%" class="cancun-center-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <p class="blue-text cc wow fadeInUp" data-wow-delay='0.1s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        With more than <b>30 years of experience in the industry, </b> Cancun Center has become a leading venue for international events in Cancun. As the only convention center in the city, <b> it hosts congresses, fairs, and exhibitions.</b>
      <?php } else { ?>
        Por más de <b>30 años de experiencia en la industria, </b> Cancun Center se ha convertido en un referente para eventos internacionales en Cancún. Como el único centro de convenciones de la ciudad es <b> sede de congresos, ferias y exposiciones.</b>
      <?php } ?>
    </p>
  </div>

  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= CANCUN_CENTER_PLACE_ONE_IMG ?>" alt="Cancun center place" width="100%" height="100%" class="wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text cc wow fadeInUp" data-wow-delay="0.3s">
      <?php if(Lang\getLang() == 'en'){ ?>
        A safe venue of over 14,000 m² with outdoor areas, <b>international cuisine service</b> and the best audio and lighting technology.
      <?php } else { ?>
        Un espacio seguro de más den 14,000m² con áreas al aire libre, <b>servicio de cocina internacional</b> y la mejor tecnología <br class="br-cc" style="display:none"> en audio e iluminación.
      <?php } ?>
    </p>
  </div>

  <div class="content images two-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'cancun-center-outside-img',
      'img' => CANCUN_CENTER_OUTSIDE_IMG,
      'alt' => 'Cancun Center Outside',
      'title' => 'CCI',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'cancun-center-inside-img',
      'img' => CANCUN_CENTER_INSIDE_IMG,
      'alt' => 'Cancun Center Inside',
      'title' =>  (Lang\getLang() == 'en') ? 'Halls' : 'Salones',
      'delay' => '0.4s'
    ));
    ?>
  </div>

  <div class="content justify-end">
    <?php
    get_template_part('/components/shareProjectLink', null, array(
      'href' => 'https://cancuncenter.com/',
      'alt' => 'Go to Cancun Center',
    ));
    ?>
  </div>

</section>

  
<style type="text/css">

  .cancun-center-logo {
    width: 40vw;
    max-width: 280px;
    object-fit: cover;
  }

  .blue-text.cc {
    max-width: 1060px;
  }

  @media screen and (max-width: 1160px) {
    .blue-text.cc {
      max-width: 90vw;
    }
  }
  
  @media screen and (max-width: 830px) {
    .blue-text.cc {
      max-width: 80vw;
    }
  }

  @media screen and (max-width: 600px) {
    .br-cc {
      display: inline !important;
    }
  }
  @media screen and (max-width: 500px) {
    .br-cc {
      display: none !important;
    }
  }

</style>
