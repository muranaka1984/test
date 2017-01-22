$(function(){

  TweenMax.to('.first_view .overlay', 1.9, {
    top: '-' + 50 + 'px',
    height: 0,
    delay: 1.3,
    ease: Expo.easeOut, y: 0,
    onComplete : function(){
      $('.first_view .overlay').remove();
    }    
  });

  TweenMax.to('.first_view img', 2.4, {
    opacity: 1,
    delay: 0.8,
    ease: Power0.easeIn
  });  

  TweenMax.to('.first_view .overlay_h1', 1.8, {
    left: 0,
    opacity: 0.7,
    width: 100 + '%',
    delay: 0.8,
    ease: Expo.easeOut, y: 0
  });
  TweenMax.to('.first_view .c_tt', 0.6, {
    opacity: 1,
    right: 0,
    delay: 2.5,
    ease: Power2.easeOut, y: 0
  });


});
