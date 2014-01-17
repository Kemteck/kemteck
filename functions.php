<?php
function register_projects() {
	$labels = array(
		'name'               => _x( 'Projects', 'project type general name', 'Kemteck' ),
		'singular_name'      => _x( 'Project', 'project type singular name', 'Kemteck' ),
		'add_new'            => _x( 'Add New', 'project item', 'Kemteck' ),
		'add_new_item'       => __( 'Add New Project', 'Kemteck' ),
		'edit_item'          => __( 'Edit Project', 'Kemteck' ),
		'new_item'           => __( 'New Project', 'Kemteck' ),
		'all_items'          => __( 'All Projects', 'Kemteck' ),
		'view_item'          => __( 'View Project', 'Kemteck' ),
		'search_items'       => __( 'Search Projects', 'Kemteck' ),
		'not_found'          => __( 'Nothing found', 'VertexKemteck' ),
		'not_found_in_trash' => __( 'Nothing found in Trash', 'Kemteck' ),
		'parent_item_colon'  => '',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'can_export'         => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'has_archive'        => true,
		'capability_type'    => 'post',
		'rewrite'            => array(
			'feeds'      => true,
			'slug'       => 'project',
			'with_front' => false,
		),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions', 'custom-fields' ),
	);

	register_post_type( 'project', $args);

	$labels = array(
		'name'              => _x( 'Categories', 'Project category name', 'Kemteck' ),
		'singular_name'     => _x( 'Category', 'Project category singular name', 'Kemteck' ),
		'search_items'      => __( 'Search Categories', 'Kemteck' ),
		'all_items'         => __( 'All Categories', 'Kemteck' ),
		'parent_item'       => __( 'Parent Category', 'Kemteck' ),
		'parent_item_colon' => __( 'Parent Category:', 'Kemteck' ),
		'edit_item'         => __( 'Edit Category', 'Kemteck' ),
		'update_item'       => __( 'Update Category', 'Kemteck' ),
		'add_new_item'      => __( 'Add New Category', 'Kemteck' ),
		'new_item_name'     => __( 'New Category Name', 'Kemteck' ),
		'menu_name'         => __( 'Category', 'Kemteck' ),
	);

	register_taxonomy( 'project_category', array( 'project' ), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	) );
}
add_action( 'init', 'register_projects', 0 );