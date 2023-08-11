<?php
get_header();

$menu_items = ["Art", "Tattoos", "Flashim", "Photogs"];
$star_colors = ["blue", "green", "red", "yellow"];
shuffle($star_colors)
?>

<div class="front-page">
    <img src="<?= get_theme_file_uri('assets/duck.webp') ?>">
    <div class="front-page-menu">
        <?php foreach (array_map(null, $menu_items, $star_colors) as $item) :
            $text = $item[0];
            $count = $item[1];
        ?>
            <a class="front-page-menu-item">
                <img src="<?= get_theme_file_uri('assets/stars/' . $count . '.webp') ?>" class="front-page-menu-item-star"/>
                <div class="front-page-menu-item-text"><?= $text ?></div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>
