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

<h1 class="c_tt">GIRLS<small>- ガールズ -</small></h1>

<?php query_posts('post_type=girls&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
<?php if (have_posts()): while(have_posts()): the_post(); $loopcounter++; ?>
<?php
$Tokuchou = get_post_meta($post->ID,'タイプ');
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
echo'</dl>';
if(qtranxf_getLanguage() == 'ja'):
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
endif;
echo'</a>';
?>
<?php if($loopcounter%4==0) {
echo ('<div class="cast_list_br"><br></div>');} ?>

<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

<br class="cb">

<?php if(qtranxf_getLanguage() == 'ja'):?>
<div class="mt30" align="right">
	<h3 class="red">掲載されている女の子はごく一部です。</h4>
	他にも店頭で写真を出している女の子が多数いますので、お気軽に足をお運び下さい！！<br>
	札幌に観光で来られてすすきのが初めての方は、<a href="/access/">アクセスマップをご覧下さい。</a>
</div>
<?php endif; ?>


	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
