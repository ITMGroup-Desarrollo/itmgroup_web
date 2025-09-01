<section id="footer">
  <!-- <div class="whats">
    <a href="https://api.whatsapp.com/send/?phone=9982417235&text&type=phone_number&app_absent=0" ref="nofollow" target="_blank">
      <img class="img" width="100%" height="100%" mnr-src="<?= Util\root() ?>/assets/whats.png">
    </a>
  </div> -->
  <div class="content">
    <div class="col1 col wow fadeInUp" data-wow-delay='0.2s'>
      <h3 class="text">Menu</h3>
      <?php if (Lang\getLang() == 'en') { ?>
        <p class="option <?= (Util\getPageName() == 'home') ? 'selected' : '' ?> ">
          <a href="/"><span>Group</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'sustainability') ? 'selected' : '' ?> ">
          <a href="/sustainability"><span>sustainability</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'press') ? 'selected' : '' ?> ">
          <a href="/press"><span>press</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'contact') ? 'selected' : '' ?> ">
          <a href="/contact"><span>contact</span></a>
        </p>
      <?php } else { ?>
        <p class="option <?= (Util\getPageName() == 'inicio') ? 'selected' : '' ?> ">
          <a href="/"><span>Grupo</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'sostenibilidad') ? 'selected' : '' ?> ">
          <a href="/sostenibilidad"><span>sostenibilidad</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'prensa') ? 'selected' : '' ?> ">
          <a href="/prensa"><span>prensa</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'contacto') ? 'selected' : '' ?> ">
          <a href="/contacto"><span>contacto</span></a>
        </p>
      <?php } ?>
    </div>

    <div class="col2 col wow fadeInUp" data-wow-delay='0.0s'>
      <a href="<?= (Lang\getLang() == 'en') ? '/en' : '/' ?>" aria-label="inicio">
        <img class="logo" mnr-src="<?= Util\root() ?>/assets/logo-ITM-Group-Blanco.png" width="100%" height="auto" alt="logo">
      </a>
    </div>

    <div class="col3 col wow fadeInUp" data-wow-delay='0.2s'>
      <a class="icon" aria-label="facebook" target="_blank" rel="nofollow"
        href="https://www.facebook.com/ITMGroup.MX/">
        <img mnr-src="<?= Util\root() ?>/assets/ICONO_FACEBOOK.png" width="100%" height="100%" alt="facebook">
      </a>
      <a class="icon" aria-label="instagram" target="_blank" rel="nofollow"
        href="https://www.instagram.com/itmgroupmx/">
        <img mnr-src="<?= Util\root() ?>/assets/ICONO_INSTAGRAM.png" width="100%" height="100%" alt="instagram">
      </a>

      <!-- <p class="option"><a href="mailto:contacto@itmgroup.mx" rel="nofollow" target="_blank"><span>contacto@itmgroup.mx</span></a></p> -->
    </div>


    <div class="bottom">
      <p class="text"><b>ITM GROUP 2024</b> <br>
        <?php if (Lang\getLang() == 'en') { ?>
          All rights reserved
        <?php } else { ?>
          Todos los derechos reservados
        <?php } ?>
      </p>
    </div>
  </div>
</section>


<style>
  #footer {
    background-color: var(--azulOscuro);

    padding-bottom: 60px;
  }

  #footer .whats {
    position: fixed;
    right: var(--padSides);
    bottom: 40px;
    z-index: 6;
    display: none;
  }

  body:has(#menu.scrolled) #footer .whats {
    display: block;
  }

  #footer .whats a {
    display: block;
  }

  #footer .whats a img {
    width: 50px;
    height: 50px;
  }

  #footer .content {
    display: flex;
    flex-wrap: wrap;
    padding-top: 116px;
  }

  #footer .col1 .text {
    font-family: Nexa-Heavy;
    color: white;
    font-size: 17px;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  #footer .col {
    display: flex;
    flex-direction: column;
  }

  #footer .col1 {
    width: 30%;
  }

  #footer .col2 {
    width: 40%;
    justify-content: center;
    align-items: center;
  }

  #footer .col3 {
    width: 30%;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 15px;
  }

  #footer .col3 .option {
    width: 100%;
    margin-top: 20px;
    text-align: right;
    display: block !important;
  }

  #footer .logo {
    max-width: 300px;
  }


  #footer .option {
    font-family: Nexa-Light;
    text-transform: capitalize;
    color: var(--white);
    font-size: 17px;
    cursor: pointer;
    letter-spacing: 0.4px;
    transition: all 0.5s;
    margin-bottom: 5px;
  }

  #footer .option span {
    transition: color 0.3s;
    position: relative;
  }

  #footer .option span:before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    bottom: -2px;
    margin: auto;
    height: 1.5px;
    background-color: rgba(0, 0, 0, 0);
    transition: all 0.3s;
  }

  #footer .option:not(.selected):hover span:before,
  #footer .option.selected span:before,
  #footer .option:has(.selected) span:before {
    background-color: var(--white);
  }

  #footer .icon {
    width: 35px;
    height: 35px;
  }

  #footer .icon:hover {
    opacity: 0.5;
  }

  #footer .bottom {
    width: 100%;
    margin-top: 61px;
  }

  #footer .bottom .text {
    margin-bottom: 20px;
    text-align: center;
    color: var(--white);
    font-family: Nexa-Light;
    font-size: 19px;
  }

  #footer .bottom .text br {
    display: none;
  }




  @media screen and (max-width: 700px) {
    #footer .content {
      padding-top: 170px;
    }

    #footer .col2 {
      position: absolute;
      top: 20px;
      left: 0;
      right: 0;
      margin: auto;
      height: 150px;
    }

    #footer .col1,
    #footer .col3 {
      width: 100%;
    }

    #footer .col3 {
      justify-content: center;
      margin-top: 30px;
    }

    #footer .col3 .option {
      text-align: center;
    }
  }

  @media screen and (max-width: 500px) {
    #footer .bottom .text br {
      display: block;
    }
  }
</style>