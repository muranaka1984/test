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



      <div class="new_face_head guide_reserve">
        <h2>ご予約は来店予定日の【3日前 AM8:30~】受付開始！</h2>
        <p>
          <span class="red">ご予約時間の30分前にお客様から、お店の方に確認の電話を頂きます。</span><br>
          <small>尚、指定した時間に確認のお電話がない場合、キャンセルと判断させて頂きますので、お忘れないようにして下さい。 </small>
        </p>
        <p><br></p>
        <h3>ご予約はこちら！</h3>
        <p class="tel">TEL <a href="tel:0112061162" class="int">011-206-1162</a></p>
        <p class="time">営業時間／9:00〜24:00</p>

        <p><br></p>
        <p><hr></p>
        <p><br></p>
        <div align="center">
          聴覚障害のある方のみEメールでのご予約を受け付けております。          
        </div>
        <p>
         <a href="/reservation/" class="taiki_pop_tel_mail">聴覚障害のある方のみ</a>
       </p> 
     </div>




    </div>
    <div class="layout_2column_child layout_2column_sub">
      <?php get_template_part( 'layout_2column_sub' ); ?>
    </div>
  </div><!--layout_2column-->



  </div>
</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
