<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/* 
  Template Name: ports
  */

get_header();

?>

<section id="ports">
  
  <!-- <video class="ports-map" width="100%" height="100%" autoplay muted loop
    poster="<?= Util\root() ?>/assets/ports/Mapa-locations.jpg">
    <source src="<?= Util\root() ?>/assets/ports/Mapa.mp4" type="video/mp4">
  </video> -->

  <!-- <div class="ports-divider"> </div> -->

  <?php
  // get_template_part('/components/ports/portCostaMaya', null, null);
  ?>

  <div class="ports-divider"> </div>
  <?php
  get_template_part('/components/ports/portTainoBay', null, null);
  ?>

  <div class="ports-divider"> </div>

  <?php
  get_template_part('/components/ports/portCaboRojo', null, null);
  ?>

  <div class="ports-divider"> </div>

  <?php
  get_template_part('/components/ports/portSamana', null, null);
  ?>

  <div class="ports-divider"> </div>

  <?php
  get_template_part('/components/ports/portRoatan', null, null);
  ?>

  <div class="ports-divider"> </div>

  <?php
  get_template_part('/components/ports/portLaPaz', null, null);
  ?>

  <div class="ports-divider"> </div>

  <?php
  get_template_part('/components/ports/portLaEspañola', null, null);
  ?>

  <div class="ports-divider"> </div>

</section>


<?php
get_footer();
?>

<style type="text/css">
  #ports .parallaxHolder .bannerImg {
    height: 120%;
    top: 10%;
  }

  #menu {
    background-color: rgba(0, 0, 0, .25);
  }

  #ports .content {
    max-width: var(--contentWidth);
    width: 100%;
  }
  #ports section{
    padding-top: 80px;
  }

  .ports-map {
    max-height: 100vh;
    object-fit: cover;
  }

  .ports-divider {
    height: 5px;
    width: 100%;
    margin: 20px 0
  }

  @media screen and (max-width:900px) {
    .ports-divider {
      height: 4px;
      margin: 70px 0;
    }
  }

  @media screen and (max-width:600px) {
    .ports-divider {
      height: 3px;
      margin: 60px 0;
    }
  }

  .place-container {
    /* max-width: 1100px; */
/*    width: 85vw;*/
    height: 62vw;
    max-height: 750px;
  }

  .place-container>img {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  .big-port-text {
    font-size: 3rem;
  }

  @media screen and (max-width: 800px) {
    .big-port-text {
      font-size: 2.8rem;
    }
  }

  @media screen and (max-width: 600px) {
    .big-port-text {
      font-size: 2.6rem;
    }
  }
</style>