<div class="sidebar">




<dl class="access_info">
  <dt>
    <?php if(post_custom('Googleマップ')): ?>
       <iframe src="" allowfullscreen class="map"></iframe>
    <?php else: ?>
      <p class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></p>
     <small class="name"><?php bloginfo('name'); ?></small>
    <?php endif; ?>
  </dt>
  <dd>
    <?php query_posts('post_type=system'); ?>
    <?php if (have_posts()): while(have_posts()): the_post();?>
    <?php if(post_custom('業種')): ?>
      <p class="type"><?php echo post_custom('業種'); ?>【<?php echo post_custom('店名'); ?>】</p>
    <?php endif; ?>
      <?php if(post_custom('電話番号')): ?>
        <p class="tel">TEL <a href="tel:<?php echo post_custom('電話番号'); ?>" class="int"><?php echo post_custom('電話番号'); ?></a></p>
      <?php endif; ?>
      <?php if(post_custom('営業時間')): ?>
        <p class="time">営業時間／<?php echo post_custom('営業時間'); ?></p>
      <?php endif; ?>
      <?php if(post_custom('住所')): ?>
        <p class="address">住所<?php echo post_custom('住所'); ?></p>
      <?php endif; ?>
    <?php endwhile; endif; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>
  </dd>
</dl>


</div>
