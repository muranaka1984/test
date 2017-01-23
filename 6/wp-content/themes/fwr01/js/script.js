$(window).on('load resize', function(){

  var w = $(window).width();

  if(w <= 640){
    $('.global_navi').addClass('global_navi_sp');
    $(".global_navi").css({
      "left":"-" + w + "px",
    });
    $(".sp_menu").click(function(){
      $(".global_navi_sp").css({
        "display":"block", 
      });
      TweenMax.to('.global_navi_sp', 0.6, {
        left: '0px',
        delay: 0.01,
        ease: Expo.easeOut
      });
      $(".sp_menu_close").css({
        "z-index":"10000",
      });
    });

    $(".sp_menu_close").click(function(){
      TweenMax.to('.global_navi_sp', 0.3, {
        left: "-" + w + 'px',
        ease: Expo.easeIn,
        onComplete : function(){
          $(".global_navi_sp").css({
            "display":"none",
          });
        }  
      });
      $(".sp_menu_close").css({
        "z-index":"1000",
      });
    });
  } else if(w >= 641) {
    $('.global_navi').removeClass('global_navi_sp');
    $(".global_navi").css({
      "left":"0px",
    });
  }

  // pagetop
  $('.pagetop').click(function() {
    $('html,body').animate({
      scrollTop: 0
    }, 'normal');
  });

  $('.cast_todayschedule').mouseover(function(){
    TweenMax.to($(this).find('dd'), 0.4, {
      left: 0 + 'px',
      ease: Power4.easeOut, y: 0
    });
    TweenMax.to($(this).find('dt img'), 1.2, {
      opacity: 0.4,
      ease: Power4.easeOut, y: 0
    });
    TweenMax.to($(this).find('.icon_type'), 1.2, {
      opacity: 0.6,
      ease: Power4.easeOut, y: 0
    });
  });

  // taiki
  $(".taiki_open").click(function(){
    TweenMax.to('.taiki_pop', 0.4, {
      opacity: 1,
      ease: Power4.easeOut, y: 0
    });
    $(".taiki_pop").css({
      "display":"table",
    });
  });
  $(".taiki_close").click(function(){
    TweenMax.to('.taiki_pop', 0.4, {
      opacity: 0,
      ease: Power4.easeOut, y: 0,
        onComplete : function(){
          $(".taiki_pop").css({
            "display":"none",
          });
        }
    });
  });



});
