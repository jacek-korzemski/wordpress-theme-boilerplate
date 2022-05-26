<?php

function metal_music_main_menu() 
{
    register_nav_menu('main_menu',__( 'Main menu' ));
}

function metal_music_footer_menus() {
    register_nav_menus(
        array(
            'footer-1' => __( 'Footer 1' ),
            'footer-2' => __( 'Footer 2' ),
            'footer-3' => __( 'Footer 3' ),
        )
    );
}	

function metal_music_pagination_format() {
    global $wp_rewrite;
    $wp_rewrite->pagination_base = '';
    $wp_rewrite->flush_rules();
}

add_action( 'init', 'metal_music_main_menu' );
add_action( 'init', 'metal_music_footer_menus' );
add_action( 'init', 'metal_music_pagination_format', 1 );

include 'functions/display_elements.php';