<?php
get_header();

query_posts([
  'post_type' => get_post_type(),
  'posts_per_page' => -1, // loads all posts
]);
?>

<div class="gallery">
  <?php while (have_posts()): ?>
    <?php the_post(); // just to advance the loop ?>
    <a href="<?= get_post_permalink() ?>">
      <img src="<?=wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]?>" />
    </a>
  <?php endwhile; ?>
</div>

<?php get_footer() ?>
