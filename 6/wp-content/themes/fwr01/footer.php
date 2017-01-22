<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<div class="footer">
  <div class="base">
    <div align="right"><p class="pagetop"><img src="<?php bloginfo('template_directory'); ?>/img/pagetop.png" alt="pagetop"></p></div>
    <ul class="footer_sns">
      <!--li class="facebook">
        <a href="https://www.facebook.com//" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/footer_content_facebook.png" alt="Facebook"></a>
      </li-->
      <li class="youtube">
        <a href="https://www.youtube.com/channel/UCPn1f_DoaLq9LrF9PO4JRiA" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/footer_content_youtube.png" alt="YouTube"></a>
      </li>
    </ul>
    <ul class="footer_link">
      <li><a href="http://www.giragira-night.club/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/sogolink02.png" alt="ソープランド ギラギラナイト"></a></li>
      <li><a href="http://www.night-lover.club/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/sogolink01.png" alt="ソープランド ナイトラバー"></a></li>
    </ul>
    <div class="copyright">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?></div>
  </div>
</div>

</div><!-- /container -->


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
