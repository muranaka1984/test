<?php get_header(); ?>

<div class="h1bg">
  <p class="h1bg_title">
    BONDS <small>X</small> THANKS
  </p>
  <img src="<?php echo get_template_directory_uri(); ?>/img/kv_bg1.jpg">
</div>
<div class="content top_message">
  <h1>北海道食材を中心としたコンサルティング【株式会社BONKS】</h1>
  <p>『本当の安心・安全とは？』 をテーマに北海道中の 『 顔が見える商品 』 『 最高の一品 』 を日々追い求め追求しお客様にお届けしお伝えしたい！ それがＢＯＮＫＳの願いです。 北海道の広大な大地から生まれる素晴らしい食材、商品を生産者の皆様のご協力の下仕入させて頂いております。
  </p>
  <p>
    当社取扱い商材は、北海道内や各地域での口コミ、人気度、味、そして高い安全水準をクリアした生産者様のみご協力を頂いております。 　『 食 』 を通して 人と人との 『 絆・感謝 』 を大切にし、 　『 食 』 を通して皆様が 『 笑顔 』 になるお手伝いをさせて頂きます。
  </p>
  <p>御社様と生産者様を繋げるお手伝いを通し北海道の活性化、発展のお手伝いが少しでも寄与出来れば幸いです。</p>
</div>
<div class="content">
  <h2 class="c_tt">事業内容</h2>
</div>

<?php if(have_posts()): ?>
<div class="top_blog_list">
  <h2>ブログ</h2>

  <?php while(have_posts()): the_post(); ?>
  <div class="archive_list">
    <a href="<?php  the_permalink(); ?>">
      <p class="thumb"><?php the_post_thumbnail('medium'); ?></p>
      <h3><?php echo mb_substr($post->post_title, 0, 16).'...'; ?></h3>
      <div class="archive_list_foot"><small><?php the_date(); ?></small></div>
    </a>
  </div>
  <?php endwhile; ?>

  <div class="readmore_blog"><a href="<?php echo home_url(); ?>/blog/">ブログ一覧へ</a></div>
</div>
<?php endif; ?>


<div class="content">
  <h2 class="c_tt">お知らせ</h2>

<?php query_posts('post_type=news&posts_per_page=5&order=ASC&orderby=menu_order'); ?>
<?php if(have_posts()): ?>

  <div class="news">
    <ul>
	  <?php while(have_posts()): the_post(); ?>
      <li><a href="<?php  the_permalink(); ?>"><small><?php the_date(); ?></small><?php the_title(); ?></a></li>
	  <?php endwhile; ?>
    </ul>
    <div class="readmore_link"><a href="<?php echo home_url(); ?>/news/">お知らせ一覧へ</a></div>
  </div>

<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

</div>

<?php get_footer(); ?>
