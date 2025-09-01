
<section id="videoBanner" >
  <div class="videoButtons wow fadeInUp" >
    <img class="logo wow fadeInUp" mnr-src="<?= Util\root(); ?>/assets/logo-genera-blanco.png" height="100%" width="100%" alt="logo Genera">
    <button class="mediaButton " >
       <img mnr-src="<?= Util\root(); ?>/assets/play.png" height="100%" width="100%" alt="play video">
    </button>
    <p class="text wow fadeInUp" >
      <?php if(Lang\getLang() == 'en'){ ?>
          SUSTAINABLE COMPANY<br> <b>The bridge between ITM Group and the communities.</b>
      <?php } else { ?>
          EMPRESA SUSTENTABLE<br> <b>El puente entre ITM Group y las comunidades.</b>
      <?php } ?>
    </p>
  </div>
  <div class="bannerHolder">
    <img class="banner" mnr-src="<?= Util\root() ?>/assets/Sostenibilidad.jpg" height="100%" width="100%">
  </div>
  <video width="100%" height="100%">
    <source src="<?= Util\root() ?>/assets/fundacion.mp4" type="video/mp4">
  </video>
</section>


<style type="text/css">
  #videoBanner{
    padding-top: 45.5%;
    cursor: pointer;
  }
  #videoBanner .videoButtons{
    z-index: 3;
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center; 
    flex-direction: column;
    opacity: 1;
    transition: all 0.5s;
/*    padding-top: 109px;*/
    padding-left: var(--padSides);
    padding-right: var(--padSides);
    left: 0;
    top: 0;
  }
  #videoBanner.playing .videoButtons{
    opacity: 0;
  }
  #videoBanner .videoButtons .mediaButton{
    all: unset;
    display: block;
    width: 80px;
    height: 80px;
    cursor: pointer;
    transition: all 0.5s;
    margin-top: 28px;
    margin-bottom: 54px;
    animation: expandShrink 3s infinite ease-in-out;
  }
 /* #videoBanner .videoButtons:hover .mediaButton{
    transform: scale(1.1);
  }*/
  @keyframes expandShrink {
    0%, 100% {
      transform: scale(1); /* Original size */
    }
    50% {
      transform: scale(1.1); /* Expand to 1.5 times the original size */
    }
  }
  #videoBanner .videoButtons .text{
    font-size: 37px;
    font-family: Nexa-Light;
    text-align: center;
    color: var(--white);
    line-height: 120%;
  }
  #videoBanner .videoButtons .logo{
    max-width: 526px;
    width: 100%;
    height: auto;
  }
  #videoBanner.playing .bannerHolder{
/*    display: none;*/
  }
  #videoBanner .bannerHolder{
    height: 100%;
    width: 100%;
    position: absolute;
    z-index: 2;
    left: 0;
    top: 0;
    margin-top: auto;
    object-fit: cover;
    opacity: 1;
    transition: all 0.5s;
  }
  #videoBanner.playing .bannerHolder{
    opacity: 0;
  }
  #videoBanner .bannerHolder:before{
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 2;
    background-color: #00000059;
    top: 0;
    left: 0;
  }
  #videoBanner .bannerHolder .banner{
    height: 100%;
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: auto;
    object-fit: cover;
  }
  #videoBanner video{
    height: 100%;
    width: 100%;
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    margin-top: auto;
    object-fit: cover;

  }
  @media screen and (max-width: 960px){
    #videoBanner{
      height: auto;
      padding-top: 50%;
    }
    #videoBanner .videoButtons .text{
      font-size: 3cqi;
    }
    #videoBanner .videoButtons .logo{
      max-width: 40cqi;
    }
    #videoBanner .videoButtons .mediaButton{
      width: 7cqi;
      height: 7cqi;
      margin-top: 4cqi;
      margin-bottom: 4cqi;
    }
  }
  @media screen and (max-width: 700px){
    #videoBanner .videoButtons .text{
      font-size: 3cqi;
    }
    #videoBanner .videoButtons .logo{
      max-width: 40cqi;
    }
    #videoBanner .videoButtons .mediaButton{
      width: 12cqi;
      height: 12cqi;
      margin-top: 5cqi;
      margin-bottom: 5cqi;
    }
  }
  
</style>

<script type="text/javascript">

  function setVideoControl(){
     let main = Mnr.e('#videoBanner');
     let video = Mnr.e('#videoBanner video');
     let playButton = Mnr.e('#videoBanner .videoButtons');


     playButton.addEvent('click',e=>{
        if(main.hasClass('playing')){
           main.removeClass('playing');
           video.elems[0]?.pause();
        }
        else{
           main.addClass('playing');
           video.elems[0]?.play();
           main.setInView(50);
        }
     });


     video.setViewTrigger(null,()=>{
        Mnr.u.wait(()=>{
           main.removeClass('playing');
           video.elems[0]?.pause();
        },500);
     });
  }


	Mnr.onLoad(()=>{
    setVideoControl();
  });
</script>