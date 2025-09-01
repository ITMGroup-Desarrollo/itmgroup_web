<section id="groupBanner" class="huella-bg" mnr-src="<?= Util\root() ?>/assets/sustainability/huella.png">
  <div class="container d-flex">
    <div class="content">
      <div class="d-flex flex-row flex-wrap justify-center">
        <div class="description-text">
          <?php if (Lang\getLang() == 'en') { ?>
            <p class="blue-text big-text main-title" style="margin: 10px 0 !important;">
              <b> GENERA </b>
            </p>
            <p class="blue-text">GENERA is a second-tier non-profit foundation that promotes the closing of gaps through economic development in communities, encouraging and promoting high-impact social programs and projects.</p>
            <p class="blue-text">By promoting the development of sustainable local tourism, strengthening local capacities, encouraging human rights and the implementation of environmental and ocean conservation programs.</p>
            <p class="blue-text" style="margin-bottom: 0">The objective is that all our projects are managed from planning to evaluation with a vision of sustainable development.</p>
          <?php } else { ?>
            <p class="blue-text big-text main-title" style="margin: 10px 0 !important;">
              <b> FUNDACIÓN GENERA ITM</b>
            </p>
            <p class="blue-text">GENERA es una organización sin fines de lucro de segundo piso que fomenta el cierre de brechas a través del desarrollo económico en las comunidades, fomentando y apoyando programas y proyectos sociales de alto impacto.</p>
            <p class="blue-text">Promocionando el <b>desarrollo del turismo local sostenible</b>, fortaleciendo las capacidades locales, promoviendo los derechos humanos y la implementación de programas de conservación ambiental y oceanía.</p>
            <p class="blue-text" style="margin-bottom: 0">El objetivo es que todos nuestros proyectos se gestionen desde la planeación hasta la evaluación con una visión de desarrollo sostenible.</p>
          <?php } ?>
        </div>
        <div class="description-img parallaxHolder">
          <img class="" mnr-src="<?= Util\root() ?>/assets/sustainability/sostenibilidad-itm-02.jpg">
        </div>
        <div class="description-bottom">
          <p class="blue-text big-text" style="text-align: center;">
            <?php if (Lang\getLang() == 'en') { ?>
              <b> OUR GOALS FOR THE 2030 AGENDA </b>
            <?php } else { ?>
              <b> NUESTRAS ANCLAS EN LA AGENDA 2030 </b>
            <?php } ?>
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<style type="text/css">
  #groupBanner {
    height: auto;
    width: 100%;
  }

  #groupBanner .content {
    margin: auto;
  }

  #groupBanner .container {
    height: inherit;
    width: inherit;
    position: relative;
    z-index: 1;
    background-color: rgba(255, 255, 255, 0.95);
  }

  .huella-bg {
    object-fit: cover;
    position: relative;
    z-index: -1;
    background-size: auto 100%;
  }

  .description-text {
    width: 55%;
    flex: 0 0 55%;
  }

  .description-bottom {
    width: 100%;
    flex: 0 0 100%;
    padding-top: 80px;
  }

  .description-img {
    width: 45%;
    flex: 0 0 45%;
    height: auto;
  }

  .description-img>img {
    margin-top: -40px !important;
    height: 100%;
    object-fit: cover;
  }

  #groupBanner .blue-text {
    text-align: justify;
    max-width: inherit !important;
    margin-bottom: 40px;
  }

  @media screen and (min-width: 1400px) {
    .huella-bg {
      background-position-x: -10vh;
    }

    .description-text {
      padding: 0 30px;
    }
  }

  @media screen and (min-width: 1090px) {
    #groupBanner .container {
      padding-top: 40px;
    }

    .huella-bg {
      background-position-x: -20vw;
    }

    .description-text {
      padding: 0 40px 0 0;
    }
  }

  @media screen and (max-width: 1089px) {
    #groupBanner {
      height: auto;
      width: 100%;
    }

    #groupBanner .container {
      padding: 40px 0;
      padding-bottom: 0;
    }

    .description-text {
      width: 80%;
      flex: 0 0 80%;
      padding: 0;
      padding-bottom: 40px;
    }

    .description-img {
      width: 80%;
      flex: 0 0 80%;
      min-height: 75vh;
      height: auto;
    }

    .description-img>img {
      width: 100%;
      object-fit: cover;
    }

    .huella-bg {
      background-position-x: -30vw;
      background-size: auto 100vh;
    }
  }

  @media screen and (max-width: 580px) {
    .description-text {
      padding-bottom: 20px;
    }

    .description-bottom {
      width: 80%;
      flex: 0 0 80%;
    }

    .huella-bg {
      background-position-x: center;
      background-position-y: 30%;
      background-size: auto 70%;
    }

    #groupBanner .blue-text {
      margin-bottom: 15px;
    }

  }

  @media screen and (max-width: 531px) {
    #groupBanner .big-text.main-title {
      max-width: 300px !important;
      text-align: center;
    }
  }

  .overlay-content p {
    font-size: 16px;
    margin-bottom: 10px;
  }

  .overlay-content img {
    max-width: 100%;
    border-radius: 10px;
    margin-top: 20px;
  }
</style>