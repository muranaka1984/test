<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
  <?php if ( is_home() || is_front_page() ) : ?>
    <meta name="description" content="DESCRIPTION">   
  <?php else : ?>
    <meta name="description" content="<?php echo trim(wp_title('', false, 'right')); ?>ページ情報。<?php bloginfo('description'); ?>">
  <?php endif; ?>
  <link rel='stylesheet' id='twentysixteen-style-css'  href='<?php bloginfo('template_directory'); ?>/style.css?ver=4.6.1' type='text/css' media='all'>
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
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<div id="fakeLoader"></div>
<script>
$("#fakeLoader").fakeLoader({
  timeToHide:800, //Time in milliseconds for fakeLoader disappear
  zIndex:5000, // Default zIndex
  spinner:"spinner6",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
  bgColor:"rgba(255,255,255,1.0)", //Hex, RGB or RGBA colors
  //imagePath:"yourPath/customizedImage.gif" //If you want can you insert your custom image
});
</script>
<div class="container">

<div class="wrapper wrapper_header">

  <div class="content head">
    <p class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></a></p>
    <?php query_posts('post_type=system'); ?>
    <?php if (have_posts()): while(have_posts()): the_post();?>
    <?php if(post_custom('電話番号')): ?>
      <p class="tel">
        <a href="tel:<?php echo post_custom('電話番号'); ?>" class="int"><?php echo post_custom('電話番号'); ?></a>
      </p>
    <?php endif; ?>
    <?php if(post_custom('営業時間')): ?>
      <p class="time"><?php echo post_custom('営業時間'); ?></p>
    <?php endif; ?>
    <?php if(post_custom('業種')): ?>
      <p class="type"><?php echo post_custom('業種'); ?>【<?php echo post_custom('店名'); ?>】</p>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>

  </div>

</div>


<!--GNAVI-->
<div class="global_navi global_navi_pc">
  <ul>
    <li><a href="<?php echo site_url(); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">ホーム<small>HOME</small></a></li>
    <li><a href="<?php echo site_url(); ?>/news/" class="first_link"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">お知らせ<small>NEWS</small></a></li>
    <li><a href="<?php echo site_url(); ?>/girls/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">ガールズ<small>GIRLS</small></a></li>
    <li><a href="<?php echo site_url(); ?>/ranking/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">ランキング<small>RANKING</small></a></li>
    <li><a href="<?php echo site_url(); ?>/schedule/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">スケジュール<small>SCHEDULE</small></a></li>
    <li><a href="<?php echo site_url(); ?>/event/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">イベント<small>EVENT</small></a></li>
    <li><a href="<?php echo site_url(); ?>/system/price_system/"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_gray.png">システム<small>SYSTEM</small></a></li>
  </ul>
  <div class="sub">
    <ul>
      <?php wp_list_pages('title_li=&exclude=2,23,26,16'); ?>
    </ul>
  </div>

</div>

<!--GNAVI-->