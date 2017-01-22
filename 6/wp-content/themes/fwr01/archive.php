<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
	$cat_slug_str = strtoupper($cat_slug);
?>


<?php if(in_category(1)) : ?>
	<h1 class="c_tt">NEWS<small>- お知らせ -</small></h1>
<?php else: ?>
	<h1 class="c_tt"><?php echo $cat_slug_str; ?><small>- <?php echo $cat_name; ?> -</small></h1>
<?php endif; ?>


	<div class="layout_2column">

		<div class="layout_2column_child layout_2column_main">
			<div class="news">
				<ul>
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
						<li>
							<a href="<?php echo the_permalink(); ?>">
							<small><?php the_time('Y/m/d'); ?></small><p class="tt"><?php the_title(); ?></p>
							</a>
						</li>
					<?php endwhile; ?>
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
					<?php endif; ?>
				</ul>
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