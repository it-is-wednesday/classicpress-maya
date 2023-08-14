<?php
get_header();

require(dirname(__FILE__) . '/common.php');
?>

<div class="front-page">
    <img src="<?= get_theme_file_uri('assets/duck.webp') ?>">
    <div class="front-page-menu">
        <?php foreach (array_map(null, $menu_items, $star_colors) as $item) :
            $slug = $item[0];
            $color = $item[1];
        ?>
            <a href="<?= '/index.php/' . $slug ?>" class="front-page-menu-item">
                <img src="<?= get_theme_file_uri('assets/stars/' . $color . '.webp') ?>" class="front-page-menu-item-star" />
                <div class="front-page-menu-item-text"><?= $slug ?></div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>
