<?php
/*
Template Name: script
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area mainlayer">

<?php
$page = get_post( get_the_ID() );
// 現在表示しているページの投稿IDから投稿情報を取得

$slug = $page->post_name;
// 投稿のスラッグを取得
?>
    <h1 class="page_slug" data-chaffle="en"><?php echo $slug; ?></h1>
    <script>
      var elements = document.querySelectorAll('[data-chaffle]');
      Array.prototype.forEach.call(elements, function (el) {
      var chaffle = new Chaffle(el, { /* options */ });
      chaffle.init();
    });
    </script>
    
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
		get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

			// End of the loop.
		endwhile;
		?>


		<section>
			<h1>CoffeeScript</h1>
			<ul class="script_list">
				<?php
				if ($dir = opendir("/var/www/html/coffeescript")) {
					while (($file = readdir($dir)) !== false) {
						$filereplace =  str_replace("_", " ", $file);
						$filetitle = ucfirst($filereplace);
						if ($file != "." && $file != "..") {
							echo "<li><a href=\"/coffeescript/$file\" target=\"_brank\">$filetitle</li></a>";
						}
					} 
					closedir($dir);
				}
				?>
			</ul>
		</section>



		<section>
			<h1>CSS</h1>
			<ul class="script_list">
				<?php
				if ($dir = opendir("/var/www/html/css")) {
					while (($file = readdir($dir)) !== false) {
						$filereplace =  str_replace("_", " ", $file);
						$filetitle = ucfirst($filereplace);
						if ($file != "." && $file != "..") {
							echo "<li><a href=\"/css/$file\" target=\"_brank\">$filetitle</li></a>";
						}
					} 
					closedir($dir);
				}
				?>
			</ul>
		</section>



	</main><!-- .site-main -->


</div><!-- .content-area -->

<?php get_footer(); ?>
