<section id="banners">
  <div class="content contentBahia parallaxHolder">
    <img class="bannerImg" width="100%" height="100%" alt="banner" mnr-src="<?= Util\root() ?>/assets/FOTO_BAHIA.jpg">
    <img class="icon wow fadeInUp" data-wow-delay='0.0s' width="100%" height="100%" alt="icon" mnr-src="<?= Util\root() ?>/assets/reef check.png ">
    <p class="title wow fadeInUp" data-wow-delay='0.2s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Monitoring
      <?php } else { ?>
        Monitoreo
      <?php } ?>
    </p>
    <p class="bigText wow fadeInUp" data-wow-delay='0.2s'>
      <?php if (Lang\getLang() == 'en') { ?>
        <b>Honda bay reef in pedernales, rd</b>
      <?php } else { ?>
        <b>Arrecife bahía honda en pedernales, rd</b>
      <?php } ?>
    </p>
    <p class="text wow fadeInUp" data-wow-delay='0.2s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Alliance with the organization Reef Check Dominican.
      <?php } else { ?>
        Alianza con la organización Reef Check Dominican.
      <?php } ?>
    </p>
    <?php if (Lang\getLang() == 'en') { ?>
      <a href="/en/reef-check-bahia-honda" class="button button1 wow fadeInUp" data-wow-delay='0.3s'>view more</a>
    <?php } else { ?>
      <a href="/monitoreo-bahia-honda/" class="button button1 wow fadeInUp" data-wow-delay='0.3s'>conoce más</a>
    <?php } ?>

  </div>

  <div class="content contentExp" mnr-src="<?= Util\root() ?>/assets/banner1.jpg">
    <p class="bigText wow fadeInUp" data-wow-delay='0.0s'>
      <?php if (Lang\getLang() == 'en') { ?>
        We are constantly moving<br><b>creating experiences for you.</b>
      <?php } else { ?>
        Nos encontramos en constante movimiento<br><b>creando experiencias para ti.</b>
      <?php } ?>
    </p>
  </div>

  <div class="content contentText">
    <p class="text wow fadeInUp" data-wow-delay='0.0s'>
      <?php if (Lang\getLang() == 'en') { ?>
        We are proudly <br><b>a Mexican company</b>
      <?php } else { ?>
        Somos orgullosamente <br><b>una empresa mexicana</b>
      <?php } ?>
    </p>
  </div>
</section>


<style type="text/css">
  #banners {}

  #banners .contentBahia {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-height: 447px;
    padding-right: var(--padSides);
    padding-left: var(--padSides);
    width: 100%;
    max-width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  #banners .contentBahia:before {
    content: '';
    z-index: 1;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }

  #banners .contentBahia .icon {
    max-width: 80px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    z-index: 2;
    position: relative;
    margin-bottom: 20px;
  }

  #banners .contentBahia .text,
  #banners .contentBahia .title {
    color: var(--white);
    text-align: center;
    font-family: Nexa-ExtraLight;
    position: relative;
    z-index: 2;
  }

  #banners .contentBahia .title {
    font-size: 37px;
  }

  #banners .contentBahia .bigText {
    text-transform: uppercase;
    line-height: 100%;
    position: relative;
    z-index: 2;
  }

  #banners .contentBahia .text {
    font-size: 25px;
    margin-bottom: 25px;
  }

  #banners .contentBahia .button {
    margin-bottom: 14px;
    position: relative;
    z-index: 2;
  }


  #banners .contentExp {
    margin-top: 130px;
    margin-bottom: 60px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-height: 406px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    max-width: 1058px;
    padding-right: var(--padSides);
    padding-left: var(--padSides);
  }

  #banners .contentExp:before {
    content: '';
    z-index: 1;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }

  #banners .contentExp .bigText {
    line-height: 100%;
    position: relative;
    z-index: 2;
  }


  #banners .contentText {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding-bottom: 77px;
  }

  #banners .contentText .text {
    color: var(--azulOscuro);
    text-align: center;
    text-transform: uppercase;
    font-size: 38px;
    font-family: 'Nexa-ExtraLight';
    line-height: 109%;
  }

  @media screen and (max-width: 900px) {
    #banners .contentBahia {
      min-height: 300px;
      padding-top: 60px;
      padding-bottom: 60px;
    }

    #banners .contentBahia .title {
      font-size: 25px;
      margin-bottom: 20px;
    }

    #banners .contentBahia .bigText {
      font-size: 20px;
    }

    #banners .contentBahia .text {
      font-size: 20px;
      margin-top: 10px;
    }

    #banners .contentExp {
      margin-top: 100px;
      margin-bottom: 40px;
      min-height: 300px;
      padding-top: 60px;
      padding-bottom: 60px;
    }

    #banners .contentText .text {
      font-size: 25px;
      line-height: 120%;
    }
  }
</style>