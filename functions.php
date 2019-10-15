<?php

//Load Styles
function load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js() {
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//Menus
register_nav_menus (
    
    array(
        'top-menu' => 'Top Menu',
        'footer-menu' => 'Footer Menu',
        'mobile-menu' => 'Mobile Menu',
    )

);

//Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

//Register Sidebars
function my_sidebars() {
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',


        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',


        )
    );
}
add_action('widgets_init', 'my_sidebars');


//Post Types
function journals_post_type() {

    $args = array(
        'labels' => array(
            'name' => 'Journals',
            'singular_name' => 'Journal',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor', 'thumbnail'),
        // 'rewrite' => array('slug' => 'the-journals')
    );

    register_post_type('journals', $args);
}
add_action('init', 'journals_post_type');


//Taxonomy
function my_first_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Fields of Study',
            'singular_name' => 'Field of Study',
        ),
        'public' => true,
        'hierarchical' => false,
    );

    register_taxonomy('fields-of-stydy', array('journals'), $args);
}
add_action('init', 'my_first_taxonomy');
