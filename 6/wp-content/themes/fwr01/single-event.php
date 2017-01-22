<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="wrapper">
	<div class="content">

	<div class="layout_2column">

		<div class="layout_2column_child layout_2column_main post_style">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<?php if(post_custom('イベントバナー')): ?>
			<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'イベントバナー', true),'full'); ?>
			<?php endif; ?>

			<div><?php the_content(); ?></div>

			<?php endwhile; endif; ?>

			<div>
				<p><br></p>
				<a href="/event/" class="taiki_pop_tel_mail">イベント・割引一覧</a>
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
