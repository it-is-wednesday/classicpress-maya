<?php
get_header();
$src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
?>
<div class="post-page">
    <?php the_post(); ?>
    <h1 class="post-page-post-title"><?= single_post_title() ?></h1>
    <?php the_content(); ?>
    <img class="pic-page-main-pic" src="<?= $src ?>" />

</div>
<?php get_footer(); ?>
