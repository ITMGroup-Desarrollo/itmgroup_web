<?php
  if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
  }

  /* 
  Template Name: brochure
  */
  
  $content = get_the_content();
  
  // Se quitan las etiquetas, este contenido viene de la informacion de la landing
  $plain_text = strip_tags($content);

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book</title>
  
 <style>
  @font-face {
    font-family: 'Nexa-Heavy';
    font-display: swap;
    src: url('/wp-content/themes/ITMGroup/vendor/fonts/Nexa-ExtraLight.ttf') format('truetype');
  }

  @font-face {
    font-family: 'Nexa-Light';
    font-display: swap;
    src: url('/wp-content/themes/ITMGroup/vendor/fonts/Nexa-ExtraLight.ttf') format('truetype');
  }

  body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/wp-content/themes/ITMGroup/assets/FOTO_MAPA.jpg');
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100vw;
    height: 100dvh;
    padding: 0;
    margin: 0;
    display: grid;
    place-content: center;
  }

  a {
    text-align: center;
    display: inline-block;
    text-decoration: none;
    padding: 12px 35px;
    color: white;
    background-color: #007297;
    border-radius: 8px;
    transition: all 0.3s linear;
    margin-bottom: 10px;
    font-size: 16px;
    font-family: 'Nexa-Heavy';
  }

  .content {
    margin: 0 auto;
    text-align: center;
  }

  .content h2 {
    text-align: center;
    font-family: 'Nexa-Heavy';
    color: #FFF;
    margin-bottom: 30px;
  }

  a:hover {
    background: #5A5C6C;
    color: #fff;
  }
</style>
</head>

<body>

  <section id="book">
    <div class="content">
      <h2>Si la descarga no se inicia automáticamente</h2>
      <a id="download-link" href="<?= esc_url($plain_text); ?>" download>Click aquí</a>
    </div>
  </section>
  
  <script>
    window.onload = function() {
      document.getElementById('download-link').click();
    }
  </script>
</body>

</html>