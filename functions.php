<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function my_theme_scripts() {
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
    wp_register_script( 'goodreads-api', 'https://www.goodreads.com/search.xml?key=64ZUkaLM5MY1mRrBVXLmnQ&q=Ender%27s+Game', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

// Register custom post types
include('admin/posttypes.php'); 
// Register taxonomies
include('admin/taxonomies.php'); 
// Add shortcodes
include('admin/shortcodes.php'); 

// Hook google font

add_action( 'wp_head', 'add_font' );
function add_font() {
    echo '<link href="https://fonts.googleapis.com/css?family=Anton|Inconsolata:400,700" rel="stylesheet">';
    echo '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">';
    echo '<link rel="stylesheet" href="https://unpkg.com/jam-icons@1.0.65/css/jam-icons.min.css">';

}


?>