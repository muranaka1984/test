<?php get_header(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/single-cast.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>

<?php if(have_posts()):while(have_posts()):the_post(); ?>

<?php if(post_custom('写真メイン')): ?>
<div class="first_view">
	<h1 class="c_tt">
		<?php echo $title = get_the_title(); ?>
	</h1>
	<?php echo wp_get_attachment_image(get_post_meta($post->ID, '写真メイン', true),'full'); ?>
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


<ul class="bxslider">
<?php if(post_custom('写真1')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, '写真1', true),'large'); ?></li>
<?php endif; ?>
<?php if(post_custom('写真2')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, '写真2', true),'large'); ?></li>
<?php endif; ?>
<?php if(post_custom('写真3')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, '写真3', true),'large'); ?></li>
<?php endif; ?>
<?php if(post_custom('写真4')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, '写真4', true),'large'); ?></li>
<?php endif; ?>
<?php if(post_custom('写真5')): ?>
	<li><?php echo wp_get_attachment_image(get_post_meta($post->ID, '写真5', true),'large'); ?></li>
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




<div id="schedule">

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

</div>


<br class="cb">



<?php if(get_post_meta($post->ID,'待機中',true) == '待機中'): ?>
<div class="taiki taiki_open"><img src="<?php bloginfo('template_directory'); ?>/img/taiki.png" alt="待機中です！"></div>
<?php endif; ?>

<?php if(post_custom('写メURL')): ?>
<div class="shame shame_open"><img src="<?php bloginfo('template_directory'); ?>/img/shame.png" alt="写メ"></div>
<?php endif; ?>


	</div>
</div>

<?php endwhile; endif; ?>



<div class="content">
<div><br></div>
<div><br></div>
<ul class="top_foot_guide">
  <li><a href="<?php echo site_url(); ?>/girls/">
    ガールズ一覧
  </a></li>
  <li><a href="<?php echo site_url(); ?>/rannking/">
    ランキング
  </a></li>
</ul>
</div>


<script>
$(function(){
  // shame
	var url = '<?php echo post_custom('写メURL'); ?>';
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
  $.cookie( "cast_photo" , "<?php $image = wp_get_attachment_image_src(get_post_meta($post->ID, '写真1', true), 'medium'); echo $image[0]; ?>" , { expires: 1 , path: '/' });
  $.cookie( "cast_link" , "<?php echo the_permalink(); ?>" , { expires: 1 , path: '/' });

  //console.log($.cookie( "cast_photo" ));
  //console.log($.cookie( "cast_link" ));


});
</script>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
