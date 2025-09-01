<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/* 
  Template Name: sustainability
  */

get_header();
get_template_part('/components/popUpSustentability');
?>

<section id="sustainability">
<?php
  get_template_part('/components/sustainability/beachBanner');
  
  get_template_part('/components/sustainability/groupBanner');
  
  get_template_part('/components/sustainability/goalsBanner');

  get_template_part('/components/sustainability/pillars');
  
  get_template_part('/components/sustainability/circularPortsBanner');

  get_template_part('/components/sustainability/treesVideo');

  get_template_part('/components/sustainability/whatWeDo');
  
  ?>

</section>

<?php
get_footer();
?>

<style type="text/css">
  #sustainability .big-text {
    font-size:30px;
  }

  #sustainability .parallaxHolder .bannerImg {
    height: 120%;
    top: 0%;
  }
</style>
