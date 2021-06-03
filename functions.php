<?php
// STYLESHEETS
function load_stylesheets()
{
    // BOOTSTRAP
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    //CUSTOM
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');

};
add_action('wp_enqueue_scripts', 'load_stylesheets');

// VIEWPORT??
function add_viewport_meta_tag() {

    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';

};
add_action( 'wp_head', 'add_viewport_meta_tag' , '1' );


// JQUERY
function include_jquery()
{
    // De-register JQUERY first then enqueue custom jquery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery3.6.0.min.js', '', 1, true);

    add_action('wp_enqueue_scripts','jquery');

};
add_action('wp_enqueue_scripts', 'include_jquery');



// JAVASCRIPT
function load_js()
{
    // CUSTOM
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');

};
add_action('wp_enqueue_scripts', 'load_js');


//SWIPER ENQUEUE
function swiper_css()
{
    wp_enqueue_style('swiper','https://unpkg.com/swiper/swiper-bundle.min.css', array(), false);

};
add_action('wp_enqueue_scripts', 'swiper_css');

function swiper_magic() 
{
    wp_enqueue_script('swiper','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array ('jquery'), true); 
} 
add_action( 'wp_enqueue_scripts', 'swiper_magic' );


//Adding MENU support
add_theme_support('menus');
//Adding THUMBNALI support
add_theme_support('post-thumbnails');

//Register MENU location
register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme'),
        'footer-menu' => __('Footer Menu','theme'),
        'social' => esc_html__( 'Social Menu Location', 'theme' ),
    )
    );

// Add a widget
register_sidebar(

    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);

register_sidebar(

    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);


//Define Image sizes
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 700, 700, true);
add_image_size('blog-single', 950, 500, true);
add_image_size('banner', 1320, 550, true);

// Woocommerce basic usage
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );





?>