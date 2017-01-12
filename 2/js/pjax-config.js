$(function(){

  $.pjax({
    area : '#container',
    link : 'a:not([target])',
    ajax: { timeout: 2500},
    wait: 600,
  });

  $(document).bind('pjax:fetch', function() {
    TweenMax.to('#container', 0.6, {
      top: '60px',
      opacity: '0',
      ease: Power1.easeOut, y: 0
    });
  });

  $(document).bind('pjax:render', function() {
    TweenMax.to('#container', 0.6, {
      top: '50px',
      opacity: '1',
      ease: Power1.easeIn, y: 0
    });
  });

});