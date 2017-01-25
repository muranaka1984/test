<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

	<div class="layout_2column">

		<div class="layout_2column_child layout_2column_main post_style">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<h1><?php the_title(); ?></h1>

			<div><small><?php the_time('Y/m/d'); ?></small></div>
			<div><?php the_content(); ?></div>


			<?php endwhile; endif; ?>

			<div>
				<p><br></p>
				<a href="../" class="taiki_pop_tel_mail"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>一覧</a>
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