<?php
  if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
  }


  get_header();

  $postId = get_the_ID();

  get_template_part('/components/article',null, array('postId'=>$postId));

  get_template_part('/components/relatedPosts',null, array('postId'=>$postId));

  get_template_part('/components/contact');


  get_footer();
?>