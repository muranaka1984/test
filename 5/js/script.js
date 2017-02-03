$(window).on('load resize', function(){

  var h = $(window).height();
  var w = $(window).width();
  

  $('.general h2').on('inview', function() {
    TweenMax.to(this, 0.8, {
      opacity: 1,
      ease: Power0.easeIn
    });
    TweenMax.to($(this).find('span'), 0.8, {
      marginLeft: 0,
      ease: Power1.easeOut
    });
  });


});
