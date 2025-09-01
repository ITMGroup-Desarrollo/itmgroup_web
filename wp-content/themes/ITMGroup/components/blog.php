<?php
$dateSelected = null;
?>

<section id="blog">
  <div class="content content-search">
    <!-- <div class="inputHolder">
      <select date-selector class="input">
        <?php
        $years = Blog\getPostYears();
        foreach ($years as $year) {
        ?>
            <option value="<?= $year ?>"><?= $year ?></option>";
        <?php
        }
        ?>
      </select>
    </div> -->

    <?php if (Lang\getLang() == 'en') { ?>
      <form action="<?= get_site_url() ?>/press-search" search-form method="get">
      <?php } else { ?>
        <form action="<?= get_site_url() ?>/prensa-busqueda" search-form method="get">
        <?php } ?>
        <div class="inputHolder search-holder">

          <?php if (Lang\getLang() == 'en') { ?>
            <input required class="input" name="q" search placeholder="¿What are you searching?">
          <?php } else { ?>
            <input required class="input" name="q" search placeholder="¿Que estas buscando?">
          <?php } ?>

          <svg submit-search width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10.5" cy="10.5" r="6.5" stroke="#000000" stroke-linejoin="round" />
            <path d="M19.6464 20.3536C19.8417 20.5488 20.1583 20.5488 20.3536 20.3536C20.5488 20.1583 20.5488 19.8417 20.3536 19.6464L19.6464 20.3536ZM20.3536 19.6464L15.3536 14.6464L14.6464 15.3536L19.6464 20.3536L20.3536 19.6464Z" fill="#000000" />
            <defs>
              <clipPath id="clip0_15_152">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>

        </div>
        </form>
  </div>
  <div class="content title-content">
    <?php if (Lang\getLang() == 'en') { ?>
      <p class="text wow fadeInUp">Press</p>
      <h1 class="sectionTitle wow fadeInUp" data-wow-delay='0s'>
        The most recent
      </h1>
    <?php } else { ?>
      <p class="text wow fadeInUp">Prensa</p>
      <h1 class="sectionTitle wow fadeInUp" data-wow-delay='0s'>
        Lo más reciente
      </h1>
    <?php } ?>
  </div>
  <div class="content main-posts-content">

    <div class="swiper postsSlider">
      <div class="swiper-wrapper">
        <?php
        $posts = Blog\getPosts(10);

        foreach ($posts as $key => $postId) {
        // foreach (array_slice($posts, 2) as $key => $postId) {
          $postData = Blog\getPostData($postId);
          $img = ($postData['img'] == null) ?
            Util\getRoot() . '/assets/especialidad1.jpg' :
            $postData['img'];
        ?>
          <div class="postCard swiper-slide">
            <div class="imgHolder">
              <a href="<?= $postData['permalink']; ?>"
                aria-label="<?php if (Lang\getLang() == 'en') { ?>
                                   Read More
                               <?php } else { ?>
                                   Leer Más
                               <?php } ?>"></a>
              <img alt="<?= $postData['title'] ?>"
                width="100%" height="100%"
                mnr-src="<?= $img ?>">
            </div>
            <div class="infoHolder">
              <p class="text date"><?= $postData['date'] ?></p>
              <h3 class="title"><?= $postData['title'] ?></h3>
              <p class="text text-excerpt"><?= $postData['excerpt'] ?></p>
              <a class="button" href="<?= $postData['permalink']; ?>">
                <?php if (Lang\getLang() == 'en') { ?>
                  Read More
                <?php } else { ?>
                  Leer Más
                <?php } ?>
              </a>
            </div>

            <p share-button="<?= $postData['permalink']; ?>">
              <?php if (Lang\getLang() == 'en') { ?>
                Share
              <?php } else { ?>
                Compartir
              <?php } ?>
              <svg fill="#000000" width="80px" height="80px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 25.472q0 2.368 1.664 4.032t4.032 1.664h18.944q2.336 0 4-1.664t1.664-4.032v-8.192l-3.776 3.168v5.024q0 0.8-0.544 1.344t-1.344 0.576h-18.944q-0.8 0-1.344-0.576t-0.544-1.344v-18.944q0-0.768 0.544-1.344t1.344-0.544h9.472v-3.776h-9.472q-2.368 0-4.032 1.664t-1.664 4v18.944zM5.696 19.808q0 2.752 1.088 5.28 0.512-2.944 2.24-5.344t4.288-3.872 5.632-1.664v5.6l11.36-9.472-11.36-9.472v5.664q-2.688 0-5.152 1.056t-4.224 2.848-2.848 4.224-1.024 5.152zM32 22.080v0 0 0z"></path>
              </svg>
            </p>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
  </div>

  <div class="content pinnedContent">
    <div class="postsGrid">
      <?php
      $posts = Blog\getPinnedPosts(2);

      foreach ($posts as $key => $postId) {
      // foreach (array_slice($posts, 2) as $key => $postId) {
        $postData = Blog\getPostData($postId);
        $img = ($postData['img'] == null) ?
          Util\getRoot() . '/assets/especialidad1.jpg' :
          $postData['img'];
      ?>
        <div class="postCard">
          <div class="imgHolder">
            <a href="<?= $postData['permalink']; ?>"
              aria-label="<?php if (Lang\getLang() == 'en') { ?>
                                 Read More
                             <?php } else { ?>
                                 Leer Más
                             <?php } ?>"></a>
            <img alt="<?= $postData['title'] ?>"
              width="100%" height="100%"
              mnr-src="<?= $img ?>">
          </div>
          <div class="infoHolder">
            <p class="text date"><?= $postData['date'] ?></p>
            <h3 class="title"><?= $postData['title'] ?></h3>
            <p class="text text-excerpt"><?= $postData['excerpt'] ?></p>
            <a class="button" href="<?= $postData['permalink']; ?>">
              <?php if (Lang\getLang() == 'en') { ?>
                Read More
              <?php } else { ?>
                Leer Más
              <?php } ?>
            </a>
          </div>
          <p share-button="<?= $postData['permalink']; ?>">
            <?php if (Lang\getLang() == 'en') { ?>
              Share
            <?php } else { ?>
              Compartir
            <?php } ?>
            <svg fill="#000000" width="80px" height="80px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 25.472q0 2.368 1.664 4.032t4.032 1.664h18.944q2.336 0 4-1.664t1.664-4.032v-8.192l-3.776 3.168v5.024q0 0.8-0.544 1.344t-1.344 0.576h-18.944q-0.8 0-1.344-0.576t-0.544-1.344v-18.944q0-0.768 0.544-1.344t1.344-0.544h9.472v-3.776h-9.472q-2.368 0-4.032 1.664t-1.664 4v18.944zM5.696 19.808q0 2.752 1.088 5.28 0.512-2.944 2.24-5.344t4.288-3.872 5.632-1.664v5.6l11.36-9.472-11.36-9.472v5.664q-2.688 0-5.152 1.056t-4.224 2.848-2.848 4.224-1.024 5.152zM32 22.080v0 0 0z"></path>
            </svg>
          </p>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="title-holder">
      <h2 class="sectionTitle">
        <?php if (Lang\getLang() == 'en') { ?>
          <b>You might be interested</b>
        <?php } else { ?>
          <b>Podría Interesarte</b>
        <?php } ?>
      </h2>
      <?php if (Lang\getLang() == 'en') { ?>
        <a href="<?= get_site_url() ?>/press-pinned" class="button button1">
          view more
        </a>
      <?php } else { ?>
        <a href="<?= get_site_url() ?>/prensa-fijos" class="button button1">
          ver más
        </a>
      <?php } ?>
    </div>
  </div>

</section>

<div class="copy-alert">
  <div class="copy-bar" accept-copy>
    <p class="text">
      <?php if (Lang\getLang() == 'en') { ?>
        Link Copied
      <?php } else { ?>
        Link Copiado
      <?php } ?>
    </p>
  </div>
</div>

<style type="text/css">
  #menu {
    background-color: var(--azulOscuro);
    background: var(--azulOscuro);
  }

  #blog .title-content {
    padding-top: 60px;
    align-items: start;
  }

  #blog .title-content .text {
    color: var(--azulOscuro);
    font-size: 26px;
  }

  #blog .sectionTitle {
    color: var(--azulOscuro);
    text-transform: uppercase;
    text-align: left;
  }

  #blog .title-content .sectionTitle {
    font-size: 50px;
  }

  #blog {
    padding-top: 90px;
  }

  #blog [share-button] {
    text-align: center;
    font-family: 'Nexa-Heavy';
    font-size: 20px;
    color: var(--azulClaro);
    transition: all 0.3s ease;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  #blog [share-button]:hover {
    text-decoration: underline;
  }

  #blog [share-button] svg {
    width: 20px;
    height: 20px;
    margin-left: 5px;
  }

  #blog [share-button] svg path {
    fill: var(--azulClaro);
  }

  .copy-alert {
    position: fixed;
    bottom: -70px;
    left: 0;
    width: 100%;
    height: 1px;
    z-index: 999999;
    transition: all 0.2s;
    opacity: 0;
  }

  .copy-alert.show {
    bottom: 0px;
    opacity: 1;
  }

  .copy-alert .copy-bar {
    padding: 10px 20px;
    box-shadow: 0 -1px 10px 0 #acabab4d;
    border-radius: 6px;
    width: 170px;
    background-color: black;
    border-color: #f4f4f4;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    bottom: 20px;
    left: 20px;
    position: absolute;
  }

  .copy-alert .copy-bar .text {
    font-weight: 400;
    font-size: 16px;
    margin-bottom: 0px;
    color: var(--white);
  }

  #blog .buttonWrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 30px;
    padding-bottom: 30px;
  }

  #blog .buttonWrapper .button {
    width: auto;
  }

  #blog .content-search {
    display: flex;
    align-items: end;
    padding-top: 40px;
    justify-content: flex-end;
    gap: 20px;
  }

  #blog .content-search .input-holder {
    border: 1px solid #9E9E9E;
    background-color: var(--gray);
    margin-left: 20px;
    min-width: 300px;
    border-radius: 3px;
    padding-left: 10px;
    height: 40px;
    min-width: 300px;
  }

  #blog .content-search [search-form] {
    padding-bottom: 0;
  }

  #blog .content-search .search-holder .input {
    padding-right: 50px;
    margin-top: 0;
    min-width: 250px;
  }

  #blog .content-search .search-holder svg {
    position: absolute;
    right: 10px;
    top: 0;
    bottom: 0;
    margin: auto;
    width: 30px;
    height: 30px;
    transition: all 0.3s;
    cursor: pointer;
    margin: auto;
  }

  #blog .content-search .search-holder svg path {
    fill: var(--azulOscuro);
  }

  #blog .content-search .search-holder svg circle {
    stroke: var(--azulOscuro);
  }

  #blog .content-search .search-holder svg:hover {
    transform: scale(1.1);
  }

  #blog .main-posts-content {
    max-width: 100%;
    width: 100%;
  }

  #blog .main-posts-content:after {
    border-bottom: 2px solid #9E9E9E;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    max-width: var(--contentWidth);
    width: calc(100% - calc(var(--padSides)* 2));
    margin: auto;
    content: '';
  }



  /*article card*/
  #blog .postCard {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    transition: 0.3s;
    position: relative;
    padding-top: 50px;
  }

  #blog .postCard .imgHolder {
    aspect-ratio: 16/9;
    width: 100%;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease;
  }

  #blog .postCard .imgHolder img {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    transition: all 0.3s ease;
    object-fit: cover;
  }

  #blog .postCard:hover .imgHolder img {
    transform: scale(1.1);
  }

  #blog .postCard .imgHolder a {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 4;
    top: 0;
    left: 0;
  }

  #blog .postCard .infoHolder {
    margin: auto;
    z-index: 3;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    transition: 0.3s;
    padding-top: 20px;
    position: relative;
  }

  #blog .postCard .title {
    color: var(--azulOscuro);
    font-family: 'Nexa-Heavy';
    font-size: 20px;
    text-align: center;
    margin-bottom: 10px;
    margin-top: 10px;
    width: 100%;
  }

  #blog .postCard .text {
    font-family: 'Nexa-Light';
    font-size: 16px;
    text-align: center;
    color: var(--azulOscuro);
    width: 100%;
  }

  #blog .postCard .text.date {
    font-size: 14px;
  }

  #blog .postCard .button {
    background-color: var(--white);
    border: 2px solid var(--white);
    color: var(--azulClaro);
    font-family: 'Nexa-Heavy';
    transition: all 0.3s;
    min-height: 40px;
    font-size: 16px;
    min-width: 200px;
    margin-top: 10px;
    display: flex;
  }

  #blog .postCard .button:hover {
    transform: scale(1.1);
  }

  #blog .postCard [share-button] {
    opacity: 0;
    position: absolute;
    top: 50px;
    left: 0;
    right: 0;
    margin: auto;
    transition: all 0.5s ease;
  }

  #blog .postCard:hover [share-button] {
    opacity: 1;
    top: 10px;
  }

  @media screen and (max-width: 1060px) {
    #blog .postCard [share-button] {
      opacity: 1;
      position: absolute;
      top: 10px;
      display: none;
    }
  }

  @media screen and (max-width: 500px) {
    #blog .postCard .title {
      font-size: 14px;
      margin-bottom: 5px;
    }

    #blog .postCard .text {
      font-size: 14px;
    }
  }


  #blog .postsSlider {
    padding-top: 60px;
    padding-bottom: 100px;
  }

  #blog .postsSlider .swiper-pagination {
    margin-top: 90px;
    position: relative;
  }

  #blog .postsSlider .swiper-pagination .swiper-pagination-bullet {
    background-color: unset;
    height: auto;
    text-align: center;
    font-family: 'Nexa-Heavy';
    width: 20px;
  }

  #blog .postsSlider .postCard.oclude {
    opacity: 0.5;
  }

  @media screen and (max-width: 1060px) {

    #blog .postsSlider .swiper-slide-prev,
    #blog .postsSlider .swiper-slide-next {
      opacity: 0.5;
    }

    #blog .postCard.swiper-slide-active [share-button] {
      display: block;
    }

    /*#blog .postsSlider .postCard .button{
    display: none;
  }*/
  }

  @media screen and (max-width: 500px) {
    #blog .content-search {
      align-items: end;
      justify-content: center;
    }

    #blog .content-search [search-form] {
      width: 100%;
    }

    #blog .content-search .search-holder .input {
      min-width: 100%;
    }

    #blog .postsSlider {
      padding-top: 40px;
      padding-bottom: 100px;
    }

    #blog .title-content .sectionTitle {
      font-size: 30px;
      text-align: center;
    }

    #blog .title-content .text {
      text-align: center;
    }
  }


  #blog .pinnedContent {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 60px;
    padding-bottom: 80px;
  }

  #blog .postsGrid {
    display: flex;
    --gap: 20px;
    gap: var(--gap);
    flex-wrap: wrap;
    width: 66%;
  }

  #blog .postsGrid .postCard {
    flex: 1 0 calc(50% - var(--gap));
    background-color: var(--white);
  }

  #blog .pinnedContent .title-holder {
    width: 33%;
    padding-left: 60px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    height: 100%;
    padding-bottom: 80px;
    gap: 20px;
    flex-direction: column;
  }

  @media screen and (max-width: 1060px) {
    #blog .pinnedContent .title-holder {
      padding-left: 40px;
    }

    #blog .pinnedContent .title-holder .sectionTitle {
      font-size: 30px;
    }
  }

  @media screen and (max-width: 970px) {
    #blog .pinnedContent {
      flex-wrap: wrap;
      flex-direction: column-reverse;
    }

    #blog .postsGrid {
      width: 100%;
    }

    #blog .pinnedContent .title-holder {
      width: 100%;
      padding-left: 0;
      padding-bottom: 40px;
      align-items: center;
      justify-content: center;
    }

    #blog .pinnedContent .title-holder .sectionTitle {
      text-align: center;
    }
  }


  #blog .date-content {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding-top: 20px;
    padding-bottom: 80px;
    align-items: center;
    justify-content: flex-start;
  }

  #blog .date-content .title {}

  #blog .date-content select {
    border: 1px solid #9E9E9E;
    background-color: var(--gray);
    margin-left: 20px;
    min-width: 200px;
    border-radius: 3px;
    padding-left: 10px;
  }

  #blog .date-content .month-selector {
    display: flex;
    width: 100%;
    height: 60px;
    align-items: center;
    justify-content: start;
    margin-top: 40px;
  }

  #blog .date-content .month-selector .month {
    height: 100%;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s;
    background-color: var(--azulOscuro);
    position: relative;
  }

  #blog .date-content .month-selector .month:after {
    content: '';
    border-right: 1.5px solid white;
    top: 0;
    bottom: 0;
    right: 0;
    height: 30px;
    position: absolute;
    margin: auto;
  }

  #blog .date-content .month-selector .month:last-child:after {
    border-right: unset;
  }

  #blog .date-content .month-selector .month:hover,
  #blog .date-content .month-selector .month.selected {
    background-color: var(--azulClaro);
  }

  #blog .date-content .month-selector .month .text {
    color: var(--white);
    font-family: 'Nexa-Light';
    font-size: 14px;
    text-transform: uppercase;
    text-align: center;
  }
</style>


<script type="text/javascript">
  window.addEventListener('load', () => {
    let swiper = new Swiper('#blog .swiper', {
      slidesPerView: 1.3,
      spaceBetween: 10,

      centeredSlides: true,
      breakpoints: {
        400: {
          slidesPerView: 1.5,
          spaceBetween: 10
        },
        500: {
          slidesPerView: 1.5,
          spaceBetween: 10
        },
        630: {
          slidesPerView: 2.3,
          spaceBetween: 20
        },
        720: {
          slidesPerView: 2.3,
          spaceBetween: 20,
        },
        1060: {
          slidesPerView: 3.5,
          spaceBetween: 20,
          initialSlide: 1,
        },
      },
      on: {
        slideChange: function() {
          setTimeout(() => {
            updateHiddenPosts();
          }, 100);
        },
      },
    });

    let shareButtons = Array.from(document.querySelectorAll('[share-button]'));
    shareButtons.forEach(sb => {
      sb.addEventListener('click', () => {
        copyURL(sb);
      });
    });


    let submitButton = document.querySelector('[submit-search]');
    let searchForm = document.querySelector('[search-form]');
    let submitInput = searchForm.querySelector('input');

    // Add click event listener to the submit button
    if (submitButton && searchForm) {
      submitButton.addEventListener('click', function() {
        if (submitInput.value != '') {
          searchForm.submit();
        }
      });
    }
  });


  function updateHiddenPosts() {
    let beforePost = document.querySelector('#blog .swiper .swiper-slide-prev')?.previousElementSibling;
    let afterPost = document.querySelector('#blog .swiper .swiper-slide-next')?.nextElementSibling;

    console.log(beforePost);
    console.log(afterPost);


    let posts = Array.from(document.querySelectorAll('#blog .swiper .swiper-slide'));
    posts.forEach(p => {
      p.classList.remove('oclude');
    });

    if (beforePost) {
      beforePost.classList.add('oclude');
    }
    if (afterPost) {
      afterPost.classList.add('oclude');
    }
  }



  function getCurrentURL() {
    return window.location.origin + window.location.pathname;
  }

  function showCopyAlert() {
    document.querySelector('.copy-alert').classList.add('show');
  }

  function hideCopyAlert() {
    document.querySelector('.copy-alert').classList.remove('show');
  }

  function copyURL(attr) {
    const url = attr.getAttribute('share-button');
    navigator.clipboard.writeText(url).then(() => {
      console.log('copied url');
      showCopyAlert();
      setTimeout(() => {
        hideCopyAlert();
      }, 2000);
    }).catch(err => {
      console.error('Failed to copy: ', err);
    });
  }
</script>