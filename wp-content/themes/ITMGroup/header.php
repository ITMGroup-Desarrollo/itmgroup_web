<!doctype html>
<html lang="<?= Lang\getLocale(); ?>" class="<?= Util\setHomeClass() ?> ">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K59Z8653');</script>
<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ECT7H7JR2W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ECT7H7JR2W');
</script>
  <meta name="author" content="alejandro Bores">
  <meta name="publisher" content="ITM Group">

  <link rel="icon" type="image/ico" href="<?= Util\root() ?>/assets/isotipo.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>



  <?php wp_head(); ?>


</head>


<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K59Z8653"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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