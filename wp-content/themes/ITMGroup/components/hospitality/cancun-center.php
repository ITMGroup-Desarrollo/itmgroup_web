<?php

define('CANCUN_CENTER_IMG', '/assets/hospitality/cancun-center/Logo_CC.png');
define('CANCUN_CENTER_PLACE_ONE_IMG', '/assets/hospitality/cancun-center/hospitalidad-itm-group-2.jpg');

define('CANCUN_CENTER_OUTSIDE_IMG', '/hospitality/cancun-center/hospitalidad-itm-group-1.jpg');
define('CANCUN_CENTER_INSIDE_IMG', '/hospitality/cancun-center/hospitalidad-itm-group-3.jpg');
$images = [
  [
    'id' => 'ICC-1',
    'img' => 'hospitality/cancun-center/1.webp',
    'alt' => 'ICC-1'
  ],
  [
    'id' => 'ICC-2',
    'img' => 'hospitality/cancun-center/2.webp',
    'alt' => 'ICC-2'
  ],
  [
    'id' => 'ICC-3',
    'img' => 'hospitality/cancun-center/3.webp',
    'alt' => 'ICC-3'
  ],
  [
    'id' => 'ICC-4',
    'img' => 'hospitality/cancun-center/4.webp',
    'alt' => 'ICC-4',
    'style' => 'width: 400px;'
  ],
  [
    'id' => 'ICC-5',
    'img' => 'hospitality/cancun-center/5.webp',
    'alt' => 'ICC-5'
  ],
  [
    'id' => 'ICC-6',
    'img' => 'hospitality/cancun-center/6.webp',
    'alt' => 'ICC-6'
  ],
  [
    'id' => 'ICC-7',
    'img' => 'hospitality/cancun-center/7.webp',
    'alt' => 'ICC-7'
  ],
  [
    'id' => 'ICC-8',
    'img' => 'hospitality/cancun-center/8.webp',
    'alt' => 'ICC-8'
  ],
  [
    'id' => 'ICC-9',
    'img' => 'hospitality/cancun-center/9.webp',
    'alt' => 'ICC-9'
  ],
  [
    'id' => 'ICC-10',
    'img' => 'hospitality/cancun-center/10.webp',
    'alt' => 'ICC-10'
  ],

  [
    'id' => 'ICC-12',
    'img' => 'hospitality/cancun-center/12.webp',
    'alt' => 'ICC-12'
  ],
  [
    'id' => 'ICC-13',
    'img' => 'hospitality/cancun-center/13.webp',
    'alt' => 'ICC-13'
  ],
  [
    'id' => 'ICC-14',
    'img' => 'hospitality/cancun-center/14.webp',
    'alt' => 'ICC-14'
  ],
  [
    'id' => 'ICC-16',
    'img' => 'hospitality/cancun-center/16.webp',
    'alt' => 'ICC-16'
  ],
  [
    'id' => 'ICC-20',
    'img' => 'hospitality/cancun-center/20.webp',
    'alt' => 'ICC-20'
  ],
  [
    'id' => 'ICC-21',
    'img' => 'hospitality/cancun-center/21.webp',
    'alt' => 'ICC-21'
  ],
  
  [
    'id' => 'ICC-17',
    'img' => 'hospitality/cancun-center/17.webp',
    'alt' => 'ICC-17'
  ],
];
?>
<style>
  .two-img{
    gap:10px;
  }
  .images{
    flex-wrap: nowrap;
    
  }
  .wow.fadeInUp.card.hoverAnimated.has-title{
    margin-top:10px;
  }
</style>
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
  <div class="content gallery-section">
    <div class="gallery-container mb-3">
      <?php foreach ($images as $image): ?>
        <div class="gallery-item">
          <img
            src="<?= Util\root() ?>/assets/<?= $image['img']; ?>"
            alt="<?= $image['alt']; ?>"
            id="<?= $image['id']; ?>"
            class="img-fluid gallery-img"
            style="transition: transform 0.6s ease; <?= $image['style']; ?>" />
        </div>
      <?php endforeach; ?>
    </div>
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
