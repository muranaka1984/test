<?php
/*
Template Name: contact_form
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="all">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="/about/css/style.css" type="text/css" media="all">
</head>

<body <?php body_class(); ?>>

<div class="contact_form">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>


</div><!-- .content-area -->

<?php wp_footer(); ?>
</body>
</html>
