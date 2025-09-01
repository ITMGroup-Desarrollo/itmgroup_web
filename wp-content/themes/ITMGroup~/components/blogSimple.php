
<section id="simpleBlog" >
    <div class="content">
        <h2 class="sectionTitle wow fadeInUp" data-wow-delay='0.1s'>
          <?php if(Lang\getLang() == 'en'){ ?>
                Latest News
            <?php } else { ?>
                Últimas noticias
            <?php } ?>
        </h2>
        <div class="postsGrid" id="blog">
            <?php 
              $posts = Blog\getPosts(6);
              $counter = 0;
              foreach ($posts as $key => $postId) {
                  $postData = Blog\getPostData($postId);
                  $img = ($postData['img'] == null)? 
                                Util\getRoot().'/assets/FOTO_BAHIA.jpg' : 
                                $postData['img'];
            ?>

                <?php 
                  if($counter == 0){
                ?>
                   <div class="col col<?= $key ?>">
                <?php 
                  }
                ?>
                      <div class="card wow fadeInUp" data-wow-delay='0.<?= $key ?>s'>
                        <img class="banner"
                             mnr-src="<?= $img ?>"
                             alt="<?= $postData['title'] ?>"
                             width="100%"
                             height="100%"
                        >
                        <a href="<?= $postData['permalink']; ?>" 
                           aria-label="<?= (Lang\getLang() == 'en')? 'Explore' : 'Explorar' ?>"></a>
                        <h3 class="title wow fadeInRight" >
                          <?=  Util\truncateString($postData['title'], 50); ?></h3>
                        <div class="textHolder">
                          <p class="text"><?= $postData['excerpt'] ?></p>
                          <p class="exploreText">
                            <?php if(Lang\getLang() == 'en'){ ?>
                                Explore
                            <?php } else { ?>
                                Explorar
                            <?php } ?></p>
                        </div>
                        <div class="grad"></div>
                      </div>
                <?php 
                  if($counter == 1){
                ?>
                   </div>
                <?php 
                  }
                ?>
            <?php    
               $counter++;
               if($counter == 2){
                 $counter = 0;
               }
              }
            ?>
        </div>
    </div>
</section>

<style type="text/css">
  #simpleBlog .content{
    padding-top: 76px;
    padding-bottom: 89px;
  }
  #simpleBlog .postsGrid{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 58px;
    --gap: 20px;
    gap: var(--gap);
  }
  #simpleBlog .postsGrid .col{
    flex: 1 0 calc(33.33% - var(--gap));
  }
  #simpleBlog .card{
    position: relative;
    width: 100%;
    padding: 20px 40px 25px 40px;
    min-height: 530px;
    flex-direction: column;
    justify-content: flex-end;
    align-items: flex-start;
    overflow: hidden;
    display: flex;
    margin-bottom: var(--gap);
  }
  #simpleBlog .card:last-child{
    min-height: 255px;
  }
  #simpleBlog .col2 .card{
     min-height: 255px;
  }
  #simpleBlog .col2 .card:last-child{
    min-height: 530px;
  }
  #simpleBlog .card .banner{
    z-index: 1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    object-fit: cover;
    position: absolute;
    transition: all 0.8s;
  }
  #simpleBlog .card:hover .banner{
    transform: scale(1.1);
  }
  #simpleBlog .card a{
    z-index: 4;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    position: absolute;
  }
  #simpleBlog .card .title{
    color: var(--white);
    z-index: 3;
    position: relative;
    width: 100%;
    font-family: Nexa-Heavy;
    font-size: 25px;
    transition: all 0.3s ease;
    line-height: 110%;
  }
  #simpleBlog .card .textHolder {
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.5s ease;
    z-index: 3;
    position: relative;
    bottom: 0;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    max-height: 1px;
    max-width: 370px;
    display: none;
  }
  #simpleBlog .card:hover .textHolder {
    opacity: 1;
    transform: translateY(0);
    max-height: 155px;
    margin-top: 10px;
  }
  #simpleBlog .card  .text{
    color: var(--white);
    font-size: 15px;
    line-height: 117%;
    text-align: justify;
  }
  #simpleBlog .card .exploreText{
    color: var(--white);
    text-transform: uppercase;
    font-family: 'Nexa-Light';
    font-size: 20px;
    margin-top: 20px;
    text-decoration: underline;
    text-underline-offset: 3px;
  }
  #simpleBlog .card:before{
    opacity: 0.2;
    height: 100%;
    background: black;
    transition: all 0.3s ease;
    z-index: 2;
    position: absolute;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
    opacity: 0;
    content: '';
  }
  #simpleBlog .card .grad{
    background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgb(0 0 0 / 72%) 100%);
    z-index: 2;
    position: absolute;
    width: 100%;
    height: 80%;
    bottom: 0;
    left: 0;
    transition: all 0.3s ease;
  }
  #simpleBlog .card:hover:before{
    opacity: 0.5;
  }
  @media screen and (max-width: 1140px){
    #simpleBlog .card .title{
      font-size: 2.5cqi;
      line-height: 110%;
    }
  }
  @media screen and (max-width: 900px){
    #simpleBlog .card{
      padding: 20px 25px 20px 25px;
      min-height: 350px;
    }
    #simpleBlog .card:last-child{
      min-height: 250px;
    }
    #simpleBlog .col2 .card{
       min-height: 250px;
    }
    #simpleBlog .col2 .card:last-child{
      min-height: 350px;
    }
    #simpleBlog .card .title{
      font-size: 2cqi;
    }
    #simpleBlog .card .exploreText{
      font-size: 16px;
      margin-top: 10px;
    }
  }
  @media screen and (max-width: 700px){
    #simpleBlog .content {
      padding-top: 40px;
      padding-bottom: 60px;
    }
    #simpleBlog .card .title{
      font-size: 3cqi;
    }
    #simpleBlog .postsGrid .col{
      flex: 1 0 calc(50% - var(--gap));
    }
    #simpleBlog .col .card{
      min-height: 200px;
    }
    #simpleBlog .col0 .card:last-child,
    #simpleBlog .col2 .card:last-child{
      margin-bottom: 0;
      min-height: 200px;
    }
    #simpleBlog .postsGrid .col4{
      flex: 1 0 calc(100% - var(--gap));
      display: flex;
      flex-wrap: wrap;
      gap: var(--gap);
    }
    #simpleBlog .postsGrid .col4 .card{
      flex: 1 0 calc(50% - var(--gap));
      width: unset;
    }
  }
  @media screen and (max-width: 600px){
    #simpleBlog .col .card,
    #simpleBlog .col0 .card:last-child,
    #simpleBlog .col2 .card:last-child{
      min-height: 150px;
    }
    #simpleBlog .card .textHolder{
      display: none;
    }
    #simpleBlog .card .title{
      font-size: 4cqi;
    }
    #simpleBlog .card{
      padding: 20px 20px 20px 20px;
    }
  }
</style>

