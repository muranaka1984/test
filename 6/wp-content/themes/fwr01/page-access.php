<?php
/*
Template Name: アクセス
*/

get_header(); ?>
<?php
  $cat_slug = $post->post_name;
  $cat_slug_str = strtoupper($cat_slug);
?>

<div class="wrapper">
	<div class="content">


<div class="layout_2column">

  <div class="layout_2column_child layout_2column_main">

  
    <h1 class="c_tt center"><?php echo $cat_slug_str; ?><small>- <?php the_title(); ?> -</small></h1>

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>


</div><!--layout_2column_main-->

  <div class="layout_2column_child layout_2column_sub">
    <?php get_template_part( 'layout_2column_sub' ); ?>
  </div>


</div><!--layout_2column-->



  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
