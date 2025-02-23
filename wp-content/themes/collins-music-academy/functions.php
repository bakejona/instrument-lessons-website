<?php

function collins_music_academy_enqueue_styles()
{
    wp_enqueue_style('collins-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'collins_music_academy_enqueue_styles');
