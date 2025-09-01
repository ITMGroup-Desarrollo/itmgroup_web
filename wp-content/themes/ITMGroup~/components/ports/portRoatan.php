<?php
define('ROATAN_LOGO_IMG', '/assets/ports/roatan/Logo-Port-Roatan-1.png');
define('ROATAN_PLACE_ONE_IMG', '/assets/ports/roatan/Port Roatán con Icon.jpg');

define('ROATAN_EXPERIENCES_IMG', '/ports/roatan/roatan-02.jpg');
define('ROATAN_BOAT_IMG', '/ports/roatan/roatan-03.jpg');
?>

<section id="roatan">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= ROATAN_LOGO_IMG ?>" alt="cabo rojo logo" width="100%" height="100%" class="roatan-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        Honduras is the perfect setting for this great project. Inspired by the beauty of the Caribbean, Port Roatan is a welcoming port that captivates all cruise passengers.
      <?php } else { ?>
        Honduras es el escenario perfecto para este gran proyecto. Inspirado en la belleza del Caribe, llega Port Roatán, un puerto acogedor que cautiva a todos los cruceristas.
      <?php } ?>
    </p>
  </div>

  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= ROATAN_PLACE_ONE_IMG ?>" alt="cabo rojo place" width="100%" height="100%" class="wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text playa wow fadeInUp" data-wow-delay='0.4s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        Renovated to enjoy the experience to the fullest, you will find kiosks, Caribbean restaurants, and a pool inspired by its beaches.
      <?php } else { ?>
        Renovado para disfrutar la experiencia al máximo, en él encontrarás kioskos, restaurantes caribeños, y una alberca inspirada en sus playas.
      <?php } ?>
    </p>
    <p class="blue-text big-port-text wow fadeInUp" data-wow-delay='0.5s'>
        <?php if(Lang\getLang() == 'en'){ ?>
          <b>Enjoy Port Roatan!</b>
        <?php } else { ?>
          <b>¡DISFRUTA PORT ROATÁN!</b>
        <?php } ?>
    </p>
  </div>

  <div class="content images two-img">
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