$(function(){

  var h = $(window).height();
  var w = $(window).width();

  // CountUp
  var num = 0;
  var speed = 15;
  setTimeout(function(){
    setInterval(function(){
      if(num <= 100){
        $('.countup').text(num);
        num++;
      } else if(num >= 100){
        num++;
        $('.countup').text('100');      
      }

    },speed);
    TweenMax.to('.countup', 1, {
      delay: 2,
      left: 53 + '%',
      opacity: 0,
      ease: Power4.easeOut, y: 0,
      onComplete : function(){
        $('.countup').remove();
      }    
    });
  },1000);



  // Title
  if(w >= 425){
    TweenMax.to('.intro .title_right', 3, {
      delay: 3.5,
      left: '-' + 2200 + 'px',
      ease: SlowMo.ease.config(0.7, 0.7, false),
      onComplete : function(){
        $('.intro .title_right').remove();
      }    
    });
    TweenMax.to('.intro .title_left', 3.5, {
      delay: 3.5,
      left: 2200 + 'px',
      ease: SlowMo.ease.config(0.7, 0.7, false),
      onComplete : function(){
        $('.intro .title_left').remove();
      }    
    });
  } else{
    TweenMax.to('.intro .title_right', 3, {
      delay: 3.5,
      left: '-' + 1000 + 'px',
      ease: SlowMo.ease.config(0.7, 0.7, false),
      onComplete : function(){
        $('.intro .title_right').remove();
      }    
    });
    TweenMax.to('.intro .title_left', 3.5, {
      delay: 3.5,
      left: 1000 + 'px',
      ease: SlowMo.ease.config(0.7, 0.7, false),
      onComplete : function(){
        $('.intro .title_left').remove();
      }    
    });    
  }

  // Photo0-2
  TweenMax.to('.intro .tt0', 3, {
    delay: 6.8,
    left: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .tt0').remove();
    }    
  });
  TweenMax.to('.intro .photo0', 3, {
    delay: 7.0,
    top: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .photo0').remove();
    }    
  });

  TweenMax.to('.intro .tt1', 3, {
    delay: 8.8,
    left: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .tt1').remove();
    }    
  });
  TweenMax.to('.intro .photo1', 3, {
    delay: 9,
    top: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .photo1').remove();
    }    
  });

  TweenMax.to('.intro .tt2', 3, {
    delay: 10.8,
    left: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .tt2').remove();
    }    
  });
  TweenMax.to('.intro .photo2', 3, {
    delay: 11,
    top: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .photo2').remove();
    }    
  });

  TweenMax.to('.intro .tt3', 3, {
    delay: 12.8,
    left: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .tt3').remove();
    }    
  });
  TweenMax.to('.intro .photo3', 3, {
    delay: 13,
    top: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .photo3').remove();
    }    
  });

  TweenMax.to('.intro .tt4', 3, {
    delay: 14.8,
    left: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .tt4').remove();
    }    
  });
  TweenMax.to('.intro .photo4', 3, {
    delay: 15,
    top: '-' + 1000 + 'px',
    ease: SlowMo.ease.config(0.7, 0.7, false),
    onComplete : function(){
      $('.intro .photo4').remove();
    }    
  });


  // Finsh
  TweenMax.to('.intro_top_finsh', 3, {
//    delay: 20,
    delay: 18,
    opacity: 1,
    ease: Power4.easeOut, y: 0
  });
  TweenMax.to('.intro_top_p1', 3, {
    delay: 18,
    opacity: 1,
    ease: Power4.easeOut, y: 0
  });
  TweenMax.to('.intro_top_p2', 3, {
    delay: 19,
    opacity: 1,
    ease: Power4.easeOut, y: 0
  });


});
