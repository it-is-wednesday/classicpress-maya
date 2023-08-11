<?php
get_header();

query_posts([
  'post_type' => get_post_type(),
  'posts_per_page' => -1, // loads all posts
]);

$intro_posts = [
  "flashim" => 76,
  "photography" => 87,
  "tattoos" => 89,
  "art" => 91,
];
?>

<div class="gallery">
  <div>
    <?= get_post($intro_posts[get_post_type()])->post_content ?>
  </div>
  <?php while (have_posts()): ?>
    <?php the_post(); // just to advance the loop ?>
    <img src="<?=wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]?>" />
  <?php endwhile; ?>
</div>

<?php get_footer() ?>
