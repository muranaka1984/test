$(window).on('load resize', function(){

  var h = $(window).height();
  var w = $(window).width();
  
  if(w <= 800){
    $('.gnavi').addClass("gnavi_sp");
    $(".gnavi_sp").css({
      "left":"-" + (w + 120) + "px",
      "width":(w - 120) + "px",
    });

    $(".sp_menu").click(function(){
      TweenMax.to('.gnavi', 0.6, {
        left: "-" + 0 + 'px',
        ease: Expo.easeOut
      });
      $(".sp_menu_close").css({
        "z-index":"101",
      });
    });
    $(".sp_menu_close").click(function(){
      TweenMax.to('.gnavi_sp', 0.4, {
        left: "-" + (w + 120) + 'px',
        ease: Expo.easeIn
      });
      $(".sp_menu_close").css({
        "z-index":"100",
      });
    });
    $(".nlink a").click(function(){
      TweenMax.to('.gnavi_sp', 0.4, {
        left: "-" + (w + 120) + 'px',
        ease: Expo.easeIn
      });
      $(".sp_menu_close").css({
        "z-index":"100",
      });
    });
  } else {
    $('.gnavi').removeClass("gnavi_sp");    
    $(".gnavi").css({
      "left":"0",
      "width":"560px",
    });
  }

});
