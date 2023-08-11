<?php
get_header();

$menu_items = ["art", "tattoos", "flashim", "photography"];
$star_colors = ["blue", "green", "red", "yellow"];
shuffle($star_colors)
?>

<div class="front-page">
    <img src="<?= get_theme_file_uri('assets/duck.webp') ?>">
    <div class="front-page-menu">
        <?php foreach (array_map(null, $menu_items, $star_colors) as $item) :
            $slug = $item[0];
            $count = $item[1];
        ?>
            <a href="<?= '/index.php/' . $slug ?>" class="front-page-menu-item">
                <img src="<?= get_theme_file_uri('assets/stars/' . $count . '.webp') ?>"
                     class="front-page-menu-item-star"/>
                <div class="front-page-menu-item-text"><?= ucfirst($slug) ?></div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>
