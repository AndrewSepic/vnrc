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

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

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
add_filter('single_template', 'vnrc_post_templates');

function vnrc_post_templates($single_template) {
		global $post;
				if ( in_category( 'victories' )) {
					$single_template = dirname( __FILE__ ) . '/single-victories.php';
		}
    //elseif ( in_category( 'special-events' )) {
    //  $single_template = dirname( __FILE__ ) . '/single-special-events.php';
    //}
		return $single_template;
};

// Increase post limit on category-victories.php
function more_victories( $query ) {
    if ( is_category( 'victories' ) ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 50 );
        return;
    }
}
add_action( 'pre_get_posts', 'more_victories', 1 );


// =================== Custom Post Type :Our Featured Work ==================================
add_action('init', 'our_featured_work');
function our_featured_work() {
	$labels = array(
			'name' => _x('Our Featured Work', 'post type general name'),
			'singular_name' => _x('Our Featured Work', 'post type singular name'),
			'add_new' => _x('Add New', 'our_featured_work'),
			'add_new_item' => __('Add Featured Work'),
			'edit_item' => __('Edit Featured Work'),
			'new_item' => __('New Featured Work'),
			'all_items' => __('All Featured Work'),
			'view_item' => __('View Featured Work'),
			'search_items' => __('Search Featured Work'),
			'not_found' =>  __('No Featured Work found'),
			'not_found_in_trash' => __('No Featured Work found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Our Featured Work'
	);

	$args = array(
			'labels' => $labels,
			'public' => true,
			'show_ui' => true,
			'_builtin' =>  false,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array("slug" => "our_featured_work"),
			//'menu_icon' => get_bloginfo('template_url').'/images/icons/our_featured_work.png',
			'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type( 'our_featured_work' , $args );
}

// Foundation Accordion Shortcodes
function accordionStart_shortcode($atts) {
	ob_start();?>
	<ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
		<?php
	return ob_get_clean();
}
add_shortcode( 'accordionStart', 'accordionStart_shortcode' );

function accordionEnd_shortcode($atts) {
	ob_start();?>
	</ul>
	<?php
	return ob_get_clean();
}
add_shortcode( 'accordionEnd', 'accordionEnd_shortcode' );

function accordionTabTitle_shortcode($atts, $content=null) {
	return '<li class="accordion-item" data-accordion-item>
		<a href="#" class="accordion-title">' . $content . '</a>';
}
add_shortcode('accordionTabTitle',  'accordionTabTitle_shortcode');


function accordionContentStart_shortcode($atts) {
	ob_start();?>
	<div class="accordion-content" data-tab-content>
	<?php
	return ob_get_clean();
}
add_shortcode( 'accordionContentStart', 'accordionContentStart_shortcode' );

function accordionContentEnd_shortcode($atts) {
	ob_start();?>
	</div></li>
	<?php
	return ob_get_clean();
}
add_shortcode( 'accordionContentEnd', 'accordionContentEnd_shortcode' );