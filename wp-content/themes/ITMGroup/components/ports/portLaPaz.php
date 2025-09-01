<?php
define('LA_PAZ_LOGO_IMG', '/assets/ports/la-paz/La paz.png');
define('LA_PAZ_PLACE_ONE_IMG', '/assets/ports/la-paz/la-paz-01.jpg');

define('LA_PAZ_ROCK_IMG', '/ports/la-paz/la-paz-02.jpg');
define('LA_PAZ_COUPLE_IMG', '/ports/la-paz/la-paz-03.jpg');
$images = [
  [
    'id' => 'la-paz-img-1',
    'img' => 'ports/la-paz/la-paz-1.webp',
    'alt' => 'la-paz-1'
  ],
  [
    'id' => 'la-paz-img-2',
    'img' => 'ports/la-paz/la-paz-2.webp',
    'alt' => 'la-paz-2'
  ],
  [
    'id' => 'la-paz-img-3',
    'img' => 'ports/la-paz/la-paz-3.webp',
    'alt' => 'la-paz-3'
  ],
  [
    'id' => 'la-paz-img-4',
    'img' => 'ports/la-paz/la-paz-4.webp',
    'alt' => 'la-paz-4'
  ],
  [
    'id' => 'la-paz-img-5',
    'img' => 'ports/la-paz/la-paz-5.webp',
    'alt' => 'la-paz-5'
  ],
  [
    'id' => 'la-paz-img-6',
    'img' => 'ports/la-paz/la-paz-6.webp',
    'alt' => 'la-paz-6'
  ],
  [
    'id' => 'la-paz-img-7',
    'img' => 'ports/la-paz/la-paz-7.webp',
    'alt' => 'la-paz-7'
  ],
  [
    'id' => 'la-paz-img-8',
    'img' => 'ports/la-paz/la-paz-8.webp',
    'alt' => 'la-paz-8'
  ],
  [
    'id' => 'la-paz-img-9',
    'img' => 'ports/la-paz/la-paz-9.webp',
    'alt' => 'la-paz-9'
  ],
  [
    'id' => 'la-paz-img-10',
    'img' => 'ports/la-paz/la-paz-10.webp',
    'alt' => 'la-paz-10',
    'style' => 'width: 300px;'
  ],
  [
    'id' => 'la-paz-img-11',
    'img' => 'ports/la-paz/la-paz-11.webp',
    'alt' => 'la-paz-11'
  ],
  [
    'id' => 'la-paz-img-12',
    'img' => 'ports/la-paz/la-paz-12.webp',
    'alt' => 'la-paz-12'
  ],
  [
    'id' => 'la-paz-img-13',
    'img' => 'ports/la-paz/la-paz-13.webp',
    'alt' => 'la-paz-13',
    'style' => 'width: 300px;'
  ],
  [
    'id' => 'la-paz-img-14',
    'img' => 'ports/la-paz/la-paz-14.webp',
    'alt' => 'la-paz-14'
  ],
  [
    'id' => 'la-paz-img-15',
    'img' => 'ports/la-paz/la-paz-15.webp',
    'alt' => 'la-paz-15'
  ],
  [
    'id' => 'la-paz-img-16',
    'img' => 'ports/la-paz/la-paz-16.webp',
    'alt' => 'la-paz-16'
  ],
  [
    'id' => 'la-paz-img-17',
    'img' => 'ports/la-paz/la-paz-17.webp',
    'alt' => 'la-paz-17'
  ],
  [
    'id' => 'la-paz-img-18',
    'img' => 'ports/la-paz/la-paz-18.webp',
    'alt' => 'la-paz-18',
    'style' => 'width: 300px;'
  ],
  [
    'id' => 'la-paz-img-19',
    'img' => 'ports/la-paz/la-paz-19.webp',
    'alt' => 'la-paz-19'
  ],
  [
    'id' => 'la-paz-img-21',
    'img' => 'ports/la-paz/la-paz-21.webp',
    'alt' => 'la-paz-21'

  ],
  [
    'id' => 'la-paz-img-22',
    'img' => 'ports/la-paz/la-paz-22.webp',
    'alt' => 'la-paz-22',
    'style' => 'width: 300px;'
  ],
  [
    'id' => 'la-paz-img-23',
    'img' => 'ports/la-paz/la-paz-23.webp',
    'alt' => 'la-paz-23'
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
<section id="la-paz">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= LA_PAZ_LOGO_IMG ?>" alt="cabo rojo logo" width="100%" height="100%" class="la-paz-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Being in La Paz is something out of this world. <br />
        Port La Paz is an <b>oasis in the desert surrounded by crystalline waters</b> in each corner.
      <?php } else { ?>
        Estar en La Paz es algo fuera de este mundo. <br />
        Port La Paz es un <b>oasis en el desierto rodeado de aguas cristalinas</b> en cada rincón.
      <?php } ?>
    </p>
  </div>

  <div class="place-container content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= LA_PAZ_PLACE_ONE_IMG ?>" alt="cabo rojo place" width="100%" height="100%" class="wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text wow fadeInUp" data-wow-delay='0.4s'>
      <?php if (Lang\getLang() == 'en') { ?>
        This town maintains energy <br />
        and it's always ready for the best party.
      <?php } else { ?>
        Este pueblo mantiene la energía <br />
        y siempre está listo para la mejor fiesta.
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
  <div class="content images two-gap-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'la-paz-rock-img',
      'img' => LA_PAZ_ROCK_IMG,
      'alt' => 'La paz beach',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'la-paz-couple-img',
      'img' => LA_PAZ_COUPLE_IMG,
      'alt' => 'Couple eating in La Paz',
      'delay' => '0.4s'
    ));
    ?>
  </div>
</section>

<style type="text/css">
  div>.la-paz-logo {
    overflow: hidden;
  }

  .la-paz-logo {
    width: 10vw;
    max-width: 600px;
    object-fit: cover;
  }
.content.images.two-gap-img {
  display: flex;
  gap: 1rem; /* espacio entre las imágenes */
  flex-wrap: wrap; /* opcional, permite que bajen si no caben */
}

.content.images.two-gap-img > * {
  flex: 1 1 45%; /* cada tarjeta ocupa ~45% del ancho */
}
  @media screen and (max-width: 600px) {
    .la-paz-logo {
      width: 26vw;
      margin-bottom: -30px;
    }
  }
</style>