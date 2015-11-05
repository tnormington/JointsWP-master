<?php
/* joints Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function custom_portfolio() {
	// creating (registering) the custom type
	register_post_type( 'portfolio_projects', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Projects', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Project', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Projects', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Project', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Project', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Project', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Project', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Project', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Portfolio projects', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/assets/images/dashicons-admin.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'portfolio', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'portfolio', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'portfolio');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'portfolio');

}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_portfolio');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

	// Register Custom Taxonomy
function custom_cat() {

	$labels = array(
		'name'                       => 'Categories',
		'singular_name'              => 'Category',
		'menu_name'                  => 'Category',
		'all_items'                  => 'All Projects',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Project',
		'add_new_item'               => 'Add New Project',
		'edit_item'                  => 'Edit Project',
		'update_item'                => 'Update Project',
		'view_item'                  => 'View Project',
		'separate_items_with_commas' => 'Separate projects with commas',
		'add_or_remove_items'        => 'Add or remove projects',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Projects',
		'search_items'               => 'Search Projects',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Categories', array( 'portfolio_projects' ), $args );

}
add_action( 'init', 'custom_cat', 0 );

    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */


?>
