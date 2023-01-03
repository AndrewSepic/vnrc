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

//adds options to Sustainable Transportation Admin
require_once(get_template_directory().'/functions/sustainableTransportationOptionsPage.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
//require_once(get_template_directory().'/functions/custom-post-type.php');

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

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Announcement Bar',
		'menu_title'	=> 'Announcement Bar',
		'parent_slug'	=> 'vnrc-site-options',
		'position'	=> false,
		'icon_url'	=> false,
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'VNRC Site Wide Settings',
		'menu_title'	=> 'Site Wide Options',
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
			elseif  (in_category( 'climate-dispatch')) {
				$single_template = dirname( __FILE__ ) . '/single-climate-dispatch.php';
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
add_shortcode( 'accordionTabContentStart', 'accordionContentStart_shortcode' );

function accordionContentEnd_shortcode($atts) {
	ob_start();?>
	</div></li>
	<?php
	return ob_get_clean();
}
add_shortcode( 'accordionTabContentEnd', 'accordionContentEnd_shortcode' );

// Customize Recent Posts Widget
add_filter( 'widget_posts_args', 'remove_cats_from_widget');
function remove_cats_from_widget($args) {
	$args = array (
		'category__not_in' =>array(11,10,9,4),
		'posts_per_page' => 5,
	);
	return $args;
}

function customBreadcrumbs() {
	$show_on_homepage = 0;
	$show_current = 1;
	$delimiter = '&raquo;';
	$home_url = 'Home';
	$before_wrap = '<span clas="current">';
	$after_wrap = '</span>';

	/* Don't change values below */
	global $post;
	$home_url = get_bloginfo( 'url' );

	$category = get_queried_object();
	$cat_id = $category->term_id;
	$cat_link = get_category_link($cat_id);
	$cat_name = get_cat_name($cat_id);

	/* Check for homepage first! */
	if ( is_category('3') || in_category('3')) {

		/* Proceed with showing the breadcrumbs */
		$breadcrumbs = '<ul id="crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">';

		$breadcrumbs .= '<li itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a target="_blank" href="' . $home_url . '/news-stories"> News &amp; Stories </a></li>';

		$breadcrumbs .= '<li itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a target="_blank" href="' . $cat_link . '">' . $cat_name . '</a></li>';
		/* Build breadcrumbs here */

		$breadcrumbs .= '</ol>';

		echo $breadcrumbs;

	}

}

/*=============================================
                BREADCRUMBS
=============================================*/
//  to include in functions.php
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '&raquo;'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . single_cat_title('', false) . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div>';
    }
} // end the_breadcrumb()

// Add Body Class for CPT Search Results Pages

// add_filter( 'body_class', function( $classes ) {
// 		if (is_page_template('cpt-search.php')) {
//     	return array_merge( $classes, array( 'cpt-search' ) );
// 		}
// } );



function sustainableTransportation_init() {
    $labels = array(
        'name'                  => _x( 'People, Places, and Transportation', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'People, Places, and Transportation', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'People, Places, and Transportation', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'People, Places, and Transportation', 'Add New on Toolbar', 'textdomain' ),
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
		'show_in_rest' => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'susttransportation', $args );

     /* Taxonomy */

    $labels = array(
        'name'                       => _x( 'Topics', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Topics', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Topics', 'textdomain' ),
        'popular_items'              => __( 'Popular Topics', 'textdomain' ),
        'all_items'                  => __( 'All Topics', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Topics', 'textdomain' ),
        'update_item'                => __( 'Update Topics', 'textdomain' ),
        'add_new_item'               => __( 'Add New Topics', 'textdomain' ),
        'new_item_name'              => __( 'New Topics Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate topics with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove topic', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used topics', 'textdomain' ),
        'not_found'                  => __( 'No topics found.', 'textdomain' ),
        'menu_name'                  => __( 'Topics', 'textdomain' ),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'show_in_rest' 					=> true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'sustainable-transportation-topics' ),
    );

    register_taxonomy( 'vnrc-st-topics', 'susttransportation', $args );
}

add_action( 'init', 'sustainableTransportation_init' );

add_image_size( 'st_feature', 853, 480, true );
