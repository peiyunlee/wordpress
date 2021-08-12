<?php

function portfolio_register_styles()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/style.css', array('portfolio-normalize'), $version, 'all');
    wp_enqueue_style('portfolio-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '8.0.1', 'all');
}

add_action('wp_enqueue_scripts', 'portfolio_register_styles');

function portfolio_register_scripts()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('portfolio-js', get_template_directory_uri() . '/assets/js/index.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'portfolio_register_scripts');
