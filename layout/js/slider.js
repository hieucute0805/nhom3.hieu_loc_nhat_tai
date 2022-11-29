
        var swiper_27 = new Swiper('.swiper_27',{
        
        autoplay: {
            delay:5000,
            disableOnInteraction: true,
        },
        slidesPerView: 1,
        loop: true,
        preventClicks :true,
        navigation: {
            nextEl: '.swiper-button-next_27',
            prevEl: '.swiper-button-prev_27',
        },
        }
    );
     
       setTimeout(function(){swiper_27.init();	},500);
     








       
        var swiper_39 = new Swiper('.swiper_39',{simulateTouch: false,effect:"slide"}
    );
     
            swiper_39.on('slideChange', function () {
              //console.log('slide changed');
              doi_trang_theo_id_39(swiper_39.activeIndex); 
              //console.log('swiper_39.activeIndex');
            });
       setTimeout(function(){swiper_39.init();	},500);





       
 //
    var swiper_54 = new Swiper('.swiper_54',{
	
        autoplay: {
            delay:5000,
            disableOnInteraction: true,
        },
        slidesPerView: 6,
        loop: true,
        preventClicks :true,
        navigation: {
            nextEl: '.swiper-button-next_54',
            prevEl: '.swiper-button-prev_54',
        },
        }
    );
     
       setTimeout(function(){swiper_54.init();	},500);
     
     