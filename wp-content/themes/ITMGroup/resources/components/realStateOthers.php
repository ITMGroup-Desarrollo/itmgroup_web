<?php
define('REGGATO_IMG', '/assets/real-state/other-projects/Residencial-reggato.png');
define('PUNTA_ARENA_IMG', '/assets/real-state/other-projects/residencial-punta-arena.png');
define('PUNTA_VISTA_IMG', '/assets/real-state/other-projects/residencial-punta-vsta.png');
define('EL_FARO_IMG', '/assets/real-state/other-projects/Residencial-el-faro.png');
define('PUERTO_MARINO_IMG', '/assets/real-state/other-projects/Puerto-marino.png');
define('PALMA_GRAND_IMG', '/assets/real-state/other-projects/palma-grand.png');
define('PALMA_REAL_IMG', '/assets/real-state/other-projects/residencial-palma-real.png');
define('ALDEA_KIIN_IMG', '/assets/real-state/other-projects/aldea kiin.png');
define('ALDEA_HA_IMG', '/assets/real-state/other-projects/aldea ha.jpeg');
define('ALDEA_KAAN_IMG', '/assets/real-state/other-projects/logo-aldeakaan-01.png');
define('ALBORADA_PUERTO_MORELOS_IMG', '/assets/real-state/other-projects/Residencial-alborada.png');
?>

<section id="real-state-others">
  <b class="content blue-text others-title">
    <?php if(Lang\getLang() == 'en'){ ?>
      Other projects...
    <?php } else { ?>
      Otros proyectos...
    <?php } ?>
  </b>
  <div class="content">
    <div class="d-flex flex-row flex-wrap justify-center align-center">
      <div class="img-container cols-3 cols-xs-6">
        <img class="" width="100%" height="100%" alt="reggato" mnr-src="<?= Util\root(); ?><?= REGGATO_IMG ?>">
      </div>
      <div class="img-container cols-3 cols-xs-6">
        <img class="" width="100%" height="100%" alt="Punta Arena" mnr-src="<?= Util\root(); ?><?= PUNTA_ARENA_IMG ?>">
      </div>
      <div class="img-container cols-3 cols-xs-6">
        <img class="" width="100%" height="100%" alt="Punta Vista" mnr-src="<?= Util\root(); ?><?= PUNTA_VISTA_IMG ?>">
      </div>
      <div class="img-container cols-4 cols-xs-6">
        <img class="" width="100%" height="100%" alt="El Faro" mnr-src="<?= Util\root(); ?><?= EL_FARO_IMG ?>">
      </div>
      <div class="img-container cols-4 cols-xs-6">
        <img class="" width="100%" height="100%" alt="Puerto Marino" mnr-src="<?= Util\root(); ?><?= PUERTO_MARINO_IMG ?>">
      </div>
      <div class="img-container cols-4 cols-xs-6">
        <img id="palma-grand" class="" width="100%" height="100%" alt="Palma Grand" mnr-src="<?= Util\root(); ?><?= PALMA_GRAND_IMG ?>">
      </div>
      <div class="img-container cols-4 cols-xs-6">
        <img class="" width="100%" height="100%" alt="Palma Real" mnr-src="<?= Util\root(); ?><?= PALMA_REAL_IMG ?>">
      </div>
      <div class="img-container cols-4 cols-xs-6">
        <img class="" width="100%" height="100%" alt="Aldea K'iin" mnr-src="<?= Util\root(); ?><?= ALDEA_KIIN_IMG ?>">
      </div>
      <div class="img-container cols-4 cols-xs-6">
        <img class="" width="100%" height="100%" alt="Aldea Ha" mnr-src="<?= Util\root(); ?><?= ALDEA_HA_IMG ?>">
      </div>
      <div class="img-container cols-4 cols-xs-6">
        <img class="" width="100%" height="100%" alt="Aldea Kaan" mnr-src="<?= Util\root(); ?><?= ALDEA_KAAN_IMG ?>">
      </div>
      <div class="img-container cols-4 cols-xs-6">
        <img class="" width="100%" height="100%" alt="Alborada Puerto Morelos" mnr-src="<?= Util\root(); ?><?= ALBORADA_PUERTO_MORELOS_IMG ?>">
      </div>
    </div>

  </div>
</section>

<style type="text/css">
  .others-title.blue-text {
    padding-top: 150px;
    font-size: 3rem;
  }

  .content .img-container {
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .content .img-container>img {
    object-fit: cover;
    max-height: 200px;
    height: auto;
    width: 80%;
  }

  .content .img-container> #palma-grand {
    width: 65%;
  }

  .cols-3 {
    width: 33.33333%;
    flex: 0 0 33.33333%;
  }

  .cols-4 {
    width: 25%;
    flex: 0 0 25%;
  }

  @media screen and (max-width:900px) {
    .content .img-container>img {
      width: 90%;
    }

    .content .img-container> #palma-grand {
      width: 75%;
    }
  }

  @media screen and (max-width:600px) {
    .others-title.blue-text {
      padding-top: 100px;
      font-size: 2.5rem;
    }

    .content .img-container {
      padding: 8px;
    }

    .cols-xs-6 {
      width: 50%;
      flex: 0 0 50%;
    }

    .cols-xs-12 {
      width: 100%;
      flex: 0 0 100%;
    }
  }
</style>