
<section id="treesVideo" >
  <div class="videoButtons wow fadeInUp" >
    <button class="mediaButton " >
       <img mnr-src="<?= Util\root(); ?>/assets/play.png" height="100%" width="100%" alt="play video">
    </button>
  </div>
  <div class="bannerHolder">
    <img class="banner" mnr-src="<?= Util\root() ?>/assets/Sostenibilidad.jpg" height="100%" width="100%">
  </div>
  <video width="100%" height="100%">
    <source src="<?= Util\root() ?>/assets/fundacion.mp4" type="video/mp4">
  </video>
</section>


<style type="text/css">
  #treesVideo{
    padding-top: 45.5%;
    cursor: pointer;
  }
  #treesVideo .videoButtons{
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
  #treesVideo.playing .videoButtons{
    opacity: 0;
  }
  #treesVideo .videoButtons .mediaButton{
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
 /* #treesVideo .videoButtons:hover .mediaButton{
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
  #treesVideo .videoButtons .text{
    font-size: 37px;
    font-family: Nexa-Light;
    text-align: center;
    color: var(--white);
    line-height: 120%;
  }
  
  #treesVideo .bannerHolder{
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
  #treesVideo.playing .bannerHolder{
    opacity: 0;
  }
  #treesVideo .bannerHolder:before{
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 2;
    background-color: #00000059;
    top: 0;
    left: 0;
  }
  #treesVideo .bannerHolder .banner{
    height: 100%;
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: auto;
    object-fit: cover;
  }
  #treesVideo video{
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
    #treesVideo{
      height: auto;
      padding-top: 50%;
    }

    #treesVideo .videoButtons .mediaButton{
      width: 7cqi;
      height: 7cqi;
      margin-top: 4cqi;
      margin-bottom: 4cqi;
    }
  }
  @media screen and (max-width: 700px){
    #treesVideo .videoButtons .mediaButton{
      width: 12cqi;
      height: 12cqi;
      margin-top: 5cqi;
      margin-bottom: 5cqi;
    }
  }
  
</style>

<script type="text/javascript">

  function setVideoControl(){
     let main = Mnr.e('#treesVideo');
     let video = Mnr.e('#treesVideo video');
     let playButton = Mnr.e('#treesVideo .videoButtons');


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