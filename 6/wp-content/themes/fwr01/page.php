<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
  $cat_slug = $post->post_name;
  $cat_slug_str = strtoupper($cat_slug);
?>

<div class="wrapper">
	<div class="content">

<?php if (is_page( array( 17999, 18016 ) )): ?>

  <h1 class="c_tt">
    <?php if(post_custom('ページタイトル英語')): ?>
      <?php echo post_custom('ページタイトル英語'); ?>
    <?php endif; ?>
    <small>- <?php the_title(); ?> -</small>
  </h1>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>

<?php else: ?>

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

<?php endif; ?>


  </div>
</div>


<?php if (is_page(17999)): ?>
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
