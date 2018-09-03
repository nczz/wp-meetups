<?php

add_action( 'wp_enqueue_scripts', 'coblocks_parent_theme_enqueue_styles' );

function coblocks_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'coblocks-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'wp-meetups-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'coblocks-style' )
    );

}

function date_format($input_date) {
     return date("m/d/Y H:i", strtotime($input_date));         
}
