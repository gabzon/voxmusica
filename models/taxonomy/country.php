<?php
if ( ! function_exists( 'country_taxonomy' ) ) {

	// Register Custom Taxonomy
	function country_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Countries', 'Taxonomy General Name', 'sage' ),
			'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'sage' ),
			'menu_name'                  => __( 'Countries', 'sage' ),
			'all_items'                  => __( 'All countries', 'sage' ),
			'parent_item'                => __( 'Parent country', 'sage' ),
			'parent_item_colon'          => __( 'Parent country:', 'sage' ),
			'new_item_name'              => __( 'New country Name', 'sage' ),
			'add_new_item'               => __( 'Add New country', 'sage' ),
			'edit_item'                  => __( 'Edit country', 'sage' ),
			'update_item'                => __( 'Update country', 'sage' ),
			'view_item'                  => __( 'View country', 'sage' ),
			'separate_items_with_commas' => __( 'Separate countries with commas', 'sage' ),
			'add_or_remove_items'        => __( 'Add or remove country', 'sage' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
			'popular_items'              => __( 'Popular countries', 'sage' ),
			'search_items'               => __( 'Search countries', 'sage' ),
			'not_found'                  => __( 'Not Found', 'sage' ),
			'items_list'                 => __( 'Countries list', 'sage' ),
			'items_list_navigation'      => __( 'Countries list navigation', 'sage' ),
		);
		$rewrite = array(
			'slug'                       => 'country',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'country', array( 'post', ' song' ), $args );

	}
	add_action( 'init', 'country_taxonomy', 0 );

}
?>
