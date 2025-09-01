
<section id="mainBrands" >
	<div class="content swiper-content">
      <div class="swiper">
        <div class="swiper-wrapper">
           <?php 
              for($i = 0; $i <= 11; $i++){
           ?>
                 <div class="swiper-slide">
                    <img class="logo" 
                         width="100%" height="100%"
                         alt="logo <?= $i; ?>"
                         src="<?= Util\root() ?>/assets/logo (<?= $i + 1; ?>).png">
                 </div>
           <?php 
              }
           ?>
           
        </div>
      </div>
	</div>
</section>

<style type="text/css">
 #mainBrands{
/*    padding-top: 60px;*/
/*    padding-bottom: 80px;*/
 }
 #mainBrands .content{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 10px;
 }
 #mainBrands .content.swiper-content:before{
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
    position: absolute;
 }
 #mainBrands .swiper-free-mode>.swiper-wrapper {
    transition-timing-function: linear;
 }
 #mainBrands .swiper-slide{
/*    height: 200px;*/
   width: auto;
   min-width: 25%;
 }
 #mainBrands .logo{
    height: 300px;
    width: auto;
    margin: auto;
/*    object-fit: cover;*/
/*    position: absolute;*/
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
/*    margin: auto;*/
 }
 /*#mainBrands .logo{
    max-height: 129px;
    height: 100%;
    width: calc(25% - 10px);
    object-fit: contain;
    max-width: 207px;
 }*/
 
 @media screen and (max-width: 1100px){
   
 }
 
 @media screen and (max-width: 600px){
   #mainBrands .logo{
/*    height: 100px;*/
   }
   #mainBrands .swiper-slide{
      min-width: 200px;
    }
    #mainBrands .logo{
       height: 200px;
    }
 }
 @media screen and (max-width: 400px){
   #mainBrands {
   }
   #mainBrands .logo{
       height: 200px;
    }
 }

</style>


<script>
  Mnr.onLoad(()=>{
      let swiper = new Swiper("#mainBrands .swiper", {
        slidesPerView: 'auto',
        speed: 4000,
        loop: true,
        spaceBetween: 20,
        freeMode: true,
        autoplay: {
          delay: 1,
          disableOnInteraction: false,
        },
        breakpoints:{
          400: {
                 spaceBetween: 20
               },
          600: {
                 spaceBetween: 40,
               },
          800: {
                 spaceBetween: 60,
               },
        }
      });
  });
</script>