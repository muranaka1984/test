<?php
require_once "Net/Whois.php";

// .com
function domainCom(){
  $query  = $_POST['name'].".com";// このドメインについての情報を検索する
  $whois = new Net_Whois;
  $data = $whois->query($query);
  $check_word = "No match for";
  if(strpos($data, $check_word) !== false){
    echo $query."は新規取得可能です";
  }
  if(strpos($data, $check_word) === false){
    echo $query."は取得できません";
  }
}

// .net
function domainNet(){
  $query  = $_POST['name'].".net";
  $whois = new Net_Whois;
  $data = $whois->query($query);
  $check_word = "No match for";
  if(strpos($data, $check_word) !== false){
    echo $query."は新規取得可能です";
  }
  if(strpos($data, $check_word) === false){
    echo $query."は取得できません";
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
    echo $query."は新規取得可能です";
  }
  if(strpos($data, $check_word) === false){
    echo $query."は取得できません";
  }
  echo $data;
}



domainCom();
domainNet();
domainBiz();


?>