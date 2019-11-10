<?php

// enqueueing (what, whatta word)
function loadScripts(){
    wp_enqueue_style ('artShopTheme_bootstrap.min.css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', '4.3.1');
    wp_enqueue_style ('artShopTheme_master.css', get_template_directory_uri() . '/assets/css/master.css', '0.0.1');

    wp_enqueue_script('artShopTheme_jquery.min.js', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', '3.4.1', true);
    wp_enqueue_script('artShopTheme_popper.min.js', get_template_directory_uri() . '/node_modules/popper.js/dist/umd/popper.min.js', '1.16.0', true);
    wp_enqueue_script('artShopTheme_bootstrap.min.js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', '4.3.1', true);
}

// custom header options
$customHeaderDefaults = array(
	'default-image'          => get_template_directory_uri() . '/assets/img/headerDefault.jpg',
    'width'                  => 1280,
    'height'                 => 400,		// setting w & h allows cropping that preserves aspect ratio
);

// custom post types
function add_custom_post_types(){
    $promotionPostType_args = array(
        'labels' => array(
            'name' => 'Promotions',
            'singular_name' => 'Promotion',
            'add_new_item' => 'Add a New Promotion',
            'edit_item' => 'Edit Promotion'),   // and so on ...
        'description' => 'Manage special offers, promotions &c. here.',
        'hierarchical' => true,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => false,
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-art',
        'rewrite' => false,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'post-formats'
        )
    );

    register_post_type('promotion', $promotionPostType_args);
}

// add actions
add_action( 'wp_enqueue_scripts', 'loadScripts' );
add_action('init', 'add_custom_post_types');

// theme support
add_theme_support('wp-block-styles');   // Gutenberg
add_theme_support('post-thumbnails', array('post', 'movie'));
add_theme_support('custom-header', $customHeaderDefaults);
// add_theme_support('post-formats', array()); this will get fleshed out later








 ?>
