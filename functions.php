<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'VNRC Site Options',
		'menu_title'	=> 'VNRC Site Options',
		'menu_slug' 	=> 'vnrc-site-options',
		'capability'	=> 'edit_posts',
		'parent_slug' => '',
		'position'	=> false,
		'icon_url'	=> false,
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'VNRC Homepage Settings',
		'menu_title'	=> 'Homepage',
		'parent_slug'	=> 'vnrc-site-options',
		'position'	=> false,
		'icon_url'	=> false,
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'VNRC Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'vnrc-site-options',
		'position'	=> false,
		'icon_url'	=> false,
	));

}