<?php
get_header();

$menu_items = ["אמנות", "קעקועים", "פלאשים"];
?>
<div class="front-page">
    <img src="<?= get_theme_file_uri('assets/duck.webp') ?>">
    <div class="front-page-menu">
        <?php foreach ($menu_items as $item) : ?>
            <a class="front-page-menu-item">
                <div class="front-page-menu-item-star">✮</div>
                <div class="front-page-menu-item-text"><?= $item ?></div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>
