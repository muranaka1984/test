<?php
/*
Template Name: スケジュール
*/
get_header(); ?>

<div class="wrapper">
  <div class="content">

    <h1 class="c_tt">SCHEDULE<small>- 週間スケジュール -</small></h1>
    <div class="schedule">

      <?php query_posts('post_type=girls&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
      <?php if (have_posts()):while(have_posts()):the_post(); ?>


<?php // モバイル判定
if ( is_mobile() ) : ?>
<?php
echo'<table class="weeklist_cast"><tr><td class="thumb">';
echo '<a href="';
echo the_permalink();
echo '" class="cast_todayschedule"><dl><dt><img src="';
    if(get_post_meta($post->ID,'写真1',true)):
    $image = wp_get_attachment_image_src(get_post_meta($post->ID, '写真1', true), 'thumbnail');
    echo $image[0];
    else:
    echo bloginfo('template_directory')."/img/nophoto1_thumbnail.png";
    endif;
echo '" alt="';
echo $title = get_the_title();
echo '"></dt><dd>';
echo $title = get_the_title();
echo '</dd></dl></a></td>';
  for($i=0; $i<7; $i++){ // 1日分の予定を表示
    $time = strtotime('+' . $i . ' days');
    $weekday = array( '日', '月', '火', '水', '木', '金', '土' );
    $key = 'date-' . date('m-d', $time);
    echo '<td class="';
    echo date('l', $time);
    if (get_post_meta($post->ID, $key, true)){
      echo ' active';
    };
    echo '">';
    echo '<p class="day">';
    echo date('n/j', $time);
    echo '（'.$weekday[date('w',$time)] .')</p>';
    echo '<p class="time">'. get_post_meta($post->ID, $key, true) .'</p></td>';
  }
  echo'</tr></table>';
  ?>

<? else: ?>

<?php
echo'<div class="weeklist_base"><table class="weeklist"><tr><th class="thumb">　</th>';
  for($i=0; $i<7; $i++){ // 1日分の予定を表示
    $time = strtotime('+' . $i . ' days');
    $weekday = array( '日', '月', '火', '水', '木', '金', '土' );
    $key = 'date-' . date('m-d', $time);
    echo '<th class="';
    echo date('l', $time);
    if (get_post_meta($post->ID, $key, true)){
      echo ' active';
    };
    echo '"><p class="day">';
    echo date('n/j', $time);
    echo '（'.$weekday[date('w',$time)] .')</p>';
    echo '</th>';
  };
  echo '</tr></table></div>';
  echo'<table class="weeklist_cast"><tr><td class="thumb">';
  echo '<a href="';
  echo the_permalink();
  echo '" class="cast_todayschedule"><dl><dt><img src="';
    if(get_post_meta($post->ID,'写真1',true)):
    $image = wp_get_attachment_image_src(get_post_meta($post->ID, '写真1', true), 'thumbnail');
    echo $image[0];
    else:
    echo bloginfo('template_directory')."/img/nophoto1_thumbnail.png";
    endif;
  echo '" alt="';
  echo $title = get_the_title();
  echo '"></dt><dd>';
  echo $title = get_the_title();
  echo '</dd></dl></a></td>';
  for($i=0; $i<7; $i++){ // 1日分の予定を表示
    $time = strtotime('+' . $i . ' days');
    $key = 'date-' . date('m-d', $time);
    echo '<td class="';
    echo date('l', $time);
    if (get_post_meta($post->ID, $key, true)){
      echo ' active';
    };
    echo '">';
    echo '<p class="time">'. get_post_meta($post->ID, $key, true) .'</p></td>';
  }
  echo'</tr></table>';
  ?>

<?php endif; ?>

<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

</div>

</div>
</div>


<?php // モバイル判定
if ( !is_mobile() ) : ?>
<script>
  $(function(){
    var ww = $('.schedule').width();
//    console.log(ww);
    $(".weeklist_base").css({
      "width": ww + "px",
    });
  // schedule
  $(window).scroll(function () {
    var sc = $('.schedule').offset().top;
    var s_scroll = $(this).scrollTop();
//    console.log(s_scroll);
  if(s_scroll >= sc){
    $(".weeklist_base").css({
      "position":"fixed",
      "top":"0",
      "left":"50%",
      "z-index":"100",
      "margin-left":"-" + (ww / 2) + "px",
    });
/*      $(".schedule table:nth-child(2)").css({
        "margin-top":"49px",
        "transition":"all 0.2s ease",
      });*/
    } else {
      $(".weeklist_base").css({
        "position":"static",
        "margin-left":"auto",
        "left":"0",
      });

    }
  });

});
</script>

<?php endif; ?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
