$(function(){

/**
   * 現在スクロール位置によるグローバルナビのアクティブ表示
   */
  var scrollMenu = function() {
    // 配列宣言
    // ここにスクロールで点灯させる箇所のidを記述する
    // 数値は全て0でOK
    var array = {
      '#top': 0,
      '#nav1': 0,
      '#nav2': 0,
//      '#nav3': 0,
//      '#nav4': 0,
//      '#nav5': 0
    };

    var $globalNavi = new Array();

    // 各要素のスクロール値を保存
    for (var key in array) {
      if ($(key).offset()) {
        array[key] = $(key).offset().top - 10; // 数値丁度だとずれるので10px余裕を作る
        $globalNavi[key] = $('.scene_guide ul li a[href="' + key + '"]');
      }
    }

    // スクロールイベントで判定
    $(window).scroll(function () {
      for (var key in array) {
        if ($(window).scrollTop() > array[key] - 50) {
          $('.scene_guide ul li a').each(function() {
            $(this).removeClass('active');
          });
          $globalNavi[key].addClass('active');
        }
      }
    });
  }

  // 実行
  scrollMenu();


  /**
   * ページ内スクロール
   */
  $('a[href^=#]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 50;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

});
