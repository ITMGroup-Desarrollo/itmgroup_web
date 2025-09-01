<?php
// elimina el wp bar del front
add_filter('show_admin_bar', '__return_false');


add_action('after_setup_theme', function(){
  add_theme_support('post-thumbnails');
  add_theme_support( 'title-tag' );  
});


add_action('wp_head', function(){
  ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
  

  <?php
  
});



add_action('init', function(){
  //Remove headers
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');

  //Remove all emojis
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');



});


add_action( 'admin_enqueue_scripts', function(){
   if (is_admin()) {
      wp_enqueue_media();
      wp_enqueue_editor();
   }
});

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('base-styles', get_template_directory_uri().'/resources/base.css');
  wp_enqueue_style('main-styles', get_template_directory_uri().'/style.css');
  wp_enqueue_style('animate', get_template_directory_uri().'/vendor/animate.css');
  wp_enqueue_script('moonrise-js', get_template_directory_uri().'/vendor/moonRise.js', array(), '1.0', false);
  wp_enqueue_script('svg-inject-js', get_template_directory_uri().'/vendor/svg-inject.min.js', array(), '1.0', true);

  wp_enqueue_script('wow-js', get_template_directory_uri().'/vendor/wow.min.js', array(), '1.0', true);
  wp_enqueue_script('main-js', get_template_directory_uri().'/resources/main.js', array(), '1.0', true);
  
  // remove
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('classic-editor-styles');
  wp_dequeue_style('classic-theme-styles');
  wp_dequeue_style( 'global-styles' );

  if (is_single()) {
      wp_enqueue_style('wp-block-library');
  }

},100);





// contact form 7

// remove <p> and <br> from the contact form
add_filter('wpcf7_autop_or_not', '__return_false');

