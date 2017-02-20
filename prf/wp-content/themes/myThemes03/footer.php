    <!--FOOTER-->
    <div class="footer">
      <div class="footer_content">
        <p class="logo">
          <a href="<?php echo home_url(); ?>/contact/" class="button1">お問い合わせ</a>
        </p>
        <dl>
          <dt>Address</dt>
          <dd>
            <p>
              Tokyo
            </p>
          </dd>
        </dl>
        <dl>
          <dt>Content</dt>
          <dd>
            <ul>
			        <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
			        <li><a href="<?php echo home_url(); ?>/profile/">プロフィール</a></li>
              <li><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
            </ul>
          </dd>
        </dl>
        <dl class="blog">
          <dt>News</dt>
          <dd>
            <ul class="blog">
              <?php query_posts('post_type=post&posts_per_page=5&order=DESC'); ?>
              <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                <li>
                  <a href="<?php  the_permalink(); ?>">
                    <small><?php the_time('n月j日'); ?></small>
                    <?php echo mb_substr($post->post_title, 0, 32).''; ?>
                  </a>
                </li>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); wp_reset_query(); ?>
            </ul>
          </dd>
        </dl>
        <div class="footer_bottom_guide">
          <ul>
            <!--li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li-->
          </ul>
        </div>
        <div class="copyright">© muranaka84.com</div>
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
