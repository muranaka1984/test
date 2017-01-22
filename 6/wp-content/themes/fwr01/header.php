<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if(qtranxf_getLanguage() == 'en'):?>
    <?php if (is_post_type_archive('girls')): ?>
      <title>GIRLS &#8211; GIRAGIRA NIGHT Japan Soaplands in Sapporo</title>
      <meta name="description" content="GIRLS. GIRAGIRA NIGHT Japan Soaplands in Sapporo">
    <?php endif; ?>
  <?php endif; ?>
	<?php wp_head(); ?>
  <?php if(qtranxf_getLanguage() == 'ja'):?>
    <?php if ( is_home() || is_front_page() ) : ?>
      <meta name="description" content="札幌 すすきのソープランド［ギラギラナイト］のホームページです。">  	
  	<?php else : ?>
  		<meta name="description" content="<?php echo trim(wp_title('', false, 'right')); ?>ページ情報。<?php bloginfo('description'); ?>">
  	<?php endif; ?>
  <?php else : ?>
    <?php if ( is_home() || is_front_page() ) : ?>
      <meta name="description" content="GIRAGIRA NIGHT Japan Soaplands in Sapporo">    
    <?php else : ?>
      <meta name="description" content="<?php echo trim(wp_title('', false, 'right')); ?>. GIRAGIRA NIGHT Japan Soaplands in Sapporo">
    <?php endif; ?>
  <?php endif; ?>
  <link rel='stylesheet' id='twentysixteen-style-css'  href='http://test-gira.xyz/wp-content/themes/giragira/style.css?ver=4.6.1' type='text/css' media='all'>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modalConfirm.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/TweenMax.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fakeLoader/fakeLoader.css" type="text/css" media="all">
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fakeLoader/fakeLoader.min.js"></script>
  <?php if ( is_home() || is_front_page() ) : ?>
    <link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/style_topintro.css' type='text/css' media='all'>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/intro_top.js"></script>
    <link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/equalizer.css' type='text/css' media='all'>
  <?php endif; ?>
  <?php if(qtranxf_getLanguage() == 'en'):?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/getLanguage_en.js"></script>
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<div id="fakeLoader"></div>
<script>
$("#fakeLoader").fakeLoader({
  timeToHide:800, //Time in milliseconds for fakeLoader disappear
  zIndex:5000, // Default zIndex
  spinner:"spinner5",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
  bgColor:"rgba(0,0,0,1.0)", //Hex, RGB or RGBA colors
  //imagePath:"yourPath/customizedImage.gif" //If you want can you insert your custom image
});
</script>
<?php if(qtranxf_getLanguage() == 'ja'):?>
<div class="container">
<?php elseif(qtranxf_getLanguage() == 'en'):?>
<div class="container container_language_en">
<?php endif; ?>

<div class="wrapper wrapper_header">

<?php if ( is_home() || is_front_page() ) : ?>
  <div class="intro">
    <p class="countup"></p>

    <p class="title title_right">SUSUKINO SOAPLAND</p>
    <p class="title title_left">GIRAGIRA NIGHT</p>

    <?php query_posts('post_type=covergirls'); ?>
    <?php if (have_posts()): while(have_posts()): the_post(); ?>

      <?php if(post_custom('カバーガールズ1名前')): ?>
        <p class="photo photo0"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'カバーガールズ1写真', true),'full'); ?></p>
        <p class="tt tt0"><span><?php echo post_custom('カバーガールズ1名前'); ?></span><!--small>GREAT JUMPSUPER!!!</small--></p>
      <?php endif; ?>

      <?php if(post_custom('カバーガールズ2名前')): ?>
        <p class="photo photo1"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'カバーガールズ2写真', true),'full'); ?></p>
        <p class="tt tt1"><span><?php echo post_custom('カバーガールズ2名前'); ?></span></p>
      <?php endif; ?>

      <?php if(post_custom('カバーガールズ3名前')): ?>
        <p class="photo photo2"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'カバーガールズ3写真', true),'full'); ?></p>
        <p class="tt tt2"><span><?php echo post_custom('カバーガールズ3名前'); ?></span></p>
      <?php endif; ?>

      <?php if(post_custom('カバーガールズ4名前')): ?>
        <p class="photo photo3"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'カバーガールズ4写真', true),'full'); ?></p>
        <p class="tt tt3"><span><?php echo post_custom('カバーガールズ4名前'); ?></span></p>
      <?php endif; ?>

      <?php if(post_custom('カバーガールズ5名前')): ?>
        <p class="photo photo4"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'カバーガールズ5写真', true),'full'); ?></p>
        <p class="tt tt4"><span><?php echo post_custom('カバーガールズ5名前'); ?></span></p>
      <?php endif; ?>

    <?php endwhile; endif; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>

    <div class="intro_top_logo_set">
    <div class="intro_top_finsh intro_top_logo">
      <h1><img src="<?php bloginfo('template_directory'); ?>/img/intro_top_logo.png" alt="<?php bloginfo('name'); ?>"></h1>
      <span class="star star-1"></span><span class="star star-2"></span><span class="star star-3"></span><span class="star star-4"></span>
    </div>
    <p class="intro_top_finsh intro_top_tel"><a href="tel:0112061162"><img src="<?php bloginfo('template_directory'); ?>/img/intro_top_tel.png" alt="011-206-1162"></a></p>
    <p class="intro_top_finsh intro_top_time"><img src="<?php bloginfo('template_directory'); ?>/img/intro_top_time.png" alt="open 9:00~24:00"></p>
    <p class="intro_top_finsh intro_top_sub"><img src="<?php bloginfo('template_directory'); ?>/img/intro_top_sub.png" alt="sapporo soapland [giragira night]"></p>
    <!--p class="intro_top_p1"><img src="<?php bloginfo('template_directory'); ?>/img/intro_top_p1.png"></p>
    <p class="intro_top_p2"><img src="<?php bloginfo('template_directory'); ?>/img/intro_top_p2.png"></p-->
    </div>

    <div id="music-bars">
    <img src="<?php bloginfo('template_directory'); ?>/img/light.png" class="light0">
    <img src="<?php bloginfo('template_directory'); ?>/img/light.png" class="light1">
    <img src="<?php bloginfo('template_directory'); ?>/img/light.png" class="light2">
    <img src="<?php bloginfo('template_directory'); ?>/img/light.png" class="light3">
    <img src="<?php bloginfo('template_directory'); ?>/img/light.png" class="light4">
    <img src="<?php bloginfo('template_directory'); ?>/img/light.png" class="light5">
    <div class="equalizer_bg"></div>
  
    <?php // モバイル判定
    if ( is_mobile() ) : ?>  
      <?php
        for ($i=1; $i<16; $i++) {
          echo '<span></span>';
        }
      ?>
    <? else: ?>
      <?php
        for ($i=1; $i<34; $i++) {
          echo '<span></span>';
        }
      ?>
    <?php endif; ?>
    </div>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/equalizer.js"></script>


  </div>

  <!--Audio-->
  <audio id="audio" preload="auto" loop>
     <source src="<?php bloginfo('template_directory'); ?>/img/music1.m4a">
  </audio>
  <div class="audiocontrol">
    <a href="#" onclick="audioPlay();return false;" class="audioPlay"><img src="<?php bloginfo('template_directory'); ?>/img/speaker-on.png"></a>
    <a href="#" onclick="audioPause();return false;" class="audioPause"><img src="<?php bloginfo('template_directory'); ?>/img/speaker-off.png"></a>
  </div>
  <script>
  var v = document.getElementById("audio");
  v.volume = 0.3;

  //再生開始
  function audioPlay(){
    document.getElementById("audio").play();
  }
   //再生を停止
  function audioPause(){
    document.getElementById("audio").pause();
  }
  </script>
  <!--Audio-->


<?php else : ?>

  <div class="content head">
    <p class="logo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></a></p>
    <p class="tel"><a href="tel:0112061162"><img src="<?php bloginfo('template_directory'); ?>/img/tel.png" alt="0112061162"></a></p>
    <span class="star star-1"></span><span class="star star-2"></span><span class="star star-3"></span><span class="star star-4"></span>
  </div>

<?php endif; ?>


</div>


<!--GNAVI-->
<?php // モバイル判定
if ( is_mobile() ) : ?>  

<div class="global_navi">
	<div class="global_navi_header">
  <?php if(qtranxf_getLanguage() == 'ja'):?>
		<a href="/giragiranight_news/" class="first_link">お知らせ</a>
  <?php endif; ?>
	</div>
  <ul>
    <li><a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png"><?php if(qtranxf_getLanguage() == 'ja'):?>トップ<small>TOP</small><?php elseif(qtranxf_getLanguage() == 'en'):?>Top<small>Back to home</small><?php endif; ?></a></li>
    <?php if(qtranxf_getLanguage() == 'ja'):?><li><a href="/concept/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">着たままプレイ<small>CONCEPT</small></a></li>
    <li><a href="/new_face/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">新人割引<small>NEW FACE</small></a></li><?php endif; ?>
    <li><a href="/girls/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png"><?php if(qtranxf_getLanguage() == 'ja'):?>ガールズ<small>GIRLS</small><?php elseif(qtranxf_getLanguage() == 'en'):?>Girls<small>Girls List</small><?php endif; ?></a></li>
    <li><a href="/ranking/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png"><?php if(qtranxf_getLanguage() == 'ja'):?>ランキング<small>RANKING</small><?php elseif(qtranxf_getLanguage() == 'en'):?>Rank<small>Girls Rank</small><?php endif; ?></a></li>
    <li><a href="/schedule/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png"><?php if(qtranxf_getLanguage() == 'ja'):?>スケジュール<small>SCHEDULE</small><?php elseif(qtranxf_getLanguage() == 'en'):?>Schedule<small>Girls Schedule</small><?php endif; ?></a></li>
    <?php if(qtranxf_getLanguage() == 'ja'):?>
      <li><a href="/event/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">イベント<small>EVENT</small></a></li>
    <?php endif; ?>
    <li><a href="/system/price_system/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png"><?php if(qtranxf_getLanguage() == 'ja'):?>システム<small>SYSTEM</small><?php elseif(qtranxf_getLanguage() == 'en'):?>Budget<small>Approximate Budget</small><?php endif; ?></a></li>
    <li><a href="/access/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png"><?php if(qtranxf_getLanguage() == 'ja'):?>アクセス<small>ACCESS</small><?php elseif(qtranxf_getLanguage() == 'en'):?>Address<small>Map and the address</small><?php endif; ?></a></li>
  </ul>
  <div class="sub">
    <?php if(qtranxf_getLanguage() == 'ja'):?>
	  <ul>
      <!--li><a href="/costume/">コスチューム</a></li-->
	  </ul>
    <?php endif; ?>
	  <ul>
    <?php if(qtranxf_getLanguage() == 'ja'):?>
      <li><a href="/guide_reserve/">ご予約について</a></li>
      <li><a href="/faq/">よくあるご質問</a></li>
      <li><a href="/contact/">お問い合わせ</a></li>
    <?php endif; ?>
	  </ul>
  </div>
  <dl class="access_info">
    <dt>
      <p class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></p>
      <small class="name"><?php bloginfo('name'); ?></small>

      <?php if(qtranxf_getLanguage() == 'ja'):?>
        <p class="tel">TEL <a href="tel:0112061162" class="int">011-206-1162</a></p>
        <p class="time">営業時間／9:00〜24:00</p>
        <p class="address">住所／札幌市中央区南5条西5丁目ススキノ通り</p>
      <?php elseif(qtranxf_getLanguage() == 'en'):?>
        <p class="tel">TEL <a href="tel:0112061162" class="int">011-206-1162</a></p>
        <p class="time">9:00〜24:00</p>
        <p class="address">Sapporo-shi Chuo-ku South 5 - west 5 - chome Susukino street</p>
      <?php endif; ?>

    </dt>
    <dd>
    <?php if(qtranxf_getLanguage() == 'ja'):?>
      <p class="access">地下鉄南北線 すすきの駅5番出口より徒歩5分 <a href="https://goo.gl/maps/7RTjrj6Tv7k" target="_blank" class="btn1">拡大地図はこちら</a></p>
    <?php endif; ?>
    </dd>
  </dl>
</div>


<? else: ?>

<div class="global_navi_pc">

<?php if(qtranxf_getLanguage() == 'ja'):?>
  <ul class="global_navi_language_ja">
    <li class="gnavi_home"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">トップ<small>TOP</small></a></li>
    <li class="gnavi_kitamama"><a href="/concept/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">着たままプレイ<small>CONCEPT</small></a></li>
    <li class="gnavi_new_face"><a href="/new_face/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">新人<span class="newface_discount">割引</span><small>NEW FACE</small></a></li>
    <li class="gnavi_girls"><a href="/girls/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">ガールズ<small>GIRLS</small></a></li>
    <li class="gnavi_ranking"><a href="/ranking/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">ランキング<small>RANKING</small></a></li>
    <li class="gnavi_schedule"><a href="/schedule/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">スケジュール<small>SCHEDULE</small></a></li>
    <li class="gnavi_event"><a href="/event/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">イベント<small>EVENT</small></a></li>
    <li class="gnavi_system"><a href="/system/price_system/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">システム<small>SYSTEM</small></a></li>
    <li class="gnavi_access"><a href="/access/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">アクセス<small>ACCESS</small></a></li>
  </ul>
<?php elseif(qtranxf_getLanguage() == 'en'):?>
  <ul>
    <li class="gnavi_home"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">Top<small>Back to home</small></a></li>
    <li class="gnavi_system"><a href="/system/price_system/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">Budget<small>Approximate Budget</small></a></li>
    <li class="gnavi_girls"><a href="/girls/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">Girls<small>Girls List</small></a></li>
    <li class="gnavi_ranking"><a href="/ranking/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">Rank<small>Girls Rank</small></a></li>
    <li class="gnavi_schedule"><a href="/schedule/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">Schedule<small>Girls Schedule</small></a></li>
    <li class="gnavi_access"><a href="/access/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">Address<small>Map and the address</small></a></li>
  </ul>
<?php endif; ?>

</div>

<?php endif; ?>
<!--GNAVI-->
