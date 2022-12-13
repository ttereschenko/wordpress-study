<?php

function add_stylesheet()
{
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
    );

    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',
    );
}

add_action('wp_enqueue_scripts', 'add_stylesheet');

add_theme_support('post_thumbnails');

register_nav_menus(['top-menu' => 'Main Menu']);

function add_nav_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_css_class', 'add_nav_class');

function add_nav_link_class($atts)
{
    $atts['class'] = 'nav-link ps-0';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_nav_link_class');

if (function_exists('register_sidebar')) {
    register_sidebar([
        'name' => 'main-sidebar',
        'before_widget' => '<div class="my-3 widget">',
        'after_widget' => '</div>',
        'before_sidebar' => '<div class="col-4 p-3 bg-light">',
        'after_sidebar' => '</div>',
    ]);
}