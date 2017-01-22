$(function(){

  var h = $(window).height();

//  $(".btn").click(function(){
//    $(this).css("background-color","green")
//  });

  $('.analytics_content').css('display','none');
  $('.analytics_loader').height(h).css('display','block');

  $(window).load(function () { //全ての読み込みが完了したら実行
    $('.analytics_loader').delay(600).fadeOut(300);
    $('.analytics_content').css('display', 'block');
  });

  $(function(){
    setTimeout('stopload()',10000);
  });
   
  function stopload(){
    $('.analytics_content').css('display','block');
    $('.analytics_loader').delay(600).fadeOut(300);
  }

});


