<?php

function collins_music_academy_enqueue_styles()
{
    wp_enqueue_style('collins-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'collins_music_academy_enqueue_styles');

function collins_music_academy_register_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'collins-music-academy')
    ));
}
add_action('after_setup_theme', 'collins_music_academy_register_menus');
