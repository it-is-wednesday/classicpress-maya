<!DOCTYPE html>
<html>

<head>
    <title>hi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:image" content="https://avigail.club/computernerd.webp">
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <?php
    wp_head();
    require(dirname(__FILE__) . '/common.php');
    ?>
</head>

<body>
    <div class="site-header">
        <a href="/" class="site-header-logo">
            <img src="<?= get_theme_file_uri('assets/logo.webp') ?>" />
        </a>
        <?php if (!is_front_page()): ?>
        <div class="site-header-stars">
            <?php foreach (array_map(null, $menu_items, $star_colors) as $item) :
                $slug = $item[0];
                $color = $item[1];
            ?>
                <a href="<?= '/index.php/' . $slug ?>" class="front-page-menu-item">
                    <img src="<?= get_theme_file_uri('assets/stars/' . $color . '.webp') ?>" class="site-header-stars-star" />
                    <div class="site-header-stars-text"><?= $slug ?></div>
                </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
