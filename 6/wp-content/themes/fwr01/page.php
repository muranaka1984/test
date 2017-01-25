<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

  <h1 class="c_tt">
    <?php the_title(); ?>    
  </h1>

  <div class="layout_2column">
    <div class="layout_2column_child layout_2column_main">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="layout_2column_child layout_2column_sub">
      <?php get_template_part( 'layout_2column_sub' ); ?>
    </div>
  </div><!--layout_2column-->

  </div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
