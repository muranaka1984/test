<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>

<div class="h1bg h1top">
  <h1>
    <?php the_title(); ?>
  </h1>
  <?php
	$page = get_post( get_the_ID() );
	// 現在表示しているページの投稿IDから投稿情報を取得

	$slug = $page->post_name;
	// 投稿のスラッグを取得
	?>
  <!--img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $slug; ?>.png"-->
</div>

<div class="content style_page">

<?php the_content(); ?>

</div>

<?php endwhile; ?>
<?php get_footer(); ?>
