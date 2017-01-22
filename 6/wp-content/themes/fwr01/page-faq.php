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



<dl class="qanda">
<dt>予約は何時からとれますか？</dt>
<dd>
ご予約はご指名・フリー、共にお客様ご来店予定日の3日前のAM8:30～承っております。<br>
また、ご予約はお電話のみ受け付けております。<br></p>
<div class="onegai">
<p>・ご予約についてのお願い・</p>
<p>ご予約時間の30分前にお客様から、お店の方に確認の電話を頂くシステムになっております。</p></div>
</dd>
<dt>予約後の確認電話ってなんですか？ </dt>
<dd>
お客様のご予定に変更（キャンセル）はないか？<br>
また、コンパニオンの都合で欠勤、早退など無いかどうか？<br>
ご案内時間がずれたりしていないか？などをお伝えさせて頂いております。<br>
尚、指定した時間に確認のお電話がない場合、<br>
キャンセルと判断させて頂きますので、お忘れないようにして下さい。
</dd>
<dt>場所がわからないのですが・・・ </dt>
<dd>
お電話頂ければご誘導させて頂きます。<br>
また、札幌市中央区内でしたらお迎えにも上がりますので、お気軽にお電話で申しつけ下さい。<br>
勿論、送迎は無料です＾－＾　<a href="/access/">→お店へのアクセス</a>
</dd>
<dt>聴覚障害があるのですが、入店できますか？</dt>
<dd>
勿論、入店できます。<br>
聴覚障害がある方のみメールでの予約を受け付けておりますので、<br>
<a href="/reservation/">→こちらからご予約下さい。</a></p>
</dd>
<dt>キャンセルの場合はどうすればいいですか?</dt>
<dd>
なるべく早く、当店フロントに直接お電話を頂けますようお願い致します。
</dd>
<dt>写真で女の子は選べますか？</dt>
<dd>
その日出勤している写真の中から自分の気に入った女の子を選んでいただけます。 <br>
店内でお見せする写真は全て顔出ししておりますので、ご安心してお選び頂けると思います。<br>
写真の修正やモザイクは一切ございません。
</dd>
<dt>外国の方の利用は可能でしょうか?</dt>
<dd>
申し訳ございません。ご利用できません。
</dd>
<dt>カードは使えますか？</dt>
<dd>
各種クレジットカードに対応しております。
</dd>
<dt>領収書はでますか？</dt>
<dd>
もちろん領収書の発行はいたしております。
</dd>
<dt>フリーってなんですか？</dt>
<dd>
特定のコンパニオンを決めないでフロント側で女性をご案内致します。<br>
（当店は出勤人数の多い店ですので、フリーでも御安心してお遊び頂けます。）
</dd>
</dl>


    </div>
    <div class="layout_2column_child layout_2column_sub">
      <?php get_template_part( 'layout_2column_sub' ); ?>
    </div>
  </div><!--layout_2column-->



  </div>
</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
