<!doctype html>
<html lang="<?= Lang\getLocale(); ?>" class="<?= Util\setHomeClass() ?> ">

<head>


  <meta name="author" content="alejandro Bores">
  <meta name="publisher" content="ITM Group">

  <link rel="icon" type="image/ico" href="<?= Util\root() ?>/assets/isotipo.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>



  <?php wp_head(); ?>


</head>


<body>

  <noscript>
    It appears that JavaScript is deactivated, this web needs JavaScript to work
  </noscript>


  <?php wp_nonce_field('main_global_nonce', 'global_nonce'); ?>
  <input id="root" hidden value="<?= Util\root() ?>">

  <?php
  get_template_part('/components/pageLoader');
  get_template_part('/components/menu');
  ?>

  <main>