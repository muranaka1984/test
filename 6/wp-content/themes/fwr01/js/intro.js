$(function(){

  var h = $(window).height();
  var w = $(window).width();

  var cookie = $.cookie("modal");
  if(cookie == "off"){
    var s = $('.cast_todayschedule dl');
//    $('.cast_todayschedule').on('inview', function() {
      TweenMax.staggerTo(s, 0.8, {
        opacity: 1,
        top: 0,
        delay: 0.8,
        ease: Back.easeOut.config(1.7), y: 0
      }, 0.2);
//    });
  };




});
