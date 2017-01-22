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

  <?php if(qtranxf_getLanguage() == 'en'):?>
    <h1 class="c_tt">ADDRESS</h1>
  <?php else : ?>
    <h1 class="c_tt"><?php echo $cat_slug_str; ?><small>- <?php the_title(); ?> -</small></h1>
  <?php endif; ?>

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>


  </div>
</div>

<?php get_sidebar(); ?>


<?php if(qtranxf_getLanguage() == 'ja'):?>

<div class="wrapper">
  <div class="content">
<h2 class="sub_tt">お店の場所がわからない方</h2>
<div class="mt20">
お電話頂ければご誘導させて頂きます。<br>
また、札幌市中央区内でしたらお迎えにも上がりますので、お気軽にお電話で申しつけ下さい。<br>
勿論、送迎は無料です＾－＾
</div>
<p><br></p>
<p><br></p>

  </div>
</div>

<?php endif; ?>

<?php get_footer(); ?>
