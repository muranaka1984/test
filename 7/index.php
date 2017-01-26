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

<div class="ticket">
<?php

//php上のファイルの情報をキャッシュクリアする
clearstatcache();
 
//保存するjsonファイル名
$filename = 'entry.json';
 
// 今日の日付を取得
$todayDate = date("Y/m/d");
 
//$filename が存在するとき
if (file_exists($filename)) {
 
  //$filename の更新時刻が過去のとき
  if ($todayDate > date("Y/m/d", filemtime($filename))) {
    scraping($filename);
  }
 
//$filename が存在しないとき
} else {
  scraping($filename);
}


function scraping($filename) {
  //require
  require_once('phpQuery-onefile.php');

  //DOM取得
  $doc = phpQuery::newDocumentFile("https://skyticket.jp/");

  //要素取得
  //echo $doc[".panel-price"]->text();

  foreach($doc[".panel-price"] as $entry){
    $url = pq($entry)->attr('href');
    $title = pq($entry)->text();
    $price = explode("¥", $title);
      //配列に格納
    $jsonData[] = ['url' => $url, 'price1' => $price[0], 'price2' => $price[1]];
    //echo '<li><a href="https://skyticket.jp'.$url.'" target="_blank">'.$price[0].'<span>'.$price[1].'</span></a></li>';
  }

  //JSONデータを保存
  file_put_contents($filename, json_encode($jsonData,JSON_UNESCAPED_UNICODE));  
}
 
//JSONデータを出力
header("Content-Type:application/json; charset=utf-8");
//echo file_get_contents($filename);


//===json読み込み===
$jsonFile = file_get_contents('entry.json');
$jsonObject = json_decode($jsonFile);

if ($jsonObject) {
  $output .= '<ul>';
  foreach ($jsonObject as $item) {
  $output .= <<<EOD
  <li><a target="_blank" href="https://skyticket.jp{$item -> url}">
<span class="price">{$item -> price1}</span>
<span class="price price_b">{$item -> price2}</span>
</a></li>
EOD;
  }
  $output .= '<ul>';
}
echo $output;


?>

</div>







  </div><!--content-->


</body>

</html>
