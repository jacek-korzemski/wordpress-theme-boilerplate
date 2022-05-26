<?php

function theme_boilerplate_menus() {
    register_nav_menus(
        array(
            'main-menu'     =>  __( 'Main menu'),
            'footer-1'      => __( 'Footer 1' ),
            'footer-2'      => __( 'Footer 2' ),
            'footer-3'      => __( 'Footer 3' ),
        )
    );
}	

function theme_boilerplate_pagination_format() {
    global $wp_rewrite;
    $wp_rewrite->pagination_base = '';
    $wp_rewrite->flush_rules();
}

add_action( 'init', 'theme_boilerplate_menus' );
add_action( 'init', 'theme_boilerplate_pagination_format', 1 );

include 'functions/display_elements.php';