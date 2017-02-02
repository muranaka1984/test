<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

  <h1 class="c_tt">
    <?php if(post_custom('ページタイトル英語')): ?>
      <?php echo post_custom('ページタイトル英語'); ?>
    <?php endif; ?>
    <small>- <?php the_title(); ?> -</small>
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

<?php if ( is_page(51) ) : ?>
<script>
  $(function(){
  // reserved
  var reserved_name = ($.cookie( "reserved" ));
  $(".your-reserved_name input").val(reserved_name);
});
</script>
<?php endif; ?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
