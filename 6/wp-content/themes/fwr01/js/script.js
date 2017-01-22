$(function(){

  var w = $(window).width();

  if(w <= 425){
    $('body').append(
    '<img src="/wp-content/themes/giragira/img/icon_menu.png" class="sp_menu" width="62">',
    '<img src="/wp-content/themes/giragira/img/icon_menu_close.png" class="sp_menu_close" width="62">'
    );
  }

  $(".global_navi").css({
    "display":"none",
    "position":"fixed",
    "top":"0",
    "left":"-" + w + "px",
//    "width":w + "px",
    "height":"100%",
    "z-index":"3000",
    "background":"#000",
  });

  $(".sp_menu").click(function(){
    $(".global_navi").css({
      "display":"block", 
    });
    TweenMax.to('.global_navi', 0.6, {
      left: '0px',
      delay: 0.01,
      ease: Expo.easeOut
    });
    $(".sp_menu_close").css({
      "z-index":"10000",
    });
  });

  $(".sp_menu_close").click(function(){
    TweenMax.to('.global_navi', 0.3, {
      left: "-" + w + 'px',
      ease: Expo.easeIn,
      onComplete : function(){
        $(".global_navi").css({
          "display":"none",
        });
      }  
    });
    $(".sp_menu_close").css({
      "z-index":"1000",
    });
  });

//  $('body').append("<div class=\"my_admin_guide\"><h1>ダッシュボードへ</h1><ul><li><a href=\"http://test-gira.xyz/\" target=\"_blank\">テスト用 G </a></li><li><a href=\"http://test-night.xyz/\" target=\"_blank\">テスト用 N </a></li></ul></div>");

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

  // star
  setInterval(function () {
    $('.star-1').fadeOut(150).delay(2000).fadeIn(300).fadeOut(150).delay(1254);
    $('.star-2').fadeOut(300).fadeIn(120).fadeOut(120).delay(1920);
    $('.star-3').fadeOut(150).delay(1200).fadeIn(300).fadeOut(150).delay(800);
    $('.star-4').fadeOut(700).fadeIn(300).fadeOut(160).delay(1350);
  }, 1);

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


  //audio
  $(".audioPlay").click(function(){
    $(".audioPlay").addClass("disp_off");
    $(".audioPlay").removeClass("disp_on");
    $(".audioPause").addClass("disp_on");
    $(".audioPause").removeClass("disp_off");
  });
  $(".audioPause").click(function(){
    $(".audioPlay").addClass("disp_on");
    $(".audioPlay").removeClass("disp_off");
    $(".audioPause").addClass("disp_off");
    $(".audioPause").removeClass("disp_on");
  });




});
