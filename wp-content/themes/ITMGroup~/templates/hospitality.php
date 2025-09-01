<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/* 
  Template Name: hospitality
  */

get_header();

?>
<section id="hospitality">
  <div class="hospitality-top-spacer"></div>

  <?php
  get_template_part('/components/hospitality/aloft', null, null);
  ?>

  <div class="itm-divider"> </div>

  <?php
  get_template_part('/components/hospitality/cancun-center', null, null);
  ?>

  <div class="hospitality-bottom-spacer"></div>

</section>

<?php
get_footer();
?>

<style type="text/css">
   #hospitality .parallaxHolder .bannerImg {
    height: 120%;
    top: 10%;
  }

  #menu {
    background-color: var(--azulClaro);
  }

  .place-container {
    height: 62vw;
    max-height: 750px;
  }

  .place-container > img {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  .hospitality-top-spacer {
    height: 200px;
  }

  .hospitality-bottom-spacer {
    height: 80px;
  }
  
  @media screen and (max-width: 700px) {
    .hospitality-top-spacer {
      height: 100px;
    }

    .hospitality-bottom-spacer {
      height: 40px;
    }
  }
  
</style>