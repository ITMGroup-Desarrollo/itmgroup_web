
<section id="contact">
    <div class="content wow fadeInUp" data-wow-delay='0s'>
        <div class="textHolder">
            <p class="text wow fadeInUp" data-wow-delay='0.2s'>
                <?php if(Lang\getLang() == 'en'){ ?>
                  LET'S KEEP IN TOUCH! FILL IN YOUR INFORMATION&nbsp;AND <br>
                  <b>WE’LL CONTACT YOU TO ANSWER YOUR&nbsp;QUESTIONS</b>
                <?php } else { ?>
                  ¡CONÓCENOS! LLENA TUS DATOS&nbsp;Y<br>
                  <b>CON GUSTO TE&nbsp;CONTACTAREMOS. </b>
                <?php } ?>
                
            </p>
        </div>
        <div class="formWrapper wow fadeInUp" data-wow-delay='0s'>
            <?php if(Lang\getLang() == 'en'){ ?>
              <?= do_shortcode(('[contact-form-7 title="Contact-en"]')); ?>
            <?php } else { ?>
              <?= do_shortcode(('[contact-form-7 title="Contact"]')); ?>
            <?php } ?>
        </div>
    </div>
</section>


<style type="text/css">
	#contact{
       padding-top: 94px;
	}
	#contact .content{
      display: flex;
      flex-direction: column;
      align-items: center;
	}
	#contact .textHolder{
      display: flex;
      align-items: center;
      flex-direction: column;
      width: 100%;
	}
	#contact .textHolder .text{
      text-align: center;
      font-size: 24px;
      max-width: 1074px;
      color: var(--azulOscuro);
	}
	#contact .textHolder .title{
      text-align: center;
      margin-top: 27px;
      color: var(--azulClaro);
      font-size: 35px;
      line-height: 117%;
      letter-spacing: 1.3px;
      text-transform: uppercase;
	}
	#contact .formWrapper{
      margin-top: 50px;
      margin-bottom: 50px;
      width: 100%;
      max-width: 900px;
	}
	#contact .formWrapper form{
      width: 100%;
      margin-bottom: 40px;
	}
    @media screen and (max-width: 700px){
      #contact .textHolder .title{
        font-size: 30px;
      }
    }
	@media screen and (max-width: 500px){
      #contact .textHolder .title{
        font-size: 25px;
	  }
	  #contact .textHolder .text{
        font-size: 20px;
	  }
	}
	@media screen and (max-width: 500px){
      #contact .textHolder .title{
        font-size: 20px;
	  }
	  #contact .textHolder .text{
        font-size: 20px;
	  }
	}
</style>



<script>

function scrollToContact(){

   Mnr.e('#contact form').setInView(200);
   Mnr.u.wait(()=>{
     if(Mnr.e('#contact form').isInView() == false){
       scrollToContact();
     }
     else{
      Mnr.e('#contact form').setInView(200);
     }
   },300);
}
// Mnr.onLoad(()=>{
//   Mnr.e('.wpcf7-submit').addClass('button');

//   Mnr.e('.toContactBottom').addEvent('click',()=>{
//     scrollToContact();
//   });

// });
</script>