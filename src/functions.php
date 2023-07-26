<?php
add_action("admin_init", function () {
    remove_menu_page("edit.php");
    remove_menu_page("plugins.php");
    remove_menu_page("edit-comments.php");
});

add_action("after_setup_theme", function () {
    add_theme_support("post-thumbnails");
});

// display featured image in post list
add_filter("manage_posts_columns", function ($columns) {
    $columns["img"] = "Featured Image";
    return $columns;
});
add_filter(
    "manage_posts_custom_column",
    function ($column_name, $post_id) {
        if ($column_name == "img") {
            echo get_the_post_thumbnail($post_id, "thumbnail");
        }
        return $column_name;
    },
    10,
    2
);
