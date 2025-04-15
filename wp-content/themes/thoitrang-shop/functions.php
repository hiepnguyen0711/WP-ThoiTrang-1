<?php

add_action('after_setup_theme', 'thoitrang_setup');

function thoitrang_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
}

function thoitrang_scripts()
{

    // Bootstrap 5 CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        '5.3.3'
    );

    // SwiperJS CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        '11.0.0'
    );

    // Bootstrap 5 JS (phụ thuộc vào Popper.js)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.3',
        true
    );

    // SwiperJS JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        '11.0.0',
        true
    );


    wp_enqueue_style('thoitrang-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'thoitrang_scripts');
