//$(window).on('load resize', function(){
$(function(){

  // 変数
  var h = $(window).height();
  var w = $(window).width();


  if(!$('.scene_wrapper .scene').hasClass('scene0')){
    $('.scene_wrapper .scene').css({
      'bottom': '-' + h + 'px',
    });
  }
  // inview基本パターン
/*
  $('.box_ani h2').on('inview', function() {
    $(this).animate({
      opacity: 1,
      left: '0'
    },800, 'easeOutCubic');
  });
*/

  // リサイズ後のリロード
  $(function(){
    var timer = false;
    $(window).resize(function() {
      if (timer !== false) {
        clearTimeout(timer);
      }
      timer = setTimeout(function() {
        location.reload();
      }, 200);
    });
  });


  // シーン切り替え
  var arr = $('.scene_guide li');
  var arr_scene = $('.scene_wrapper .scene');

  $('.scene_guide li').click(function(){
    var arr_index = $('.scene_guide li').index(this);

    $(arr_scene).removeClass('active');

    var arr_active = arr_scene[arr_index];
    $(arr_active).addClass('active');

    $('.scene_wrapper .scene').animate({
      bottom: '-' + h + 'px',
    },800, 'easeInOutBack');

    if($('.scene_wrapper .scene').hasClass('active')){
      $('.active').animate({
        bottom: '0'
      },900, 'easeInOutCirc');
    }

  });



  // 追従メニュー
  $(window).mousemove(function(evt) {
    var cx, cy;
    cy = (evt.clientY / 20) + 140;
    cx = (evt.clientX / 20) + 140;
    return $('.scene_guide').css({
      "position": "fixed",
      "top": cy + "px",
      "left": cx + "px"
    });
  });



});
