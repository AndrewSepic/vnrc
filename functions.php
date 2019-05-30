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
require_once(get_template_directory().'/functions/login.php');

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

// Customize Excerpt Length
function custom_excerpt_length( $length ) {
	return 30; //20 chars
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Set a function to create excerpt limits per use case
function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
}

// Add ACF Options to Toolbar

add_action( 'admin_bar_menu', 'acf_link', 999 );

function acf_link( $wp_admin_bar ) {
	$args = array(
		'id'    => 'my_page',
		'title' => 'VNRC Site Options',
		'href'  => 'http://localhost:8888/vnrc/wp-admin/admin.php?page=acf-options-homepage',
		'meta'  => array( 'class' => 'VNRC Site Options' )
	);
	$wp_admin_bar->add_node( $args );
}

add_filter( 'nav_menu_link_attributes', 'dataAtts', 10, 3 );
function dataAtts( $atts, $item, $args ) {
  // The ID of the target menu item
  $menu_target = 41;

  // inspect $item
  if ($item->ID == $menu_target) {
    $atts['data-open'] = 'enews';
  }
  return $atts;
}

//
// Add custom template for victories Single posts
//
add_filter( 'single_template', function ( $single_template ) {

    $parent     = '4'; //ID for Victories cat
    $categories = get_categories( 'child_of=' . $parent );
    $cat_names  = wp_list_pluck( $categories, 'name' );

    if ( has_category( 'victories' ) || has_category( $cat_names ) ) {
        $single_template = dirname( __FILE__ ) . '/single-victories.php';
    }
    return $single_template;

}, PHP_INT_MAX, 2 );

