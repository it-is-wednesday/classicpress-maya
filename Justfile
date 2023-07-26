set dotenv-load

PHP_EXEC := if os() == "macos" { "$(brew --prefix php@8.0)/bin/php" } else { "php" }
CP_PATH := "ClassicPress-release"
CP_URL := "https://www.classicpress.net/latest.zip"
WP_LANG_URL := "https://translate.wordpress.org/projects/wp/dev/he/default/export-translations/"
CONTAINER_NAME := "classicpress-shared-db"
THEME_SYMLINK := CP_PATH + "/wp-content/themes/$THEME_ID"

# create the shared MariaDB instance if doesn't already exist
create-database:
    docker ps --filter name=classicpress-shared-db --quiet || \
    docker create \
        --name {{CONTAINER_NAME}}          \
        -e MARIADB_USER=cp                 \
        -e MARIADB_PASSWORD=hihihihi       \
        -e MARIADB_RANDOM_ROOT_PASSWORD=1  \
        -e MARIADB_DATABASE=classicpress   \
        -p "3306:3306"                     \
        mariadb

download-classicpress:
    wget {{CP_URL}} -O cp.zip
    unzip -o cp.zip
    -[[ -d {{CP_PATH}} ]] && rm -r {{CP_PATH}}
    mv ClassicPress-release-* {{CP_PATH}}
    cp wp-config.php {{CP_PATH}}/
    -[[ -L "{{THEME_SYMLINK}}" ]] && unlink "{{THEME_SYMLINK}}"
    ln -s "$(realpath src)" "{{THEME_SYMLINK}}"
    mkdir -p "{{CP_PATH}}/wp-content/languages"
    wget "{{WP_LANG_URL}}?format=po" -O "{{CP_PATH}}/wp-content/languages/wp-dev-he.po"
    wget "{{WP_LANG_URL}}?format=mo" -O "{{CP_PATH}}/wp-content/languages/wp-dev-he.mo"

watch:
    docker start {{CONTAINER_NAME}}
    cd {{CP_PATH}} && {{PHP_EXEC}} -S localhost:51690
