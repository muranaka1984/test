$(function(){

  $.pjax({
    area : '#container',
    link : 'a:not([target])',
    ajax: { timeout: 2500},
    wait: 600,
  });

  $(document).bind('pjax:fetch', function() {
    TweenMax.to('.container_overlay', 0.6, {
      width: '100%',
      ease: Power1.easeOut, y: 0
    });
  });

  $(document).bind('pjax:render', function() {
    TweenMax.to('.container_overlay', 0.6, {
      width: '100%',
      ease: Power1.easeIn, y: 0
    });
  });

});