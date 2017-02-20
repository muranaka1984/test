<?php get_header(); ?>


<h1><?php the_archive_title(); ?></h1>

<div class="content archive">
<div class="archive_list_main">

<?php while(have_posts()): the_post(); ?>
<!--ARCHIVE LIST-->
  <div class="archive_list">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if(!is_post_type_archive()) :?>
    <p>
			<?php
			//brだけ残す
			if(mb_strlen($post->post_content, 'UTF-8')>100){
				$content= mb_substr(strip_tags($post->post_content, '<br>'), 0, 100, 'UTF-8');
				echo $content.'...';
			}else{
				echo strip_tags($post->post_content, '<br>');
			}
			//brとspanを残す
			if(mb_strlen($post->post_content, 'UTF-8')>100){
				$content= mb_substr(strip_tags($post->post_content, '<br><span>'), 0, 100, 'UTF-8');
				echo $content.'...';
			}else{
				echo strip_tags($post->post_content, '<br><span>');
			}
			?>
    </p>
    <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></p>
    <div class="archive_list_more"><a href="<?php the_permalink(); ?>">続きはこちら</a></div>
	  <?php endif; ?>
    <div class="archive_list_foot"><small><?php the_date(); ?></small>　<!--small>会社 太郎</small--></div>
  </div>
<!--ARCHIVE LIST-->
<?php endwhile; ?>

</div><!--archive_list_main-->



<?php if(is_post_type_archive('news')) :?>
<div class="archive_list_sub">
  <h3>お知らせ</h3>
  <div class="news">
    <ul>
		<?php query_posts('post_type=news&posts_per_page=10&order=DESC'); ?>
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
		<?php query_posts('post_type=post&posts_per_page=5&order=DESC'); ?>
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
      <?php wp_list_categories('title_li=&depth=2'); ?>
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
