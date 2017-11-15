<?php // Register custom post type work
function create_posttype() {

	register_post_type( 'work',
		array(
			'labels' => array(
				'name' => __( 'Work' ),
				'singular_name' => __( 'Work' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'work'),
            'menu_icon' => 'dashicons-heart',
            'supports' => array(
                'editor',
                'title',
                'thumbnail',
            ),
             'taxonomies' => array('display', 'post_tag'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

?>