<section id="popup" class="modal">
  <div class="closeArea" close-modal></div>

<?php if(Lang\getLang() == 'en'){ ?>
<a href="https://online.flippingbook.com/view/540861550" target="_blank" rel="noopener noreferrer">
  <div class="modalWrapper">
    <img mnr-src="<?= Util\root() ?>/assets/banner-genera-2024-en.jpg" width="100%" height="100%" alt="popup">
</div>
</a>
<?php } else { ?>
<a href="https://online.flippingbook.com/view/94536110/" target="_blank" rel="noopener noreferrer">
  <div class="modalWrapper">
    <img mnr-src="<?= Util\root() ?>/assets/BANNER_2024.jpg" width="100%" height="100%" alt="popup">
</div>
</a>
<?php } ?>
</section>
<div class="coverShadow" ></div>

<style>
#popup{
  overflow: auto;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 8;
  display: none;
  padding: 60px  20px 20px 20px;
  width: 100%; 
  height: 100%; 
  overflow-y: auto; 
  justify-content: center; 
}
#popup.show{
  display: flex;
}
#popup .modalWrapper{
  position: relative;
  width: 100%;
  max-width: 700px;
  z-index: 7;
  margin-bottom: 80px;
}
#popup .modalWrapper .button{
  position: absolute;
  z-index: 8;
  display: flex !important;
  bottom: 150px;
  left: 0;
  right: 0;
  margin: auto;
  max-width: 70%;
  text-transform: unset;
  gap: 5px;
  color: #003B5D;
}
#popup .modalWrapper .button b{

}
#popup .modalWrapper .button:hover {
color: white;
}
#popup .closeArea{
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 6;
}
.coverShadow{
  width: 100%;
  height: 100vh;
  overflow: auto;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 7;
  display: none;
  background-color: rgb(0 0 0 / 50%);
}
.coverShadow.show{
  display: flex;
}

@media screen and (max-width: 700px){
  #popup .modalWrapper .button{
    bottom: 27vw;
    max-width: 80%;
    font-size: 18px;
  }
}
@media screen and (max-width: 600px){
  #popup .modalWrapper .button{
    bottom: 20vw;
    max-width: 90%;
    font-size: 16px;
  }
}
@media screen and (max-width: 500px){
  #popup .modalWrapper .button{
    bottom: 15vw;
    font-size: 14px;
  }
}
@media screen and (max-width: 400px){
  #popup .modalWrapper .button{
    bottom: 19vw;
    font-size: 10px;
    min-height: 32px;
  }
}
</style>

<script>
    
  Mnr.onLoad(()=>{
    setModalEvents();

    Mnr.u.wait(()=>{
      setModal(true);
    },1000);
  })
  

  function setCoverShadow(state){
       let coverShadow = Mnr.e('.coverShadow');
       if(state){
         coverShadow.addClass('show'); 
       }
       else{
         coverShadow.removeClass('show');
       }
    }
  function setModal(state){
       let modal = Mnr.e('#popup');
       let body = Mnr.e('body');
       setCoverShadow(state);
       if(state){
         modal.addClass('show'); 
         body.addClass('noScroll');
       }
       else{
         modal.removeClass('show');
         body.removeClass('noScroll');
       }
  }
  function setModalEvents(){

    let closeModalButtons = Mnr.e('[close-modal]');
    closeModalButtons.addEvent('click',e=>{
        console.log(true);
      setModal(false);
    });
  }

</script>

