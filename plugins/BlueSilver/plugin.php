<?php
/*
Plugin Name: Blue Silver
Plugin URI: http://tripchat.net/
Description: This is site plugin for Blue Silver Personal Website.
Version: 1.0.0
Author: XianA
Author URI: http://tripchat.net/
License: GPLv2 or later
Text Domain: Blue Silver
*/

add_action( 'init', 'build_taxonomies', 0 );
 
function build_taxonomies() {
    register_taxonomy( 'port_cat', 'post', array( 'hierarchical' => true, 'label' => 'Port Category', 'query_var' => true, 'rewrite' => true ) );
}

add_action( 'init', 'create_movie_review' );

function create_movie_review() {
    register_post_type( 'portfolios',
        array(
            'labels' => array(
                'name' => 'Portfolios',
                'singular_name' => 'Portfolio',
                'add_new' => 'Add Port',
                'add_new_item' => 'Add New Port',
                'edit' => 'Edit',
                'edit_item' => 'Edit Port',
                'new_item' => 'New Port',
                'view' => 'View',
                'view_item' => 'View Port',
                'search_items' => 'Search Ports',
                'not_found' => 'No Portfolios found',
                'not_found_in_trash' => 'No Portfolios found in Trash',
                'parent' => 'Parent Portfolio'
            ),
 
            'public' => true,
            'menu_position' => 0,
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            
            'taxonomies' => array( 'port_cat' ),
            'menu_icon' => '',
            'has_archive' => true
        )
    );
}

add_action( 'admin_init', 'my_admin' );
function my_admin() {
    add_meta_box( 'movie_review_meta_box',
        'Portfolio Meta',
        'display_movie_review_meta_box',
        'portfolios', 'normal', 'high'
    );
}

function display_movie_review_meta_box( $movie_review ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $movie_1 = esc_html( get_post_meta( $movie_review->ID, 'movie_1', true ) );
    $movie_2 = esc_html( get_post_meta( $movie_review->ID, 'movie_2', true ) );
    $movie_3 = esc_html( get_post_meta( $movie_review->ID, 'movie_3', true ) );
    $movie_4 = esc_html( get_post_meta( $movie_review->ID, 'movie_4', true ) );
    $movie_5 = esc_html( get_post_meta( $movie_review->ID, 'movie_5', true ) );
    $movie_6 = esc_html( get_post_meta( $movie_review->ID, 'movie_6', true ) );
    $movie_7 = esc_html( get_post_meta( $movie_review->ID, 'movie_7', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 10%">Keywords</td>
            <td><input type="text" size="170" name="movie_1" value="<?php echo $movie_1; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 10%">Category</td>
            <td><input type="text" size="170" name="movie_4" value="<?php echo $movie_4; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 10%">Updated</td>
            <td><input type="text" size="170" name="movie_5" value="<?php echo $movie_5; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 10%">Version</td>
            <td><input type="text" size="170" name="movie_6" value="<?php echo $movie_6; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 10%">iTunes Link</td>
            <td><input type="text" size="170" name="movie_2" value="<?php echo $movie_2; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 10%">Google Play Link</td>
            <td><input type="text" size="170" name="movie_3" value="<?php echo $movie_3; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 10%">Web Link</td>
            <td><input type="text" size="170" name="movie_7" value="<?php echo $movie_7; ?>" /></td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'add_movie_review_fields', 10, 2 );

function add_movie_review_fields( $movie_review_id, $movie_review ) {
    // Check post type for movie reviews
    if ( $movie_review->post_type == 'portfolios' ) {
        // Store data in post meta table if present in post data
        update_post_meta( $movie_review_id, 'movie_1', $_POST['movie_1'] );
        update_post_meta( $movie_review_id, 'movie_2', $_POST['movie_2'] );
        update_post_meta( $movie_review_id, 'movie_3', $_POST['movie_3'] );
        update_post_meta( $movie_review_id, 'movie_4', $_POST['movie_4'] );
        update_post_meta( $movie_review_id, 'movie_5', $_POST['movie_5'] );
        update_post_meta( $movie_review_id, 'movie_6', $_POST['movie_6'] );
        update_post_meta( $movie_review_id, 'movie_7', $_POST['movie_7'] );
    }
}