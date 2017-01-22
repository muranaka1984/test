<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="wrapper">
	<div class="content">

	<h1 class="c_tt">EVENT<small>- 割引・イベント -</small></h1>

	<div class="layout_2column">

		<div class="layout_2column_child layout_2column_main">
			<ul class="archive_ul">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<li>
					<a href="<?php echo the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
					<?php if(post_custom('イベントバナー')): ?>
					<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'イベントバナー', true),'full'); ?>
					<?php endif; ?>
					</a>
				</li>
			<?php endwhile; endif; ?>
			</ul>
		</div>

	<div class="layout_2column_child layout_2column_sub">
		<?php get_template_part( 'layout_2column_sub' ); ?>
	</div>
	

	</div><!--layout_2column-->



	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
