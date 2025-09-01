<?php
  if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
  }

  /* 
  Template Name: reef-check
  */

  get_header();

  ?>

<!-- <section id="reef-check"> -->
<div id="main-content">

  <section class="contact-section section-content">
    <div class="image-container">
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/Banner.jpg" alt="Reef Chek">
      <div class="overlay">
        <h1 class="image-container-text ">
          <?php if (Lang\getLang() == 'en') { ?>
            CORAL REEF MONITORING <br><strong>BAHÍA HONDA.</strong>
          <?php } else { ?>
            MONITOREO DEL ARRECIFE DE CORAL <br><strong>BAHÍA HONDA.</strong>
          <?php } ?>
        </h1>
      </div>
    </div>
  </section>

  <section class="section-content">
    <div class="content contentDescription">
      <h2 class="sectionTitle wow fadeInUp mb-8">
        Bahía Honda, Cabo Rojo
      </h2>
      <p class="text wow fadeInUp" data-wow-delay='0.2s'>
        <?php if (Lang\getLang() == 'en') { ?>
          The Bahía Honda Reef is located on the coast of the province of Pedernales, approximately 800 meters away from Port Cabo Rojo. Construction began in 2023 and is currently in the second phase of work.
        <?php } else { ?>
          El arrecife Bahía Honda, ubicado en la costa de la provincia de Pedernales, aproximadamente a 800 metros de distancia de Port Cabo Rojo, el cual inició en el año 2023 y actualmente se encuentra en la segunda fase de obra.
        <?php } ?>

      </p>
      <p class="text wow fadeInUp" data-wow-delay='0.2s'>
        <?php if (Lang\getLang() == 'en') { ?>
          This reef has coral species such as <i>M. meanderings, D. labyrinthiformis, and O. faveolata</i>, as well as a wide diversity of reef fish species and invertebrates such as snapper, grouper, and parrot fish, shrimp, lobsters, and urchins.
        <?php } else { ?>
          Este arrecife posee especies de coral como <i>M. meandrites, D. labyrinthiformis y O. faveolata</i>, además de una amplia diversidad de especies de peces arrecifes e invertebrados como lo son peces pargo, mero y loro, camarones, langostas y erizos.
        <?php } ?>
      </p>

    </div>
  </section>

  <section class="full-img-section section-content">
    <img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/MAPA-MONITOREO-ARRECIFE-BH-RD.jpg" alt="Reef Chek Mapa">
    <?php if (Lang\getLang() == 'en') { ?>
    	
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/ODS-14-VIDA-MARINA-ENG.png" class="ods" alt="ODS 14 Vida submarina">
      <div class="pinmap-container">
        	<img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/pinmap.png" class="pinmap" alt="Pin Map"><span class="pin-text">REEF CHECK<br>MONITORING</span>
        </div>
    <?php } else { ?>
    <img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/ODS-14-VIDA-MARINA.jpg" class="ods" alt="Reef Chek Life Below Water">
    <div class="pinmap-container">
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/pinmap.png" class="pinmap" alt="Pin Map"><span class="pin-text">MONITOREO<br>REEF CHECK</span>
        </div>
    <?php } ?>
  </section>

  <section class="section-content">
    <div class="titleHolder">
      <h2 class="sectionTitle wow fadeInUp">
        <?php if (Lang\getLang() == 'en') { ?>
          <span class="title-light">Collaboration agreement between</span> <br class="d-lg-block"><strong>Reef Check and Port Cabo Rojo</strong>
        <?php } else { ?>
          <span class="title-light">Convenio de colaboración <br class="d-lg-none">entre</span>
          <br class="d-lg-block"><strong>Reef Check y Port Cabo Rojo</strong>
        <?php } ?>
      </h2>
    </div>
    <div class="icon-seccion">
      <div class="iconCard wow fadeInUp">
        <img class="icon wow fadeInUp" data-wow-delay='0.1s' mnr-src="<?= Util\root() ?>/assets/reef-check/icono-calendar.svg" alt="Icon calendar" width="100%" height="100%">
        <p class="p-text">
          <?php if (Lang\getLang() == 'en') { ?>
            ITM Red Port Investments and Reef Check Dominican Republic signed the Agreement on June 25, 2023, in Pedernales.
          <?php } else { ?>
            El Convenio se firmó el 25 de junio del 2023 en la ciudad de Pedernales por ITM Red Port Investments y Reef Check Dominican Republic.
          <?php } ?>
        </p>
      </div>
      <div class="iconCard wow fadeInUp">
        <img class="icon wow fadeInUp" data-wow-delay='0.2s' mnr-src="<?= Util\root() ?>/assets/reef-check/icono-hands.svg" alt="Icon hands" width="100%" height="100%">
        <p class="p-text">
          <?php if (Lang\getLang() == 'en') { ?>
            This agreement's objective is to evaluate and monitor the health of the Bahía Honda reef complex before, during, and after the construction of Port Cabo Rojo.
          <?php } else { ?>
            El objetivo de este Convenio es evaluar y monitorear la salud del complejo arrecifal de Bahía Honda antes, durante y después de la contrucción de Port Cabo Rojo.
          <?php } ?>
        </p>
      </div>
      <div class="iconCard wow fadeInUp">
        <img class="icon last wow fadeInUp" data-wow-delay='0.3s' mnr-src="<?= Util\root() ?>/assets/reef-check/icono-vitals.svg" alt="Icon vitals" width="100%" height="100%">
        <p class="p-text">
          <?php if (Lang\getLang() == 'en') { ?>
            Reef Check Dominicana monitors the Bahía Honda Reef every two months and presents a comparative report with previous months.
          <?php } else { ?>
            Reef Check Dominicana monitorea bimestralmente el Arrecife Bahía Honda y presenta un reporte comparativo con meses anteriores.
          <?php } ?>
        </p>
      </div>
    </div>

    <?php if (Lang\getLang() == 'en') { ?>
      <a href="/wp-content/uploads/2024/06/Acuerdo-Reef-Check-VP.pdf" target="_blank" class="button button1 wow fadeInUp">READ AGREEMENT</a>
    <?php } else { ?>
      <a href="/wp-content/uploads/2024/06/Acuerdo-Reef-Check-VP.pdf" target="_blank" class="button button1 wow fadeInUp">LEER CONVENIO</a>
    <?php } ?>
  </section>

  <section class="section-content">
    <img class="separadorImg" width="100%" height="100%" alt="Firma de convenio Reef Check" mnr-src="<?= Util\root(); ?>/assets/reef-check/Firma-del-Convenio-Reef-Check.jpg">
  </section>

  <section class="section-content">
    <div class="content flex-row flex-reverse-wrap content-who">
      <div class="text-center">
        <img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/LOGO-REEF-CHECK-RD.png" class="logo-reef" width="75%" height="75%" alt="Logo Reef Check">
      </div>
      <div class="card-content">
        <h2 class="title-card mb-8">
          <?php if (Lang\getLang() == 'en') { ?>
            Who is Reef Check Dominicana?
          <?php } else { ?>
            ¿Quién es Reef Check Dominicana?
          <?php } ?>
        </h2>
        <p class="p-text">
          <?php if (Lang\getLang() == 'en') { ?>
            <b>Reef Check Dominicana</b> is a foundation that since 2004 has as its primary objective the care and conservation of the coastal marine resources of the Dominican Republic, providing sustainable solutions so that the country's tourism growth goes hand in hand with the care of the reef systems and Marine life.
          <?php } else { ?>
            <b>Reef Check Dominicana</b> es una fundación que desde el 2004, tiene como principal objetivo el cuidado y la conservación de los recursos marinos costeros de la República Dominicana dando soluciones sostenibles para que el crecimiento turístico del país vaya de la mano con el cuidado de los sistemas arrecifales y la vida marina.
          <?php } ?>
        </p>
      </div>
    </div>
  </section>

  <section class="section-content">
    <h2 class="title-card text-center">
      <?php if (Lang\getLang() == 'en') { ?>
        What has been detected in the monitoring?
      <?php } else { ?>
        ¿Qué se ha detectado en los monitoreos?
      <?php } ?>
    </h2>
    <?php if (Lang\getLang() == 'en') { ?>
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/INFOGRAFIA-MONITOREO-CR-ING.jpg" class="infography-reef" alt="Infografia Monitoreo Reef Chek">
    <?php } else { ?>
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/reef-check/INFOGRAFIA-MONITOREO-CR-ESP.jpg" class="infography-reef" alt="Reef Chek Monitoring Infographic">
    <?php } ?>
  </section>

  <section id="banners" class="section-content">

    <div class="content contentBahia parallaxHolder">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img class="" alt="banner1" mnr-src="<?= Util\root() ?>/assets/reef-check/CARRUSEL-2.jpg"></div>
          <div class="swiper-slide"><img class="" alt="banner2" mnr-src="<?= Util\root() ?>/assets/reef-check/CARRUSEL-3.jpg"></div>
          <div class="swiper-slide"><img class="" alt="banner3" mnr-src="<?= Util\root() ?>/assets/reef-check/CARRUSEL-4.jpg"></div>
          <div class="swiper-slide"><img class="" alt="banner4" mnr-src="<?= Util\root() ?>/assets/reef-check/CARRUSEL-5.jpg"></div>
          <div class="swiper-slide"><img class="" alt="banner5" mnr-src="<?= Util\root() ?>/assets/reef-check/CARRUSEL-1.jpg"></div>
        </div>
      </div>
      <p class="title wow fadeInUp" data-wow-delay='0.2s'>
        <?php if (Lang\getLang() == 'en') { ?>
          Access the
        <?php } else { ?>
          Accede al
        <?php } ?>
      </p>
      <p class="bigText wow fadeInUp" data-wow-delay='0.2s'>
        <?php if (Lang\getLang() == 'en') { ?>
          <b>COMPLETE MATERIAL COLLECTED IN THE MONITORING</b>
        <?php } else { ?>
          <b>Material completo recabado en los monitoreos</b>
        <?php } ?>
      </p>
      <br>
      <?php if (Lang\getLang() == 'en') { ?>
        <a href="https://www.dropbox.com/scl/fo/m17g7u3diodmsvepg4sl1/ABf1EnC5oL81jhR4a3na_iw?rlkey=8yy8y05srrxff0ec4gumfssku&e=1&st=4k55hsge&dl=0" target="_blank" class="button button1 wow fadeInUp" data-wow-delay='0.3s'>GET IN</a>
      <?php } else { ?>
        <a href="https://www.dropbox.com/scl/fo/m17g7u3diodmsvepg4sl1/ABf1EnC5oL81jhR4a3na_iw?rlkey=8yy8y05srrxff0ec4gumfssku&e=1&st=4k55hsge&dl=0" target="_blank" class="button button1 wow fadeInUp" data-wow-delay='0.3s'>Entrar</a>
      <?php } ?>

    </div>

  </section>

  <section class="section-content">
    <div class="content flex-row justify-content-center">
      <div><img class="" alt="Logo Fundacion ITM Genera" mnr-src="<?= Util\root() ?>/assets/reef-check/1.jpg" width="200"></div>
      <div><img class="" alt="Logo Port Cabo Rojo" mnr-src="<?= Util\root() ?>/assets/reef-check/2.jpg" width="200"></div>
      <div><img class="" alt="Logo Reef Check" mnr-src="<?= Util\root() ?>/assets/reef-check/3.jpg" width="200"></div>
    </div>
  </section>

</div>
<!-- </section> -->

<?php
get_footer();
?>

<style type="text/css">
  body {
    overflow-x: hidden;
  }

  i {
    font-style: italic;
  }
  
  .titleHolder {
  
  }
  .d-lg-block {
  	display: none;
  }
  .p-text {
    color: var(--azulOscuro);
    font-size: 16px;
    font-family: 'Nexa-Light';
    line-height: 124%;
    margin: 0 auto 0 auto;
    text-align: center;
  }

  .text-center {
    text-align: center;
  }

  .justify-content-center {
    justify-content: center;
  }

  .mb-8 {
    margin-bottom: 24px;
  }

  .flex-row {
    display: flex;
    flex-direction: row;
    gap: 35px;
  }

  .section-content {
    padding-bottom: 60px;
    gap: 25px;
  }

  .reef-section {
    text-align: center;
    position: relative;
    width: 100%;
    margin-top: -25px
  }

  .full-img-section img {
    width: 100%;
  }

  .full-img-section .ods {
    width: 55px;
    position: absolute;
    top: 15px;
    right: 25px;
  }
  .full-img-section .pinmap-container {
    position: absolute;
    top: 15px;
    right: 115px;
    display: flex;
    align-items: center;
  }
  .full-img-section img.pinmap {
    width: 15px;
    margin-right: 6px;
  }
  
  .full-img-section .pin-text {
    text-transform: uppercase;
    color: white;
    font-weight: bold;
    font-size: 10px;
    line-height: 12px;
  }

  .image-container {
    max-height: 100vh;
    width: 100%;
    position: relative;
    overflow: hidden;
  }

  .image-container img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
  }

  .image-container:hover img {
    transform: scale(1.01);
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: end;
    justify-content: center;
    background: rgb(0 0 0 / 50%);
  }

  .image-container-text {
    color: var(--white);
    font-size: 1.5rem;
    /* font-weight: bold; */
    margin-bottom: 20px;
    text-align: center;
  }

  .image-container-text span {
    font-weight: bold;
  }

  .contact-content {
    max-width: 900px;
  }

  .contentDescription .text {
    text-align: center;
    color: var(--azulOscuro);
    /* max-width: 886px; */
    font-size: 16px;
    font-family: 'Nexa-Light';
    line-height: 124%;
    margin: 0 auto 24px auto;
  }

  .icon-seccion {
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  .icon-seccion .iconCard {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 20px;
  }

  .icon-seccion .iconCard .icon {
    max-width: 60px;
    max-height: 60px;
  }

  .icon-seccion .iconCard p {
    text-align: center;
    max-width: 75%;
  }

  .separadorImg {
    width: 100%;
    object-fit: cover;
    height: auto;
  }

  #banners .contentBahia {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-height: 550px;
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
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .swiper,
  swiper-container {
    position: absolute;
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
    font-size: 25px;
    margin-bottom: 8px;
  }

  #banners .contentBahia .bigText {
    text-transform: uppercase;
    line-height: 100%;
    position: relative;
    z-index: 2;
    font-size: 20px;
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

  .card-content {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
  }

  .title-card {
    color: var(--azulOscuro);
    font-family: Nexa-Heavy;
    font-size: 25px;
    text-align: center;
    line-height: 118%;
  }

  .flex-reverse-wrap {
    flex-wrap: wrap-reverse;
  }

  .logo-reef {
    width: 55%;
    height: auto;
  }

  .top-description {
    padding: 80px 0;
  }

  .contact-title {
    text-align: center;
  }

  .infography-reef {
    width: 85%;
  }

  @media screen and (min-width:800px) {
    .section-content {
      padding-bottom: 100px;
    }
    
    .content-who {
    	max-height: 350px;
    }

    .image-container-text {
      font-size: 2.4rem;
    }

    .contentDescription .text {
      font-size: 26px;
    }
    .d-lg-block {
  		display: block;
  	}
    .d-lg-none {
    	display: none;
    }

    .p-text {
      font-size: 26px;
      text-align: left;
    }

    .full-img-section .ods {
      width: 120px;
      top: 75px;
      right: 100px;
    }
    
    .full-img-section .pinmap-container {
    top: 75px;
    right: 300px;
  }
  .full-img-section img.pinmap {
    width: 28px;
    margin-right: 10px;
  }
  
  .full-img-section .pin-text {
    font-size: 20px;
    line-height: 22px;
  }

    .title-card {
      font-size: 37px;
      text-align: left;
    }
    
    .title-light{
    	font-family: 'Nexa-Light';
    }

    .icon-seccion .iconCard .icon {
      max-width: 150px;
      max-height: 150px;
    }

    .icon-seccion .iconCard {
      width: 33%;
      display: flex;
      flex-direction: column;
      gap: 10px;
      align-items: center;
      justify-content: center;
      margin-top: 10px;
      margin-bottom: 20px;
    }

    .icon-seccion {
      flex-direction: row;
      width: 100%;
    }

    .p-text {
      margin: 0 auto 24px auto;
    }

    .flex-reverse-wrap {
      flex-wrap: nowrap;
    }

    .logo-reef {
      width: 75%;
      height: 100%;
    }

    #banners .contentBahia .title {
      font-size: 37px;
    }

    #banners .contentBahia .bigText {
      font-size: 35px;
    }

    .image-container-text {
      font-size: 2.8rem;
      margin-bottom: 35px;

    }

    .separadorImg {
      height: 550px;
    }

    .infography-reef {
      width: 40%;
    }
  }
</style>

<script>
  Mnr.onLoad(() => {
    let swiper = new Swiper("#banners .contentBahia .swiper", {
      speed: 3000,
      loop: true,
      effect: "fade",
      spaceBetween: 20,
      autoplay: {
        disableOnInteraction: false,
      },
      breakpoints: {
        400: {
          spaceBetween: 20
        },
        600: {
          spaceBetween: 40,
        },
        800: {
          spaceBetween: 60,
        },
      }
    });
  });
</script>