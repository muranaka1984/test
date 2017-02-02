<div class="footer">
  <div class="base">
    <div align="right"><p class="pagetop"><img src="<?php bloginfo('template_directory'); ?>/img/pagetop.png" alt="pagetop"></p></div>

    <h3><a href="<?php echo site_url(); ?>/">ホーム</a></h3>

    <h3>CONTENT</h3>
    <ul class="footer_link">
      <li><a href="<?php echo site_url(); ?>/news/">お知らせ</a></li>
      <li><a href="<?php echo site_url(); ?>/girls/">ガールズ</a></li>
      <li><a href="<?php echo site_url(); ?>/ranking/">ランキング</a></li>
      <li><a href="<?php echo site_url(); ?>/schedule/">スケジュール</a></li>
      <li><a href="<?php echo site_url(); ?>/event/">イベント</a></li>
      <li><a href="<?php echo site_url(); ?>/system/price_system/">システム</a></li>
      <li><a href="<?php echo site_url(); ?>/blog/">ブログ</a></li>
      <?php wp_list_pages('title_li=&exclude=2,23,26,16,51'); ?>
    </ul>


    <?php query_posts('post_type=system'); ?>
    <?php if (have_posts()): while(have_posts()): the_post();?>
    <h3>GUIDE</h3>
    <ul class="footer_link">
    <?php if(post_custom('Googleマップ')): ?>
      <li><a href="<?php echo site_url(); ?>/access/">アクセス</a></li>
    <?php endif; ?>
      <li><a href="<?php echo site_url(); ?>/reservation/">ご指名予約お申し込み</a></li>
      <li><a href="<?php echo site_url(); ?>/contact/">お問い合わせフォーム</a></li>
     <?php if(post_custom('電話番号')): ?>
        <li><a href="tel:<?php echo post_custom('電話番号'); ?>">TEL : <?php echo post_custom('電話番号'); ?></a></li>
      <?php endif; ?>
    </ul>
    <?php endwhile; endif; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>


    <div class="copyright">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?></div>
  </div>
</div>

</div><!-- /container -->

<img src="<?php bloginfo('template_directory'); ?>/img/icon_menu.png" class="sp_menu" width="62">
<img src="<?php bloginfo('template_directory'); ?>/img/icon_menu_close.png" class="sp_menu_close" width="62">


<dl class="modal">
  <dt>
    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?> 年齢認証"><br>
    <span>当サイトでは18歳未満の方や高校生の閲覧ご利用を固くお断りします。</span>
  </dt>
  <dd><a class="close_modal">18歳以上</a><a href="http://www.yahoo.co.jp/">18歳未満</a><br></dd>
</dl><!-- /modal -->

<?php wp_footer(); ?>
</body>
</html>
