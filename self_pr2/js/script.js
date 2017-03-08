//$(window).on('load resize', function(){
$(function(){

  // 変数
  var h = $(window).height();
  var w = $(window).width();

  // 見出しフェードイン
  $('h2').on('inview', function() {
    $(this).animate({
      opacity: 1,
      left: '0'
    },800, 'easeOutCubic');
  });



  // スマホやタブレットを判別
  var getDevice = (function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
      return 'sp';
    }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
      return 'tab';
    }else{
      return 'other';
    }
  })();

  // 追従メニュー
  if( getDevice == 'other' ){
    $('.scene_guide ul').addClass('scene_guide_pc')
    $(window).mousemove(function(evt) {
      var cx, cy;
      cy = evt.clientY - 40;
      //cx = evt.clientX + 20;
      return $('.scene_guide ul').css({
        "position": "absolute",
        "top": cy + "px",
      });
    });
  }


});
