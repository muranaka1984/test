<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/single-cast.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>

<?php if(have_posts()):while(have_posts()):the_post(); ?>

<?php if(post_custom('ギラギラナイト写真メイン')): ?>
<div class="first_view">
	<h1 class="c_tt">
		<?php echo $title = get_the_title(); ?>
	</h1>
	<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'ギラギラナイト写真メイン', true),'full'); ?>
	<p class="overlay"></p>
	<p class="overlay_h1"></p>
</div>
<?php else: ?>
<div class="first_view not_mainimage">
	<h1 class="c_tt">
		<?php echo $title = get_the_title(); ?>
	</h1>
	<p class="overlay_h1"></p>
</div>
<?php endif; ?>



<div class="wrapper">
	<div class="content">

<?php if(qtranxf_getLanguage() == 'ja'):?>
  <div align="right">
<?php
$Tokuchou = get_post_meta($post->ID,'タイプ');
echo'<div class="icon_type">';
if(in_array("今月一押し",$Tokuchou)):
  echo '<span class="icon_reco">今月一押し</span>';
endif;
if(in_array("スタイル抜群",$Tokuchou)):
  echo '<span class="icon_style">スタイル抜群</span>';
endif;
if(in_array("感度抜群",$Tokuchou)):
  echo '<span class="icon_kando">感度抜群</span>';
endif;
if(in_array("人気急上昇",$Tokuchou)):
  echo '<span class="icon_ninki">人気急上昇</span>';
endif;
if(in_array("スレンダー",$Tokuchou)):
  echo '<span class="icon_slender">スレンダー</span>';
endif;
if(in_array("きれい系",$Tokuchou)):
  echo '<span class="icon_kirei">きれい系</span>';
endif;
if(in_array("いやし系",$Tokuchou)):
  echo '<span class="icon_iyashi">いやし系</span>';
endif;
if(in_array("グラマー",$Tokuchou)):
  echo '<span class="icon_glammer">グラマー</span>';
endif;
if(in_array("素人",$Tokuchou)):
  echo '<span class="icon_amature">素人</span>';
endif;
if(in_array("美乳",$Tokuchou)):
  echo '<span class="icon_binyuu">美乳</span>';
endif;
if(in_array("美脚",$Tokuchou)):
  echo '<span class="icon_bikyaku">美脚</span>';
endif;
if(in_array("明るい",$Tokuchou)):
  echo '<span class="icon_akarui">明るい</span>';
endif;
echo'</div>';
?>
</div>
<?php endif; ?>


<ul class="bxslider">
<?php if(post_custom('ギラギラナイト写真1')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'ギラギラナイト写真1', true),'large'); ?></li>
<?php endif; ?>
<?php if(post_custom('ギラギラナイト写真2')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'ギラギラナイト写真2', true),'large'); ?></li>
<?php endif; ?>
<?php if(post_custom('ギラギラナイト写真3')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'ギラギラナイト写真3', true),'large'); ?></li>
<?php endif; ?>
<?php if(post_custom('ギラギラナイト写真4')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'ギラギラナイト写真4', true),'large'); ?></li>
<?php endif; ?>
<?php if(post_custom('ギラギラナイト写真5')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'ギラギラナイト写真5', true),'large'); ?></li>
<?php endif; ?>
</ul>

<script>
  $(document).ready(function(){
    var $slider = $('.bxslider');
    $slider.bxSlider({
	    mode: 'fade',      
	    hideControlOnEnd: false,
	    pagerType: 'short',
	    pagerShortSeparator: ' / ',
	    nextText: 'NEXT',
	    prevText: 'PREV',
	    pause: 3000,
	    auto: false,
	    autoHover: true,
      keyboard: true,
    });
  });
  $(document).keydown(function(e){
    if (e.keyCode == 39) // Right arrow 
    {
      $('.bx-next').click();
    }
    else if (e.keyCode == 37) // left arrow
    {
      $('.bx-prev').click();
   }
 });
</script>


<?php if(qtranxf_getLanguage() == 'ja'):?>
<div id="profile">
	<h2>プロフィール</h2>
	<table>
			<tr>
				<th>名前</th>
				<td><?php echo $title = get_the_title(); ?></td>
			</tr>
      <tr>
        <th>年齢</th>
        <td><?php echo post_custom('年齢'); ?>歳</td>
      </tr>
			<tr>
				<th>身長</th>
				<td><?php echo post_custom('身長'); ?>cm</td>
			</tr>
			<tr>
				<th>3サイズ</th>
				<td><?php echo post_custom('3サイズ／バスト').'('.post_custom('カップ数').') / ' .post_custom('3サイズ／ウェスト') .' / ' .post_custom('3サイズ／ヒップ'); ?></td>
			</tr>
		<?php if(post_custom('前職or現職')): ?>
			<tr>
				<th>前職or現職</th>
				<td><?php echo post_custom('前職or現職'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('好みの男性のタイプ')): ?>
			<tr>
				<th>好みの男性のタイプ</th>
				<td><?php echo post_custom('好みの男性のタイプ'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('ときめく男性の仕草')): ?>
			<tr>
				<th>ときめく男性の仕草</th>
				<td><?php echo post_custom('ときめく男性の仕草'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('趣味・特技')): ?>
			<tr>
				<th>趣味・特技</th>
				<td><?php echo post_custom('趣味・特技'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('好きな食べもの')): ?>
			<tr>
				<th>好きな食べもの</th>
				<td><?php echo post_custom('好きな食べもの'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('初体験はいつ？')): ?>
			<tr>
				<th>初体験はいつ？</th>
				<td><?php echo post_custom('初体験はいつ？'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('性感帯は？')): ?>
			<tr>
				<th>性感帯は？</th>
				<td><?php echo post_custom('性感帯は？'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('性欲を感じる時って、どんな時ですか？')): ?>
			<tr>
				<th nowrap="nowrap">性欲を感じる時ってどんな時？</th>
				<td><?php echo post_custom('性欲を感じる時って、どんな時ですか？'); ?></td>
			</tr>
		<?php endif; ?>


		<?php if(post_custom('自分の性格')): ?>
			<tr>
				<th>自分の性格</th>
				<td><?php echo post_custom('自分の性格'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('チャームポイント')): ?>
			<tr>
				<th>チャームポイント</th>
				<td><?php echo post_custom('チャームポイント'); ?></td>
			</tr>
		<?php endif; ?>


		<?php if(post_custom('私のオススメ')): ?>
			<tr>
				<th>私のオススメ</th>
				<td><?php echo post_custom('私のオススメ'); ?></td>
			</tr>
		<?php endif; ?>

		<?php if(post_custom('メッセージ')): ?>
			<tr>
				<th>メッセージ</th>
				<td><?php echo post_custom('メッセージ'); ?></td>
			</tr>
		<?php endif; ?>

			<tr>
				<td colspan="2">
					<p class="owner_message">店長から</p>
					<?php the_content(); ?>
				</td>
			</tr>

	</table>
</div><!--#profile-->
<?php elseif(qtranxf_getLanguage() == 'en'):?>
<div id="profile">
	<h2>Profile</h2>
	<table>
			<tr>
				<th>Name</th>
				<td><?php echo $title = get_the_title(); ?></td>
			</tr>
      <tr>
        <th>Age</th>
        <td><?php echo post_custom('年齢'); ?></td>
      </tr>
			<tr>
				<th>Height</th>
				<td><?php echo post_custom('身長'); ?>cm</td>
			</tr>
			<tr>
				<th>3 Size</th>
				<td><?php echo post_custom('3サイズ／バスト') .' / ' .post_custom('3サイズ／ウェスト') .' / ' .post_custom('3サイズ／ヒップ'); ?></td>
			</tr>
	</table>
</div><!--#profile-->			
<?php endif; ?>



<div id="schedule">
<?php if(qtranxf_getLanguage() == 'ja'):?>
	<h2>週間スケジュール</h2>	
	<?php
		for($i=0; $i<7; $i++){ // 7日分の予定を表示
			$time = strtotime('+' . $i . ' days');
			$weekday = array( '日', '月', '火', '水', '木', '金', '土' );
			$key = 'date-' . date('m-d', $time);
			echo '<dl>';
			echo '<dt class="';
			echo date('l', $time);
			echo '">';
			echo date('n/j', $time);
			echo '（'.$weekday[date('w',$time)] .')';
			echo '</dt>';
			echo '<dd>'. get_post_meta($post->ID, $key, true) .'</dd></dl>';
		}
	?>
<?php elseif(qtranxf_getLanguage() == 'en'):?>
	<h2>Schedule</h2>	
	<?php
		for($i=0; $i<7; $i++){ // 7日分の予定を表示
			$time = strtotime('+' . $i . ' days');
			$weekday = array( 'Sun', 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat' );
			$key = 'date-' . date('m-d', $time);
			echo '<dl>';
			echo '<dt class="';
			echo date('l', $time);
			echo '">';
			echo date('n/j', $time);
			echo '（'.$weekday[date('w',$time)] .')';
			echo '</dt>';
			echo '<dd>'. get_post_meta($post->ID, $key, true) .'</dd></dl>';
		}
	?>
<?php endif; ?>
</div>


<?php if(post_custom('新人割引50分')): ?>
<?php if(qtranxf_getLanguage() == 'ja'):?>
<div class="single_girls_newface">
<h2 class="shinjinwaribikityuu">新人割引中！！</h2>
<?php 
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
?>
</div>
<?php endif; ?>
<?php endif; ?>


<br class="cb">

<?php if(qtranxf_getLanguage() == 'ja'):?>
<p class="taiki_open taiki_pop_tel_mail">電話で指名予約する</p>
<br>
<a href="/reservation/" class="taiki_pop_tel_mail">聴覚障害がある方はこちらからご予約可能です</a>
<?php endif; ?>


<?php if(get_post_meta($post->ID,'待機中',true) == '待機中'): ?>
<div class="taiki taiki_open"><img src="<?php bloginfo('template_directory'); ?>/img/taiki.png" alt="待機中です！"></div>
<?php endif; ?>

<?php if(post_custom('ギラギラナイト／写メURL')): ?>
<div class="shame shame_open"><img src="<?php bloginfo('template_directory'); ?>/img/shame.png" alt="写メ"></div>
<?php endif; ?>


	</div>
</div>

<?php endwhile; endif; ?>



<div class="taiki_pop taiki_close">
  <dl class="taiki_pop_tel">
    <dt>
      <?php if(post_custom('ギラギラナイト写真1')): ?>
      <p class="photo"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'ギラギラナイト写真1', true),'medium'); ?></p>
      <?php endif; ?>
      <p class="txt"><small><?php echo $title = get_the_title(); ?></small>
      ご指名予約</p>
    </dt>
    <dd>
      <p>ご指名予約はお電話から受け付けております。</p>
      <p class="taiki_pop_tel_area"><span class="taiki_pop_tel_icon">TEL</span><a href="tel:">03-1234-4321</a></p>
      <small>受付時間／9:00〜24:00</small>
      <!--a href="/reserved_g/" class="taiki_pop_tel_mail">メールからのご指名予約はこちら</a-->
      <div class="taiki_pop_tel_close"><img src="<?php bloginfo('template_directory'); ?>/img/icon_menu_close_trans.png" height="20"> 閉じる
      </div>
    </dd>
  </dl>
</div>

<div class="content">
<div><br></div>
<div><br></div>
<ul class="top_foot_guide">
  <li><a href="/girls/">
  <?php if(qtranxf_getLanguage() == 'ja'):?>
    ガールズ一覧
  <?php elseif(qtranxf_getLanguage() == 'en'):?>
    Girls List
  <?php endif; ?>
  </a></li>
  <li><a href="/rannking/">
  <?php if(qtranxf_getLanguage() == 'ja'):?>
    ランキング
  <?php elseif(qtranxf_getLanguage() == 'en'):?>
    Girls Rank
  <?php endif; ?>
  </a></li>
</ul>
</div>

<?php if(post_custom('ギラギラナイト／写メURL')): ?>
<div class="shame_pop shame_close">
	<div class="shame_layer_iframe">
		<iframe src="<?php echo post_custom('ギラギラナイト／写メURL'); ?>" frameborder="0" id="tgt">この部分はiframe対応のブラウザで見てください。</iframe>
	  <div class="shame_pop_tel_close"><img src="<?php bloginfo('template_directory'); ?>/img/icon_menu_close_trans.png" height="20"> 閉じる
	  </div>		
	</div>
</div>
<?php endif; ?>


<script>
$(function(){
  // shame
	var url = '<?php echo post_custom('ギラギラナイト／写メURL'); ?>';
  $(".shame_open").click(function(){
  	$('#tgt').attr({'src':url});
    TweenMax.to('.shame_pop', 0.4, {
      opacity: 1,
      ease: Power4.easeOut, y: 0
    });
    $(".shame_pop").css({
      "display":"table",
    });
  });
  $(".shame_close").click(function(){
    TweenMax.to('.shame_pop', 0.4, {
      opacity: 0,
      ease: Power4.easeOut, y: 0,
        onComplete : function(){
          $(".shame_pop").css({
            "display":"none",
          });
        }
    });
  });

  // reserved
  $.cookie( "reserved" , "<?php echo $title = get_the_title(); ?>" , { expires: 1 , path: '/' });
  $.cookie( "cast_photo" , "<?php $image = wp_get_attachment_image_src(get_post_meta($post->ID, 'ギラギラナイト写真1', true), 'medium'); echo $image[0]; ?>" , { expires: 1 , path: '/' });
  $.cookie( "cast_link" , "<?php echo the_permalink(); ?>" , { expires: 1 , path: '/' });

  //console.log($.cookie( "cast_photo" ));
  //console.log($.cookie( "cast_link" ));


});
</script>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
