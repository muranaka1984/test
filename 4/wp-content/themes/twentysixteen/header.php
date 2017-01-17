<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/TweenMax.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pjax.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pjax-config.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</head>

<body <?php body_class(); ?>>

<?php if ( is_home() || is_front_page() ) : ?>
  <!--INTRO-->
  <div class="overlay"></div>
  <div class="intro">
    <div class="loading">
      <!-- SVG -->
      <svg id="test" class="intro_logo" data-name="BONKS_SVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110.49 147.58">
        <defs>
          <style>
          .cls-1 {
            stroke: rgba(255, 255, 255, 1);
            stroke-width: 1px;
          }
          </style>
        </defs>
        <title>BONKS</title>
        <path class="cls-1" d="M77.37,0,0,47.27v1L19.82,36.16c.55-.34,2.77-.79,2.77,1.84s0,38.45,0,38.45L43.49,63.69v-42L77.37,1Z" />
        <path class="cls-1" d="M98,11.79s0,25.46,0,27.71c0,3.08,0,4.71-4.08,7.25-5,3.07-50.46,30.88-50.46,30.88v57.2L22.66,147.58V94.88c0-2.16-.63-4.07-3.62-2.3-1.64,1-19,11.62-19,11.62v-1L77.22,56V24.55Z" />
        <path class="cls-1" d="M45.39,138v-1l44.23-27V65l20.88-12.76s0,39.75,0,42a6.75,6.75,0,0,1-3.5,6.25Z" />
      </svg>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vivus.js"></script>
      <script>
      new Vivus('test', {
        duration: 200,
        start: 'autostart'
      });
      </script>
      <!-- SVG -->
    </div>
  </div>
  <script>
  $(window).load(function() {
    intro();
  });

  function intro() {
    TweenMax.to('.overlay', 1, {
      delay: 4.0,
      height: 0,
      ease: Expo.easeOut,
    });
    TweenMax.to('.intro_logo', 1, {
      delay: 4.0,
      opacity: 0,
      onComplete: function() {
        $('.intro').remove();
        $('.overlay').remove();
      }
    });
  }
  </script>
  <!--INTRO-->
<?php endif; ?>

  <!--HEADER-->
  <div class="header">
    <div class="header_content">
      <p class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社ボンクス"></a>
      </p>
      <ul class="gnavi">
        <li class="nlink"><a href="<?php echo home_url(); ?>">ホーム</a></li>
        <li class="nlink"><a href="<?php echo home_url(); ?>/message/">メッセージ</a></li>
        <li class="nlink"><a href="<?php echo home_url(); ?>/business/">事業内容</a></li>
        <li class="nlink"><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
        <li class="tel">
          <a href="tel:09064465432"><span>TEL.</span>090 6446 5432</a>
          <small>9:00〜18:00</small>
        </li>
      </ul>
      <p class="icon_mail">
        <a href="<?php echo site_url(); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_mail.png" alt="メール" width="50"></a>
      </p>
    </div>
  </div>
  <!--HEADER-->

  <!--CONTAINER-->
  <div id="container">
