<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/TweenMax.min.js"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/pjax.js"></script>
  <script type="text/javascript" src="js/pjax-config.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <title></title>
</head>

<body>

<div class="content">

<h1>FWR<small>○○○○○○○○○</small></h1>
<h2>月額/￥<span class="price">9,500</span><small>（税込）</small></h2>
<h2>初期費用/￥<span class="price">0</span></h2>
<h2>ドメイン、サーバー料金、すべてコミコミ！</h2>


<!--form action="domain_check.php" method="post">
  <input type="text" name="name">
  <input type="submit" value="送信">
</form-->


<input type="text" value="" class="domain_name" placeholder="例：fmr">
<div class="submit">
  送信
</div>


<script>
$(function(){
  $(".domain_name").click(function() {
    $(".domain_name").removeAttr('placeholder');
  });
  $(".submit").on("click",function(){
    $(".preloader").removeClass("start");
//     $i = "greengreengreen"
    $i = $(".domain_name").val();
    $.post(
      "domain_check.php",
      {
        name:$i,
      },
      function( data ) {
        $( "#domain" ).html( data );
        console.log("comp");
        $(".preloader").addClass("comp");
      });
  });
})
</script>


<div id="domain">
<img src="img/preloader.gif" class="preloader">

</div>









</div><!--content-->


</body>

</html>
