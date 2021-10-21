<?php

// Enqueuing
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific.css', [], 1, 'all');
    wp_enqueue_style('magnific');

}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('magnific', get_template_directory_uri() . '/js/magnific.js', ['jquery'], 1, true);
    wp_enqueue_script('magnific');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', ['jquery'], 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');


// create custom post types
function my_first_post_type() 
{

    $args = array(

        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        // 'hierarchical' => false, // acts like a post
        'hierarchical' => true, // acts like a page
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-car',
        'supports' => array('title', 'editor', 'thumbnail'),
        // 'rewrite' => array('slug' => 'my-cars'),

    );

    register_post_type('cars', $args);

}
add_action('init', 'my_first_post_type');

// create taxonomy - more specific details for each custom post
function my_first_taxonomy()
{
    $args = array(

        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'public' => true,
        'hierarchical' => true, // will act like a category
        // 'hierarchical' => false, // will act like a tag
    );

    register_taxonomy('brands', array('cars'), $args);
}
add_action('init', 'my_first_taxonomy');



function team_members_post_type() 
{

    $args = array(

        'labels' => array(
            'name' => 'Team Members',
            'singular_name' => 'Team Member',
        ),
        // 'hierarchical' => false, // acts like a post
        'hierarchical' => true, // acts like a page
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'supports' => array('title', 'editor', 'thumbnail'),

    );

    register_post_type('team', $args);

}
add_action('init', 'team_members_post_type');


function locations_post_type() 
{

    $args = array(

        'labels' => array(
            'name' => 'Locations',
            'singular_name' => 'Location',
        ),
        // 'hierarchical' => false, // acts like a post
        'hierarchical' => true, // acts like a page
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-location',
        'supports' => array('title', 'editor', 'thumbnail'),

    );

    register_post_type('locations', $args);

}
add_action('init', 'locations_post_type');




// Nav Menus
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'theme' ),
    'footer-menu' => __( 'Footer Menu', 'theme' ),
) );

// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Image Sizes
add_image_size('small', 600, 600, false);
add_image_size('custom', 1200, 1200, false);

add_filter( 'https_ssl_verify', '__return_false' );

