<?php get_header(); ?>


<?php if ( is_home() || is_front_page() ) : ?>
<?php query_posts('post_type=slide'); ?>
<?php if (have_posts()): the_post();?>
	<?php if(post_custom('スライドショー1')): ?>
	<ul class="bxsliderTop">
  <li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'スライドショー1', true),'full'); ?></li>
 	<?php endif; ?>
	<?php if(post_custom('スライドショー2')): ?>
  <li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'スライドショー2', true),'full'); ?></li>
 	<?php endif; ?>
	<?php if(post_custom('スライドショー3')): ?>
  <li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'スライドショー3', true),'full'); ?></li>
 	<?php endif; ?>
	<?php if(post_custom('スライドショー4')): ?>
  <li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'スライドショー4', true),'full'); ?></li>
 	<?php endif; ?>
	<?php if(post_custom('スライドショー5')): ?>
  <li><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'スライドショー5', true),'full'); ?></li>
 	<?php endif; ?>
	<?php if(post_custom('スライドショー1')): ?>
	</ul>
	<?php endif; ?>

<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>


<script>
	$(document).ready(function(){
		$('.bxsliderTop').bxSlider({
			pause: 4000,
			speed: 1000,
			auto: true,
			autoHover: false,
			controls: false,
		});
	});
</script>
<?php endif; ?>


<div class="wrapper">
	<div class="content">

<h2 class="c_tt center">TODAY<small>- 本日出勤 -</small></h2>

<?php query_posts('post_type=girls&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
<?php if (have_posts()): while(have_posts()): the_post(); $loopcounter++; ?>
<?php
$Tokuchou = get_post_meta($post->ID,'タイプ');
if (get_post_meta($post->ID,'date-'.date("m-d"),true)):
echo'<a href="';
echo the_permalink();
echo '" class="cast_todayschedule"><dl>';
for($i=0; $i<1; $i++){ // 1日分の予定を表示
	$time = strtotime('+' . $i . ' days');
	$key = 'date-' . date('m-d', $time);
	echo '<dt><img src="';
		if(get_post_meta($post->ID,'写真1',true)):
		$image = wp_get_attachment_image_src(get_post_meta($post->ID, '写真1', true), 'medium');
		echo $image[0];
		else:
		echo bloginfo('template_directory')."/img/nophoto1.png";
		endif;
	echo '" alt="';
	echo $title = get_the_title();
	echo 'の写真"></dt><dd>';
 	if(get_post_meta($post->ID,'待機中',true) == '待機中'){
		echo ('<span class="icon_taiki">待機中！</span>');
	}
	if (post_custom('新人割引50分')){
		echo ('<span class="icon_new">新人割引中！</span>');
	}
	echo '<p class="catch_copy">';
	echo post_custom('キャッチコピー');
	echo '</p><p class="name">';
	echo $title = get_the_title( );
	echo '<span class="age">（' .post_custom('年齢') .'）</span></p>';
	echo '<span class="tt">3Size</span>';
	echo post_custom('3サイズ／バスト').'('.post_custom('カップ数').') / ' .post_custom('3サイズ／ウェスト') .' / ' .post_custom('3サイズ／ヒップ') .'';
	echo '<p class="time">'. get_post_meta($post->ID, $key, true) .'</p>';
	if (post_custom('指名料')){
		echo '<p class="shimeiryo"><span>指名料</span><strong><small>￥</small>';
		$n = post_custom('指名料');
		$nn = number_format($n);
		echo $nn;
		echo '</strong></p>';
	}
	echo '</dd>';
}
echo'</dl><div class="icon_type">';
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
echo'</div></a>';
	if($loopcounter%5==0) {
		echo ('<div class="cast_list_br"><br></div>');}
endif;
?>

<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

<div align="right" class="mt20">
	<a href="<?php echo site_url(); ?>/girls/" class="btn1">ガールズ一覧へ</a>
</div>
<br class="cb"><div class="mt40"><br></div>



<div class="layout_2column">

	<div class="layout_2column_child layout_2column_main">
		<h2 class="c_tt">RANKING<small>- 人気ランキング -</small></h2>
<?php
$args = array(/* 配列に複数の引数を追加 */
	'post_type' => 'girls', /* 投稿タイプを指定 */
	'posts_per_page' => 5, /* 表示するページ数 */
	'order' => 'ASC',
	'meta_key'=>'ランキング',
	'orderby'=>'meta_value',
); ?>
<?php query_posts( $args ); ?>
<div class="style_ranking">
<?php if (have_posts()): while(have_posts()): the_post(); $loopcounter++; ?>

<?php $ccc = get_post_meta($post->ID, 'ランキング', true);?>

<?php if(empty($ccc)):?>
<?php else:?>
<?php
echo'<a href="';
echo the_permalink();
echo '" class="top_ranking"><dl>';
for($i=0; $i<1; $i++){ // 1日分の予定を表示
	$time = strtotime('+' . $i . ' days');
	$key = 'date-' . date('m-d', $time);
	echo '<dt><img src="';
	$image = wp_get_attachment_image_src(get_post_meta($post->ID, '写真1', true), 'thumbnail');
	echo $image[0];
	echo '" alt="';
	echo $title = get_the_title();
	echo 'の写真"></dt><dd>';
 	if(get_post_meta($post->ID,'待機中',true) == '待機中'){
		echo ('<span class="icon_taiki">待機中！</span>');
	}
	if (post_custom('新人割引50分')){
		echo ('<span class="icon_new">新人割引中！</span>');
	}
	echo '<p class="catch_copy">';
	echo post_custom('キャッチコピー');
	echo '</p><p class="name">';
	echo $title = get_the_title( );
	echo '<span class="age">（' .post_custom('年齢') .'）</span></p>';
	echo '<span class="tt">3Size</span>';
	echo post_custom('3サイズ／バスト').'('.post_custom('カップ数').') / ' .post_custom('3サイズ／ウェスト') .' / ' .post_custom('3サイズ／ヒップ') .'';
//	echo '<p class="time">'. get_post_meta($post->ID, $key, true) .'</p>';
	if (post_custom('指名料')){
		echo '<p class="shimeiryo"><span>指名料</span><strong><small>￥</small>';
		$n = post_custom('指名料');
		$nn = number_format($n);
		echo $nn;
		echo '</strong></p>';
	}
	echo '</dd>';
}
echo'</dl></a>';
?>
<?php endif;?>

<?php //if($loopcounter%5==0) {echo ('');} ?>

<?php endwhile; endif; ?>
</div>
<?php wp_reset_postdata(); wp_reset_query(); ?>
<div align="right" class="mt20">
	<a href="<?php echo site_url(); ?>/ranking/" class="btn1">ランキング一覧</a>
</div>


<div><br></div>
<div><br></div>


<?php query_posts('post_type=post&posts_per_page=5&order=DESC'); ?>
<?php if(have_posts()): ?>
<h2 class="c_tt">NEWS<small>- お知らせ -</small></h2>
<div class="news">
	<ul>
		<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?php echo the_permalink(); ?>">
					<small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p>
				</a>
			</li>
		<?php endwhile; ?>
	</ul>
	<div align="right" class="mt20">
		<a href="<?php echo site_url(); ?>/news/" class="btn1">
			お知らせ一覧
		</a>
	</div>
</div>

<div><br></div>
<div><br></div>

<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>



<?php query_posts('post_type=event&posts_per_page=3&order=DESC'); ?>
<?php if(have_posts()): ?>
<h2 class="c_tt">EVENT<small>- イベント -</small></h2>
<div class="news top_event">
	<ul>
		<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?php echo the_permalink(); ?>">
					<?php if(post_custom('イベントバナー')): ?>
						<div class="top_event_left"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'イベントバナー', true),'full'); ?></div>
					<?php endif; ?>
					<div class="top_event_right"><small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p></div>
				</a>
			</li>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); wp_reset_query(); ?>
	</ul>
	<div align="right" class="mt20">
		<a href="<?php echo site_url(); ?>/event/" class="btn1">イベント・割引一覧</a>
	</div>
</div>


<div><br></div>
<div><br></div>

<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>




<?php query_posts('post_type=blog&posts_per_page=5&order=DESC'); ?>
<?php if(have_posts()): ?>
<h2 class="c_tt">BLOG<small>- スタッフブログ -</small></h2>
<div class="news">
	<ul>
		<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?php echo the_permalink(); ?>">
					<small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p>
				</a>
			</li>
		<?php endwhile; ?>
	</ul>
	<div align="right" class="mt20">
		<a href="<?php echo site_url(); ?>/blog/" class="btn1">ブログ一覧</a>
	</div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>


</div><!--layout_2column_main-->

	<div class="layout_2column_child layout_2column_sub">
		<?php get_template_part( 'layout_2column_sub' ); ?>
	</div>


</div><!--layout_2column-->




	</div><!--content-->
</div><!--wrapper-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
