<?php

// ライブラリの読み込み
require_once 'google-api-php-client/src/Google/autoload.php';
 
// サービスアカウントのメールアドレス
$service_account_email = 'testgira@appspot.gserviceaccount.com';
 
// 秘密キーファイルの読み込み
$key = file_get_contents('testgira-29889c4023ee.p12');
 
// プロファイル(ビュー)ID
$profile = '72571077';
 
// Googleクライアントのインスタンスを作成
$client = new Google_Client();
$analytics = new Google_Service_Analytics($client);
 
// クレデンシャルの作成
$cred = new Google_Auth_AssertionCredentials(
    $service_account_email,
    array(Google_Service_Analytics::ANALYTICS_READONLY),
    $key
);
$client->setAssertionCredentials($cred);
if($client->getAuth()->isAccessTokenExpired()) {
  $client->getAuth()->refreshTokenWithAssertion($cred);
}

function getWeeklyReport($analytics, $profile){
  // 7日前から昨日までのセッション数・PV・平均閲覧ページ数・平均セッション時間・直帰率を取得
  $results_this_week = $analytics->data_ga->get(
    'ga:' . $profile,
    '7daysAgo',
    'yesterday',
    'ga:sessions,ga:pageviews,ga:pageviewsPerSession,ga:avgSessionDuration,ga:bounceRate'
  );
 
  // 14日前から8日前までのセッション数・PV・平均閲覧ページ数・平均セッション時間・直帰率を取得
  $results_last_week = $analytics->data_ga->get(
    'ga:' . $profile,
    '14daysAgo',
    '8daysAgo',
    'ga:sessions,ga:pageviews,ga:pageviewsPerSession,ga:avgSessionDuration,ga:bounceRate'
  );
 
  // 取得したデータから必要な部分を抽出
  $this_week_data = $results_this_week->rows;
  $last_week_data = $results_last_week->rows;
 
  // 7日前と昨日の日付を取得
  $start = date('n/d', strtotime('-1 week'));
  $end   = date('n/d', strtotime('-1 day'));
 
  // 先週と今週のレポートを比較して増減を計算する関数
  function calcReport($this, $last){
    $result = round( $this - $last , 1);
    if($result > 0){
      return ' (+' . $result . ') ';
    } else {
      return ' (' . $result . ') ';
    }
  }
 
  // データを整形
  $report = "<h1><img src=\"img/admin_logo_g.png\">【".$start . '〜' . $end . '' . "】</h1>\n";
  $report .= '<dl class="visit"><dt>訪問数</dt><dd><p>' . $this_week_data[0][0] ."<span>". calcReport( $this_week_data[0][0], $last_week_data[0][0] ) . "</span></p></dd></dl>\n";
  $report .= '<dl class="pv"><dt>合計PV</dt><dd><p>' . $this_week_data[0][1] ."<span>". calcReport( $this_week_data[0][1], $last_week_data[0][1] ) . "</p></dd></dl>\n";
  $report .= '<dl><dt>平均閲覧ページ数</dt><dd><p>' . round( $this_week_data[0][2], 2 ) ."<span>". calcReport( $this_week_data[0][2], $last_week_data[0][2] ) ."</span></p>". "</dd></dl>\n";
  $report .= '<dl><dt>平均滞在時間</dt><dd><p>' . ceil( $this_week_data[0][3] ) . '<small>秒</small><span>' . calcReport( $this_week_data[0][3], $last_week_data[0][3] ) ."</span></p>". "</dd></dl>\n";
  $report .= '<dl><dt>直帰率</dt><dd><p>' . round( $this_week_data[0][4], 1 ) . '<small>%</small><span>' . calcReport( $this_week_data[0][4], $last_week_data[0][4] ) ."</span></p>".  "</dd></dl>\n";
 
  return $report;
}
function getWeeklyRanking($analytics, $profile){
  $results = $analytics->data_ga->get(
    'ga:' . $profile,
    '7daysAgo',
    'yesterday',
    'ga:pageviews',
    array(
      'dimensions'  => 'ga:pageTitle',  // データの区切り
      'sort'        => '-ga:pageviews', // ページビューでソート
      'max-results' => '10',            // 取得件数
    )
  );
 
  // 取得したデータから必要な部分を抽出
  $data = $results->rows;
 
  // 7日前と昨日の日付を取得
//  $start = date('n/d', strtotime('-1 week'));
//  $end   = date('n/d', strtotime('-1 day'));
 
  // 配列で取得したデータをループで回してランキングに
  $ranking = "<h2>" . '【 週 間 】' . "</h2><table><tr><th>ページ</th><th>ビュー数</th></tr>\n";
  foreach ($data as $key => $row) {
    $ranking .= "<tr><td><small>".($key + 1) . '</small>' . $row[0] . '</td><td><span>' . $row[1] . '' . "</span></td></tr>\n";
  }
  return $ranking;
}
function getSearchQueries($analytics, $profile){
  $results = $analytics->data_ga->get(
    'ga:' . $profile,
    '7daysAgo',
    'yesterday',
    'ga:visitors',
    array(
      'dimensions'  => 'ga:sourceMedium',  // データの区切り
      'sort'        => '-ga:visitors', // ページビューでソート
      'max-results' => '5',            // 取得件数
    )
  );
 
  // 取得したデータから必要な部分を抽出
  $data = $results->rows;
 
  // 7日前と昨日の日付を取得
//  $start = date('n/d', strtotime('-1 week'));
//  $end   = date('n/d', strtotime('-1 day'));
 
  // 配列で取得したデータをループで回してランキングに
  $queries = "<h2>" . '【 参照元 】' . "</h2><table><tr><th>参照元</th><th>人数</th></tr>\n";
  foreach ($data as $key => $row) {
    $queries .= "<tr><td><small>".($key + 1) . '</small>' . $row[0] . '</td><td><span>' . $row[1] . '' . "</span></td></tr>\n";
  }
  return $queries;
}
function getTheDayBefore($analytics, $profile){
  $results = $analytics->data_ga->get(
    'ga:' . $profile,
    'yesterday',
    'yesterday',
    'ga:pageviews',
    array(
      'dimensions'  => 'ga:pageTitle',  // データの区切り
      'sort'        => '-ga:pageviews', // ページビューでソート
      'max-results' => '5',            // 取得件数
    )
  );
 
  $data = $results->rows;
 
 
  // 配列で取得したデータをループで回してランキングに
  $yesterdaystr = date('m/d', strtotime('-1 day'));
  $daybefore = "<h2>【 前 日 】" . $yesterdaystr . '' . "</h2><table><tr><th>ページ</th><th>ビュー数</th></tr>\n";
  foreach ($data as $key => $row) {
    $daybefore .= "<tr><td><small>".($key + 1) . '</small>' . $row[0] . '</td><td><span>' . $row[1] . '' . "</span></td></tr>\n";
  }
  return $daybefore;
}

$report = getWeeklyReport($analytics, $profile);
$ranking = getWeeklyRanking($analytics, $profile); 
$queries = getSearchQueries($analytics, $profile); 
$daybefore = getTheDayBefore($analytics, $profile); 

print("<!doctype html>
<html>
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<script type=\"text/javascript\" src=\"js/jquery-2.2.4.min.js\"></script>
<script type=\"text/javascript\" src=\"js/script.js\"></script>
<link rel=\"stylesheet\" href=\"./css/style.css\" type=\"text/css\" media=\"all\">
<title></title>
</head>
<body class=\"analytics_layer\">");
echo "<div class=\"analytics_loader\"><img src=\"preloader01.gif\"></div><div class=\"analytics_content\">";
print($report);
echo "<div class=\"ranking\"><div class=\"ranking_box\">";
print($daybefore);
echo "</table>";
print($ranking);
echo "</table></div><div class=\"ranking_box\">";
print($queries);
echo "</table></div></div></div>";

print("</body>
</html>");

?>