<?php
  if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
  }

  /* 
  Template Name: blog
  */

  get_header();
  
  get_template_part('/components/blog');
?>

<?php
  get_footer();
?>





