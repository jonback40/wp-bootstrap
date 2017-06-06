<?php

// Enable and register menus in admin area
add_theme_support('menus');
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'primary' => 'Primary Navigation'
        )
    );
}


// Enable blog post thumbnails/featured and set thumbnail size
add_theme_support('post-thumbnails');
set_post_thumbnail_size(940, 400);


// Load in stylesheet
function css_styles_enqueue() {
    wp_enqueue_style('themestyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'css_styles_enqueue');


// Load in scripts
function js_scripts_enqueue() {
    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrap-js', get_template_directory_uri(). '/js/bootstrap.js', array('jquery'), '3.3.7', true);
    wp_enqueue_script('bootstrap-js');
    
    wp_register_script('common-js', get_template_directory_uri(). '/js/common.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('common-js');
}
add_action('wp_enqueue_scripts', 'js_scripts_enqueue');


// Remove 52px top margin from html,body
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


// Move the comment body field to the bottom of the comments form
function move_comment_field_to_bottom($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    
    return $fields;
}
add_filter('comment_form_fields', 'move_comment_field_to_bottom');

?>
