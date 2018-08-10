<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '1.0' );

}



add_action('init', 'remove_theme_post_format', 11);
function remove_theme_post_format(){
    remove_theme_support( 'post-formats' );    
}
?>
