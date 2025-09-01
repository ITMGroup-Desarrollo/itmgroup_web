<section id="mainBanner">
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="<?= Util\root() ?>/assets/FOTO_HOME.jpg"
          width="100%" height="100%"
          alt="main banner" class="placeholder">
        <video width="100%" height="100%" autoplay muted loop playsinline preload="auto" id="bannerVideo">
          <source src="<?= Util\root() ?>/assets/itmgroup-banner.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
  <div class="content mainContent">
    <h1 class="title wow fadeInUp" data-wow-delay='0.2s'>
    </h1>

    <h2 class="text wow fadeInUp" data-wow-delay='1s'>

    </h2>

  </div>
  <div class="contentControls content wow fadeInUp" data-wow-delay='1s'>
    <div class="swiper-pagination">

    </div>
    <a class="scrollIndicator" href="#mainDescription">
      <p class=" text">
        <?php if (Lang\getLang() == 'en') { ?>
          Scroll Down
        <?php } else { ?>
          Desliza hacia abajo
        <?php } ?>
      </p>
      <img class="arrow"
        mnr-src="<?= Util\root() ?>/assets/FLECHA.png"
        alt="arrow down"
        width="100%"
        height="100%">
    </a>
  </div>
</section>


<style type="text/css">
  #mainBanner {
    background-position: center;
  }

  #mainBanner:before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 2;
    /* background-color: #00000029; */
    top: 0;
    left: 0;
  }

  #mainBanner .mainContent {
    z-index: 3;
    min-height: 500px;
    height: 100vh;
    max-height: 900px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-bottom: 18px;
    padding-top: 100px;
  }

  #mainBanner video {
    height: 100%;
    width: 100%;
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    margin-top: auto;
    object-fit: cover;
  }

  #mainBanner .swiper {
    z-index: 0;
    position: absolute;
    width: 100%;
    height: 100%;
  }

  #mainBanner .swiper .swiper-slide {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    width: 100%;
    height: 100%;
    position: relative;
  }

  #mainBanner .swiper .swiper-slide img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
  }

  #mainBanner .swiper .swiper-slide:has(video.show) img {
    display: none;
  }

  #mainBanner .mainContent .title {
    color: var(--white);
    margin-bottom: 4px;
    line-height: 120%;
    letter-spacing: 1.5px;
    font-size: 34px;
    text-align: center;
    font-family: 'Nexa-ExtraLight';
    text-transform: uppercase;
  }

  #mainBanner .mainContent .title br {
    display: none;
  }

  #mainBanner .mainContent .text {
    color: var(--white);
    margin-bottom: 61px;
    font-size: 29px;
    font-family: 'Nexa-ExtraLight';
    line-height: 106%;
    text-align: center;
  }

  #mainBanner .contentControls {
    position: absolute;
    bottom: 38px;
    left: 0;
    right: 0;
    margin: auto;
    max-width: 1340px;
    display: flex;
    gap: 10px;
    z-index: 4;
    align-items: center;
    justify-content: flex-start;
  }

  #mainBanner .contentControls .swiper-pagination {
    position: relative;
    top: 0;
    bottom: 0;
    max-width: 93px;
    text-align: left;
    --swiper-pagination-bullet-width: 13px;
    --swiper-pagination-bullet-height: 13px;
  }

  #mainBanner .contentControls .swiper-pagination .swiper-pagination-bullet {
    background-color: rgba(0, 0, 0, 0);
    border: solid 1px var(--white);
    opacity: 1;
  }

  #mainBanner .contentControls .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: var(--azulClaro);
    border: solid 1px var(--azulClaro);
  }

  #mainBanner .contentControls .scrollIndicator {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  #mainBanner .contentControls .scrollIndicator .text {
    color: var(--white);
    font-family: Nexa-Heavy;
    font-size: 14px;
  }

  #mainBanner .contentControls .scrollIndicator .arrow {
    width: 20px;
    height: 20px;
    animation: upAndDown 2s ease-in-out infinite;
  }

  @keyframes upAndDown {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-10px);
    }
  }

  @media screen and (max-width:600px) {
    #mainBanner .mainContent .title br {
      display: block;
    }
  }

  @media screen and (max-width:500px) {
    #mainBanner .mainContent .text {
      font-size: 20px;
    }
  }
</style>

<script type="text/javascript">
  Mnr.onLoad(() => {
    let swiper = new Swiper("#mainBanner .swiper", {
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 13000,
        disableOnInteraction: false,
      },
      pagination: {
        el: "#mainBanner .swiper-pagination",
        clickable: true
      }
    });

    Mnr.e('#mainBanner .swiper-slide:has(video) video').elems[0].onplay = (el) => {
      Mnr.e(el.target).addClass('show');
    };
  });

  const video = document.getElementById('bannerVideo');
  video.addEventListener('loadeddata', () => {
    document.querySelector('.placeholder').style.display = 'none';
  });
</script>