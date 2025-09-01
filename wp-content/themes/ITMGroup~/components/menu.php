<section id="menu">
  <div class="topBar"></div>
  <div class="content">
    <a href="<?= (Lang\getLang() == 'en') ? '/en' : '/' ?>" alt="inicio">
      <img class="logo wowt" data-wow-delay='0.5s'
        mnr-src="<?= get_template_directory_uri(); ?>/assets/logo-ITM-Group-Blanco.png"
        alt="logo" width="100%" height="100%">
    </a>
    <div class="options wowt" data-wow-delay='1s'>
      <?php if (Lang\getLang() == 'en') { ?>
        <p class="option <?= (Util\getPageName() == 'home') ? 'selected' : '' ?> ">
          <a href="/"><span>Group</span></a>
        </p>
        <p class="option brands<?= (Util\getPageName() == 'brands') ? 'selected' : '' ?> ">
          <span>brands</span>
        </p>
        <p class="option <?= (Util\getPageName() == 'sustainability') ? 'selected' : '' ?> ">
          <a href="/sustainability"><span>sustainability</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'press') ? 'selected' : '' ?> ">
          <a href="<?= get_site_url() ?>/press"><span>press</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'contact') ? 'selected' : '' ?> ">
          <a href="/contact"><span>contact</span></a>
        </p>
      <?php } else { ?>
        <p class="option <?= (Util\getPageName() == 'inicio') ? 'selected' : '' ?> ">
          <a href="/"><span>Grupo</span></a>
        </p>
        <p class="option brands <?= (Util\getPageName() == 'marcas') ? 'selected' : '' ?> ">
          <span>marcas</span>
        </p>
        <p class="option <?= (Util\getPageName() == 'sostenibilidad') ? 'selected' : '' ?> ">
          <a href="/sostenibilidad"><span>sostenibilidad</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'prensa') ? 'selected' : '' ?> ">
          <a href="<?= get_site_url() ?>/prensa"><span>prensa</span></a>
        </p>
        <p class="option <?= (Util\getPageName() == 'contacto') ? 'selected' : '' ?> ">
          <a href="/contacto"><span>contacto</span></a>
        </p>
      <?php } ?>


      <div class="langs wowt" data-wow-delay='1.2s'>
        <p class="option lang <?= (Lang\getLang() == 'en') ? 'selected' : '' ?>">
          <a href="/en" lang="usa"><span>En</span></a>
        </p>
        <p class="separator">/</p>
        <p class="option lang <?= (Lang\getLang() == 'es') ? 'selected' : '' ?>">
          <a href="/" lang="mx"><span>Es</span></a>
        </p>
      </div>

      <div class="ham">
        <img svg-src="<?= Util\root() ?>/assets/ham.svg">
      </div>
    </div>

  </div>
  <?php
  global $ports, $realState, $hospitality;
  ?>
  <?php
  define('SUBIMG_1', '/assets/ports/cabo-rojo/Port-Cabo-Rojo-Muelle-Completo.jpg');
  define('SUBIMG_2', '/assets/sub-menu/itm_desarrollos_inmobiliarios(32).jpg');
  define('SUBIMG_3', '/assets/hospitality/cancun-center/hospitalidad-itm-group-2.jpg');
  ?>

  <div class="idtx-items" style="width:100%;">
    <div class="content" style="margin: 0 auto">
      <div class="d-flex flex-row flex-wrap justify-center align-center w-100">
        <div class="cols-3">
          <div class="w-100 d-flex flex-row justify-end">
            <div style="padding-right: 1rem">
              <?php foreach ($ports as $port): ?>
                <p><a href="<?= $port['href'] ?>"><?= $port['title'] ?></a></p>
              <?php endforeach; ?>
            </div>
            <div class="idtx-img-container">
              <img class="" width="100%" height="100%" alt="" mnr-src="<?= Util\root(); ?><?= SUBIMG_1 ?>">
            </div>
          </div>
        </div>
        <div class="cols-3">
          <div class="w-100 d-flex flex-row justify-end">
            <div style="padding-right: 1rem">
              <?php foreach ($realState as $real): ?>
                <p><a href="<?= $real['href'] ?>"><?= $real['title'] ?></a></p>
              <?php endforeach; ?>
            </div>
            <div class="idtx-img-container">
              <img class="" width="100%" height="100%" alt="" mnr-src="<?= Util\root(); ?><?= SUBIMG_2 ?>">
            </div>
          </div>
        </div>
        <div class="cols-3">
          <div class="w-100 d-flex flex-row justify-end">
            <div style="padding-right: 1rem">
              <?php foreach ($hospitality as $host): ?>
                <p><a href="<?= $host['href'] ?>"><?= $host['title'] ?></a></p>
              <?php endforeach; ?>
            </div>
            <div class="idtx-img-container">
              <img class="" width="100%" height="100%" alt="" mnr-src="<?= Util\root(); ?><?= SUBIMG_3 ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="menuShadow"></div>
<div id="smallMenu">
  <div class="langs wowt" data-wow-delay='1.2s'>
    <p class="option lang <?= (Lang\getLang() == 'en') ? 'selected' : '' ?>">
      <a href="/en" lang="usa"><span>En</span></a>
    </p>
    <p class="separator">/</p>
    <p class="option lang <?= (Lang\getLang() == 'es') ? 'selected' : '' ?>">
      <a href="/" lang="mx"><span>Es</span></a>
    </p>
  </div>

  <div class="close">
    <img svg-src="<?= Util\root() ?>/assets/close.svg">
  </div>
  <div class="options scroll">
    <?php if (Lang\getLang() == 'en') { ?>
      <p class="option <?= (Util\getPageName() == 'home') ? 'selected' : '' ?> ">
        <a href="/"><span>Group</span></a>
      </p>
      <p class="option brands-mobile<?= (Util\getPageName() == 'brands') ? 'selected' : '' ?> ">
        <span>brands</span>
        <?php
        get_template_part('/components/menuBrands', null, null);
        ?>
      </p>
      <p class="option <?= (Util\getPageName() == 'sustainability') ? 'selected' : '' ?> ">
        <a href="/sustainability"><span>sustainability</span></a>
      </p>
      <p class="option <?= (Util\getPageName() == 'press') ? 'selected' : '' ?> ">
        <a href="<?= get_site_url() ?>/press"><span>press</span></a>
      </p>
      <p class="option <?= (Util\getPageName() == 'contact') ? 'selected' : '' ?> ">
        <a href="/contact"><span>contact</span></a>
      </p>
    <?php } else { ?>
      <p class="option <?= (Util\getPageName() == 'inicio') ? 'selected' : '' ?> ">
        <a href="/"><span>Grupo</span></a>
      </p>
      <p class="option brands-mobile <?= (Util\getPageName() == 'marcas') ? 'selected' : '' ?> ">
        <span>marcas</span>
        <?php
        get_template_part('/components/menuBrands', null, null);
        ?>
      </p>
      <p class="option <?= (Util\getPageName() == 'sostenibilidad') ? 'selected' : '' ?> ">
        <a href="/sostenibilidad"><span>sostenibilidad</span></a>
      </p>
      <p class="option <?= (Util\getPageName() == 'prensa') ? 'selected' : '' ?> ">
        <a href="<?= get_site_url() ?>/prensa"><span>prensa</span></a>
      </p>
      <p class="option <?= (Util\getPageName() == 'contacto') ? 'selected' : '' ?> ">
        <a href="/contacto"><span>contacto</span></a>
      </p>
    <?php } ?>


  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const menu = document.querySelector('#menu');
    const menuOptions = document.querySelectorAll('.option');
    const subMenu = document.querySelector('.idtx-items');
    const menuPadding = menu.style.paddingBottom;


    const hideSubMenu = () => {
      subMenu.style.height = '0'
      subMenu.style.display = 'none'
      subMenu.style.marginTop = '0';
      subMenu.style.marginBottom = '10px';
    }

    menuOptions.forEach(function(option) {
      if (option.className.includes('brands')) {
        option.addEventListener('mouseenter', function() {
          subMenu.style.marginTop = '20px';
          subMenu.style.marginBottom = '-10px';
          subMenu.style.height = '100%'
          subMenu.style.display = 'block'
        });
      } else {
        option.addEventListener('mouseenter', hideSubMenu);
      }
    })

    menu.addEventListener('mouseleave', hideSubMenu);

  });
</script>

<style>
  #menu {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 5;
    transition: all 0.5s;
    padding-bottom: 10px;
    min-width: 320px;
  }

  .idtx-items {
    /* height: 100%; */
    padding: 1rem 0;
    height: 0;
    background-color: white;
    overflow: hidden;
    z-index: 1;
    display: none;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  }

  .idtx-items .cols-3 p {
    font-size: 14px;
  }

  .idtx-items .cols-3 p:hover {
    /*  font-weight: bold;*/
    text-decoration: underline;
    color: var(--azulOscuro);
  }

  .idtx-img-container {
    width: 60%;
    height: 150px;
  }

  .idtx-img-container>img {
    object-fit: cover;
  }

  @media screen and (max-width: 1200px) {
    .idtx-img-container {
      width: 50%;
      height: 12vw;
    }
  }

  .w-100 {
    width: 100%;
  }

  .cols-3 {
    width: 33.33333%;
    flex: 0 0 33.33333%;
  }

  #menu .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 17px;
    max-width: 1340px;
    z-index: 1;
  }

  #menu .logo {
    height: 100%;
    width: auto;
    max-height: 64px;
    transition: all 0.5s;
  }

  #menu.scrolled .logo,
  #menu:hover .logo {
    height: 100%;
    width: auto;
    max-height: 34px;
  }

  #menu .options {
    display: flex;
    align-items: center;
    padding-bottom: 4px;
    /*  padding-right: 13px;*/
    padding-left: 60px;
    width: 100%;
    justify-content: flex-end;
    gap: 39px;
  }

  #menu .options .option {
    font-family: Nexa-Light;
    text-transform: uppercase;
    color: var(--white);
    font-size: 15px;
    cursor: pointer;
    letter-spacing: 0.4px;
    transition: all 0.5s;
  }

  #menu .options .option span {
    transition: color 0.3s;
    position: relative;
  }


  #menu .options .option span:before {
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

  #menu .options .option:not(.selected):hover span:before,
  #menu .options .option.selected span:before,
  #menu .options .option:has(.selected) span:before {
    background-color: var(--white);
  }


  #menu .options .button {
    max-width: 146px;
  }

  #menu .options .langs {
    display: flex;
    align-items: center;
    gap: 4px;
    margin-left: 34px;
  }

  #menu .options .langs .separator {
    color: var(--white);
  }


  #menu .options .ham {
    display: none;
    padding-right: 0;
    cursor: pointer;
  }

  #menu .options .ham svg {
    width: 40px;
    height: 40px;
  }

  #menu .options .ham svg * {
    fill: var(--white);
    stroke: var(--white);
  }

  #menu .topBar {
    transition: all 0.3s ease;
    background-color: var(--azulOscuro);
    width: 100%;
    height: 0px;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 0;
  }

  #menu.scrolled .topBar,
  #menu:hover .topBar {
    height: 100%;
  }

  #menuShadow {
    position: fixed;
    z-index: 9;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    display: none;
  }

  #menuShadow.open {
    display: block;
  }

  #menuShadow:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(42, 42, 42, 0.7);
    content: '';
    opacity: 0;
    transition: 0.5s all;
  }

  #menuShadow.open:before {
    opacity: 1;
  }

  #smallMenu {
    z-index: 10;
    transition: all 0.5s;
    top: 0;
    right: -400px;
    height: 100vh;
    width: 300px;
    position: fixed;
    flex-direction: column;
    align-items: end;
    display: none;
    background-color: var(--azulOscuro);
    padding: 10px 20px;
  }

  #smallMenu.open {
    transform: translateX(-400px);
  }

  #smallMenu .close {
    cursor: pointer;
  }

  #smallMenu .close svg {
    width: 40px;
    height: 40px;
  }

  #smallMenu .close svg * {
    fill: white;
    stroke: white;
  }


  #smallMenu .langs {
    display: flex;
    align-items: center;
    position: absolute;
    top: 15px;
    left: 20px;
    margin: auto;
    gap: 4px;
  }

  #smallMenu .langs .separator {
    color: var(--white);
  }

  #smallMenu .langs .lang {
    font-family: Nexa-Light;
    text-transform: uppercase;
    color: var(--white);
    font-size: 15px;
    cursor: pointer;
    letter-spacing: 0.4px;
    transition: all 0.5s;
  }

  #smallMenu .langs .lang span {
    transition: color 0.3s;
    position: relative;
  }

  #smallMenu .langs .lang span:before {
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

  #smallMenu .langs .lang.selected span:before {
    background-color: var(--white);
  }

  #smallMenu .options {
    width: 100%;
    padding-top: 30px;
    border-top: 2px solid var(--azulClaro);
  }

  #smallMenu .options .option {
    margin-bottom: 30px;
    font-family: Nexa-Light;
    text-transform: uppercase;
    color: var(--white);
    font-size: 20px;
    text-align: right;
  }

  #smallMenu .options .option span {
    transition: color 0.3s;
    position: relative;
  }

  #smallMenu .options .option span:before {
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

  #smallMenu .options .option:not(.selected):hover span:before,
  #smallMenu .options .option.selected span:before,
  #smallMenu .options .option:has(.selected) span:before {
    background-color: var(--white);
  }

  #smallMenu .dropdown {
    position: relative;
  }

  #smallMenu .dropdown .option {
    margin-bottom: 15px;
    margin-right: 15px;
  }

  #smallMenu .dropdown .dropdownOptions {
    padding-right: 20px;
  }

  #smallMenu .dropdownOptions .subOption {
    color: var(--white);
    text-transform: uppercase;
    font-size: 16px;
    margin-bottom: 20px;
    display: block;
    text-align: right;
  }

  #smallMenu .dropdown .arrow {
    width: 8px;
    height: 8px;
    position: absolute;
    right: 0px;
    top: 7px;
    margin: auto;
  }

  #smallMenu .dropdown .arrow *,
  #smallMenu .dropdown .arrow {
    fill: var(--white);
  }

  @media screen and (max-width: 1120px) {
    #menu .options {
      gap: 30px;
      padding-right: 0;
    }
  }

  @media screen and (max-width: 980px) {
    #menu .options .option {
      font-size: 16px;
    }
  }

  @media screen and (max-width: 910px) {
    #menu .options {
      padding-left: 0;
    }

    #menu .options .ham {
      display: flex;
    }

    #menu .idtx-items {
      display: none !important;
    }

    #menu .options .option {
      display: none;
    }

    #menu .options .langs {
      margin-left: 0;
    }

    #menu .options .langs .lang {
      display: block;
    }

    #smallMenu {
      display: flex;
    }
  }

  @media screen and (max-width: 500px) {
    #menu {
      padding-bottom: 10px;
    }

    #menu .content {
      margin-top: 10px;
    }

    #menu .options .ham {
      display: flex;
    }

    #menu .options .button {
      display: none;
    }

    #smallMenu {
      display: flex;
    }
  }
</style>


<script>
  function openSmallMenu() {
    Mnr.e('#menuShadow').addClass('open');
    Mnr.e('#smallMenu').addClass('open');
  }

  function closeSmallMenu() {
    Mnr.e('#menuShadow').removeClass('open');
    Mnr.e('#smallMenu').removeClass('open');
  }
  Mnr.onLoad(() => {
    Mnr.e('#menu .ham').addEvent('click', () => {
      openSmallMenu();
    });
    Mnr.e('#smallMenu .close').addEvent('click', () => {
      closeSmallMenu();
    });
    Mnr.e('#menuShadow').addEvent('click', () => {
      closeSmallMenu();
    });

    let scroll = window.pageYOffset;
    if (scroll > 200) {
      Mnr.e('#menu').addClass('scrolled');
    } else if (scroll == 0) {
      Mnr.e('#menu .wowt').addClass('wow fadeInDown');
    }

    // setMenuDataText();
  })


  Mnr.onResize(() => {
    let scroll = window.pageYOffset;
    if (scroll > 200) {
      Mnr.e('#menu').addClass('scrolled');
    }
  })

  Mnr.onScroll(() => {
    let scroll = window.pageYOffset;
    if (scroll > 200) {
      Mnr.e('#menu').addClass('scrolled');
    } else {
      Mnr.e('#menu').removeClass('scrolled');
    }
  }, 10);

  function setMenuDataText() {
    Mnr.e('#menu .options .option span').elems.forEach(el => {
      Mnr.e(el).setAttr('data-text', Mnr.e(el).getText());
    });
    Mnr.e('#smallMenu .options .option span').elems.forEach(el => {
      Mnr.e(el).setAttr('data-text', Mnr.e(el).getText());
    });
  }
</script>