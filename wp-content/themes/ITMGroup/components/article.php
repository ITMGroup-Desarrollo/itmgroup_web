<?php 

  $postData = Blog\getPostData($args['postId']);

  $img = ($postData['img'] == null)? Util\getRoot().'/assets/especialidad1.jpg' : 
                                     $postData['img'];
if($args['postId'] == 457 || $args['postId'] == 459){
//echo (Util\getR'/wp-content/uploads/2025/01/celebrando_cabo-rojo-6.jpg');
  $img = '/wp-content/uploads/2025/01/celebrando_cabo-rojo-6.jpg';
}
?>
<section id="article" >
  
  <div class="imgHolder">
    <img mnr-src="<?= $img ?>" width="100%" height="100%" alt="<?= $postData['title']; ?>">
    <div class="grad"></div>
    <div class="content bannerContent">
      <h1 class="sectionTitle wow fadeInRight" data-wow-delay='0s' >
           <?php
        $title = $postData['title'];
        $separate = ",";

        if (strpos($title, $separate) !== false) {
          $words = explode($separate, $title);
          echo $words[0];
          echo "<br>";
          echo $words[1];
        } else {
          echo $title;
        }
        ?>
      </h1>
    </div>
  </div>

	<div class="content mainContent">
		  <!-- <h1 class="sectionTitle">
         <?= $postData['title'] ?>
      </h1> -->
      
      <?= $postData['content'] ?>
  </div>
</section>

<style type="text/css">
#article .mt-0{
  margin-top: 0 !important;  
}
#article .mb-8{
  margin-bottom: 8px !important;
}

#article .bannerContent{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 500px;
  padding-top: 100px;
  position: relative;
  z-index: 2;
}


#article .bannerContent{
  z-index: 2;
  min-height: 300px;
  height: 59vh ;
  max-height: 500px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  flex-direction: column;
  padding-bottom: 60px;
  padding-top: 160px;
}
#article .bannerContent .sectionTitle{
  color: var(--white);
  line-height: 110%;
  letter-spacing: 1.5px;
  font-size: 40px;
  font-family: 'Nexa-Heavy';
  text-transform: uppercase;
  text-align: center;
    max-width: 800px;
}
#article .imgHolder{
/*  padding-top: 30%;*/
  position: relative;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
#article .imgHolder img{
  object-fit: cover;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: absolute;
  object-position: center;
}
#article .imgHolder .grad{
  background: linear-gradient(0deg, rgb(0 0 0 / 26%) 0%, rgb(0 0 0 / 72%) 100%);
  z-index: 1;
  position: absolute;
  width: 100%;
  height: 100%;
  bottom: 0;
  left: 0;
  transition: all 0.3s ease;
}

#article .mainContent{
  padding-top: 80px;
  max-width: 900px;
}
#article .mainContent h2,
#article .mainContent h3,
#article .mainContent h4{
  padding-bottom: 20px;
  padding-top: 10px;
}
#article .mainContent p,
#article .mainContent li,
#article .mainContent em{
  font-family: Nexa-Book;
  line-height: 140%;
  color:var(--azulOscuro);
  text-align: justify;
  padding-bottom: 25px;
  font-size: 16px;
}
#article .mainContent strong,
#article .mainContent b{
  font-family: Nexa-Heavy;
}
#article .mainContent h2,
#article .mainContent h3,
#article .mainContent h4{
  font-family: Nexa-Heavy;
  color:var(--azulOscuro);
}
#article .mainContent li{
  padding-bottom: 10px;
}
#article .mainContent strong a,
#article .mainContent b a,
#article .mainContent h2 a,
#article .mainContent h3 a,
#article .mainContent h4 a,
#article .mainContent h5 a,
#article .mainContent h6 a,
#article .mainContent em a,
#article .mainContent p a,
#article .mainContent li a,
#article .mainContent ul a,
#article .mainContent strong a > *,
#article .mainContent b a > *,
#article .mainContent h2 a > *,
#article .mainContent h3 a > *,
#article .mainContent h4 a > *,
#article .mainContent h5 a > *,
#article .mainContent h6 a > *,
#article .mainContent em a > *,
#article .mainContent p a > *,
#article .mainContent li a > *,
#article .mainContent ul a > *{
  color: #2196F3;
}
#article .mainContent h2{
  font-size: 25px;
}
#article .mainContent h3{
  font-size: 20px;
  color: var(--azulClaro);
}
#article .mainContent h4{
  font-size: 18px;
}
#article .mainContent h5{
  font-size: 16px;
}
#article .mainContent h6{
  font-size: 14px;
}
#article .mainContent .has-text-align-center{
  text-align: center!important;
}



#article .mainContent figure{
  margin-bottom: 40px;
  margin-top: 20px;
}
#article .mainContent figure.size-full{
  display: flex;
}
#article .mainContent figure.size-full img{
  width: 100%!important;
}



#article .wp-block-buttons{
  display: flex;
  margin-bottom: 25px;
}

@media screen and (max-width: 500px){
  #article .bannerContent .sectionTitle{
    font-size: 25px;
  }
  #article .mainContent p,
  #article .mainContent li{
    font-size: 16px;
  }
    #article .mainContent h2{
    font-size: 20px;
  }
  #article .mainContent h3{
    font-size: 18px;
  }
  #article .mainContent h4{
    font-size: 17px;
  }
  #article .mainContent h5{
    font-size: 16px;
  }
  #article .mainContent h6{
    font-size: 14px;
  }
}

</style>

<script>
  Mnr.onLoad(()=>{
    Mnr.e('.wp-element-button').addClass('button button1');
  });
</script>
