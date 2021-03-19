<?php

function load_stylesheets(){

  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');

  wp_register_style('icons', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.css', array(), false, 'all');
  wp_enqueue_style('icons');

  wp_register_style('sass', get_template_directory_uri() . '/css/pages/styles.css', array(), false, 'all');
  wp_enqueue_style('sass');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');
function include_jquery(){

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery3.60.min.js', '', 1, true);

}

function loadjs(){

  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');

}

add_action('wp_enqueue_scripts', 'loadjs');


add_action('wp_enqueue_scripts', 'include_jquery');

function header_js(){

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/header.js', '', 1, true);

}

add_action('wp_enqueue_scripts', 'header_js');


function search_js(){

    wp_deregister_script('search');
    wp_enqueue_script('search', get_template_directory_uri() . '/js/search.js', '', 1, true);

}

add_action('wp_enqueue_scripts', 'search_js');

add_theme_support('menus');

register_nav_menus(

  array(

    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )

);

add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


function cn_include_content($pid) {
  $contact = get_post($pid);
  $content = $contact->post_content;
  $content = apply_filters('the_content', $content);
  echo $content;
}


// show all featured posts
$featured_posts = new WP_Query(array(
    'category_name' => 'featured',
    'post_status' => 'publish',
    'posts_per_page' => 3,
));

// show all blog posts
$all_posts = new WP_Query(array(
    'category_name' => 'blog',
    'post_status' => 'publish',
    'posts_per_page' => 6,
));

// show radio/podcasts
$archives = new WP_Query(array(
    'category_name' => 'archives',
    'post_status' => 'publish',
    'posts_per_page' => '10',
));

$services = new WP_Query(array(
    'category_name' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => '6',
));



