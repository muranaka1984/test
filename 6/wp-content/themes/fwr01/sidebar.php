<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="sidebar">

  <dl class="access_info">
    <dt>
      <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"><br>
      <small class="name"><?php bloginfo('name'); ?></small>

      <?php if(qtranxf_getLanguage() == 'ja'):?>

        <p class="tel">TEL <a href="tel:0112061162" class="int">011-206-1162</a></p>
        <p class="time">営業時間／9:00〜24:00</p>
        <p class="address">住所／札幌市中央区南5条西5丁目ススキノ通り</p>
        <p class="mail"><a href="/contact/"><img src="<?php bloginfo('template_directory'); ?>/img/mail.png" width="20">お問い合わせフォーム</a></p>

      <?php elseif(qtranxf_getLanguage() == 'en'):?>
        <p class="tel">TEL <a href="tel:0112061162" class="int">011-206-1162</a></p>
        <p class="time">9:00〜24:00</p>
        <p class="address">Sapporo-shi Chuo-ku South 5 - west 5 - chome Susukino street</p>

      <?php endif; ?>


    </dt>
    <dd>
      <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d1457.6935328258546!2d141.3508833!3d43.0543262!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m3!3m2!1d43.0552547!2d141.35328189999998!4m5!1s0x5f0b2985e9039d43%3A0xbc0df451069a597f!2z44Ku44Op44Ku44Op44OK44Kk44OILCDjgJIwNjQtMDgwNSDljJfmtbfpgZPmnK3luYzluILkuK3lpK7ljLrljZfvvJXmnaHopb_vvJXkuIHnm64!3m2!1d43.053515!2d141.35096199999998!5e0!3m2!1sja!2sjp!4v1483094575493" allowfullscreen class="map"></iframe>

      <?php if(qtranxf_getLanguage() == 'ja'):?>
      <p class="access">地下鉄南北線【すすきの駅】5番出口より徒歩4分 <a href="https://goo.gl/maps/33u2rCjXkYD2" target="_blank" class="btn1">拡大地図はこちら</a></p>
      <?php endif; ?>

    </dd>
  </dl>

<?php if(qtranxf_getLanguage() == 'ja'):?>

<?php elseif(qtranxf_getLanguage() == 'en'):?>

<?php endif; ?>
</div>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
  <aside id="secondary" class="sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside><!-- .sidebar .widget-area -->
<?php endif; ?>

