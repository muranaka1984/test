<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<div class="content">
<div class="archive_list_main">

	<?php while(have_posts()): the_post(); ?>
		<div class="archive_list archive_list_post">
			<?php the_content(); ?>
			<p><br></p>
			<div class="archive_list_foot"><small><?php the_date(); ?></small></div>
		</div>
	<?php endwhile; ?>

<?php if(is_singular('news')) :?>
<?php else: ?>
<div class="cta">
  <h2>お問い合わせはこちら</h2>
  <p>ご紹介している商品へのご質問、なんでもお気軽にご相談ください。</p>
  <div class="links">
    <a href="tel:09064465432">お電話はこちら</a>
    <a href="<?php echo home_url(); ?>/contact/">メールフォームはこちら</a>
  </div>
</div>
<?php endif; ?>


<?php
// Start the loop.
//while ( have_posts() ) : the_post();
	// If comments are open or we have at least one comment, load up the comment template.
//	if ( comments_open() || get_comments_number() ) {
//		comments_template();
//	}
//endwhile;
?>


</div><!--archive_list_main-->



<?php if(is_singular('news')) :?>
<div class="archive_list_sub">
  <h3>お知らせ</h3>
  <div class="news">
    <ul>
		<?php query_posts('post_type=news&posts_per_page=10&order=ASC&orderby=menu_order'); ?>
      <?php while(have_posts()): the_post(); ?>
      <li>
        <a href="<?php  the_permalink(); ?>">
          <?php echo mb_substr($post->post_title, 0, 48).''; ?>
        </a>
      </li>
      <?php endwhile; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>
    </ul>
  </div>
</div>

<?php else: ?>

<div class="archive_list_sub">
  <h3>エントリー</h3>
  <div class="news">
    <ul>
		<?php query_posts('post_type=post&posts_per_page=5&order=ASC&orderby=menu_order'); ?>
      <?php while(have_posts()): the_post(); ?>
      <li>
        <a href="<?php  the_permalink(); ?>">
          <?php echo mb_substr($post->post_title, 0, 48).''; ?>
        </a>
      </li>
      <?php endwhile; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>
    </ul>
  </div>
  <h3>カテゴリー</h3>
  <div class="news">
    <ul>
      <?php wp_list_categories('title_li=&depth=1'); ?>
    </ul>
  </div>
  <h3>アーカイブ</h3>
  <div class="news">
		<ul>
			<?php wp_get_archives('show_post_count=1'); ?>
		</ul>
	</div>
</div>
<!--archive_list_sub-->
<?php endif; ?>


<br clear="cb">
</div>

<?php get_footer(); ?>
