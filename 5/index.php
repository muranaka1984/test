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

<h1>PAYSURU+α<small>○○○○○○○○○</small></h1>
<h2>月額/￥<span class="price">9,500</span><small>（税込）</small></h2>
<h2>初期費用/￥<span class="price">0</span></h2>
<h2>ドメイン、サーバー、すべてコミコミ！</h2>


<!--form action="domain_check.php" method="post">
  <input type="text" name="name">
  <input type="submit" value="送信">
</form-->

<div class="domain_check">
<h2>ドメインを検索する！</h2>
<input type="text" value="" class="domain_name" placeholder="例：fmr">
<p class="submit">検 索</p>
</div>

<script>
$(function(){
  $(".domain_name").click(function() {
    $(".domain_name").removeAttr('placeholder');
  });
  $(".submit").on("click",function(){
    $(".preloader").addClass("start");
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
        $(".preloader").removeClass("start");
      });
  });
})
</script>

<div class="domain_base">
<img src="img/preloader.gif" class="preloader">
<table id="domain">
  <tr>
    <th>.com</th>
    <td>　</td>
  </tr>
  <tr>
    <th>.net</th>
    <td>　</td>
  </tr>
  <tr>
    <th>.biz</th>
    <td>　</td>
  </tr>
  <tr>
    <th>.info</th>
    <td>　</td>
  </tr>
  <tr>
    <th>.club</th>
    <td>　</td>
  </tr>
  <tr>
    <th>.top</th>
    <td>　</td>
  </tr>
</table>
</div>




<h2>製品名とは</h2>
<p>製品名は○○専門のホームページサービスです。</p>



<h2>コンセプト</h2>
<p>
PAYSURU+αは『ホームページでプラスα Payする＝ホームページへの投資金額以上を付加価値つけて回収する』をコンセプトにしたサービスです。
○○業界では1本当たりの利益は平均約8.00円と言われておりますが、
PAYSURU+αは月額利用料が1本当たりの利益と同じ8,000円！
それ以外にかかる費用は一切ありません！
</p>


<h2>メリット</h2>
<p>FWRのメリットはこんなにあります！</p>

<h3>様々なデバイスに最適なレイアウト・デザインだから見やすい！</h3>
<p>
パソコンだけではなく、スマートフォンやタブレットなどデバイス（端末機器）サイズに合わせて、
最適なレイアウト・デザインに切り替わるレスポンシブデザインを採用しているため、
様々なデバイスで見やすいデザインになります。
</p>


<h3>検索エンジン対策（SEO）に有利！</h3>
<p>
検索エンジン最大手Googleは検索結果の順位要素の評価基準に『モバイルフレンドリー』というアルゴリズムを追加すると発表しました。
FWRで採用するレスポンシブデザインはGoogleが推奨するモバイルフレンドリーになるため、検索エンジン対策(SEO)に有利となります。
</p>


<h3>将来的に現れる端末にも対応しやすくなる！</h3>
<p>レスポンシブデザインでは、デバイスの横幅に合わせてレイアウト・デザインが切り替わるので、
これから新たに発売される様々サイズのデバイスにも対応しやすくなります。
</p>



<h2>事例</h2>



<h2>費用</h2>




<h2>比較</h2>




<h2>お客様の声</h2>





<h2>よくあるご質問</h2>




<h2>エントリーフォーム</h2>






</div><!--content-->


</body>

</html>
