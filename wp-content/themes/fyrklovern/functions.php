<?php
add_action('wp_enqueue_scripts', 'fyrklovern_enqueue');

function fyrklovern_enqueue()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support('post-thumbnails');

register_nav_menus(array('main-menu-left' => 'Main menu left'));
register_nav_menus(array('main-menu-right' => 'Main menu right'));
register_nav_menus(array('footer-menu-right' => 'Footer menu right'));
register_nav_menus(array('footer-menu-left' => 'Footer menu left'));

// Iniziate acf blocks
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A block for fullwidth hero image'),
            'render_template'   => 'page-blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'format-image',
            'keywords'          => array( 'hero', 'heroimage' ),
        ));
        acf_register_block_type(array(
            'name'              => 'info_block',
            'title'             => __('Info block'),
            'description'       => __('A block for with heading and paragraph'),
            'render_template'   => 'page-blocks/info-block.php',
            'category'          => 'formatting',
            'icon'              => 'format-image',
            'keywords'          => array( 'info block' ),
        ));
    }
}