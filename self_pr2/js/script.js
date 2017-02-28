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


});
