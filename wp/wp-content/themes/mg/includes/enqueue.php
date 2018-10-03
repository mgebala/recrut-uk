<?php

function mg_front_css() {
    global $wp_styles;

    wp_enqueue_style( 'font-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext', array(), false );
    wp_enqueue_style( 'normalize', CSS_URI . 'normalize.css', array(), false );
    wp_enqueue_style( 'main-style', CSS_URI . 'style.css', array(), false );
}