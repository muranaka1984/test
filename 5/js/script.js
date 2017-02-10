$(window).on('load resize', function(){

  var h = $(window).height();
  var w = $(window).width();
  

  $('.general h2').on('inview', function() {
    TweenMax.to(this, 0.6, {
      opacity: 1,
      marginTop: 0,
      ease: Power0.easeIn
    });
    TweenMax.to($(this).find('span'), 0.8, {
      delay: 0.5,
      opacity: 1,
      marginLeft: 0,
      ease: Power1.easeOut
    });
  });


});
