<?php
define('CABO_ROJO_LOGO_IMG', '/assets/ports/cabo-rojo/Cabo rojo.png');
define('CABO_ROJO_PLACE_ONE_IMG', '/assets/ports/cabo-rojo/cabo-rojo.jpg');

define('CABO_ROJO_BEACH_IMG', '/ports/cabo-rojo/cabo-rojo-04.jpg');
define('CABO_ROJO_PARTY_IMG', '/ports/cabo-rojo/cabo-rojo-05.jpg');
define('CABO_ROJO_XTREME_IMG', '/ports/cabo-rojo/cabo-rojo-06.jpg');
$images = [
  [
    'id' => 'cabo-rojo-img-1',
    'img' => 'ports/cabo-rojo/cabo-rojo-1.webp',
    'alt' => 'cabo-rojo-1'
  ],
  [
    'id' => 'cabo-rojo-img-2',
    'img' => 'ports/cabo-rojo/cabo-rojo-2.webp',
    'alt' => 'cabo-rojo-2'
  ],
  [
    'id' => 'cabo-rojo-img-3',
    'img' => 'ports/cabo-rojo/cabo-rojo-3.webp',
    'alt' => 'cabo-rojo-3'
  ],
  [
    'id' => 'cabo-rojo-img-4',
    'img' => 'ports/cabo-rojo/cabo-rojo-4.webp',
    'alt' => 'cabo-rojo-4'
  ],
  [
    'id' => 'cabo-rojo-img-5',
    'img' => 'ports/cabo-rojo/cabo-rojo-5.webp',
    'alt' => 'cabo-rojo-5'
  ],
  [
    'id' => 'cabo-rojo-img-6',
    'img' => 'ports/cabo-rojo/cabo-rojo-6.webp',
    'alt' => 'cabo-rojo-6'
  ],
  [
    'id' => 'cabo-rojo-img-7',
    'img' => 'ports/cabo-rojo/cabo-rojo-7.webp',
    'alt' => 'cabo-rojo-7'
  ],
  [
    'id' => 'cabo-rojo-img-8',
    'img' => 'ports/cabo-rojo/cabo-rojo-8.webp',
    'alt' => 'cabo-rojo-8'
  ],
  [
    'id' => 'cabo-rojo-img-9',
    'img' => 'ports/cabo-rojo/cabo-rojo-9.webp',
    'alt' => 'cabo-rojo-9'
  ],
  [
    'id' => 'cabo-rojo-img-10',
    'img' => 'ports/cabo-rojo/cabo-rojo-10.webp',
    'alt' => 'cabo-rojo-10'
  ],
  [
    'id' => 'cabo-rojo-img-11',
    'img' => 'ports/cabo-rojo/cabo-rojo-11.webp',
    'alt' => 'cabo-rojo-11'
  ],
  [
    'id' => 'cabo-rojo-img-12',
    'img' => 'ports/cabo-rojo/cabo-rojo-12.webp',
    'alt' => 'cabo-rojo-12'
  ],
  [
    'id' => 'cabo-rojo-img-13',
    'img' => 'ports/cabo-rojo/cabo-rojo-13.webp',
    'alt' => 'cabo-rojo-13'
  ],
  [
    'id' => 'cabo-rojo-img-14',
    'img' => 'ports/cabo-rojo/cabo-rojo-14.webp',
    'alt' => 'cabo-rojo-14'
  ],
  [
    'id' => 'cabo-rojo-img-15',
    'img' => 'ports/cabo-rojo/cabo-rojo-15.webp',
    'alt' => 'cabo-rojo-15'
  ],
  [
    'id' => 'cabo-rojo-img-16',
    'img' => 'ports/cabo-rojo/cabo-rojo-16.webp',
    'alt' => 'cabo-rojo-16'
  ],
  [
    'id' => 'cabo-rojo-img-17',
    'img' => 'ports/cabo-rojo/cabo-rojo-17.webp',
    'alt' => 'cabo-rojo-17'
  ],
  [
    'id' => 'cabo-rojo-img-18',
    'img' => 'ports/cabo-rojo/cabo-rojo-18.webp',
    'alt' => 'cabo-rojo-18'
  ],
  [
    'id' => 'cabo-rojo-img-19',
    'img' => 'ports/cabo-rojo/cabo-rojo-19.webp',
    'alt' => 'cabo-rojo-19'
  ],
  [
    'id' => 'cabo-rojo-img-20',
    'img' => 'ports/cabo-rojo/cabo-rojo-20.webp',
    'alt' => 'cabo-rojo-20'
  ],
  [
    'id' => 'cabo-rojo-img-21',
    'img' => 'ports/cabo-rojo/cabo-rojo-21.webp',
    'alt' => 'cabo-rojo-21'

  ],
  [
    'id' => 'cabo-rojo-img-22',
    'img' => 'ports/cabo-rojo/cabo-rojo-22.webp',
    'alt' => 'cabo-rojo-22'
  ],
  [
    'id' => 'cabo-rojo-img-23',
    'img' => 'ports/cabo-rojo/cabo-rojo-23.webp',
    'alt' => 'cabo-rojo-23'
  ],
  [
    'id' => 'cabo-rojo-img-24',
    'img' => 'ports/cabo-rojo/cabo-rojo-24.webp',
    'alt' => 'cabo-rojo-24'
  ],
  [
    'id' => 'cabo-rojo-img-25',
    'img' => 'ports/cabo-rojo/cabo-rojo-25.webp',
    'alt' => 'cabo-rojo-25'
  ],
  [
    'id' => 'cabo-rojo-img-26',
    'img' => 'ports/cabo-rojo/cabo-rojo-26.webp',
    'alt' => 'cabo-rojo-26'
  ]
];
?>
<style>
  .gallery-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
  }

  .gallery-item {
    display: flex;
    overflow: hidden;
    max-height: 400px;
    flex-grow: 1;

  }

  .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .gallery-item:hover img {
    transform: scale(1.1);
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
<section id="cabo-rojo">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= CABO_ROJO_LOGO_IMG ?>" alt="cabo rojo logo" width="100%" height="100%" class="cabo-rojo-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <?php if (Lang\getLang() == 'en') { ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
        Taking inspiration from its distinctive land, Port Cabo Rojo takes us through a mining town with magical spaces and stories of the destination. <br><b>The port will be able to receive up to 4 cruise ships simultaneously.</b>
      </p>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        The project aims to be an interactive experience through attractions such as swimming pools, bodies of water, museums, themed worlds, shows, venues, and cultural and gastronomic offerings.
      </p>
    <?php } else { ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
        Tomando inspiración en su distintivo suelo, Port Cabo Rojo nos lleva a través de un pueblo minero con espacios mágicos e historias del destino. <br><b>El puerto podrá recibir hasta 4 cruceros de manera simultánea.</b>
      </p>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        El proyecto pretende ser una experiencia interactiva a través de atracciones como alberca, cuerpos de agua, museos, mundos temáticos, espectáculos, locales y oferta cultural y gastronómica.
      </p>
    <?php } ?>
  </div>

  <div class="place-container content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= CABO_ROJO_PLACE_ONE_IMG ?>" alt="cabo rojo place" width="100%" height="100%" class="cabo-rojo-place wow fadeInUp bannerImg" />
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
      'id' => 'cabo-rojo-hamacas-img',
      'img' => 'ports/cabo-rojo/cabo-rojo-02.jpg',
      'alt' => 'Hamacas',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'cabo-rojo-houses-img',
      'img' => 'ports/cabo-rojo/cabo-rojo-03.jpg',
      'alt' => 'Houses',
      'delay' => '0.4s'
    ));
    ?>
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <?php if (Lang\getLang() == 'en') { ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.3s'>
        Port Cabo Rojo highlights the natural beauty of Pedernales and the warmth of the Dominican Republic, giving visitors a visit to remember.
      </p>
    <?php } else { ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.3s'>
        Port Cabo Rojo resalta la belleza natural de Pedernales y la calidez de la República Dominicana, regalando a sus visitantes una visita que recordarán por siempre.
      </p>
    <?php } ?>
  </div>

  <div class="content unset-content images three-img">
    <?php
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'cabo-rojo-beach-img',
      'img' => CABO_ROJO_BEACH_IMG,
      'alt' => 'En Contacto Con La Naturaleza',
      'title' => (Lang\getLang() == 'en') ? 'In touch <br/> with nature' : 'En Contacto Con <br/> La Naturaleza',
      'delay' => '0.2s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'cabo-rojo-party-img',
      'img' => CABO_ROJO_PARTY_IMG,
      'alt' => 'Experiencias Inolvidables',
      'title' => (Lang\getLang() == 'en') ? 'Unforgettable <br/> experiences' : 'Experiencias <br/> Inolvidables',
      'delay' => '0.4s'
    ));
    get_template_part('/components/cardHoverAnimated', null, array(
      'id' => 'cabo-rojo-xtreme-img',
      'img' => CABO_ROJO_XTREME_IMG,
      'alt' => (Lang\getLang() == 'en') ? 'Extreme Adventures' : 'Aventuras Extremas',
      'title' => (Lang\getLang() == 'en') ? 'Extreme <br/> Adventures' : 'Aventuras <br/> Extremas',
      'delay' => '0.6s'
    ));
    ?>
  </div>
</section>

<style type="text/css">
  div>.cabo-rojo-logo {
    overflow: hidden;
  }

  .cabo-rojo-logo {
    width: 40vw;
    max-width: 280px;
    object-fit: cover;
  }

  .cabo-rojo-place {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }
</style>
<script>



</script>