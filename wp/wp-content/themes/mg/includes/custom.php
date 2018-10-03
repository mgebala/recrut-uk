<?php

/**
 * Files to include
 */

$customIncludes = array(
    /**
     * Meta Boxes
     */

    /**
     * Custom Post Types
     */
    'post-types/services.php',

    /**
     * Other Files
     */
    'enqueue.php',
    'media.php'
);

foreach ($customIncludes as $customInclude) {
    require(INC_DIR . $customInclude);
}


function mg_theme_setup()
{
    /**
     * Enqueue CSS
     */
    add_action( 'wp_enqueue_scripts', 'mg_front_css' );

    /**
     * Media
     */
    add_action('init', 'mg_default_image_sizes');
    add_action('init', 'mg_image_sizes');

    /**
     * Custom Menus
     */
    add_action('init', 'mg_register_menus');
}
add_action( 'after_setup_theme', 'mg_theme_setup' );
add_action( 'after_setup_theme', 'mg_custom_theme_setup' );

function mg_custom_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}

function mg_register_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'mg/menu'),
    ));
}