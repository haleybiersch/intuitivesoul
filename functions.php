<?php
// this loads the style sheets from /css folder
// reference links https://developer.wordpress.org/reference/functions/wp_register_style/
// & https://developer.wordpress.org/reference/functions/wp_register_script/

function load_styles(){

    // load BS styles
    wp_register_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapcss');

    // load FA icons **** NOTE SPELLING MISTAKE IN FOLDER NAME ******
    wp_register_style('faicons', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.css', array(), false, 'all');
    wp_enqueue_style('faicons');

    wp_register_style('sass', get_template_directory_uri() . '/css/pages/styles.css', array(), false, 'all');
    wp_enqueue_style('sass');

    // root styles, loaded last to override any BS rules
    wp_register_style('rootcss', get_template_directory_uri() . '/css/styles.css', array(), false, 'all');
    wp_enqueue_style('rootcss');

}

add_action('wp_enqueue_scripts', 'load_styles');

function load_js(){

    // unload any jquery previously loaded
    wp_deregister_script('jquery');

    // load the bootstrap JS
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true);
    wp_enqueue_script('jquery');

    // load the JQuery
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', '', 1, true);
    wp_enqueue_script('bootstrapjs');

    // header code
    wp_enqueue_script('headerjs', get_template_directory_uri() . '/js/header.js', '', 1, true);
    wp_enqueue_script('headerjs');

    // search code
    wp_enqueue_script('searchjs', get_template_directory_uri() . '/js/search.js', '', 1, true);
    wp_enqueue_script('searchjs');

    // custom jquery/js code
   // wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
   // wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_js');

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
$featured_blogs = new WP_Query(array(
    'category_name' => 'featured blogs',
    'post_status' => 'publish',
    'posts_per_page' => 3,
));

$featured_services = new WP_Query(array(
    'category_name' => 'featured services',
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

$test = new WP_Query(array(
    'category_name' => 'testimonials',
    'post_status' => 'publish',
    'posts_per_page' => '6',
));

//  Custom pagination function

function cq_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    if(1 != $pages)
    {
        echo "<div aria-label='Page navigation' class='pagination-nav'> <ul class='pagination'>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='page-item'><a class=\"page-link\" href='".get_pagenum_link(1)."'>&laquo;</a></li>";
        if($paged > 1 && $showitems < $pages) echo "<li class='page-item'><a class=\"page-link\" href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class=\"page-link\" href=\"".get_pagenum_link($paged + 1)."\">&rsaquo; </a></li>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class=\"page-link\" href='".get_pagenum_link($pages)."'> &raquo;</a></li> ";
        echo "</ul><p>Page ".$paged." of ".$pages."</p></div>\n";
    }
}
