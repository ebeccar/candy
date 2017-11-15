<?php

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('display', 'post', array(
    'hierarchical' => true,
    'labels' => array(
      'name' => _x( 'Display', 'taxonomy general name' ),
      'singular_name' => _x( 'Display', 'taxonomy singular name' ),
      'search_items' =>  __( 'Sök display' ),
      'all_items' => __( 'Alla displayer' ),
      'edit_item' => __( 'Redigera display' ),
      'update_item' => __( 'Uppdatera display' ),
      'add_new_item' => __( 'Lägg till ny display' ),
      'new_item_name' => __( 'Nytt displaynamn' ),
      'menu_name' => __( 'Display' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'display',
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );

?>