<?php
define('SAMANA_LOGO_IMG', '/assets/ports/samana/Samana.png');
define('SAMANA_PLACE_ONE_IMG', '/assets/ports/samana/samana-01.jpg');

define('SAMANA_CULTURE_IMG', '/ports/samana/samana-02.jpg');
define('SAMANA_FISHES_IMG', '/ports/samana/samana-03.jpg');
define('SAMANA_BIKING_IMG', '/ports/samana/samana-04.jpg');
$images = [
  [
    'id' => 'bahia-samana-img-1',
    'img' => 'ports/samana/bahia-samana-1.webp',
    'alt' => 'bahia-samana-1'
  ],
  [
    'id' => 'bahia-samana-img-2',
    'img' => 'ports/samana/bahia-samana-2.webp',
    'alt' => 'bahia-samana-2'
  ],
  [
    'id' => 'bahia-samana-img-3',
    'img' => 'ports/samana/bahia-samana-3.webp',
    'alt' => 'bahia-samana-3'
  ],
  [
    'id' => 'bahia-samana-img-4',
    'img' => 'ports/samana/bahia-samana-4.webp',
    'alt' => 'bahia-samana-4'
  ],
  [
    'id' => 'bahia-samana-img-5',
    'img' => 'ports/samana/bahia-samana-5.webp',
    'alt' => 'bahia-samana-5'
  ],
  [
    'id' => 'bahia-samana-img-6',
    'img' => 'ports/samana/bahia-samana-6.webp',
    'alt' => 'bahia-samana-6'
  ],
  [
    'id' => 'bahia-samana-img-7',
    'img' => 'ports/samana/bahia-samana-7.webp',
    'alt' => 'bahia-samana-7'
  ],
  [
    'id' => 'bahia-samana-img-8',
    'img' => 'ports/samana/bahia-samana-8.webp',
    'alt' => 'bahia-samana-8'
  ],
  [
    'id' => 'bahia-samana-img-9',
    'img' => 'ports/samana/bahia-samana-9.webp',
    'alt' => 'bahia-samana-9'
  ],
  [
    'id' => 'bahia-samana-img-10',
    'img' => 'ports/samana/bahia-samana-10.webp',
    'alt' => 'bahia-samana-10'
  ],
  [
    'id' => 'bahia-samana-img-11',
    'img' => 'ports/samana/bahia-samana-11.webp',
    'alt' => 'bahia-samana-11'
  ],
  [
    'id' => 'bahia-samana-img-12',
    'img' => 'ports/samana/bahia-samana-12.webp',
    'alt' => 'bahia-samana-12'
  ],
  [
    'id' => 'bahia-samana-img-13',
    'img' => 'ports/samana/bahia-samana-13.webp',
    'alt' => 'bahia-samana-13'
  ],
  [
    'id' => 'bahia-samana-img-14',
    'img' => 'ports/samana/bahia-samana-14.webp',
    'alt' => 'bahia-samana-14'
  ],
  [
    'id' => 'bahia-samana-img-15',
    'img' => 'ports/samana/bahia-samana-15.webp',
    'alt' => 'bahia-samana-15'
  ],
  [
    'id' => 'bahia-samana-img-16',
    'img' => 'ports/samana/bahia-samana-16.webp',
    'alt' => 'bahia-samana-16'
  ]
];
?>
<style>
  .gallery-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    overflow: hidden;
  }

  .gallery-container img {
    flex-grow: 1;
    object-fit: cover;
    width: auto;
    max-height: 400px;
  }

  .img-fluid {
    max-width: 100%;
    height: auto;
    cursor: pointer;
  }

  .gallery-section {
    width: 100%;
    padding: inherit;
  }

  @media (max-width: 1200px) {
    .gallery-container img {
      max-height: 250px;
    }
  }

  @media (max-width: 768px) {
    .gallery-container img {
      max-height: 200px;
    }
  }

  @media (max-width: 480px) {
    .gallery-container img {
      max-height: 150px;
    }
  }
</style>
<section id="samana">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= SAMANA_LOGO_IMG ?>" alt="samana logo" width="100%" height="100%" class="samana-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Extreme adventures, lush jungle, and crystal clear waters...
        <br> This is Port Samana!
      <?php } else { ?>
        Aventuras extremas, selva exuberante y aguas cristalinas...
        <br> ¡Esto es Port Samaná!
      <?php } ?>
    </p>
    <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Located in the stunning northeast of the Dominican Republic, this port will feature a dock for <br><b>2 Oasis class cruise ships and 3 recreational areas.</b> Restaurants, bars, slow river spa with stilt houses on the sea and floating platforms, get ready to live fascinating experiences in the natural beauty of this paradise.
      <?php } else { ?>
        Ubicado en el impresionante noreste de la República Dominicana, este puerto contará con un muelle para <br><b>2 cruceros de la clase Oasis y 3 zonas recreativas.</b>
        Restaurantes, bares, río lento spa con palafitos en el mar y plataformas flotantes. Prepárate para vivir experiencias fascinantes en la belleza natural de este paraíso.
      <?php } ?>
    </p>
  </div>

  <div class="place-container content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= SAMANA_PLACE_ONE_IMG ?>" alt="samana place" width="100%" height="100%" class="wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text big-port-text wow fadeInUp" data-wow-delay='0.4s'>
      <?php if (Lang\getLang() == 'en') { ?>
        <b>SAMANA WILL SURPRISE YOU!</b>
      <?php } else { ?>
        <b>¡SAMANÁ TE SORPRENDERÁ!</b>
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

  @media screen and (max-width: 600px) {
    .samana-logo {
      width: 50vw;
    }
  }
</style>