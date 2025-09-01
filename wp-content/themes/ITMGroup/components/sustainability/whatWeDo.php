<?php
define('WW_DO_1_IMG', '/assets/sustainability/what-we-do/sostenibilidad-itm-03.jpg');
define('WW_DO_2_IMG', '/assets/sustainability/what-we-do/sostenibilidad-itm-04.jpg');
define('WW_DO_3_IMG', '/assets/sustainability/what-we-do/sostenibilidad-itm-06.jpg');

?>

<section id="ww-do">

  <div class="content ww-do-title">
    <p class="blue-text big-text wow fadeInUp">
      <?php if(Lang\getLang() == 'en'){ ?>
        <b>WHAT DO WE DO?</b>
      <?php } else { ?>
        <b>¿QUÉ HACEMOS?</b>
      <?php } ?>
    </p>
  </div>

  <div class="content">
    <div class="d-flex flex-row flex-wrap justify-center align-center ww-do-images">
      <div class="ww-do-img img-left">
        <img class="wow fadeInUp" width="100%" height="100%" alt="wood fruits" mnr-src="<?= Util\root(); ?><?= WW_DO_1_IMG ?>">
        <p class="blue-text wow fadeInUp">
          <?php if(Lang\getLang() == 'en'){ ?>
            Through decent employment, training and local entrepreneurship.
          <?php } else { ?>
            A través de empleo digno, formación y emprendimiento local.
          <?php } ?>
        </p>
      </div>
      <div class="ww-do-img img-center">
        <img class="wow fadeInUp" width="100%" height="100%" alt="snorkel" mnr-src="<?= Util\root(); ?><?= WW_DO_2_IMG ?>">
        <p class="blue-text wow fadeInUp">
          <?php if(Lang\getLang() == 'en'){ ?>
            Care for the ocean by monitoring and replanting coral reefs and reforesting mangroves.
          <?php } else { ?>
            Cuidado del oceáno mediante el monitoreo y transplante de los arrecifes de coral y reforestación de manglares.
          <?php } ?>
        </p>
      </div>
      <div class="ww-do-img img-right">
        <img class="wow fadeInUp" width="100%" height="100%" alt="workers" mnr-src="<?= Util\root(); ?><?= WW_DO_3_IMG ?>">
        <p class="blue-text wow fadeInUp">
          <?php if(Lang\getLang() == 'en'){ ?>
            To eliminate single -use plastics and the proper management of waste in our ports and communities.
          <?php } else { ?>
            Para eliminar los plásticos de un solo uso y el manejo adecuado de los residuos en nuestros puertos y comunidades.
          <?php } ?>
        </p>
      </div>
    </div>
  </div>

  <div class="content ww-do-text">
    <p class="blue-text wow fadeInUp">
      <!-- Would be dinamyc using the script of this component -->
    </p>
  </div>

</section>

<style type="text/css">
  #ww-do {
    padding: 50px 0;
  }
  
  #ww-do p{
    max-width: 100%;
  }

  .ww-do-title {
    padding-bottom: 50px;
  }

  .ww-do-text {
    padding: 20px 0 40px 0;
  }

  @media screen and (max-width:800px) {
    #ww-do {
      padding: 35px 0;
    }
    .ww-do-title {
      padding-bottom: 35px;
    }

    .ww-do-text {
      padding: 15px 0 30px 0;
    }
  }

  .ww-do-img, .ww-do-img p {
    transition: all 0.2s ease;
    width: 30%;
    flex: 0 0 30%;
  }

  .ww-do-img p {
    font-size:12px;
    position: absolute;
    padding: 10px;
  }

  .ww-do-img.hovered, .ww-do-img.hovered p, .ww-do-img.img-center {
    width: 40%;
    flex: 0 0 40%;
  }

  .ww-do-img.hovered p, .img-center p {
    display: none;
  }

  .ww-do-images{
    height: auto;
    margin-bottom: 10px;
  }
  
  .ww-do-img:not(.hovered) img {
    object-fit: cover;
    height: 60vh;
    transition: all 0.2s ease;
  }
  
  .ww-do-img.hovered img, .ww-do-img.img-center img {
    object-fit: cover;
    height: 80vh;
    transition: all 0.2s ease;
  }
  
  @media screen and (max-width: 900px) {
    .ww-do-images{
      height: auto;
    }
    .ww-do-img:not(.hovered) img {
      height: 35vw;
    }
    
    .ww-do-img.hovered img, .ww-do-img.img-center img {
      height: 50vw;
    }

    .ww-do-img p {
      font-size: 8px;
      padding: 4px 8px;
    }
  }

  @media screen and (max-width: 600px) {
    .ww-do-img p {
      font-size: 6px;
    }
  }

</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const wwDoImages = document.querySelector('.ww-do-images');
    const imgCenter = document.querySelector('.img-center');
    const wwDoImgs = document.querySelectorAll('.ww-do-img');
    const wwDoText = document.querySelector('.ww-do-text p');

    // Stores and sets the original text content of the ww-do-text p element
    const originalText = imgCenter.textContent;
    wwDoText.textContent = originalText

    wwDoImages.addEventListener('mouseenter', function() {
        if (imgCenter) {
            imgCenter.classList.remove('img-center');
        }
    });

    wwDoImages.addEventListener('mouseleave', function() {
        if (imgCenter) {
            imgCenter.classList.add('img-center');
        }
    });

    wwDoImgs.forEach(function(wwDoImg) {
        const imgText = wwDoImg.querySelector('p').textContent;

        wwDoImg.addEventListener('mouseenter', function() {
            wwDoImg.classList.add('hovered');
            wwDoText.textContent = imgText;
        });

        wwDoImg.addEventListener('mouseleave', function() {
            wwDoImg.classList.remove('hovered');
            wwDoText.textContent = originalText;
        });
    });

  });

</script>