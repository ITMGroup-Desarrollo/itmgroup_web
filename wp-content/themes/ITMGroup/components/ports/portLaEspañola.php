<?php
define("LA_ESPANOLA_LOGO_IMG", "/assets/ports/la-española/la-espanola-logo.png");
?>

<section id="la-espanola">
  <div class="content d-flex align-center justify-center bottom-description">
    <p class="blue-text big-port-text wow fadeInUp" data-wow-delay='0.1s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        <b> Wait very soon... </b>
      <?php } else { ?>
        <b> Espera muy pronto... </b>
      <?php } ?>
    </p>
  </div>
  <div class="content d-flex align-center justify-center">

    <img mnr-src="<?= get_template_directory_uri(); ?><?= LA_ESPANOLA_LOGO_IMG ?>" alt="la española logo" width="100%" height="100%" class="espanola-logo wow fadeInUp" />

  </div>
</section>

<style type="text/css">
  #la-espanola{
    padding-bottom: 40px;
  }
  .espanola-logo {
    width: 40vw;
    max-width: 350px;
    object-fit: cover;
  }
  @media screen and (max-width: 600px){
    .espanola-logo {
      width: 50vw;
    }
  }
</style>
