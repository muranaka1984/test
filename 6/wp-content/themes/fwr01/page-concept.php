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
	<div class="content kitamama">


<img src="<?php bloginfo('template_directory'); ?>/img/concept_head.png" alt="当店のコンセプトはキャスト全員着たままプレイ！">
<img src="<?php bloginfo('template_directory'); ?>/img/concept_body.png" alt="着たままプレイとは、コスチュームを着たままサービスを受ける事のできる当店のオプションサービスです。完全なハダカよりも妄想と欲情をそそる、少し変態チックな大人の遊びです。">
<img src="<?php bloginfo('template_directory'); ?>/img/concept_foot.png" alt="ご予約はご来店予定日のAM8:30～受付中「着たままプレイで」とお申し付け下さい！011-206-1162 受付時間8:30～24:00 / 営業時間9:00～24:00着たままプレイ：オプション￥1,000～">


<div align="center" class="mt30"><a href="/girls/"><img alt="着たままプレイの相手を選ぶ" src="<?php bloginfo('template_directory'); ?>/img/concept_btn.png"></a></div>

  </div>
</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>
