<?php
define('PILLAR_1_IMG', '/assets/sustainability/pillars/turismo.png');
define('PILLAR_2_IMG', '/assets/sustainability/pillars/medio ambiente.png');
define('PILLAR_3_IMG', '/assets/sustainability/pillars/derechos humanos.png');

?>

<section id="pillars">
  <div class="content d-flex flex-row flex-wrap justify-center align-center">
    <div class="pillars-title-col">
      <p class="blue-text big-text" style="margin: 10px 0 !important;">
        <?php if(Lang\getLang() == 'en'){ ?>
          <b> OUR CORE PRINCIPLES</b>  
        <?php } else { ?>
          <b> NUESTROS PILARES</b>  
        <?php } ?>
      </p>
    </div>
    <div class="p-col pillar-col wow fadeInUp">
      <img width="100%" height="100%" alt="turismo sostenible" mnr-src="<?= Util\root(); ?><?= PILLAR_1_IMG ?>">
      <p class="blue-text big-text">
        <?php if(Lang\getLang() == 'en'){ ?>
          <b> SUSTAINABLE <br>TOURISM</b>
        <?php } else { ?>
          <b> TURISMO <br>SOSTENIBLE</b>
        <?php } ?>
      </p>
    </div>
    <div class="p-col pillar-col wow fadeInUp">
      <img width="100%" height="100%" alt="turismo sostenible" mnr-src="<?= Util\root(); ?><?= PILLAR_2_IMG ?>">
      <p class="blue-text big-text">
        <?php if(Lang\getLang() == 'en'){ ?>
          <b> ENVIRONMENTAL <br> PROTECTION </b>
        <?php } else { ?>
          <b> MEDIO <br>AMBIENTE</b>
        <?php } ?>
      </p>
    </div>
    <div class="p-col pillar-col wow fadeInUp">
      <img width="100%" height="100%" alt="turismo sostenible" mnr-src="<?= Util\root(); ?><?= PILLAR_3_IMG ?>">
      <p class="blue-text big-text">
        <?php if(Lang\getLang() == 'en'){ ?>
          <b> HUMAN <br>RIGHTS</b>
        <?php } else { ?>
          <b> DERECHOS <br>HUMANOS</b>
        <?php } ?>
      </p>
    </div>
  </div>
</section>

<style type="text/css">
  #pillars {
    padding: 20px 0;
  }
  .pillars-title-col {
    width: 100%;
    flex: 0 0 100%;
  }

  .pillars-title-col p{
    max-width: 100%;
  }

  .pillar-col{
    width: 18%;
    flex: 0 0 18%;
  }

  .pillar-col img{
    width: 100%;
    aspect-ratio: 16 / 9;
  }

  .p-col img{
    padding: 0 40px;
  }

  .p-col > p{
    font-size: 20px!important;
  }

  @media screen and (max-width:1000px) {
    .pillar-col{
      width: 22%;
      flex: 0 0 22%;
    }

    .p-col img{
      padding: 0 8vw;
    }
  }

  @media screen and (max-width:800px) {
    .pillar-col{
      width: 24%;
      flex: 0 0 24%;
    }
  }

  @media screen and (max-width:700px) {
    .pillar-col{
      width: 26%;
      flex: 0 0 26%;
    }

    .p-col > p{
      font-size: 16px !important;
    }

    .pillars-title-col .big-text{
      font-size: 26px !important;
    }
  }

  @media screen and (max-width:600px) {
    .p-col > p{
      font-size: 14px !important;
    }

    .pillars-title-col .big-text{
      font-size: 24px !important;
    }
  }

  @media screen and (max-width:550px) {
    
    .p-col > p{
      font-size: 13px !important;
    }

    .pillars-title-col .big-text{
      font-size: 22px !important;
    }
  }
  
  @media screen and (max-width:480px) {

    .pillar-col{
      width: 33.33%;
      flex: 0 0 33.33%;
    }

    .p-col > p{
      font-size: 12px !important;
    }
  }
</style>