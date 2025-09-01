<?php
define('CABO_ROJO_LOGO_IMG', '/assets/ports/cabo-rojo/Cabo rojo.png');
define('CABO_ROJO_PLACE_ONE_IMG', '/assets/ports/cabo-rojo/Port-Cabo-Rojo-Muelle-Completo.jpg');

define('CABO_ROJO_BEACH_IMG', '/ports/cabo-rojo/cabo-rojo-04.jpg');
define('CABO_ROJO_PARTY_IMG', '/ports/cabo-rojo/cabo-rojo-05.jpg');
define('CABO_ROJO_XTREME_IMG', '/ports/cabo-rojo/cabo-rojo-06.jpg');
?>

<section id="cabo-rojo">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= CABO_ROJO_LOGO_IMG ?>" alt="cabo rojo logo" width="100%" height="100%" class="cabo-rojo-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <?php if(Lang\getLang() == 'en'){ ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
        Taking inspiration from its distinctive land, Port Cabo Rojo takes us through a mining town with magical spaces and stories of the destination. The port will be able to receive up to 4 cruise ships simultaneously. 
      </p>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        The project aims to be an interactive experience through attractions such as swimming pools, bodies of water, museums, themed worlds, shows, venues, and cultural and gastronomic offerings.
      </p>
    <?php } else { ?>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
        Tomando inspiración en su distintivo suelo, Port Cabo Rojo nos lleva a través de un pueblo minero con espacios mágicos e historias del destino. El puerto podrá recibir hasta 4 cruceros de manera simultánea.
      </p>
      <p class="blue-text wow fadeInUp" data-wow-delay='0.2s'>
        El proyecto pretende ser una experiencia interactiva a través de atracciones como alberca, cuerpos de agua, museos, mundos temáticos, espectáculos, locales y oferta cultural y gastronómica.
      </p>
    <?php } ?>
  </div>

  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= CABO_ROJO_PLACE_ONE_IMG ?>" alt="cabo rojo place" width="100%" height="100%" class="cabo-rojo-place wow fadeInUp bannerImg" />
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
    <?php if(Lang\getLang() == 'en'){ ?>
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