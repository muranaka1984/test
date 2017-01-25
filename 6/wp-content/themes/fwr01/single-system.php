<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

	<h1 class="c_tt">
		SYSTEM
		<small>- システム -</small>
	</h1>

	<div class="layout_2column">

		<div class="layout_2column_child layout_2column_main">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>

				<h2 class="sub_tt">
					コース
				</h2><br>

				<table>
					<?php if(post_custom('コースA時間')): ?>
						<tr>
							<th><span class="int"><?php echo post_custom('コースA時間'); ?></span>
							<?php if(qtranxf_getLanguage() == 'ja'):?>分<?php endif; ?>
							<?php if(qtranxf_getLanguage() == 'en'):?>min<?php endif; ?></th>
			        <td><?php if(qtranxf_getLanguage() == 'en'):?>￥<?php endif; ?>
			        <span class="int">
			        <?php if(qtranxf_getLanguage() == 'ja'):?>
			        <?php 
			        		$na = post_custom('コースA金額');
									$nna = number_format($na);
									echo $nna;
			         ?>
			         </span>円
			       	<?php endif; ?>
			        <?php if(qtranxf_getLanguage() == 'en'):?>
								26,000</span><br>
								<small>if the payment feewill be plus in the card.</small><br>
								￥
								<span class="int">29,000</span>
							<?php endif; ?>

							<?php if(post_custom('コースA補足')): ?>
								<hr>
								<?php echo nl2br(get_post_meta($post->ID, 'コースA補足', true)); ?>
							<?php endif; ?>
							</td>
						</tr>
					<?php endif; ?>

					<?php if(post_custom('コースB時間')): ?>
						<tr>
							<th><span class="int"><?php echo post_custom('コースB時間'); ?></span>
							<?php if(qtranxf_getLanguage() == 'ja'):?>分<?php endif; ?>
							<?php if(qtranxf_getLanguage() == 'en'):?>min<?php endif; ?></th>
			        <td><?php if(qtranxf_getLanguage() == 'en'):?>￥<?php endif; ?>
			        <span class="int">
			        <?php if(qtranxf_getLanguage() == 'ja'):?>
			        <?php 
			        		$na = post_custom('コースB金額');
									$nna = number_format($na);
									echo $nna;
			         ?>
			         </span>円
			       	<?php endif; ?>
			        <?php if(qtranxf_getLanguage() == 'en'):?>
								32,000</span><br>
								<small>if the payment feewill be plus in the card.</small><br>
								￥
								<span class="int">36,000</span>
							<?php endif; ?>

							<?php if(post_custom('コースB補足')): ?>
								<hr>
								<?php echo nl2br(get_post_meta($post->ID, 'コースB補足', true)); ?>
							<?php endif; ?>
			         </td>
						</tr>
					<?php endif; ?>

					<?php if(post_custom('コースC時間')): ?>
						<tr>
							<th><span class="int"><?php echo post_custom('コースC時間'); ?></span>
							<?php if(qtranxf_getLanguage() == 'ja'):?>分<?php endif; ?>
							<?php if(qtranxf_getLanguage() == 'en'):?>min<?php endif; ?></th>
			        <td><?php if(qtranxf_getLanguage() == 'en'):?>￥<?php endif; ?>
			        <span class="int">
			        <?php if(qtranxf_getLanguage() == 'ja'):?>
			        <?php 
			        		$na = post_custom('コースC金額');
									$nna = number_format($na);
									echo $nna;
			         ?>
			         </span>円
			       	<?php endif; ?>
			        <?php if(qtranxf_getLanguage() == 'en'):?>
								38,000</span><br>
								<small>if the payment feewill be plus in the card.</small><br>
								￥
								<span class="int">41,000</span>
							<?php endif; ?>

							<?php if(post_custom('コースC補足')): ?>
								<hr>
								<?php echo nl2br(get_post_meta($post->ID, 'コースC補足', true)); ?>
							<?php endif; ?>
			         </td>
						</tr>
					<?php endif; ?>

					<?php if(post_custom('コースD時間')): ?>
						<tr>
							<th><span class="int"><?php echo post_custom('コースD時間'); ?></span>
							<?php if(qtranxf_getLanguage() == 'ja'):?>分<?php endif; ?>
							<?php if(qtranxf_getLanguage() == 'en'):?>min<?php endif; ?></th>
			        <td><?php if(qtranxf_getLanguage() == 'en'):?>￥<?php endif; ?>
			        <span class="int"><?php 
			        		$na = post_custom('コースD金額');
									$nna = number_format($na);
									echo $nna;
			         ?></span>
			         <?php if(qtranxf_getLanguage() == 'en'):?>〜<?php endif; ?>
			         <?php if(qtranxf_getLanguage() == 'ja'):?>円<?php endif; ?>
							<?php if(post_custom('コースD補足')): ?>
								<hr>
								<?php echo nl2br(get_post_meta($post->ID, 'コースD補足', true)); ?>
							<?php endif; ?>
			         </td>
						</tr>
					<?php endif; ?>


					<?php if(post_custom('コースE時間')): ?>
						<tr>
							<th><span class="int"><?php echo post_custom('コースE時間'); ?></span>
							<?php if(qtranxf_getLanguage() == 'ja'):?>分<?php endif; ?>
							<?php if(qtranxf_getLanguage() == 'en'):?>min<?php endif; ?></th>
			        <td><?php if(qtranxf_getLanguage() == 'en'):?>￥<?php endif; ?>
			        <span class="int"><?php 
			        		$na = post_custom('コースE金額');
									$nna = number_format($na);
									echo $nna;
			         ?></span>
			         <?php if(qtranxf_getLanguage() == 'en'):?>〜<?php endif; ?>
			         <?php if(qtranxf_getLanguage() == 'ja'):?>円<?php endif; ?>
							<?php if(post_custom('コースE補足')): ?>
								<hr>
								<?php echo nl2br(get_post_meta($post->ID, 'コースE補足', true)); ?>								
							<?php endif; ?>
			         </td>
						</tr>
					<?php endif; ?>

				</table>



				<?php if(post_custom('延長時間')): ?>
					<h2 class="sub_tt">延長</h2><br>

				<table>
					<tr>
						<th><span class="int"><?php echo post_custom('延長時間'); ?></span>分</th>
		        <td><span class="int"><?php 
		        		$na = post_custom('延長料金');
								$nna = number_format($na);
								echo $nna;
		         ?></span>円
						<?php if(post_custom('延長補足')): ?>
							<hr>
							<?php echo nl2br(get_post_meta($post->ID, '延長補足', true)); ?>								
						<?php endif; ?>
		         </td>
					</tr>
				</table>
				<?php endif; ?>


				<?php if(post_custom('指名料金')): ?>
					<h2 class="sub_tt">指名</h2><br>
				<table>
					<tr>
						<th>指名料金</th>
		        <td><span class="int"><?php 
		        		$na = post_custom('指名料金');
								$nna = number_format($na);
								echo $nna;
		         ?></span>円
						<?php if(post_custom('指名補足')): ?>
							<hr>
							<?php echo nl2br(get_post_meta($post->ID, '指名補足', true)); ?>	
						<?php endif; ?>
		         </td>
					</tr>
				</table>
				<?php endif; ?>



				<?php if(post_custom('オプションA')): ?>
				<h2 class="sub_tt">オプション</h2><br>
				<table>
					<tr>
						<th><?php echo post_custom('オプションA'); ?></th>
		        <td><span class="int"><?php 
		        		$na = post_custom('オプションA金額');
								$nna = number_format($na);
								echo $nna;
		         ?></span>円
		         </td>
					</tr>

					<?php if(post_custom('オプションB')): ?>
						<tr>
						<th><?php echo post_custom('オプションB'); ?></th>
		        <td><span class="int"><?php 
		        		$na = post_custom('オプションB金額');
								$nna = number_format($na);
								echo $nna;
		         ?></span>円
		         </td>
						</tr>
					<?php endif; ?>

					<?php if(post_custom('オプションC')): ?>
						<tr>
						<th><?php echo post_custom('オプションC'); ?></th>
		        <td><span class="int"><?php 
		        		$na = post_custom('オプションC金額');
								$nna = number_format($na);
								echo $nna;
		         ?></span>円
		         </td>
						</tr>
					<?php endif; ?>


				</table>
				<?php endif; ?>

				<?php if(post_custom('オプション補足')): ?>
					<hr>
					<?php echo nl2br(get_post_meta($post->ID, 'オプション補足', true)); ?>	
				<?php endif; ?>



				<h2 class="sub_tt">その他</h2><br>

				<table>
					<?php if(post_custom('クレジットカード')): ?>
						<tr>
							<th nowrap="nowrap">クレジットカード</th>
			        <td><?php echo post_custom('クレジットカード'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if(post_custom('領収書')): ?>
						<tr>
							<th>領収書</th>
			        <td><?php echo post_custom('領収書'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if(post_custom('送迎')): ?>
						<tr>
							<th>送迎</th>
			        <td><?php echo post_custom('送迎'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if(post_custom('ご予約')): ?>
						<tr>
							<th>ご予約</th>
			        <td><?php echo post_custom('ご予約'); ?>
			        	<?php if(post_custom('ご予約詳細')): ?>
			        		<a href="<?php echo post_custom('ご予約詳細'); ?>">詳細はこちら</a>
								<?php endif; ?>
			        </td>
						</tr>
					<?php endif; ?>
					<?php if(post_custom('イベント・割引')): ?>
						<tr>
							<th>イベント・割引</th>
			        <td><?php echo post_custom('イベント・割引'); ?>
			        	<?php if(post_custom('イベント・割引詳細')): ?>
			        		<a href="<?php echo post_custom('イベント・割引詳細'); ?>">詳細はこちら</a>
								<?php endif; ?>
			        </td>
						</tr>
					<?php endif; ?>
					<?php if(post_custom('注意事項・ご利用規約')): ?>
						<tr>
			        <td colspan="2">
							<?php echo nl2br(get_post_meta($post->ID, '注意事項・ご利用規約', true)); ?>	
			        </td>
						</tr>
					<?php endif; ?>


				</table>



			<?php endwhile; endif; ?>
		</div>

	<div class="layout_2column_child layout_2column_sub">
		<?php get_template_part( 'layout_2column_sub' ); ?>
	</div>
	

	</div><!--layout_2column-->



	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
