<?php

/* ---- Custom Post Types and Taxonomies ---- */

function register_post_types(){

  register_post_type( 'work',
  	array(
      'labels' => array(
        'name' => __( 'Works' ),
        'singular_name' => __( 'Work' )
    	),
    	'public' => true,
    	'has_archive' => true,
    	'supports' => array('title', 'editor', 'thumbnail', 'page-attributes') 
  	)
  );

}

/*function register_taxonomies(){

  register_taxonomy('genre', array('books'),
    array(
      'labels' => array(
        'name' => __( 'Genres' ),
        'singular_name' => __( 'Genre' )
      ),
      'hierarchical' => true,
      'show_ui' => true,
      'query_var' => true
    )
  );
}*/

add_action( 'init', 'register_post_types', 0 );
//add_action( 'init', 'register_taxonomies', 0 );

/* ---- Post Thumbnails ---- */

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 366, 500, false);
add_image_size("case-study", 800, 500, false);
add_image_size("homepage", 564, 564, false);


/* ---- Scripts ---- */

function enqueue_scripts(){
    
    wp_enqueue_script(
        "modernizr",
        get_template_directory_uri()."/js/libs/modernizr-2.6.2.min.js",
        null,
        null,
        false
    );
    wp_enqueue_script(
        "plugins",
        get_template_directory_uri()."/js/plugins.js",
        null,
        null,
        true
    ); 
    wp_enqueue_script(
        "scripts",
        get_template_directory_uri()."/js/scripts.js",
        null,
        null,
        true
    );
}

// Styles

function enqueue_styles(){
    wp_enqueue_style(
        "fancybox",
        get_template_directory_uri()."/css/fancybox.css"
    );
}

add_action('init', 'enqueue_scripts');
add_action('init', 'enqueue_styles');

/* ---- Other ---- */

//add custom menu support 
add_action('init', 'register_custom_menu');

function register_custom_menu() {
  register_nav_menu('custom_menu', __('Custom Menu'));
}

//replacement text for 'read more' after excerpts
function new_excerpt_more($more) {
  global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>