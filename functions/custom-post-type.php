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
function custom_post_example() {
 $labels = array(
        'name'                  => _x( 'People Places Transportation', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'People Places Transportation', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'People Places Transportation', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'People Places Transportation', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Post', 'textdomain' ),
        'new_item'              => __( 'New Post', 'textdomain' ),
        'edit_item'             => __( 'Edit Post', 'textdomain' ),
        'view_item'             => __( 'View Post', 'textdomain' ),
        'all_items'             => __( 'All Posts', 'textdomain' ),
        'search_items'          => __( 'Search Posts:', 'textdomain' ),
        'not_found'             => __( 'No posts found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No posts found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'post Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Post archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into post', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this post', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter posts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Posts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Posts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'people-places-transportation' ), 
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'sustainT', $args );
}

	// adding the function to the Wordpress init
	//add_action( 'init', 'custom_post_example');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

	// now let's add custom categories (these act like categories)
//    register_taxonomy( 'sustainable-transportation-vermont-categories',
//    	array('sustainable_transportation'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
//    	array('hierarchical' => true,     /* if this is true, it acts like categories */
//    		'labels' => array(
//    			'name' => __( 'Sustainable Transportation Categories', 'jointswp' ), /* name of the custom taxonomy */
//    			'singular_name' => __( 'Sustainable Transportation Category', 'jointswp' ), /* single taxonomy name */
//    			'search_items' =>  __( 'Search Sustainable Transportation Categories', 'jointswp' ), /* search title for taxomony */
//    			'all_items' => __( 'All Sustainable Transportation Categories', 'jointswp' ), /* all title for taxonomies */
//    			'parent_item' => __( 'Parent Sustainable Transportation Category', 'jointswp' ), /* parent title for taxonomy */
//    			'parent_item_colon' => __( 'Parent Sustainable Transportation Category:', 'jointswp' ), /* parent taxonomy title */
//    			'edit_item' => __( 'Edit Sustainable Transportation Category', 'jointswp' ), /* edit custom taxonomy title */
//    			'update_item' => __( 'Update Sustainable Transportation Category', 'jointswp' ), /* update title for taxonomy */
//    			'add_new_item' => __( 'Add New Sustainable Transportation Category', 'jointswp' ), /* add new title for taxonomy */
//    			'new_item_name' => __( 'New Custom Sustainable Transportation Name', 'jointswp' ) /* name title for taxonomy */
//    		),
//    		'show_admin_column' => true,
//    		'show_ui' => true,
//    		'query_var' => true,
//    		'rewrite' => array( 'slug' => 'sustainable-transportation-categories' ),
//    	)
//    );

	// now let's add custom tags (these act like categories)
   /* register_taxonomy( 'custom_tag',
    	array('custom_type'), // if you change the name of register_post_type( 'custom_type', then you have to change this
    	array('hierarchical' => false,    // if this is false, it acts like tags
    		'labels' => array(
    			'name' => __( 'Custom Tags', 'jointswp' ), // name of the custom taxonomy
    			'singular_name' => __( 'Custom Tag', 'jointswp' ), // single taxonomy name
    			'search_items' =>  __( 'Search Custom Tags', 'jointswp' ), // search title for taxomony
    			'all_items' => __( 'All Custom Tags', 'jointswp' ), // all title for taxonomies
    			'parent_item' => __( 'Parent Custom Tag', 'jointswp' ), // parent title for taxonomy
    			'parent_item_colon' => __( 'Parent Custom Tag:', 'jointswp' ), // parent taxonomy title
    			'edit_item' => __( 'Edit Custom Tag', 'jointswp' ), // edit custom taxonomy title
    			'update_item' => __( 'Update Custom Tag', 'jointswp' ), // update title for taxonomy
    			'add_new_item' => __( 'Add New Custom Tag', 'jointswp' ), // add new title for taxonomy
    			'new_item_name' => __( 'New Custom Tag Name', 'jointswp' ) // name title for taxonomy
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );
    */
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/CMB2/CMB2
    */
