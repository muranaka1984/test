<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/TweenMax.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pjax.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pjax-config.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pace.min.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/js/themes/pace-theme-minimal.css" rel="stylesheet">
</head>

<?php if ( is_page() ) : ?>
<body <?php body_class(); ?> id="<?php echo esc_attr( $post->post_name ); ?>">
<?php else: ?>
<body <?php body_class(); ?>>
<?php endif; ?>

<?php if ( is_home() || is_front_page() ) : ?>

<?php endif; ?>

  <!--HEADER-->
  <div class="header">
    <div class="header_content">
      <p class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社ボンクス"></a>
      </p>
      <ul class="gnavi">
        <li class="nlink"><a href="<?php echo home_url(); ?>">ホーム</a></li>
        <li class="nlink"><a href="<?php echo home_url(); ?>/profile/">プロフィール</a></li>
      </ul>
    </div>
  </div>
  <!--HEADER-->

  <!--CONTAINER-->
  <div id="container">
