<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<div class="content">
<div class="archive_list_main">

<?php while(have_posts()): the_post(); ?>

  <div class="portfolio_wrap">
    <div class="portfolio_image">
      <div class="portfolio">

        <div class="portfolio_img">

        <?php 
          // アイキャッチ画像のIDを取得
          $thumbnail_id = get_post_thumbnail_id(); 
           
          // mediumサイズの画像内容を取得（引数にmediumをセット）
          $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
           
          // 取得した画像URLにてイメージタグを出力
          // 更にdata-aliasというHTML5のカスタムデータ属性を追加
          echo '<img src="'.$eye_img[0].'" data-alias="img01">';　
        ?>

        </div>

        <div class="portfolio_border portfolio_border_left"></div>
        <div class="portfolio_border portfolio_border_right"></div>
        <div class="portfolio_border portfolio_border_top"></div>
        <div class="portfolio_border portfolio_border_bottom"></div>
        <div class="portfolio_border portfolio_border_left portfolio_border_sub"></div>
        <div class="portfolio_border portfolio_border_right portfolio_border_sub"></div>
        <div class="portfolio_border portfolio_border_top portfolio_border_sub"></div>
        <div class="portfolio_border portfolio_border_bottom portfolio_border_sub"></div>

      </div>
    </div><!--portfolio_image-->

    <div class="portfolio_cmt">

      <p>
        <?php the_title(); ?>
      <p>
      </p>
        <?php the_content(); ?>
        <small><?php the_date(); ?></small>
      </p>

      <div class="bein">
      <p>
        <?php echo get_post_meta($post->ID , 'cut' ,true); ?>
      <p>
      </p>
        【担当】<br>
        <?php echo get_post_meta($post->ID , 'tobear' ,true); ?>
      </p>

      </div>

    </div>
  </div><!--portfolio_wrap-->




<?php endwhile; ?>



<div class="cta">
  <h2>お問い合わせはこちら</h2>
  <p>お仕事に関するご質問、なんでもお気軽にご相談ください。</p>
  <div class="links">
    <a href="<?php echo home_url(); ?>/contact/">メールフォームへ</a>
  </div>
</div>


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




</div>

<?php get_footer(); ?>
