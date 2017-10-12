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


// Register widget area - this is an an example of widget usage (Can delete if not needed)
function site_widgets_init() {
    register_sidebar(array(
        'name'          => __( 'Widget Area', 'site' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'site' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));
}
add_action('widgets_init', 'site_widgets_init');


// Pagination for blog posts
function pagination_bar() {
    global $wp_query;
    
    $total_pages = $wp_query->max_num_pages;
    
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;'
        ));
    }
}


// Declare WooCommerce support
// NOTE - If not using woocommerce plugin, delete woocommerce code below
function woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');

?>