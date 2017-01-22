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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/intro.js"></script>

<div class="wrapper">
	<div class="content">

<h2 class="c_tt">TODAY<small>- 本日出勤 -</small></h2>

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
	$image = wp_get_attachment_image_src(get_post_meta($post->ID, 'ギラギラナイト写真1', true), 'medium');
	echo $image[0];
	echo '" alt="すすきの ソープランド嬢 ';
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

<br class="cb"><div class="mt40"><br></div>

<div class="layout_2column">

	<div class="layout_2column_child layout_2column_main layout_2column_main_top">
		<h2 class="c_tt">RANKING<small>- 人気ランキング -</small></h2>
<?php
$args = array(/* 配列に複数の引数を追加 */
	'post_type' => 'girls', /* 投稿タイプを指定 */
	'posts_per_page' => 5, /* 表示するページ数 */
	'order' => 'ASC',
	'meta_key'=>'ランキング【ギラギラナイト】',
	'orderby'=>'meta_value',
); ?>
<?php query_posts( $args ); ?>
<div class="style_ranking">
<?php if (have_posts()): while(have_posts()): the_post(); $loopcounter++; ?>

<?php $ccc = get_post_meta($post->ID, 'ランキング【ギラギラナイト】', true);?>

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
	$image = wp_get_attachment_image_src(get_post_meta($post->ID, 'ギラギラナイト写真1', true), 'thumbnail');
	echo $image[0];
	echo '" alt="すすきの ソープランド嬢 ';
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


	</div>

	<div class="layout_2column_child layout_2column_sub layout_2column_main_top">
		<h2 class="c_tt">NEW FACE<small>- 新人割引 -</small></h2>
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
<?php //if($loopcounter%5==0) {echo ('');} ?>

<?php endif;?>
<?php endwhile; endif; ?>
</div>
<?php wp_reset_postdata(); wp_reset_query(); ?>

	</div>

</div>


<?php if(qtranxf_getLanguage() == 'ja'):?>

<div><br></div>
<div><br></div>


<h2 class="c_tt">NEWS<small>- お知らせ -</small></h2>
<div class="news">
<ul>
	<?php query_posts('post_type=post&posts_per_page=5&order=ASC&category_name=giragiranight_news'); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>">
			<small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p>
			</a>
		</li>
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); wp_reset_query(); ?>
</ul>
<div align="right" class="mt20">
	<a href="/giragiranight_news/" class="btn1">
	<?php if(qtranxf_getLanguage() == 'ja'):?>
		お知らせ一覧
	<?php elseif(qtranxf_getLanguage() == 'en'):?>
		more
	<?php endif; ?>
	</a>
</div>
</div>

<div><br></div>
<div><br></div>



<h2 class="c_tt">EVENT<small>- イベント -</small></h2>
<div class="news top_event">
<ul>
	<?php query_posts('post_type=event&posts_per_page=3&order=ASC'); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>">
			<?php if(post_custom('イベントバナー')): ?>
			<div class="top_event_left"><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'イベントバナー', true),'full'); ?></div>
			<?php endif; ?>
			<div class="top_event_right"><small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p></div>
			</a>
		</li>
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); wp_reset_query(); ?>
</ul>
<div align="right" class="mt20">
	<a href="/event/" class="btn1">イベント・割引一覧</a>
</div>
</div>


<div><br></div>
<div><br></div>



<?php if(qtranxf_getLanguage() == 'ja'):?>

<ul class="top_foot_guide">
	<li><a href="/guide_reserve/">ご予約について</a></li>
	<li><a href="/faq/">よくあるご質問</a></li>
</ul>



<div class="layout_2column">

	<div class="layout_2column_child layout_2column_main layout_3column">

		<h2 class="c_tt">BLOG<small>- スタッフブログ -</small></h2>
		<div class="news">
			<ul>
				<?php query_posts('post_type=blog&posts_per_page=5&order=DESC'); ?>
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<li>
						<a href="<?php echo the_permalink(); ?>">
							<small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p>
						</a>
					</li>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); wp_reset_query(); ?>
			</ul>
			<div align="right" class="mt20">
				<a href="/blog/" class="btn1">ブログ一覧</a>
			</div>
		</div>
	</div>


	<div class="layout_2column_child layout_2column_main layout_3column">
		<h2 class="c_tt">YOUTUBE<small>- スタッフチャンネル -</small></h2>
		<p class="youtube_tt"><img src="<?php bloginfo('template_directory'); ?>/img/YouTube-logo-full_color.png" alt="YouTube"></p>
			<div id="youtube">
			<?php
			$url = "https://www.youtube.com/feeds/videos.xml?channel_id=UCPn1f_DoaLq9LrF9PO4JRiA";
			$rss = file_get_contents($url);
			$rss = preg_replace("/<([^>]+?):(.+?)>/", "<$1_$2>", $rss);
			$rss = simplexml_load_string($rss,'SimpleXMLElement',LIBXML_NOCDATA);
			foreach($rss->entry as $value): ?>
				<iframe src="https://www.youtube.com/embed/<?php echo htmlspecialchars($value->yt_videoId, ENT_QUOTES, 'UTF-8') ?>?showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe>
			<?php break; endforeach; ?>

				<p>北海道すすきのを拠点とするソープランドの
					女性求人動画、およびお客様へのエンターテイメントとして
					日々、イカした動画を上げております。
				</p>
				<p>
					身内ネタ濃いめ！意味がわからないモヤリズム多め！
					はたしてyoutuberとして名を馳せる事が出来るのか！？
					規約的なものにひっかからないのか！？未来はどっちだ！！
				</p>
			</div>

			<div align="right" class="mt20">
				<a href="https://www.youtube.com/channel/UCPn1f_DoaLq9LrF9PO4JRiA" class="btn1" target="_blank">YouTubeへ</a>
			</div>
	</div>



	<div class="layout_2column_child layout_2column_main layout_3column">
			<h2 class="c_tt">RECRUIT<small>- 求人情報 -</small></h2>
		<a href="http://night-lover-job.info/" target="_blank"><img src="http://night-lover-job.info/wp-content/themes/twentyfifteen/img/main.png" alt="ソープランド専門求人サイト ナイトジョブ"></a>
		<a href="http://night-lover-job.info/salary/" target="_blank"><img src="http://night-lover-job.info/wp-content/themes/twentyfifteen/img/salary-plus-a.png" alt="ソープランド専門求人サイト お給料・待遇"></a>

	</div>

</div>
<?php endif; ?>



<?php endif; ?>


	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
