<div id="<?= $args['id']; ?>" class="wow fadeInUp card hoverAnimated <?php if(isset($args['title'])){echo 'has-title';} ?>" data-wow-delay="<?= $args['delay']; ?>">
  <img class="banner <?php if(isset($args['class'])){echo $args['class'];} ?>" mnr-src="<?= Util\root() ?>/assets/<?= $args['img']; ?>" alt="<?= $args['alt']; ?>" width="100%" height="100%">
  <?php
  if (isset($args['title'])) {
    echo "<h3 class='title wow fadeInRight'>{$args['title']}</h3>";
    echo "<div class='textHolder'>";
    if (isset($args['text'])) {
      echo "<p class='text'>{$args['text']}</p>";
    }
    echo "</div>";
    echo "<div class='grad'></div>";
  }
  ?>
</div>

<style type="text/css">
  .hoverAnimated.card {
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

  .hoverAnimated.card .banner {
    z-index: 1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    object-fit: cover;
    position: absolute;
    transition: all 0.8s;
  }

  .hoverAnimated.card:hover .banner {
    transform: scale(1.1);
  }

  .hoverAnimated.card a {
    z-index: 4;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    position: absolute;
  }

  .hoverAnimated.card .title {
    color: var(--white);
    z-index: 3;
    position: relative;
    width: 100%;
    font-family: Nexa-Heavy;
    font-size: 36px;
    transition: all 0.3s ease;
    line-height: 110%;
  }

  .hoverAnimated.card .textHolder {
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

  .hoverAnimated.card:hover .textHolder {
    opacity: 1;
    transform: translateY(0);
    max-height: 155px;
    margin-top: 40px;
  }

  .hoverAnimated.card .textHolder .text {
    color: var(--white);
    font-size: 15px;
    line-height: 117%;
    text-align: justify;
  }

  .hoverAnimated.card .textHolder .exploreText {
    color: var(--white);
    text-transform: uppercase;
    font-family: 'Nexa-Light';
    font-size: 20px;
    margin-top: 20px;
    text-decoration: underline;
    text-underline-offset: 3px;
  }

  .hoverAnimated.card:before {
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

  .hoverAnimated.card.has-title:hover:before {
    opacity: 0.5;
  }

  .hoverAnimated.card .grad {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgb(0 0 0 / 72%) 100%);
    z-index: 2;
    position: absolute;
    width: 100%;
    height: 80%;
    bottom: 0;
    left: 0;
    transition: all 0.3s ease;
  }

  @media screen and (max-width: 1140px) {
    .hoverAnimated.card .title {
      font-size: 2.5cqi;
      line-height: 110%;
    }

    .hoverAnimated.card {
      height: 500px;
    }
  }
@media screen and (max-width: 650px) {
    .hoverAnimated.card {
      padding: 15px !important;
    }
  }

  @media screen and (max-width: 900px) {
    .hoverAnimated.card {
      padding: 20px 30px 47px 30px;
    }
  }

  @media screen and (max-width: 800px) {
    .hoverAnimated.card {
      height: 400px;
    }

    .hoverAnimated.card .title {
      font-size: 1rem;
    }

    .hoverAnimated.card:hover .textHolder {
      max-height: 300px;
    }

    .hoverAnimated.card .textHolder .exploreText {
      font-size: 16px;
    }
  }

  @media screen and (max-width: 630px) {
    .hoverAnimated.card .title {
      font-size: .8rem !important;
    }

    .hoverAnimated.card {
      width: 100%;
      margin-top: 0;
      height: 300px;
      min-height: unset;
    }

    /* ¿qué es inView */
    .hoverAnimated.card.inView .textHolder {
      max-height: 200px;
      transform: translateY(0);
      margin-top: 15px;
      opacity: 1;
    }

    .hoverAnimated.card.inView:before {
      opacity: 0.5;
    }
  }
</style>
