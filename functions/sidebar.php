<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointswp'),
		'description' => __('The first (primary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointswp'),
		'description' => __('The offcanvas sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'cpt_sidebar',
		'name' => __('CPT Sidebar', 'jointswp'),
		'description' => __('The sidebar for the Community Planning Toolbox section.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'ns_sidebar',
		'name' => __('News & Stories Sidebar', 'jointswp'),
		'description' => __('The sidebar for the News & Stories section.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'ppt_sidebar',
		'name' => __('People, Places, and Transportation Sidebar', 'jointswp'),
		'description' => __('The sidebar for the People, Places, & Transportation section.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointswp'),
		'description' => __('The second (secondary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} /* end register sidebars */

add_action( 'widgets_init', 'joints_register_sidebars' );
