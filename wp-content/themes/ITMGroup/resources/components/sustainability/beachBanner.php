
<section id="beachBanner" >
  <div class="swiper">
    <div class="swiper-wrapper">
       <div class="swiper-slide">
         <img src="<?= Util\root() ?>/assets/sustainability/sostenibilidad-itm-01.jpg" 
              width="100%" height="100%" 
              alt="beach banner" class="placeholder">
       </div>
    </div>
	</div>
	<div class="content beachBannerContent">

    <img class="logo-genera wow fadeInUp" mnr-src="<?= Util\root(); ?>/assets/logo-genera-blanco.png" height="100%" width="100%" alt="logo Genera">


		<h2 class="text wow fadeInUp" data-wow-delay='1s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        We promote the development of sustainable tourism
      <?php } else { ?>
        Impulsamos el desarrollo del turismo sostenible
      <?php } ?>
    </h2>

	</div>
</section>


<style type="text/css">
  #beachBanner{
    background-position: center;
  }
  #beachBanner:before{
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 2;
    background-color: #00000059;
    top: 0;
    left: 0;
  }
  #beachBanner .beachBannerContent{
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
  #beachBanner video{
    height: 100%;
    width: 100%;
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    margin-top: auto;
    object-fit: cover;
  }
  #beachBanner .swiper{
    z-index: 0;
    position: absolute;
    width: 100%;
    height: 100%;
  }
  #beachBanner .swiper .swiper-slide{
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    width: 100%;
    height: 100%;
    position: relative;
  }
  #beachBanner .swiper .swiper-slide img{
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
  }
  #beachBanner .swiper .swiper-slide:has(video.show) img{
    display: none;
  }
  #beachBanner .beachBannerContent .title{
    color: var(--white);
    margin-bottom: 4px;
    line-height: 120%;
    letter-spacing: 1.5px;
    font-size: 34px;
    text-align: center;
    font-family: 'Nexa-ExtraLight';
    text-transform: uppercase;
  }
  #beachBanner .beachBannerContent .title br{
    display: none;
  }
  #beachBanner .beachBannerContent .text{
    color: var(--white);
    margin-bottom: 61px;
    font-size: 29px;
    font-family: 'Nexa-ExtraLight';
    line-height: 106%;
    text-align: center;
  }

  @media screen and (max-width:600px){
    #beachBanner .beachBannerContent .title br{
      display: block;
    }
  }
  @media screen and (max-width:500px){
    #beachBanner .beachBannerContent .text{
      font-size: 20px;
    }
  }

  .logo-genera {
    max-width: 526px;
    width: 100%;
    height: auto;
  }

  @media screen and (max-width: 960px){
    .logo-genera{
      max-width: 40cqi;
    }
  }
</style>