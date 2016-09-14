<?php
if ( ! function_exists('song_post_type') ) {

    // Register Custom Post Type
    function song_post_type() {

        $labels = array(
            'name'                  => _x( 'Songs', 'Post Type General Name', 'sage' ),
            'singular_name'         => _x( 'Song', 'Post Type Singular Name', 'sage' ),
            'menu_name'             => __( 'Songs', 'sage' ),
            'name_admin_bar'        => __( 'Song', 'sage' ),
            'parent_item_colon'     => __( 'Parent song:', 'sage' ),
            'all_items'             => __( 'All Songs', 'sage' ),
            'add_new_item'          => __( 'Add New Song', 'sage' ),
            'add_new'               => __( 'Add New', 'sage' ),
            'new_item'              => __( 'New Song', 'sage' ),
            'edit_item'             => __( 'Edit Song', 'sage' ),
            'update_item'           => __( 'Update Song', 'sage' ),
            'view_item'             => __( 'View Song', 'sage' ),
            'search_items'          => __( 'Search Song', 'sage' ),
            'not_found'             => __( 'Not found', 'sage' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
            'items_list'            => __( 'Songs list', 'sage' ),
            'items_list_navigation' => __( 'Songs list navigation', 'sage' ),
            'filter_items_list'     => __( 'Filter Songs list', 'sage' ),
        );
        $rewrite = array(
            'slug'                  => 'song',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Song', 'sage' ),
            'description'           => __( 'List of songs', 'sage' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'excerpt', 'thumbnail', 'editor' ),
            'taxonomies'            => array( 'category', 'post_tag', 'country' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-audio',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
        );
        register_post_type( 'song', $args );

    }
    add_action( 'init', 'song_post_type', 0 );
}

/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'flush_rewrite_rules' );
?>
