<?php
define("LA_BAJA_LOGO_IMG", "/assets/ports/la-baja/logo_la-baja.png");
?>

<section id="la-baja">
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

    <img mnr-src="<?= get_template_directory_uri(); ?><?= LA_BAJA_LOGO_IMG ?>" alt="la baja" width="100%" height="100%" class="labaja-logo wow fadeInUp" />

  </div>
</section>

<style type="text/css">
  #la-baja{
    padding-bottom: 40px;
  }
  .labaja-logo {
    width: 40vw;
    max-width: 350px;
    object-fit: cover;
  }
  @media screen and (max-width: 600px){
    .labaja-logo {
      width: 50vw;
    }
  }
</style>
