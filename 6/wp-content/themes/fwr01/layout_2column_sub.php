<div class="side_style">

	<a href="" class="cast_history">
		<small>
			<?php if(qtranxf_getLanguage() == 'ja'):?>
				あなたが最後に見た女の子
			<?php elseif(qtranxf_getLanguage() == 'en'):?>
				Your watch history
			<?php endif; ?>
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


<?php if(qtranxf_getLanguage() == 'ja'):?>

	<h3 class="c_tt">NEWS<small>- お知らせ -</small></h3>
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
		<div align="right" class="mt20"><a href="/giragiranight_news/" class="btn1">お知らせ一覧</a></div>
	</div>



	<h3 class="c_tt">EVENT<small>- イベント・割引 -</small></h3>
	<div class="news">
		<ul>
			<?php query_posts('post_type=event&posts_per_page=5&order=ASC'); ?>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<li>
					<a href="<?php echo the_permalink(); ?>">
						<small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p>
					</a>
				</li>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); wp_reset_query(); ?>
		</ul>
		<div align="right" class="mt20"><a href="/event/" class="btn1">イベント一覧</a></div>
	</div>


	<h3 class="c_tt">GUIDE<small>- ガイド -</small></h3>
	<div class="news">
		<ul>
			<li>
				<a href="/guide_reserve/">
				<small>■</small><p class="tt">ご予約について</p>
				</a>
			</li>
			<li>
				<a href="/faq/">
				<small>■</small><p class="tt">よくあるご質問</p>
				</a>
			</li>
			<li>
				<a href="/contact/">
				<small>■</small><p class="tt">お問い合わせフォーム</p>
				</a>
			</li>
		</ul>
	</div>



<?php endif; ?>


<ul class="pay">
	<li><img src="<?php bloginfo('template_directory'); ?>/img/visa.png" alt="visa"></li>
	<li><img src="<?php bloginfo('template_directory'); ?>/img/master.png" alt="matercard"></li>
	<li><img src="<?php bloginfo('template_directory'); ?>/img/jcb.png" alt="jcb"></li>
</ul>


<?php if(qtranxf_getLanguage() == 'ja'):?>

	<h3 class="c_tt">BLOG<small>- スタッフブログ -</small></h3>
	<div class="news">
		<ul>
			<?php query_posts('post_type=blog&posts_per_page=5&order=ASC'); ?>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<li>
					<a href="<?php echo the_permalink(); ?>">
						<small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p>
					</a>
				</li>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); wp_reset_query(); ?>
		</ul>
		<div align="right" class="mt20"><a href="/blog/" class="btn1">もっと見る</a></div>
	</div>

	<p class="mt20"><a href="http://night-lover-job.info/" target="_blank"><img src="http://night-lover-job.info/wp-content/themes/twentyfifteen/img/main.png" alt="ソープランド専門求人サイト ナイトジョブ"></a></p>

<?php endif; ?>



</div>
