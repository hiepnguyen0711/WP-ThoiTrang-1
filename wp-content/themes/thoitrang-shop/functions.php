<?php 

add_action('after_setup_theme', 'thoitrang_setup');

function thoitrang_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
}

function thoitrang_scripts() {
    wp_enqueue_style('thoitrang-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'thoitrang_scripts');
?>