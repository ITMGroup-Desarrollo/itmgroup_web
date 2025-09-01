<?php
  if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly
  }

  /* 
  Template Name: nosotros
  */

  get_header();
  
?>
<h1 class="hide">nosotros</h1>
<?php

  get_template_part('/components/mainVideoBanner');
?>

<section id="nosotros">
  <div class="content">
     
     <h2 class="title firstTitle wow fadeInUp" data-wow-delay='0s'>
       <?php if(Lang\getLang() == 'en'){ ?>
         The perfection of this art has taken us <br><b>30 years</b>
       <?php } else { ?>
         La perfección de este arte nos ha llevado <br><b>30 años</b>
       <?php } ?>
     </h2>

     <p class="text wow fadeInUp" data-wow-delay='0s'>
       <?php if(Lang\getLang() == 'en'){ ?>
         ITM Developers does not sell residences, but the experience of living in one of our developments. The perfection of this art has taken us 30 years, and we continue in constant movement, creating new spaces adapted to today's needs.
       <?php } else { ?>
         ITM Developers no vende residenciales, sino la experiencia de vivir en alguno de nuestros desarrollos, la perfección de este arte nos ha llevado 30 años y seguimos en contante movimiento, creando nuevos espacios, adaptados a las necesidades de hoy en día.
       <?php } ?>
     </p>

     <p class="text wow fadeInUp" data-wow-delay='0s'>
       <?php if(Lang\getLang() == 'en'){ ?>
         At ITM Developers, we understand the importance of connecting with nature, so our projects integrate with the local vegetation, creating spaces that make you feel free, safe, and able to do all kinds of outdoor activities.
       <?php } else { ?>
         En ITM Developers comprendemos lo importante que es la conexión con la naturaleza, por lo tanto, nuestros poryectos se integran con la vegetación de la zona, creando espacios que hagan sentir libre, seguro y que puedas realizar todo tipo de actividades al aire libre.
       <?php } ?>
     </p>

     <p class="text wow fadeInUp" data-wow-delay='0s'>
       <?php if(Lang\getLang() == 'en'){ ?>
         Our projects are always located in areas of high added value, close to natural and cultural attractions, history, traditions, urban services, among others.
       <?php } else { ?>
         Nuestros proyectos siempre estarán en las áreas de mayor plusvalía, cerca de atractivos naturales y culturales, historia, tradicioens, servicios urbanos, entre otros.
       <?php } ?>
     </p>

     <h2 class="title secondTitle wow fadeInUp" data-wow-delay='0s'>
       <?php if(Lang\getLang() == 'en'){ ?>
         Our projects are always in areas with:
       <?php } else { ?>
         Nuestros proyectos siempre están en áreas con:
       <?php } ?>
     </h2>

     <div class="proyectos">
       <div class="col wow fadeInRight" data-wow-delay='0s'>
         <img mnr-src="<?= Util\root() ?>/assets/nosotros.png" width="100%" height="100%" alt="High Value">
         <h3 class="text">
           <?php if(Lang\getLang() == 'en'){ ?>
             <b>High Added Value</b>
           <?php } else { ?>
             <b>Mayor Plusvalía</b>
           <?php } ?>
         </h3>
       </div>
       <div class="col wow fadeInRight" data-wow-delay='0.2s'>
         <img mnr-src="<?= Util\root() ?>/assets/nosotros (1).png" width="100%" height="100%" alt="Natural Attraction">
         <h3 class="text">
           <?php if(Lang\getLang() == 'en'){ ?>
             <b>Natural Attraction</b>
           <?php } else { ?>
             <b>Atractivo Natural</b>
           <?php } ?>
         </h3>
       </div>
       <div class="col wow fadeInRight" data-wow-delay='0.4s'>
         <img mnr-src="<?= Util\root() ?>/assets/nosotros (2).png" width="100%" height="100%" alt="Urban Services">
         <h3 class="text">
           <?php if(Lang\getLang() == 'en'){ ?>
             <b>Urban Services</b>
           <?php } else { ?>
             <b>Servicios Urbanos</b>
           <?php } ?>
         </h3>
       </div>
     </div>
  </div>
</section>

<section id="desarrollosTitles">
    <div class="content">
      <h2 class="sectionTitle wow fadeInRight" data-wow-delay='0s'>
          <?php if(Lang\getLang() == 'en'){ ?>
            Our <br><b>Developments</b>
          <?php } else { ?>
            Nuestros <br><b>Desarrollos</b>
          <?php } ?>
      </h2>
    </div>
</section>
<?php 
  get_template_part('/components/logos');

  get_template_part('/components/proyectosGrid');

  get_template_part('/components/contact');
?>

<?php
  get_footer();
?>


<style>
#nosotros{

}
#nosotros .content{
  padding-top: 71px;
}
#nosotros .content .title{
  color: var(--azulOscuro);
  font-family: 'Nexa-Book';
  font-size: 30px;
  line-height: 124%;
  margin-bottom: 57px;
}
#nosotros .content .title.firstTitle{
  text-align: center;
}
#nosotros .content .title.secondTitle{
  margin-top: 64px;
}
#nosotros .content .title b{
  text-transform: uppercase;
  font-size: 32px;
  line-height: 100%;
}
#nosotros .content .text{
  color: var(--azulOscuro);
  font-size: 20px;
  line-height: 119%;
  margin-bottom: 25px;
/*  text-align: justify;*/
}
#nosotros .proyectos{
  display: flex;
  align-items: center;
  justify-content: space-between;
  --gap: 20px;
  gap: var(--gap);
}
#nosotros .proyectos .col{
  flex: 1 0 calc(33.33% - var(--gap));
  max-width: 300px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
#nosotros .proyectos .col img{
  max-width: 209px;
}
#nosotros .proyectos .col .text{
  margin-top: 21px;
  font-size: 29px;
  margin-bottom: 0;
  text-align: center;
}
@media screen and (max-width: 960px){
  #nosotros .proyectos .col img{
    max-width: 150px;
  }
  #nosotros .proyectos .col .text{
    font-size: 20px;
  }
}
@media screen and (max-width: 720px){
  #nosotros .proyectos .col img {
    max-width: 100px;
  }
}
@media screen and (max-width: 680px){
  #nosotros .proyectos .col .text{
    max-width: 150px;
  }
}
@media screen and (max-width: 500px){
  #nosotros .content .title{
    font-size: 25px;
  }
  #nosotros .proyectos .col img{
    max-width: 70px;
  }
  #nosotros .proyectos .col .text{
    font-size: 18px;
  }
}
@media screen and (max-width: 400px){
  #nosotros .proyectos .col img{
    max-width: 60px;
  }
  #nosotros .proyectos .col .text{
    font-size: 15px;
  }
}

#desarrollosTitles .content{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding-top: 56px;
  padding-bottom: 40px;
}
#desarrollosTitles .sectionTitle{
  color: var(--azulOscuro);
  text-align: center;
  line-height: 118%;
}
#desarrollosTitles .sectionTitle b{
  color: var(--azulClaro);
  text-transform: uppercase;
}
</style>



