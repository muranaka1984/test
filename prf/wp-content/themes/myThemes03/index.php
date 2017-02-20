<?php get_header(); ?>

<div class="content top_message">
  <h1>Shingo Muranaka</h1>

</div>

<div class="content">
  <h2 class="c_tt">お知らせ</h2>

<?php query_posts('post_type=post&posts_per_page=5&order=DESC'); ?>
<?php if(have_posts()): ?>

  <div class="news">
    <ul>
	  <?php while(have_posts()): the_post(); ?>
      <li><a href="<?php  the_permalink(); ?>"><small><?php the_time(get_option('date_format')); ?></small><?php the_title(); ?></a></li>
	  <?php endwhile; ?>
    </ul>
    <div class="readmore_link"><a href="<?php echo home_url(); ?>/news/">お知らせ一覧へ</a></div>
  </div>

<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

</div>

<?php get_footer(); ?>
