<?php get_header(); ?>
<div class="post-page">
    <?php the_post(); ?>
    <h1 class="post-page-post-title"><?= single_post_title() ?></h1>
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
