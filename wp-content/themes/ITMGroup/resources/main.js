Mnr.init();

let scrolled = false;


Mnr.onLoad(()=>{
      let loader = Mnr.e('#pageLoader');

      Mnr.u.wait(()=>{
        loader.addClass('fade');
        new WOW().init();
      },200).wait(()=>{
        loader.addClass('load');
      },500);

      
      SVGInject(Mnr.e("[svg-src]").elems);

      
      Mnr.e('.wpcf7-submit').addClass('button');


});


  
Mnr.onScroll(()=>{
   let scroll = window.pageYOffset;
   if(scroll > 0 && scrolled == false){
     scrolled = true;
     Mnr.e('html').addClass('scrolled');
   }
   else if(scroll <= 30){
     scrolled = false;

     Mnr.e('html').removeClass('scrolled');
   }
   
},10);


Mnr.onScroll(()=>{
   parallax();
},0);
Mnr.onResize(()=>{
   parallax();
});

function parallax() {
    let parallaxHolders = document.querySelectorAll('.parallaxHolder');

    parallaxHolders.forEach(holder => {
        let bannerImg = holder.querySelector('.bannerImg');

        if (bannerImg) {
            let holderRect = holder.getBoundingClientRect();
            let scrolledHeight = window.pageYOffset;
            let holderTopRelativeToViewport = holderRect.top;
            let holderHeight = holder.offsetHeight;

            // Check if the element is in the viewport
            if (holderTopRelativeToViewport + holderHeight > 0 && holderTopRelativeToViewport < window.innerHeight) {
                // Calculate the parallax effect
                let parallaxSpeed = 0.1;
                let transformAmount = (holderTopRelativeToViewport - window.innerHeight) * parallaxSpeed;

                // Limit transformAmount to half the height of the holder
                transformAmount = Math.min(Math.max(transformAmount, -holderHeight / 2), holderHeight / 2);

                let transformValue = 'translateY(' + transformAmount + 'px)';
                bannerImg.style.transform = transformValue;
            }
        }
    });
}
