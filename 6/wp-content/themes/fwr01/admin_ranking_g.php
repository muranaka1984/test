<style type="text/css">
.analytics_loader{
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  background: rgba(225, 227, 225, 1);
  z-index: 1;
}
.analytics_loader img{
  position: absolute;
  top: 40px;
  left: 50%;
  margin-left:-25px; 
  margin-top:0; 
}

/* sortable */
body.dragging, body.dragging * {
  cursor: move !important;
}
.dragged {
  position: absolute;
  opacity: 0.6;
  z-index: 2000;
  background: rgba(255,255,255,0.8);
}

ul.block li{
  cursor: move;
  /*
  list-style: none;
  margin: 4px 4px 4px 4px;
  padding: 2px 4px 4px 4px;
  font-size: 12px;
  font-weight: bold;
   line-height: 1.4;
  word-spacing: 0.3em;
  border: 2px solid white;
  background-color: #7f8c8d;
  color: White;
  border-radius: 4px;
  -webkit-transition: border .25s linear, color .25s linear, background-color .25s linear;
        transition: border .25s linear, color .25s linear, background-color .25s linear;
  -webkit-font-smoothing: subpixel-antialiased;
  */
}

ul.block li.placeholder {
    position: relative;
}
ul.block li.placeholder:before {
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    margin-top: -8px;
    left: -8px;
    top: -1px;
    border: 8px solid transparent;
    border-left-color: red;
    border-right: none;
    z-index: 2000;
}

</style>

<div class="ranking_base">
<img src="/analytics/img/admin_logo_g.png" width="100">

<div class="complete">
<?php
  $cid = get_the_ID();
  if(isset($_POST['update'])) {
    echo "ランキングを更新しました";
  }
  else if(isset($_POST['reset'])) {
    echo "全てリセットしました";
  }
?>
</div>

<?php
$args = array(/* 配列に複数の引数を追加 */
  'post_type' => 'girls', /* 投稿タイプを指定 */
  'posts_per_page' => -1, /* 表示するページ数 */
//  'order' => 'ASC',
//  'meta_key'=>'ランキング',
//  'orderby'=>'meta_value',
); ?>
<?php query_posts( $args ); ?>

<form action="./admin.php?page=ranking_g" method="post">
<ul class="sort_list example block">
<?php if (have_posts()): while(have_posts()): the_post(); $loopcounter++; ?>

<?php
  $cid = get_the_ID();
  $nid = 'g_rank'.get_the_ID();
  $input_data = $_POST[$nid];
  if(isset($_POST['update'])) {
    update_post_meta($cid, 'ランキング', $input_data);
  }
  else if(isset($_POST['reset'])) {
    update_post_meta($cid, 'ランキング【ギラギラナイト】', '');
  }
?>
<li class="ranking_list sort_<?php echo post_custom('ランキング');?>" <?php if(post_custom('ランキング')): ?>id="<?php echo post_custom('ランキング');?>"<? else: ?>id="99"<? endif; ?>>
<p class="rank"><span class="number">
<?php if(post_custom('ランキング')): ?>
  <?php echo post_custom('ランキング');?> 
<? else: ?>
　
<? endif; ?>
</span>
<small>位</small>
</p>
<p class="name">
<?php echo get_the_title(); ?>
</p>

<p class="input"><input type="text" name="g_rank<?php echo get_the_ID(); ?>" class="g_rank<?php echo get_the_ID(); ?>" size="2" style="ime-mode:disabled;" value="<?php echo post_custom('ランキング'); ?>"><small>位</small></p>
</li>
<?php if($loopcounter%5==0) { echo ('<!--br class="cb"-->');} ?>
<?php endwhile; endif; ?>

</ul>
<div class="submit">
<input type="submit" name="update" value="反映">
<input type="submit" name="reset" value="リセット" class="reset">
</div>
</form>


<?php wp_reset_postdata(); wp_reset_query(); ?>

</div>



<div class="analytics_loader"><img src="<?php bloginfo('template_directory'); ?>/admin/preloader01.gif"></div>

<script>
(function($) {

  var h = $(window).height();

  $(function load() {
    $('.ranking_base').css('display','none');
    $('.analytics_loader').height(h).css('display','block');

    $(window).load(function () { //全ての読み込みが完了したら実行
      $('.analytics_loader').delay(600).fadeOut(300);
      $('.ranking_base').css('display', 'block');
    });

    $(function(){
      setTimeout('stopload()',10000);
    });
     
    function stopload(){
      $('.ranking_base').css('display','block');
      $('.analytics_loader').delay(600).fadeOut(300);
    }
  });

  $(function sort() {
    $('.sort_list').html(
      $('.sort_list > li').sort(function(b, a) {
        return parseInt($(b).attr('id'), 10) - parseInt($(a).attr('id'), 10);
      })
    );
  });

  $(function (){
    $("li.ranking_list").mouseleave(function () {
      var index = $("li.ranking_list").index(this);
      $(this).find("input").val(index + 1);
    });
  });


})(jQuery);
</script>

<script src="<?php bloginfo('template_directory'); ?>/admin/jquery-sortable.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
(function($) {
  $(function  () {
    $("ul.example").sortable();
  });
})(jQuery);    
</script>

