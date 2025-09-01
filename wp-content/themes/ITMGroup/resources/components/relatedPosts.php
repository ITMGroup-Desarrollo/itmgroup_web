
<section id="related" >
    <div class="back">
      <div class="content">
        <h2 class="sectionTitle">
          <?php if(Lang\getLang() == 'en'){ ?>
              Might be <b>Interested</b>
          <?php } else { ?>
              Podría <b>Interesarte</b>
          <?php } ?>
        </h2>
        <div class="postsGrid">
            <?php 
              $posts = Blog\getRandPosts($args['postId'],3);
              
              foreach ($posts as $key => $postId) {
                  $postData = Blog\getPostData($postId);
                  $img = ($postData['img'] == null)? 
                                Util\getRoot().'/assets/especialidad1.jpg' : 
                                $postData['img'];
            ?>
                 <div class="postCard">
                     <div class="imgHolder">
                        <a href="<?= $postData['permalink']; ?>" 
                            aria-label="<?php if(Lang\getLang() == 'en'){ ?>
                                 Read More
                             <?php } else { ?>
                                 Leer Más
                             <?php } ?>"></a>
                        <img alt="<?= $postData['title'] ?>" 
                          width="100%" height="100%"
                          mnr-src="<?= $img ?>">
                     </div>
                     <div class="infoHolder">
                         <h3 class="title"><?= $postData['title'] ?></h3>
                         <p class="text"><?= $postData['excerpt'] ?></p>
                         <p class="more"><a href="<?= $postData['permalink']; ?>">
                             <?php if(Lang\getLang() == 'en'){ ?>
                                 Read More >>
                             <?php } else { ?>
                                 Leer Más >>
                             <?php } ?>
                         </a></p>
                     </div>
                 </div>
            <?php    
              }
            ?>
        </div>
      </div>
    </div>
</section>

<style type="text/css">

#related .sectionTitle{
    color: var(--azulOscuro);
    text-transform: uppercase;
    text-align: center;
}

#related .back{
  background-color: var(--gray);
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  margin-top: 77px;
  padding-top: 48px;
  padding-bottom: 62px;
}
#related .postsGrid{
  display: flex;
  --gap: 50px;
  gap: var(--gap);
  margin-top: 45px;
  flex-wrap: wrap;
} 
#related .postsGrid .postCard{
  flex: 1 0 calc(33.33% - var(--gap));
  background-color: var(--white);
}
#related .postsGrid .postCard .infoHolder{
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 30px;
}

#related .postCard{
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
#related .postCard .imgHolder{
  padding-top: 72%;
  width: 100%;
  overflow: hidden;
  position: relative;
}
#related .postCard .imgHolder img{
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  transition: all 0.3s ease;
  object-fit: cover;
}
#related .postCard:hover .imgHolder img{
  transform: scale(1.1);
}
#related .postCard .imgHolder a{
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 2;
  top: 0;
  left: 0;
}
#related .postCard .infoHolder{
  padding-top: 13px;
  padding-left: 5px;
  padding-right: 5px;
}
#related .postCard .title{
  color: var(--azulOscuro);
  font-family: 'Nexa-Heavy';
  font-size: 20px;
  margin-bottom: 8px;
}
#related .postCard .text{
  color: var(--azulOscuro);
  font-family: 'Nexa-Light';
  font-size: 16px;
}
#related .postCard .more{
  color: var(--colorError);
  font-family: 'Nexa-Book';
  margin-top: 10px;
  font-size: 16px;
}
@media screen and (max-width: 1000px){
  #related .postsGrid{
   --gap: 20px;
  }
}
@media screen and (max-width: 900px){
  #related .postsGrid .postCard .infoHolder{
    padding-left: 10px;
    padding-right: 10px;
  }
  #related .postCard .title{
    font-size: 16px;
  }
  #related .postCard .text{
    font-size: 14px;
  }
}
@media screen and (max-width: 720px){
  #related .postsGrid .postCard{
    flex: 1 0 calc(50% - var(--gap));
  }
}
@media screen and (max-width: 630px){
  #related .postCard .title{
    font-size: 14px;
  }
  #related .postCard .text{
    font-size: 14px;
  }
  #related .postCard .more{
    font-size: 14px;
  }
}
@media screen and (max-width: 500px){
  #related .postCard .text{
    font-size: 12px;
  }
}



</style>


