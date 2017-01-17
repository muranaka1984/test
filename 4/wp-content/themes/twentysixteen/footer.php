    <!--FOOTER-->
    <div class="footer">
      <div class="footer_content">
        <p class="logo">
          <a href="" class="button1">レストラン・飲食店経営者様へ</a>
          <a href="" class="button1">個人のお客様へ</a>
        </p>
        <dl>
          <dt>ADDRESS</dt>
          <dd>
            <p>
              株式会社 BONKS
              <br> 北海道札幌市
              <br> 東区本町2条11丁目 1-1-201
              <br>
              <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/pin-map-icon.png" width="30"></a>
            </p>
            <p><a href="tel:">TEL 090-6446-5432</a></p>
            <p>FAX 011-789-5015</p>
          </dd>
        </dl>
        <dl>
          <dt>CONTENT</dt>
          <dd>
            <ul>
			        <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
			        <li><a href="<?php echo home_url(); ?>/message/">メッセージ</a></li>
			        <li><a href="<?php echo home_url(); ?>/business/">事業内容</a></li>
			        <li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
              <li><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
              <li><a href="<?php echo home_url(); ?>/blog/">ブログ</a></li>
            </ul>
          </dd>
        </dl>
        <dl class="blog">
          <dt>BLOG</dt>
          <dd>
            <ul class="blog">
              <li><a href=""><small>11.22</small>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a></li>
              <li><a href=""><small>11.22</small>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a></li>
              <li><a href=""><small>11.22</small>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a></li>
            </ul>
          </dd>
        </dl>
        <div class="footer_bottom_guide">
          <ul>
            <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
            <li><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
          </ul>
        </div>
        <div class="copyright">Copyright © 2017 BONKS, Inc. All rights reserved.</div>
      </div>
    </div>
    <!--FOOTER-->
    <script>
    $(function() {
      TweenMax.to('#container', 0.5, {
        top: '50px',
        opacity: '1',
        ease: Power2.easeOut,
        y: 0
      });
    });
    </script>
  </div>
  <!--CONTAINER-->
  <!--SPNAVI-->
  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_menu.png" class="sp_menu" width="50">
  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_menu_close.png" class="sp_menu_close" width="50">
  <!--SPNAVI-->


<?php wp_footer(); ?>
</body>
</html>
