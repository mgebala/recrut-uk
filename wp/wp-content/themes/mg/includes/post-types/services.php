<?php

function mg_service_post_type_setup(){
    add_action( 'init', 'mg_service_post_type' );
}

add_action( 'after_setup_theme', 'mg_service_post_type_setup', 11 );

function mg_service_post_type() {

    $aLabels = array(
        'name'                  => _x( 'Service', 'Post Type General Name', 'mg/service' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'mg/service' ),
        'menu_name'             => __( 'Services', 'mg/service' ),
        'parent_item_colon'     => __( 'Parent:', 'mg/service' ),
        'all_items'             => __( 'All services', 'mg/service' ),
        'view_item'             => __( 'View service', 'mg/service' ),
        'add_new_item'          => __( 'Add service', 'mg/service' ),
        'add_new'               => __( 'Add service', 'mg/service' ),
        'edit_item'             => __( 'Edit', 'mg/service' ),
        'update_item'           => __( 'Update service', 'mg/service' ),
        'search_items'          => __( 'Search', 'mg/service' ),
        'not_found'             => __( 'Not found.', 'mg/service' ),
        'not_found_in_trash'    => __( 'Not found in trash.', 'mg/service' ),
    );

    $aArguments = array(
        'label'                 => __( 'Service', 'mg/service' ),
        'description'           => '',
        'labels'                => $aLabels,
        'public'                => true,
        'publicly_queryable'    => false,
        'exclude_from_search'   => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'supports'              => array(
            'title',
            'thumbnail',
        ),
        'taxonomies'            => array(''),
        'has_archive'           => true,
        'can_export'            => true
    );

    register_post_type( 'service', $aArguments );
}