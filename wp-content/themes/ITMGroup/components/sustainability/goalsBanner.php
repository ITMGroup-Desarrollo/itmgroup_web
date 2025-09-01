
<?php
if(Lang\getLang() == 'en'){
  define('GOAL_TITLE_IMG', '/assets/sustainability/goals/sustainable-development.png');
  define('TRABAJO_GOAL_IMG', '/assets/sustainability/goals/ods 8 eng.png');
  define('CIUDADES_GOAL_IMG', '/assets/sustainability/goals/ods 11 eng.png');
  define('VIDA_GOAL_IMG', '/assets/sustainability/goals/ods 14 eng.png');
  define('GENERO_GOAL_IMG', '/assets/sustainability/goals/ods 5 eng.png');
  define('DESIGUALDAD_GOAL_IMG', '/assets/sustainability/goals/ods 10 eng.png');
  define('OBJETIVOS_GOAL_IMG', '/assets/sustainability/goals/ods 17 eng.png');
}
else{
  define('GOAL_TITLE_IMG', '/assets/sustainability/goals/logo sostenible.jpg');
  define('TRABAJO_GOAL_IMG', '/assets/sustainability/goals/TRABAJO.jpg');
  define('CIUDADES_GOAL_IMG', '/assets/sustainability/goals/CIUDADES.jpg');
  define('VIDA_GOAL_IMG', '/assets/sustainability/goals/VIDA.jpg');
  define('GENERO_GOAL_IMG', '/assets/sustainability/goals/GENERO.jpg');
  define('DESIGUALDAD_GOAL_IMG', '/assets/sustainability/goals/DESIGUALDAD.jpg');
  define('OBJETIVOS_GOAL_IMG', '/assets/sustainability/goals/OBJETIVOS.jpg');
}

define('CUADRO_BG', '/assets/sustainability/goals/cuadro.png');
?>

<section id="goalsBanner">
  <div class="content unset-content" style="max-width: 1000px">
    <div class="d-flex flex-row flex-wrap justify-center align-center">
      <div class="g-col title-col">
      <img width="100%" height="100%" alt="trabajo goal" mnr-src="<?= Util\root(); ?><?= GOAL_TITLE_IMG ?>">
      </div>
    </div>
    <div class="d-flex flex-row flex-wrap justify-center align-center">
      <div class="g-col img-col">
      <img width="100%" height="100%" alt="trabajo goal" mnr-src="<?= Util\root(); ?><?= TRABAJO_GOAL_IMG ?>">
      </div>
      <div class="g-col img-col">
        <img width="100%" height="100%" alt="ciudades goal" mnr-src="<?= Util\root(); ?><?= CIUDADES_GOAL_IMG ?>">
      </div>
      <div class="g-col img-col">
        <img width="100%" height="100%" alt="vida goal" mnr-src="<?= Util\root(); ?><?= VIDA_GOAL_IMG ?>">
      </div>
      <div class="g-col img-col">
        <img width="100%" height="100%" alt="genero goal" mnr-src="<?= Util\root(); ?><?= GENERO_GOAL_IMG ?>">
      </div>
      <div class="g-col img-col">
        <img width="100%" height="100%" alt="desigualdad goal" mnr-src="<?= Util\root(); ?><?= DESIGUALDAD_GOAL_IMG ?>">
      </div>
      <div class="g-col img-col">
        <img width="100%" height="100%" alt="objetivos goal" mnr-src="<?= Util\root(); ?><?= OBJETIVOS_GOAL_IMG ?>">
      </div>
    </div>
  </div>
  <div class="content cuadros"  style="max-width: 1100px">
    <div class="d-flex flex-row flex-wrap justify-center align-center">
      <div class="cuadro-col-container">
      <div class="cuadro-frame" mnr-src="<?= Util\root() ?><?= CUADRO_BG ?>">
        <p class="blue-text">
          <?php if(Lang\getLang() == 'en'){ ?>
            <b>DIGNIFIED <br> EMPLOYMENT</b>
          <?php } else { ?>
            <b>EMPLEO <br> DIGNO</b>
          <?php } ?>
        </p>
      </div>
      </div>
      <div class="cuadro-col-container"
      >
      <div class="cuadro-frame" mnr-src="<?= Util\root() ?><?= CUADRO_BG ?>">
      <p class="blue-text">
        <?php if(Lang\getLang() == 'en'){ ?>
          <b>ECONOMIC <br> AND SOCIAL <br> DEVELOPMENT</b>
        <?php } else { ?>
          <b>DESARROLLO <br> ECONÓMICO <br> Y SOCIAL</b>
        <?php } ?>
      </p>  
      </div>

      </div>
      <div class="cuadro-col-container">
        <div class="cuadro-frame" mnr-src="<?= Util\root() ?><?= CUADRO_BG ?>">
        <p class="blue-text">
          <?php if(Lang\getLang() == 'en'){ ?>
            <b>ENVIRONMENTAL <br> PROTECTION</b>
          <?php } else { ?>
            <b>PROTECCIÓN DEL <br> MEDIO AMBIENTE</b>
          <?php } ?>
        </p>  
        </div>

      </div>
    </div>
  </div>

</section>

<style type="text/css">

.title-col {
  width: 66.666666%;
  flex: 0 0 66.666666%;
}

.img-col{
  width: 16.66666%;
  flex: 0 0 16.66666%;
}

.img-col > img{
  object-fit: cover;
}

.content.cuadros {
  padding: 10px 0;
}

.cuadro-col-container {
  width: 33.33333%;
  flex: 0 0 33.33333%;
  padding: 15px;
}

.cuadro-frame {
  width: 100%;
  min-height: 150px;
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
}
.cuadro-frame p {
  text-align: center;
}

@media screen and (max-width:1100px) {
  .cuadro-col-container {
    padding: 10px;
    max-height: 15vw;
    display: flex;
    align-items: center;
  }
  .cuadro-frame p {
    min-height: auto;
  }
  
  .cuadro-frame p {
    font-size: 22px;
  }
}
@media screen and (max-width:920px) {
  .cuadro-col-container {
    padding: 0 10px;
  }
  .cuadro-frame p {
    font-size: 18px;
  }
}
@media screen and (max-width:720px) {
  .cuadro-frame p {
    font-size: 16px;
  }
}


.g-col, #goalsBanner .unset-content{
  padding: 15px;
}

@media screen and (max-width:950px) {
  .g-col, #goalsBanner .unset-content{
    padding: 10px;
  }
}
@media screen and (max-width:680px) {
  .img-col{
    width: 33.33333%;
    flex: 0 0 33.33333%;
  }

  .g-col{
    padding: 2vw;
  }
  .#goalsBanner .unset-content{
    padding: 10px 20px;
  }

  .content.cuadros {
    max-width: unset;
    width: 100%;
    padding: 0 10px;
  }

  .cuadro-col-container {
    padding: 2px;

  }
  .cuadro-frame p {
    font-size: 9px;
  }
}
</style>