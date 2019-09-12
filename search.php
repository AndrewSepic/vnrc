<?php
/**/
/* Template Name: Search Results */
/**/

$search_refer = $_GET['site_section'];
	if ($search_refer == "cpt_search") {
		 load_template( TEMPLATEPATH . '/parts/cpt-search.php' );
	 }
	elseif ($search_refer == "site_search") {
			load_template( TEMPLATEPATH . '/parts/site-search.php');
	};
