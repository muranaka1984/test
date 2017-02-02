<?php
/*
Template Name: ランキング
*/
get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/intro.js"></script>

<div class="wrapper">
	<div class="content">

<h1 class="c_tt">RANKING<small>- 人気ランキング -</small></h1>

	<div class="layout_2column">

		<div class="layout_2column_child layout_2column_main">

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
$Tokuchou = get_post_meta($post->ID,'タイプ');
echo'<a href="';
echo the_permalink();
echo '" class="top_ranking"><dl>';
for($i=0; $i<1; $i++){ // 1日分の予定を表示
	$time = strtotime('+' . $i . ' days');
	$key = 'date-' . date('m-d', $time);
	echo '<dt><img src="';
	if(post_custom('写真1')){
		$image = wp_get_attachment_image_src(get_post_meta($post->ID, '写真1', true), 'medium');
		echo $image[0];
	} else {
		echo bloginfo('template_directory')."/img/nophoto1.png";
	};
	echo '" alt="';
	echo $title = get_the_title();
	echo 'の写真"></dt><dd>';
 	if(get_post_meta($post->ID,'待機中',true) == '待機中'){
		echo ('<span class="icon_taiki">待機中！</span>');
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
	echo '';
}
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
echo'</div></dd></dl></a>';
?>
<?php endif;?>

<?php //if($loopcounter%5==0) {echo ('');} ?>

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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
