<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

	<h1 class="c_tt">BLOG<small>- スタッフブログ -</small></h1>

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