<section id="divisions">
  <div class="content ">
      <div class="titleHolder">
        <h2 class="sectionTitle wow fadeInUp">
          <?php if(Lang\getLang() == 'en'){ ?>
              3 business divisions.<br> The same purpose
          <?php } else { ?>
              3 divisiones de negocio.<br> Un mismo propósito 
          <?php } ?>
        </h2>
      </div>
      <div class="iconCard">
        <img class="icon wow fadeInUp" data-wow-delay='0.1s'
             mnr-src="<?= Util\root() ?>/assets/boat.gif"
             alt="icon"
             width="100%"
             height="100%">
      </div>
      <div class="iconCard wow fadeInUp">
        <img class="icon" data-wow-delay='0.2s'
             mnr-src="<?= Util\root() ?>/assets/comp.gif"
             alt="icon"
             width="100%"
             height="100%">
      </div>
      <div class="iconCard wow fadeInUp">
        <img class="icon last" data-wow-delay='0.3s'
             mnr-src="<?= Util\root() ?>/assets/estrado_1.gif"
             alt="icon"
             width="100%"
             height="100%">
      </div>


      <div class="card wow fadeInUp" division-card data-wow-delay='0.1s'>
        <img class="banner"
             mnr-src="<?= Util\root() ?>/assets/FOTO_PUERTO DE CRUCERO.JPG"
             alt="banner"
             width="100%"
             height="100%"
        >
        
        <h3 class="title wow fadeInRight" >
          <?php if(Lang\getLang() == 'en'){ ?>
              Cruise<br> Ports
          <?php } else { ?>
              Puertos<br> de Crucero
          <?php } ?>
        </h3>
        <div class="textHolder">
          
          <p class="text">
            <?php if(Lang\getLang() == 'en'){ ?>
                Experiences beyond the dock. Each cruise port provides spaces for entertainment, fun and relaxation inspired by the beauty of its location.
            <?php } else { ?>
                Experiencias más allá del muelle. Cada puerto de cruceros brinda espacios de entretenimiento, diversión y relajación inspirados en la belleza de su ubicación.
            <?php } ?>
          </p>
          <p class="exploreText">
            
            <?php if(Lang\getLang() == 'en'){ ?>
               <a href="/ports" > Explore</a>
            <?php } else { ?>
               <a href="/puertos" > Explorar</a>
            <?php } ?>
          </p>
        </div>
        <div class="grad"></div>
      </div>

      <div class="card wow fadeInUp" division-card data-wow-delay='0.2s'>
        <img class="banner"
             mnr-src="<?= Util\root() ?>/assets/FOTO_DESARROLLO.png"
             alt="banner"
             width="100%"
             height="100%"
        >
        <h3 class="title wow fadeInRight" >
          <?php if(Lang\getLang() == 'en'){ ?>
              Real Estate<br> Development
          <?php } else { ?>
              Desarrollo<br> Inmobiliario
          <?php } ?>
        </h3>
        <div class="textHolder">
          
          <p class="text">
            <?php if(Lang\getLang() == 'en'){ ?>
                Creating community in the Mexican Caribbean. Houses, apartments and residential lots, each development is designed to provide a space of comfort and relaxation to its inhabitants.
            <?php } else { ?>
                Creando comunidad en el Caribe Mexicano. Casas, Departamentos y lotes residenciales, cada desarrollo está diseñado para brindar un espacio de comodidad y relajación a sus habitantes.
            <?php } ?>
          </p>
          <p class="exploreText">
            <?php if(Lang\getLang() == 'en'){ ?>
               <a href="/real-state" > Explore</a>
            <?php } else { ?>
               <a href="/desarrollo-inmobiliario" > Explorar</a>
            <?php } ?>
          </p>
        </div>
        <div class="grad"></div>
      </div>

      <div class="card wow fadeInUp" division-card data-wow-delay='0.3s'>
        <img class="banner"
             mnr-src="<?= Util\root() ?>/assets/FOTO_HOSPITALIDAD.jpg"
             alt="banner"
             width="100%"
             height="100%"
        >
        <h3 class="title wow fadeInRight" >
          <?php if(Lang\getLang() == 'en'){ ?>
              Hospitality and<br> Entertainment
          <?php } else { ?>
              Hospitalidad y<br> Entretenimiento
          <?php } ?>
        </h3>
        <div class="textHolder">
          
          <p class="text">
            <?php if(Lang\getLang() == 'en'){ ?>
                With more than 30 years of experience, Cancun Center is a world-class venue with four spacious levels and the capacity to host events of any magnitude. Aloft Cancún is our hotel located in the heart of Cancún, minutes from nightclubs and the best beaches.
            <?php } else { ?>
                Con más de 30 años de experiencia, Cancun Center es un recinto de talla mundial con cuatro espaciosos niveles y capacidad de recibir eventos de cualquier magnitud. Aloft Cancún es nuestro hotel con ubicación en el corazón de Cancún, a minutos de nightclubs y las mejores playas.
            <?php } ?>
          </p>
          <p class="exploreText">
            <?php if(Lang\getLang() == 'en'){ ?>
               <a href="/hospitality" > Explore</a>
            <?php } else { ?>
               <a href="/hospitalidad" > Explorar</a>
            <?php } ?>
          </p>
        </div>
        <div class="grad"></div>
      </div>

  </div>
</section>


<style type="text/css">
  #divisions{
    padding-top: 63px;
  }
  #divisions .content{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    max-width: 100%;
    width: 100%;
  }
  #divisions .titleHolder{
    width: 100%;
    margin-bottom: 60px;
    padding-right: var(--padSides);
    padding-left: var(--padSides);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  #divisions .titleHolder .text{
    margin-top: 40px;
    text-align: center;
    color: var(--azulOscuro);
    max-width: 886px;
    font-size: 26px;
    font-family: 'Nexa-Light';
    line-height: 124%;
  }

  #divisions .iconCard{
    width: 33.33%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 20px;
  }
  #divisions .iconCard .icon{
    max-width: 150px;
    max-height: 150px;
  }
  #divisions .iconCard .icon.last{
    max-width: 114px;
  }

  #divisions .card{
    position: relative;
    width: 33.33%;
    padding: 20px 47px 47px 40px;
    max-height: 956px;
    height: 100vh;
    min-height: 400px;
    flex-direction: column;
    justify-content: flex-end;
    align-items: flex-start;
    overflow: hidden;
    display: flex;
    margin-top: 42px;
  }
  #divisions .card .banner{
    z-index: 1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    object-fit: cover;
    position: absolute;
    transition: all 0.8s;
  }
  #divisions .card:hover .banner{
    transform: scale(1.1);
  }
  #divisions .card a{
    z-index: 4;
    left: 0;
    width: 100%;
    height: 100%;
    position: absolute;
  }
  #divisions .card .title{
    color: var(--white);
    z-index: 3;
    position: relative;
    width: 100%;
    font-family: Nexa-Heavy;
    font-size: 36px;
    transition: all 0.3s ease;
    line-height: 110%;
  }
  #divisions .card .textHolder {
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.5s ease;
    z-index: 3;
    position: relative;
    bottom: 0;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding-bottom: 7px;
    max-height: 1px;
    max-width: 370px;
  }
  #divisions .card:hover .textHolder {
    opacity: 1;
    transform: translateY(0);
    max-height: 155px;
    margin-top: 40px;
  }
  #divisions .card .textHolder .text{
    color: var(--white);
    font-size: 15px;
    line-height: 117%;
    text-align: justify;
  }
  #divisions .card .textHolder .exploreText{
    color: var(--white);
    text-transform: uppercase;
    font-family: 'Nexa-Light';
    font-size: 20px;
    margin-top: 20px;
    text-decoration: underline;
    text-underline-offset: 3px;
  }
  #divisions .card:before{
    opacity: 0.2;
    height: 100%;
    background: black;
    transition: all 0.3s ease;
    z-index: 2;
    position: absolute;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
    opacity: 0;
    content: '';
  }
  #divisions .card .grad{
    background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgb(0 0 0 / 72%) 100%);
    z-index: 2;
    position: absolute;
    width: 100%;
    height: 80%;
    bottom: 0;
    left: 0;
    transition: all 0.3s ease;
  }
  #divisions .card:hover:before{
    opacity: 0.5;
  }


  @media screen and (max-width: 1140px){
    #divisions .card .title{
      font-size: 2.5cqi;
      line-height: 110%;
    }
    #divisions .card{
      height: 500px;
    }
  }
  @media screen and (max-width: 900px){
    #divisions .card{
      padding: 20px 30px 47px 30px;
    }
    #divisions .iconCard .icon{
      max-width: 80px;
      max-height: 80px;
    }
    #divisions .iconCard .icon.last{
      max-width: 70px;
    }
  }
  @media screen and (max-width: 800px){
    #divisions .card{
      height: 400px;
    }
    #divisions .card .title{
      font-size: 2.5cqi;
    }
    #divisions .card:hover .textHolder {
      max-height: 300px;
    }
    #divisions .card .textHolder .exploreText{
      font-size: 16px;
    }
  }
  @media screen and (max-width: 630px){
    #divisions .card .title{
      font-size: 18px;
    }
    
    #divisions .card{
      width: 100%;
      margin-top: 0;
      height: 300px;
      min-height: unset;
    }
    #divisions .card.inView .textHolder{
      max-height: 200px;
      transform: translateY(0);
      margin-top: 15px;
      opacity: 1;
    }
    #divisions .card.inView:before{
      opacity: 0.5;
    }

    #divisions .titleHolder {
      margin-bottom: 40px;
    }
    #divisions .iconCard {
      margin-top: 0px; 
      margin-bottom: 50px;
    }
    #divisions .iconCard .icon{
      max-width: 60px;
      max-height: 60px;
    }
    #divisions .iconCard .icon.last{
      max-width: 50px;
    }

    #divisions .titleHolder .title{
      font-size: 25px;
    }
  }
  @media screen and (max-width: 600px){
    #divisions .titleHolder .text{
      font-size: 20px;
    }
  }
  @media screen and (max-width: 500px){
    #divisions .titleHolder .text{
      font-size: 16px;
    } 
  }
</style>

