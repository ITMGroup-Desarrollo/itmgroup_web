<?php
  if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
  }

  /* 
  Template Name: landing
  */

  get_header();
  
  // if(isset($_GET['qr'])){
  //  get_template_part('/components/pdfPopUp');
  // }

  get_template_part('/components/mainBanner');

  get_template_part('/components/mainDescription');

  get_template_part('/components/divisions');

  get_template_part('/components/mainBrands');

  get_template_part('/components/mainVideoBanner');

  get_template_part('/components/blogSimple');

  get_template_part('/components/banners');
?>





<?php
  get_footer();
?>
