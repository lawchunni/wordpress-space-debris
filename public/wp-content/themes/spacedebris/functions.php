<?php 

register_nav_menus();

if(function_exists('add_theme_support')) {
    // add thumbnail image for pages
    add_theme_support('post-thumbnails');
}

if(!function_exists('sd_load_styles')) {
    function sd_load_styles() {
        wp_enqueue_style('sd', get_stylesheet_uri());
    }
}

add_action('wp_enqueue_scripts', 'sd_load_styles', 10);

if(!function_exists('sd_load_scripts')) {
    function sd_load_scripts() {
        wp_enqueue_script('sd', get_template_directory_uri().'/js/main.js', array('jquery'), false, true);
    }
}

add_action('wp_enqueue_scripts', 'sd_load_scripts');

if(!function_exists('sd_featured_pages')) {
    function sd_featured_pages() {
        $pages = get_pages([
            'numberposts' => 3,
            'meta_key' => 'featured'
        ]);
        return $pages;
    }
}
