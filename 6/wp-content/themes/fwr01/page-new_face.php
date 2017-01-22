<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
  $cat_slug = $post->post_name;
  $cat_slug_str = strtoupper($cat_slug);
?>

<div class="wrapper">
  <div class="content">


  <h1 class="c_tt">
    <?php if(post_custom('ページタイトル英語')): ?>
      <?php echo post_custom('ページタイトル英語'); ?>
    <?php endif; ?>
    <small>- <?php the_title(); ?> -</small>
  </h1>

  <div class="layout_2column">
    <div class="layout_2column_child layout_2column_main">

<div class="new_face_head">
<h2><img src="<?php bloginfo('template_directory'); ?>/img/head_newface.png" alt="絶対にお得な新人割引！"></h2>
<h3>入店間もない新人さんとお遊びのお客様はとってもお得な総額料金で遊べちゃいます！</h3>
<p>
※<b class="green">「新人割引見た」</b>とお電話下さい。<br>
※他の割引との併用はできません。
</p>
<p class="shinjinwaribikityuu">現在、新人割引中の女の子</p>
</div>

<?php query_posts('post_type=girls&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
<div class="style_ranking style_newface">
<?php if (have_posts()): while(have_posts()): the_post(); $loopcounter++; ?>
<?php if (post_custom('新人割引50分')): ?>
<?php
echo'<a href="';
echo the_permalink();
echo '" class="top_ranking"><dl>';
for($i=0; $i<1; $i++){ // 1日分の予定を表示
  $time = strtotime('+' . $i . ' days');
  $key = 'date-' . date('m-d', $time);
  echo '<dt><img src="';
  $image = wp_get_attachment_image_src(get_post_meta($post->ID, 'ギラギラナイト写真1', true), 'thumbnail');
  echo $image[0];
  echo '" alt="すすきの ソープランド嬢 ';
  echo $title = get_the_title();
  echo 'の写真"></dt><dd>';
  if(get_post_meta($post->ID,'待機中',true) == '待機中'){
    echo ('<span class="icon_taiki">待機中！</span>');
  }
  echo '<span class="icon_new">新人割引中！</span>';
  echo '<p class="catch_copy">';
  echo post_custom('キャッチコピー');
  echo '</p><p class="name">';
  echo $title = get_the_title( );
  echo '<span class="age">（' .post_custom('年齢') .'）</span></p>';
  echo '<span class="tt">3Size</span>';
  echo post_custom('3サイズ／バスト').'('.post_custom('カップ数').') / ' .post_custom('3サイズ／ウェスト') .' / ' .post_custom('3サイズ／ヒップ') .''; 
//  echo '<p class="time">'. get_post_meta($post->ID, $key, true) .'</p>';
  if (post_custom('指名料')){
    echo '<p class="shimeiryo"><span>指名料</span><strong><small>￥</small>';
    $n = post_custom('指名料');
    $nn = number_format($n);
    echo $nn;
    echo '</strong></p>';
  }
  echo '</dd>';
}
echo'</dl>';
echo'<div class="shinjin_discount">通常50分コース ￥16,000 → 総額￥<span>';
$ns5 = post_custom('新人割引50分');
$nsn5 = number_format($ns5);
echo $nsn5;
echo'</span>';
echo'</div>';

echo'<div class="shinjin_discount">通常70分コース ￥22,000 → 総額￥<span>';
$ns7 = post_custom('新人割引70分');
$nsn7 = number_format($ns7);
echo $nsn7;
echo'</span>';
echo'</div>';

echo'<div class="shinjin_discount">通常90分コース ￥28,000 → 総額￥<span>';
$ns9 = post_custom('新人割引90分');
$nsn9 = number_format($ns9);
echo $nsn9;
echo'</span>';
echo'</div>';

echo'</a>';
?>
<?php //if($loopcounter%5==0) {echo ('');} ?>

<?php endif;?>
<?php endwhile; endif; ?>
</div>
<?php wp_reset_postdata(); wp_reset_query(); ?>




    </div>

    <div class="layout_2column_child layout_2column_sub">
      <?php get_template_part( 'layout_2column_sub' ); ?>
    </div>
  </div><!--layout_2column-->



  </div>
</div>


<?php if (is_page(17999)): ?>
  <script>
    $(function(){
  // reserved
  var reserved_name = ($.cookie( "reserved" ));
  $(".your-reserved_name input").val(reserved_name);
});
</script>
<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
