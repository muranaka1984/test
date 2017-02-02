<div class="side_style">


	<a href="" class="cast_history">
		<small>
			あなたが最後に見た女の子
		</small>
		<p class="name"></p>
		<img src="<?php bloginfo('template_directory'); ?>/img/spacer.gif" class="cast_history_cast_photo">
		<p></p>
	</a>

	<script>
		$(function(){
	  // cast history
	  var reserved_name = ($.cookie( "reserved" ));
	  var cast_photo = ($.cookie( "cast_photo" ));
	  var cast_link = ($.cookie( "cast_link" ));
	  $(".cast_history .name").text(reserved_name);
	  $(".cast_history").attr('href', cast_link);
	  $(".cast_history_cast_photo").attr('src', cast_photo);
	});
</script>


<?php query_posts('post_type=post&posts_per_page=5&order=DESC'); ?>
<?php if(have_posts()): ?>
	<h3 class="c_tt">NEWS<small>- お知らせ -</small></h3>
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
		<div align="right" class="mt20"><a href="<?php echo site_url(); ?>/news/" class="btn1">お知らせ一覧</a></div>
	</div>
<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>



<?php query_posts('post_type=event&posts_per_page=5&order=DESC'); ?>
<?php if(have_posts()): ?>
	<h3 class="c_tt">EVENT<small>- イベント・割引 -</small></h3>
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
		<div align="right" class="mt20"><a href="<?php echo site_url(); ?>/event/" class="btn1">イベント一覧</a></div>
	</div>
<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>


	<h3 class="c_tt">GUIDE<small>- ガイド -</small></h3>
	<div class="news">
		<ul>
			<li>
				<a href="/reservation/">
				<p class="tt"><small>■</small>ご指名予約お申し込み</p>
				</a>
			</li>
			<li>
				<a href="/contact/">
				<p class="tt"><small>■</small>お問い合わせフォーム</p>
				</a>
			</li>
		</ul>
	</div>


<?php query_posts('post_type=blog&posts_per_page=5&order=DESC'); ?>
<?php if(have_posts()): ?>
	<h3 class="c_tt">BLOG<small>- スタッフブログ -</small></h3>
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
		<div align="right" class="mt20"><a href="<?php echo site_url(); ?>/blog/" class="btn1">もっと見る</a></div>
	</div>
<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>



</div>
