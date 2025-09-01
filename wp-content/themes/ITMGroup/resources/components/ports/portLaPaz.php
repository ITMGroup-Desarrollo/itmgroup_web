<?php
define('LA_PAZ_LOGO_IMG', '/assets/ports/la-paz/La paz.png');
define('LA_PAZ_PLACE_ONE_IMG', '/assets/ports/la-paz/la-paz-01.jpg');

define('LA_PAZ_ROCK_IMG', '/ports/la-paz/la-paz-02.jpg');
define('LA_PAZ_COUPLE_IMG', '/ports/la-paz/la-paz-03.jpg');
?>

<section id="la-paz">
  <div class="content d-flex align-center justify-center">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= LA_PAZ_LOGO_IMG ?>" alt="cabo rojo logo" width="100%" height="100%" class="la-paz-logo wow fadeInUp" />
  </div>

  <div class="content d-flex align-center justify-center top-description">
    <p class="blue-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        Being in La Paz is something out of this world. <br />
        Port La Paz is an <b>oasis in the desert surrounded by crystalline waters</b> in each corner.
      <?php } else { ?>
        Estar en La Paz es algo fuera de este mundo. <br />
      Port La Paz es un <b>oasis en el desierto rodeado de aguas cristalinas</b> en cada rincon.
      <?php } ?>
    </p>
  </div>

  <div class="place-container content d-flex align-center justify-center parallaxHolder">
    <img mnr-src="<?= get_template_directory_uri(); ?><?= LA_PAZ_PLACE_ONE_IMG ?>" alt="cabo rojo place" width="100%" height="100%" class="wow fadeInUp bannerImg" />
  </div>

  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text wow fadeInUp" data-wow-delay='0.4s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        This town maintains energy <br />
        and it's always ready for the best party.
      <?php } else { ?>
        Este pueblo mantiene la energía <br />
        y siempre está listo para la mejor fiesta.
      <?php } ?>
    </p>
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
    width: 40vw;
    max-width: 600px;
    object-fit: cover;
  }
</style>