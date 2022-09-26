<?php
add_action('wp_enqueue_scripts', 'fyrklovern_enqueue');

function fyrklovern_enqueue()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support('post-thumbnails');

register_nav_menus(array('main-menu-left' => 'Main menu left'));
register_nav_menus(array('main-menu-right' => 'Main menu right'));