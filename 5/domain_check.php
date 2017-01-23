<?php
require_once "Net/Whois.php";

// .com
function domainCom(){
  $query  = $_POST['name'].".com";// このドメインについての情報を検索する
  $whois = new Net_Whois;
  $data = $whois->query($query);
  $check_word = "No match for";
  if(strpos($data, $check_word) !== false){
    echo "<tr><th>" .$query."</th><td>申し込み可能</td></tr>";
  }
  if(strpos($data, $check_word) === false){
    echo "<tr><th>" .$query."</th><td>既に取得されています</td></tr>";
  }
}

// .net
function domainNet(){
  $query  = $_POST['name'].".net";
  $whois = new Net_Whois;
  $data = $whois->query($query);
  $check_word = "No match for";
  if(strpos($data, $check_word) !== false){
    echo "<tr><th>" .$query."</th><td>申し込み可能</td></tr>";
  }
  if(strpos($data, $check_word) === false){
    echo "<tr><th>" .$query."</th><td>既に取得されています</td></tr>";
  }
//  echo $data;
}

// .biz
function domainBiz(){
  $query  = $_POST['name'].".biz";
  $whois = new Net_Whois;
  $data = $whois->query($query);
  $check_word = "Not found";
  if(strpos($data, $check_word) !== false){
    echo "<tr><th>" .$query."</th><td>申し込み可能</td></tr>";
  }
  if(strpos($data, $check_word) === false){
    echo "<tr><th>" .$query."</th><td>既に取得されています</td></tr>";
  }
}


// .info
function domainInfo(){
  $query  = $_POST['name'].".info";
  $whois = new Net_Whois;
  $data = $whois->query($query);
  $check_word = "NOT FOUND";
  if(strpos($data, $check_word) !== false){
    echo "<tr><th>" .$query."</th><td>申し込み可能</td></tr>";
  }
  if(strpos($data, $check_word) === false){
    echo "<tr><th>" .$query."</th><td>既に取得されています</td></tr>";
  }
}


// .club
function domainClub(){
  $query  = $_POST['name'].".club";
  $whois = new Net_Whois;
  $data = $whois->query($query);
  $check_word = "No Domain";
  if(strpos($data, $check_word) !== false){
    echo "<tr><th>" .$query."</th><td>申し込み可能</td></tr>";
  }
  if(strpos($data, $check_word) === false){
    echo "<tr><th>" .$query."</th><td>既に取得されています</td></tr>";
  }
}


// .top
function domainTop(){
  $query  = $_POST['name'].".top";
  $whois = new Net_Whois;
  $data = $whois->query($query);
  $check_word = "does not exist";
  if(strpos($data, $check_word) !== false){
    echo "<tr><th>" .$query."</th><td>申し込み可能</td></tr>";
  }
  if(strpos($data, $check_word) === false){
    echo "<tr><th>" .$query."</th><td>既に取得されています</td></tr>";
  }
//  echo $data;
}



domainCom();
domainNet();
domainBiz();
domainInfo();
domainClub();
domainTop();


?>