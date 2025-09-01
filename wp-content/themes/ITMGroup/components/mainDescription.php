<section id="mainDescription">
  <div class="content contentDescription">
    <img class="logo wow fadeInUp" mnr-src="<?= Util\root(); ?>/assets/logo-ITM-Group.png" alt="logo" width="100%" height="100%">
    <p class="text wow fadeInUp" data-wow-delay='0.2s'>
      <?php if (Lang\getLang() == 'en') { ?>
        Leader in real estate developments, hospitality and cruise ports, ITM Group is a Mexican and multidisciplinary company with more than <b>30 years of experience</b> in the Mexican Caribbean and the world.
      <?php } else { ?>
        Líder en desarrollos inmobiliarios, hospitalidad y puertos de cruceros, ITM Group es una empresa mexicana y multidisciplinaria con más de <b>30 años de experiencia</b> en el Caribe Mexicano y el mundo.
      <?php } ?>

    </p>

  </div>
  <div class="content contentNumbers">
    <div class="card" mnr-src="<?= Util\root() ?>/assets/marcas.jpg">
      <div class="cardContent">
        <div class="number" number-counter>
          <div class="wrap">
            <p>+ 1</p>
            <p>+ 5</p>
            <p>+ 10</p>
            <p>+ 15</p>
            <p>+ 20</p>
            <p>+ 25</p>
            <p>+ 30</p>
          </div>
        </div>
        <p class="text">
          <?php if (Lang\getLang() == 'en') { ?>
            Established<br> brands
          <?php } else { ?>
            Marcas<br> consolidadas
          <?php } ?>
        </p>
      </div>
    </div>
    <div class="card" mnr-src="<?= Util\root() ?>/assets/FOTO_MAPA.jpg">
      <div class="cardContent">
        <div class="number" number-counter>
          <div class="wrap">
            <p>+ 2</p>
            <p>+ 3</p>
            <p>+ 4</p>
            <p>+ 5</p>
            <p>+ 6</p>
            <p>+ 7</p>
            <p>+ 8</p>
            <p>+ 9</p>
          </div>
        </div>
        <p class="text">
          <?php if (Lang\getLang() == 'en') { ?>
            Promoted<br> Destinations
          <?php } else { ?>
            Destinos<br> impulsados
          <?php } ?>
        </p>
      </div>
    </div>
    <div class="card" mnr-src="<?= Util\root() ?>/assets/FOTO_HOME2.jpg">
      <div class="cardContent">
        <div class="number" number-counter>
          <div class="wrap">
            <p>+ 1000</p>
            <p>+ 1500</p>
            <p>+ 2000</p>
            <p>+ 2500</p>
            <p>+ 3000</p>
            <p>+ 3500</p>
            <p>+ 4000</p>
          </div>
        </div>
        <p class="text">
          <?php if (Lang\getLang() == 'en') { ?>
            Talents
          <?php } else { ?>
            Talentos
          <?php } ?>
        </p>
      </div>
    </div>
  </div>

  <div class="content contentTrajectory">
    <p class="text wow fadeInUp" data-wow-delay='0.2s'>
      <?php if (Lang\getLang() == 'en') { ?>
        A career accompanied by unparalleled projects.<br>Each one of them inspires us to continue creating unique experiences for our clients and visitors.
      <?php } else { ?>
        Una trayectoria acompañada de proyectos inigualables.<br>Cada uno de ellos nos inspira a continuar creando experiencias únicas para nuestros clientes y visitantes.
      <?php } ?>
    </p>

  </div>


  <div class="content contentBanner parallaxHolder">
    <img class="bannerImg" width="100%" height="100%" alt="banner" mnr-src="<?= Util\root(); ?>/assets/FOTO_EXPERIENCIAS.jpg">
    <p class="bigText">
      <?php if (Lang\getLang() == 'en') { ?>
        Lifetime <b> experiences </b> made into <b><br>cruise ports</b>
      <?php } else { ?>
        <b>Experiencias</b> de por vida convertidas en <b>puertos de cruceros</b>
      <?php } ?>
    </p>
  </div>
</section>


<style type="text/css">
  #mainDescription {}

  #mainDescription .contentDescription .text,
  #mainDescription .contentTrajectory .text {
    text-align: center;
    color: var(--azulOscuro);
    max-width: 886px;
    font-size: 26px;
    font-family: 'Nexa-Light';
    line-height: 124%;
  }

  #mainDescription .contentDescription,
  #mainDescription .contentTrajectory {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding-top: 80px;
    padding-bottom: 80px;
  }

  #mainDescription .contentDescription .logo {
    max-width: 289px;
  }

  #mainDescription .contentDescription .text {
    margin-top: 51px;
    margin-bottom: 42px;
  }

  #mainDescription .contentDescription .text b {
    white-space: nowrap;
  }

  #mainDescription .contentNumbers {
    max-width: unset;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  #mainDescription .contentNumbers .card {
    width: 33.33%;
    position: relative;
    background-size: cover;
    background-position: center;
    padding-top: 27.5%;
  }

  #mainDescription .contentNumbers .card .cardContent {
    position: absolute;
    margin: auto;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    z-index: 2;
  }

  #mainDescription .contentNumbers .card:before {
    content: '';
    position: absolute;
    margin: auto;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
    background-color: rgb(0 0 0 / 50%);
  }

  #mainDescription .contentNumbers .card .number {
    overflow: hidden;
    --lineHeight: 35px;
    height: var(--lineHeight);
    line-height: var(--lineHeight);
    position: relative;
    color: var(--white);
  }

  #mainDescription .contentNumbers .card .number p {
    font-size: 31px;
    font-family: Nexa-Heavy;
    line-height: var(--lineHeight);
    color: var(--white);
  }

  #mainDescription .contentNumbers .card .number.setCounter .wrap {
    animation: counterMomentum 2s ease-in-out forwards;
  }

  #mainDescription .contentNumbers .card .text {
    font-size: 29px;
    font-family: Nexa-ExtraLight;
    color: var(--white);
    line-height: 116%;
    text-transform: uppercase;
    text-align: center;
  }

  @keyframes counterMomentum {
    0% {
      transform: translateY(0);
    }

    90% {
      transform: translateY(-95%);
    }

    100% {
      transform: translateY(calc((-100% + var(--lineHeight))));
    }
  }


  #mainDescription .contentTrajectory {
    padding-top: 100px;
    padding-bottom: 102px;
  }



  #mainDescription .contentBanner {
    width: 100%;
    max-width: unset;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    position: relative;
    padding-top: 122px;
    padding-bottom: 134px;
  }

  #mainDescription .contentBanner:before {
    content: '';
    position: absolute;
    margin: auto;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
    background-color: rgb(0 0 0 / 50%);
  }

  #mainDescription .contentBanner .bigText {
    max-width: 750px;
    position: relative;
    z-index: 2;
    margin-right: var(--padSides);
    margin-left: var(--padSides);
  }

  #mainDescription .contentBanner .bigText b {
    text-transform: uppercase;
  }


  @media screen and (min-width: 1500px) {
    #mainDescription .contentNumbers .card {
      padding-top: 0;
      height: 358px;
    }
  }

  @media screen and (max-width: 940px) {
    #mainDescription .contentDescription .text {
      max-width: 670px;
    }
  }

  @media screen and (max-width: 800px) {
    #mainDescription .contentTrajectory .text {
      max-width: 500px;
    }

    #mainDescription .contentNumbers .card .number p {
      font-size: 3.5cqi;
    }

    #mainDescription .contentNumbers .card .number {
      --lineHeight: 4.5cqi;
    }

    #mainDescription .contentNumbers .card .text {
      font-size: 3.5cqi;
    }
  }

  @media screen and (max-width: 660px) {

    #mainDescription .contentDescription .text,
    #mainDescription .contentTrajectory .text {
      max-width: 500px;
    }
  }

  @media screen and (max-width: 600px) {
    #mainDescription .contentDescription .logo {
      max-width: 200px;
    }

    #mainDescription .contentDescription .text,
    #mainDescription .contentTrajectory .text {
      font-size: 20px;
    }

    #mainDescription .contentDescription .text {
      margin-bottom: 0px;
    }

    #mainDescription .contentBanner,
    #mainDescription .contentTrajectory {
      padding-top: 60px;
      padding-bottom: 60px;
    }

    #mainDescription .contentBanner .text {
      font-size: 25px;
      max-width: 500px;
    }

    #mainDescription .contentTrajectory .text {
      max-width: 400px;
    }
  }

  @media screen and (max-width: 500px) {

    #mainDescription .contentDescription .text,
    #mainDescription .contentTrajectory .text {
      font-size: 16px;
    }

    #mainDescription .contentTrajectory .text {
      max-width: 300px;
    }
  }

  @media screen and (max-width: 420px) {
    #mainDescription .contentDescription .text {
      max-width: 300px;
    }
  }
</style>

<script type="text/javascript">
  function setCounters() {
    Mnr.e('[number-counter]').setViewTrigger((el) => {
      Mnr.e(el).addClass('setCounter');
    }, null, true);
  }

  Mnr.onLoad(() => {
    let time = 0;
    Mnr.e('[number-counter] .wrap').elems.forEach(el => {
      Mnr.e(el).css({
        'animationDelay': `${time}s`
      });
      time += 0.5;
    });
    Mnr.u.wait(() => {
      setCounters();
    }, 1600);
  });
</script>