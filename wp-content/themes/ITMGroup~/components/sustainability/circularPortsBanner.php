<section id="circularPorts">
  <div class="content parallaxHolder">
     <img class="bannerImg" width="100%" height="100%" alt="banner" mnr-src="<?= Util\root() ?>/assets/sustainability/sostenibilidad-itm-05.jpg">
     
     <p class="bigText wow fadeInUp" data-wow-delay='0s' >
      <?php if(Lang\getLang() == 'en'){ ?>
        <b> Circular Ports </b>
      <?php } else { ?>
        <b> Puertos Circulares </b>
      <?php } ?>
     </p>
     <p class="text wow fadeInUp" data-wow-delay='0.2s'>
      <?php if(Lang\getLang() == 'en'){ ?>
        We generate actions to remove single-use plastics and promote proper waste management in our ports and communities.
      <?php } else { ?>
        Generamos acciones para eliminar los plásticos de un solo uso y promovemos el manejo adecuado de los residuos en nuestros puertos y comunidades.
      <?php } ?>
     </p>
     
  </div>
</section>


<style type="text/css">
 #circularPorts .content{
   margin: 60px 0;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center;
   min-height: 406px;
   display: flex;
   align-items: center;
   justify-content: center;
   flex-direction: column;
   max-width: 1058px;
   padding-right: var(--padSides);
   padding-left: var(--padSides);
 }
 #circularPorts .content:before{
   content: '';
   z-index: 1;
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   background-color: rgba(0,0,0,0.5);
 }

 #circularPorts .content .text,
 #circularPorts .content .title{
   color: var(--white);
   text-align: center;
   font-family: Nexa-ExtraLight;
   position: relative;
   z-index: 2;
 }
 #circularPorts .content .title{
   font-size: 37px;
 }
 #circularPorts .content .bigText{
   text-transform: uppercase;
   line-height: 100%;
   position: relative;
   z-index: 2;
 }
 #circularPorts .content .text{
   font-size: 25px;
   margin-bottom: 25px;
 }

 @media screen and (max-width: 900px){
    #circularPorts .content {
      min-height: 300px;
      padding-top: 60px;
      padding-bottom: 60px;
    }
    #circularPorts .content .title {
      font-size: 25px;
      margin-bottom: 20px;
    }
    #circularPorts .content .bigText{
       font-size: 20px;
    }
    #circularPorts .content .text {
       font-size: 20px;
       margin-top: 10px;
    }
 }
</style>
