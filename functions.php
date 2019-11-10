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

add_action( 'wp_enqueue_scripts', 'loadScripts' );

// theme support
add_theme_support('wp-block-styles');   // Gutenberg
add_theme_support('post-thumbnails', array('post', 'movie'));
add_theme_support('custom-header', $customHeaderDefaults);
// add_theme_support('post-formats', array()); this will get fleshed out later








 ?>
