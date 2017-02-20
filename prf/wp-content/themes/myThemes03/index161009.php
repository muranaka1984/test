<?php get_header(); ?>

  <div class="section_wrapper mainlayer">
    <h1>NEW</h1>

  <?php query_posts('orderby=date&showposts=1'); ?>
  <?php while(have_posts()): the_post();?>
  <?php 
  $arr = get_the_tags();
  foreach ( $arr as $tag ) {
  echo '<section class="portfolio_'.$tag->slug.'">'."\n";
  };?>
      <h1>
        <?php
        $cat = get_the_category();
        $cat_name = $cat[0]->cat_name;
        $cat_slug  = $cat[0]->category_nicename;
        $cat_link = get_category_link($cat[0]->cat_ID);
        ?>
        <a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
      </h1>
      <div class="bg">
        <p><a href="<?php the_permalink() ?>">
          <?php
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id, true);
          ?>
          <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
        </a></p>
      </div>
    </section>

  <?php endwhile; ?>
  <?php wp_reset_query(); ?>


  </div>


<?php get_footer(); ?>
