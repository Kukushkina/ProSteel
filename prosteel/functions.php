<?php
add_theme_support('post-thumbnails');//поддержка миниатюр
set_post_thumbnail_size(160, 120, true);

if (function_exists('add_theme_support')) { //меню
add_theme_support('menus');
}