.<?php
  if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
  }

  /* 
  Template Name: contact
  */

  get_header();

  ?>

<section id="contact">

  <div class="contact-section">
    <div class="image-container">
      <img mnr-src="<?= get_template_directory_uri(); ?>/assets/contact/CONTACTO_ITM-GROUP.jpg" alt="Construction Site">
      <div class="overlay">
        <div class="image-container-text">

          <?php if (Lang\getLang() == 'en') { ?>
            CONTACT
          <?php } else { ?>
            CONTACTO
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <p class="content top-description blue-text wow fadeInUp" data-wow-delay="0.2s">
    <?php if (Lang\getLang() == 'en') { ?>
      LET'S KEEP IN TOUCH! FILL IN YOUR INFORMATION&nbsp;AND <br>
      <b>WE’LL CONTACT YOU TO ANSWER YOUR&nbsp;QUESTIONS</b>
    <?php } else { ?>
      ¡CONÓCENOS! LLENA TUS DATOS&nbsp;Y<br>
      <b>CON GUSTO TE&nbsp;CONTACTAREMOS. </b>
    <?php } ?>
  </p>
  <div class="content contact-content wow fadeInUp" data-wow-delay="0.4s">
    <?php if (Lang\getLang() == 'en') { ?>
      <?= do_shortcode(('[contact-form-7 title="Contact-en"]')); ?>
    <?php } else { ?>
      <?= do_shortcode(('[contact-form-7 title="Contact"]')); ?>
    <?php } ?>
  </div>
</section>


<?php
get_footer();
?>

<style type="text/css">
  .contact-section {
    text-align: center;
    position: relative;
    width: 100%;
    margin-top: -24px
  }

  .image-container {
    max-height: 100vh;
    width: 100%;
    position: relative;
    overflow: hidden;
  }

  .image-container img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
  }

  .image-container:hover img {
    transform: scale(1.01);
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgb(0 0 0 / 50%);
  }

  .image-container-text {
    color: var(--white);
    font-size: 2.8rem;
    font-weight: bold;
  }

  .contact-content {
    max-width: 900px;
  }

  @media screen and (max-width:800px) {
    .image-container-text {
      font-size: 2.4rem;
    }
  }

  @media screen and (max-width:600px) {
    .image-container-text {
      font-size: 2rem;
    }
  }

  #contact .top-description {
    padding: 80px 0;
  }

  .contact-title {
    text-align: center;
  }

  .inputHolder .input {
    line-height: 3;
    text-indent: 3;
  }

  @media screen and (max-width:600px) {
    #contact .top-description {
      max-width: 250px;
    }
  }
</style>