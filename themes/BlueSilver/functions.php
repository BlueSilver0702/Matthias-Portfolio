<?php

date_default_timezone_set('America/New_York');

if (!session_id()) {
    session_start();
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Icon Image',
            'id' => 'icon-image',
            'post_type' => 'portfolios'
        ) 
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Slide1 Image',
            'id' => 'slide1-image',
            'post_type' => 'portfolios'
        ) 
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Slide2 Image',
            'id' => 'slide2-image',
            'post_type' => 'portfolios'
        ) 
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Slide3 Image',
            'id' => 'slide3-image',
            'post_type' => 'portfolios'
        ) 
    );
}

add_theme_support( 'post-thumbnails' );
add_image_size( 'icon-thumb', 225, 225, true ); // Hard Crop Mode
add_image_size( 'featured-thumb', 800, 450 ); // Soft Crop Mode
add_image_size( 'slide-thumb', 800, 385 ); // Unlimite
add_image_size( 'gallery-thumb', 400, 285 ); // Unlimite


function cstm_remove_admin_pages() {
    global $is_developer;
    if (!$is_developer) {
//        remove_menu_page('edit-comments.php');
//        remove_menu_page('link-manager.php');
        //remove_menu_page('edit.php');
        //remove_menu_page('upload.php');
//        remove_menu_page('themes.php');
//        remove_menu_page('plugins.php');
//        remove_menu_page('users.php');
//        remove_menu_page('tools.php');
    }
} 
add_action('admin_menu', 'cstm_remove_admin_pages');
