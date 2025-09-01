<?php
define('LOGO_IMG', '/assets/ports/costa-maya/costa-maya-02.png');
define('PLACE_ONE_IMG', '/assets/ports/costa-maya/costa-maya-03.jpg');

define('CM_PARROTS_IMG', 'ports/costa-maya/costa-maya-21.webp');
define('CM_PINK_PARTY_IMG', 'ports/costa-maya/costa-maya-05.jpg');

define('PLACE_TWO_IMG', '/assets/ports/costa-maya/costa-maya-22.webp');

define('ATV_IMG', '/ports/costa-maya/costa-maya-07.jpg');
define('RUINS_IMG', '/ports/costa-maya/costa-maya-08.jpg');
define('SNORKEL_IMG', '/ports/costa-maya/costa-maya-09.jpg');

$images = [
  [
    'id' => 'costa-maya-img-1',
    'img' => 'ports/costa-maya/costa-maya-1.webp',
    'alt' => 'costa-maya-1'
  ],
  [
    'id' => 'costa-maya-img-2',
    'img' => 'ports/costa-maya/costa-maya-2.webp',
    'alt' => 'costa-maya-2'
  ],
  [
    'id' => 'costa-maya-img-3',
    'img' => 'ports/costa-maya/costa-maya-3.webp',
    'alt' => 'costa-maya-3'
  ],
  [
    'id' => 'costa-maya-img-4',
    'img' => 'ports/costa-maya/costa-maya-4.webp',
    'alt' => 'costa-maya-4'
  ],
  [
    'id' => 'costa-maya-img-6',
    'img' => 'ports/costa-maya/costa-maya-6.webp',
    'alt' => 'costa-maya-6'
  ],
  [
    'id' => 'costa-maya-img-5',
    'img' => 'ports/costa-maya/costa-maya-5.webp',
    'alt' => 'costa-maya-5'
  ],
  [
    'id' => 'costa-maya-img-7',
    'img' => 'ports/costa-maya/costa-maya-7.webp',
    'alt' => 'costa-maya-7'
  ],
  [
    'id' => 'costa-maya-img-8',
    'img' => 'ports/costa-maya/costa-maya-8.webp',
    'alt' => 'costa-maya-8'
  ],
  [
    'id' => 'costa-maya-img-9',
    'img' => 'ports/costa-maya/costa-maya-9.webp',
    'alt' => 'costa-maya-9'
  ],
  [
    'id' => 'costa-maya-img-10',
    'img' => 'ports/costa-maya/costa-maya-10.webp',
    'alt' => 'costa-maya-10'
  ],
  [
    'id' => 'costa-maya-img-11',
    'img' => 'ports/costa-maya/costa-maya-11.webp',
    'alt' => 'costa-maya-11'
  ],
  [
    'id' => 'costa-maya-img-12',
    'img' => 'ports/costa-maya/costa-maya-12.webp',
    'alt' => 'costa-maya-12'
  ],
  [
    'id' => 'costa-maya-img-13',
    'img' => 'ports/costa-maya/costa-maya-13.webp',
    'alt' => 'costa-maya-13'
  ],
  [
    'id' => 'costa-maya-img-14',
    'img' => 'ports/costa-maya/costa-maya-14.webp',
    'alt' => 'costa-maya-14'
  ],
  [
    'id' => 'costa-maya-img-15',
    'img' => 'ports/costa-maya/costa-maya-15.webp',
    'alt' => 'costa-maya-15'
  ],
  [
    'id' => 'costa-maya-img-16',
    'img' => 'ports/costa-maya/costa-maya-16.webp',
    'alt' => 'costa-maya-16'
  ],
  [
    'id' => 'costa-maya-img-17',
    'img' => 'ports/costa-maya/costa-maya-17.webp',
    'alt' => 'costa-maya-17'
  ],
  [
    'id' => 'costa-maya-img-18',
    'img' => 'ports/costa-maya/costa-maya-18.webp',
    'alt' => 'costa-maya-18'
  ],
  [
    'id' => 'costa-maya-img-19',
    'img' => 'ports/costa-maya/costa-maya-19.webp',
    'alt' => 'costa-maya-19'
  ],
  [
    'id' => 'costa-maya-img-20',
    'img' => 'ports/costa-maya/costa-maya-20.webp',
    'alt' => 'costa-maya-20',
    'style' => 'object-position: center 70%;'
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
    padding-top: 10px !important;
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

  .two-img {
    gap: 10px;
  }

  .images {
    flex-wrap: nowrap;

  }

  .hoverAnimated.card,
  .place-container {
    margin-top: 10px !important;
  }
</style>
<section id="costa-maya">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= LOGO_IMG ?>" alt="costa maya logo" width="100%" height="100%" class="costa-maya-logo wow fadeInUp" />
  </div>
  <div class="content d-flex align-center justify-center top-description">

    <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if (Lang\getLang() == 'en') { ?>
        A complete experience turned into a port, welcome to Costa Maya. <br><b>With daily capacity to welcome up to 4 cruises, Costa Maya receives more than one million passengers and 300 cruises a year.</b>
      <?php } else { ?>
        Una experiencia completa convertida en puerto, bienvenido a Costa Maya. <br><b>Con capacidad para recibir hasta 4 cruceros al día, Costa Maya puede recibir más de un millón de pasajeros y 300 cruceros al año.</b>
      <?php } ?>
    </p>
    <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
      <?php if (Lang\getLang() == 'en') { ?>
        With facilities inspired by the Mayan culture of the destination, at Costa Maya you will find attractions for cruisers of all ages.
      <?php } else { ?>
        Con increíbles instalaciones inspiradas en la cultura maya del destino, en Costa Maya encontrarás atracciones para cruceristas de todas las edades.
      <?php } ?>
    </p>
  </div>
  <div class="place-container content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= PLACE_ONE_IMG ?>" alt="costa maya place" width="100%" height="100%" class="costa-maya-place wow fadeInUp bannerImg" />
  </div>
  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text traditions wow fadeInUp" data-wow-delay='0.2s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Make new friends and find the magic in Costa Maya! Our experiences at port were created for visitors of all ages to enjoy! If you are looking to explore the beauty of the Mayan jungle, visit our Last-minute booth for extreme and fun experiences outside the port...See you soon!
      <?php } else { ?>
        ¡Haz nuevos amigos y encuentra la magia en Costa Maya! ¡Nuestras experiencias en el puerto fueron creadas para visitantes de todas las edades! Si lo que tú buscas es explorar la selva maya, visita nuestro Last-minute booth para experiencias extremas y divertidas fuera del puerto... ¡Nos vemos en Costa Maya!
      <?php } ?>
    </p>
  </div>
  <div class="content gallery-section">
    <div class="gallery-container">
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
        <?php if (Lang\getLang() == 'en') { ?>
          A gem in the
        <?php } else { ?>
          La joya del
        <?php } ?>
      </b>
      <span class="ff-baskerville-italic">
        <?php if (Lang\getLang() == 'en') { ?>
          Mexican Caribbean
        <?php } else { ?>
          Caribe Mexicano
        <?php } ?>
      </span>
    </p>
  </div>
  <div class="place-container content d-flex align-center justify-center">
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
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.gallery-container img').forEach(img => {
      img.addEventListener('mouseover', () => {
        img.style.transform = 'scale(1.05)';
        img.style.transition = 'transform 0.3s ease';
      });

      img.addEventListener('mouseout', () => {
        img.style.transform = 'scale(1)';
      });
    });
  });
</script>