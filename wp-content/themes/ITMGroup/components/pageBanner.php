
<section id="pageBanner" mnr-src="<?= Util\root() ?>/assets/<?= $args['img']; ?>">
  <div class="grad"></div>
	<div class="content ">
    
		<h1 class="title wow fadeInRight" data-wow-delay='0s'>
        <?= $args['title']; ?>
    </h1>
    
	</div>
</section>


<style type="text/css">
  #pageBanner{
  	background-position: center;
  }
  #pageBanner .content{
    z-index: 2;
    min-height: 300px;
    height: 59vh;
    max-height: 500px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-direction: column;
    padding-bottom: 60px;
    padding-top: 160px
  }
  #pageBanner .grad{
    background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgb(0 0 0 / 72%) 100%);
    z-index: 1;
    position: absolute;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
    transition: all 0.3s ease;
  }
  #pageBanner .title{
    color: var(--white);
    line-height: 110%;
    letter-spacing: 1.5px;
    font-size: 45px;
    font-family: 'Nexa-Heavy';
    text-transform: uppercase;
    text-align: center;
  }

  

  @media screen and (max-width:500px){
    #pageBanner .title{
      margin-bottom: 33px;
      letter-spacing: 1.5px;
      font-size: 23px;
    }
    #pageBanner .text{
      margin-bottom: 25px;
      font-size: 19px;
    }
  }
</style>
