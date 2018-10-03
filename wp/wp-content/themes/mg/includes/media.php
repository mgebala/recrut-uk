<?php

function mg_default_image_sizes() {
    /**
     * Thumbnail Size
     */
    if ( get_option( 'thumbnail_size_w' ) != '150' ) {
        update_option( 'thumbnail_size_w', '150' );
    }

    if ( get_option( 'thumbnail_size_h' ) != '150' ) {
        update_option( 'thumbnail_size_h', '150' );
    }

    if ( get_option( 'thumbnail_crop' ) != '1' ) {
        update_option( 'thumbnail_crop', '1' );
    }

    /**
     * Medium Size
     */
    if ( get_option( 'medium_size_w' ) != '300' ) {
        update_option( 'medium_size_w', '300' );
    }

    if ( get_option( 'medium_size_h' ) != '300' ) {
        update_option( 'medium_size_h', '300' );
    }

    if ( get_option( 'medium_crop' ) != '0' ) {
        update_option( 'medium_crop', '0' );
    }

    /**
     * Large Size
     */
    if ( get_option( 'large_size_w' ) != '1024' ) {
        update_option( 'large_size_w', '1024' );
    }

    if ( get_option( 'large_size_h' ) != '1024' ) {
        update_option( 'large_size_h', '1024' );
    }

    if ( get_option( 'large_crop' ) != '0' ) {
        update_option( 'large_crop', '0' );
    }
}

function mg_image_sizes() {
    add_image_size('slide-size', 1500, 900, true);
    add_image_size('service-size', 140, 110, true);
}