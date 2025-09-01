<?php
define('ROATAN_LOGO_IMG', '/assets/ports/roatan/Logo-Port-Roatan-1.png');
define('ROATAN_PLACE_ONE_IMG', '/assets/ports/roatan/roatan.jpg');

define('ROATAN_EXPERIENCES_IMG', '/ports/roatan/port-roatan.jpg');
define('ROATAN_BOAT_IMG', '/ports/roatan/roatan-03.jpg');
$images = [
  [
    'id' => 'roatan-img-1',
    'img' => 'ports/roatan/roatan-1.webp',
    'alt' => 'roatan-1'
  ],
  [
    'id' => 'roatan-img-2',
    'img' => 'ports/roatan/roatan-2.webp',
    'alt' => 'roatan-2'
  ],
  [
    'id' => 'roatan-img-4',
    'img' => 'ports/roatan/roatan-4.webp',
    'alt' => 'roatan-4'
  ],
  [
    'id' => 'roatan-img-5',
    'img' => 'ports/roatan/roatan-5.webp',
    'alt' => 'roatan-5'
  ],
  [
    'id' => 'roatan-img-6',
    'img' => 'ports/roatan/roatan-6.webp',
    'alt' => 'roatan-6'
  ],
  [
    'id' => 'roatan-img-7',
    'img' => 'ports/roatan/roatan-7.webp',
    'alt' => 'roatan-7'
  ],
  [
    'id' => 'roatan-img-8',
    'img' => 'ports/roatan/roatan-8.webp',
    'alt' => 'roatan-8'
  ],
  [
    'id' => 'roatan-img-9',
    'img' => 'ports/roatan/roatan-9.webp',
    'alt' => 'roatan-9'
  ],
  [
    'id' => 'roatan-img-10',
    'img' => 'ports/roatan/roatan-10.webp',
    'alt' => 'roatan-10'
  ],
  [
    'id' => 'roatan-img-11',
    'img' => 'ports/roatan/roatan-11.webp',
    'alt' => 'roatan-11'
  ],
  [
    'id' => 'roatan-img-12',
    'img' => 'ports/roatan/roatan-12.webp',
    'alt' => 'roatan-12'
  ],
  [
    'id' => 'roatan-img-13',
    'img' => 'ports/roatan/roatan-13.webp',
    'alt' => 'roatan-13'
  ],
  [
    'id' => 'roatan-img-14',
    'img' => 'ports/roatan/roatan-14.webp',
    'alt' => 'roatan-14'
  ],
  [
    'id' => 'roatan-img-15',
    'img' => 'ports/roatan/roatan-15.webp',
    'alt' => 'roatan-15'
  ],
  [
    'id' => 'roatan-img-16',
    'img' => 'ports/roatan/roatan-16.webp',
    'alt' => 'roatan-16'
  ],
  [
    'id' => 'roatan-img-17',
    'img' => 'ports/roatan/roatan-17.webp',
    'alt' => 'roatan-17'
  ],
  [
    'id' => 'roatan-img-18',
    'img' => 'ports/roatan/roatan-18.webp',
    'alt' => 'roatan-18'
  ],
  [
    'id' => 'roatan-img-19',
    'img' => 'ports/roatan/roatan-19.webp',
    'alt' => 'roatan-19'
  ],
  [
    'id' => 'roatan-img-20',
    'img' => 'ports/roatan/roatan-20.webp',
    'alt' => 'roatan-20'
  ],
  [
    'id' => 'roatan-img-21',
    'img' => 'ports/roatan/roatan-21.webp',
    'alt' => 'roatan-21'

  ],
  [
    'id' => 'roatan-img-22',
    'img' => 'ports/roatan/roatan-22.webp',
    'alt' => 'roatan-22'
  ],
  [
    'id' => 'roatan-img-23',
    'img' => 'ports/roatan/roatan-23.webp',
    'alt' => 'roatan-23'
  ],
  [
    'id' => 'roatan-img-25',
    'img' => 'ports/roatan/roatan-25.webp',
    'alt' => 'roatan-25'
  ],
  [
    'id' => 'roatan-img-26',
    'img' => 'ports/roatan/roatan-26.webp',
    'alt' => 'roatan-26'
  ],
  [
    'id' => 'roatan-img-27',
    'img' => 'ports/roatan/roatan-27.webp',
    'alt' => 'roatan-27'
  ],
  [
    'id' => 'roatan-img-28',
    'img' => 'ports/roatan/roatan-28.webp',
    'alt' => 'roatan-28'
  ],
  [
    'id' => 'roatan-img-29',
    'img' => 'ports/roatan/roatan-29.webp',
    'alt' => 'roatan-29'
  ],
  [
    'id' => 'roatan-img-30',
    'img' => 'ports/roatan/roatan-30.webp',
    'alt' => 'roatan-30'
  ],
  [
    'id' => 'roatan-img-32',
    'img' => 'ports/roatan/roatan-32.webp',
    'alt' => 'roatan-32'
  ],
  [
    'id' => 'roatan-img-33',
    'img' => 'ports/roatan/roatan-33.webp',
    'alt' => 'roatan-33'
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
<section id="roatan">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= ROATAN_LOGO_IMG ?>" alt="cabo rojo logo" width="100%" height="100%" class="roatan-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Honduras is the perfect setting for this great project. Inspired by the beauty of the Caribbean, Port Roatan is a welcoming port that captivates all cruise passengers.
      <?php } else { ?>
        Honduras es el escenario perfecto para este gran proyecto. Inspirado en la belleza del Caribe, llega Port Roatán, un puerto acogedor que cautiva a todos los cruceristas.
      <?php } ?>
    </p>
  </div>

  <div class="place-container content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= ROATAN_PLACE_ONE_IMG ?>" alt="cabo rojo place" width="100%" height="100%" class="wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text playa wow fadeInUp" data-wow-delay='0.4s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Renovated to enjoy the experience to the fullest, you will find kiosks, Caribbean restaurants, and a pool inspired by its beaches.
      <?php } else { ?>
        Renovado para disfrutar la experiencia al máximo, en él encontrarás kioskos, restaurantes caribeños, y una alberca inspirada en sus playas.
      <?php } ?>
    </p>
    <p class="blue-text big-port-text wow fadeInUp" data-wow-delay='0.5s'>
      <?php if (Lang\getLang() == 'en') { ?>
        <b>Enjoy Port Roatan!</b>
      <?php } else { ?>
        <b>¡DISFRUTA PORT ROATÁN!</b>
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
  <div class="content images two-img" style="gap:0px;">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'roatan-experiences-img',
      'img' => ROATAN_EXPERIENCES_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Man with monkey' : 'Hombre con mono en hombro',
      'title' => (Lang\getLang() == 'en') ? 'Enjoy <br/> Port Roatán' : 'Disfruta <br/> Port Roatán',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'roatan-boat-img',
      'img' => ROATAN_BOAT_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Explore life under the sea!' : '¡Explora la vida bajo el mar!',
      'title' => (Lang\getLang() == 'en') ? 'Explore life  <br/> under the sea!' : '¡Explora la <br/> vida bajo <br/> el mar!',
      'delay' => '0.4s'
    ));
    ?>
  </div>
</section>

<style type="text/css">
  div>.roatan-logo {
    overflow: hidden;
  }

  .roatan-logo {
    width: 40vw;
    max-width: 280px;
    object-fit: cover;
  }

  .blue-text.playa {
    max-width: 950px;
  }

  @media screen and (max-width: 950px) {
    .blue-text.playa {
      max-width: 90vw;
    }
  }

  @media screen and (max-width: 830px) {
    .blue-text.playa {
      max-width: 80vw;
    }
  }
</style>