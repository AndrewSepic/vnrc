<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

 get_header(); ?>

<style>

.tab a {
    display: inline-block;
    padding: 5px 10px;
    border: solid 1px #2A6A35;
    border-bottom: 0;
    color: #2A6A35;
}

.tab a:not([href]) {
	background:#78a13f;
	border-color: #78a13f;
	color:white;
}

.tab a:hover {
background:#2A6A35;
color:white;
}

.tab a:not([href]):hover {
background:#78a13f;
}

.tab {
    border-bottom: solid 1px #2A6A35;
    margin-bottom: 40px;
    padding:0 30px;
}

</style>

 <header class="header" role="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/swoosh.png');  background-color: #9fb06b; background-size: cover;">


 	<div class="navWrap">
 		<div class="grid-container">
 			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
 		</div>
 	</div>

 		<div id="heroTitle">
      <?php
						//if(!empty($category)){$firstCategory = $category[0]->cat_name;} ?>
			<h1><?php single_cat_title(); ?></h1>
      <?php if (! is_category('news-stories')) {
        ?>
        <h3>Sustainable Transportation Vermont</h3>
        <?php
      } ?>
 		</div>



 </header> <!-- started in header.php-->


	<div class="content">
	  <div class="grid-container">
    	<div class="inner-content grid-x grid-margin-x grid-padding-x">

    	    <main class="main small-12 medium-8 large-8 cell" role="main">

    	    	<header>
              <?php //the_breadcrumb(); ?>



    	    	<!--	<h1 class="page-title"><?php the_archive_title();?></h1>
    				 <?php the_archive_description('<div class="taxonomy-description">', '</div>');
              if (is_category('events')) {
                ?>
                <p>Keep track of upcoming VNRC and partner events with the calendar below. Click the "Agenda" tab at the top right of the calendar to see the events organized in list form. </p>
                <iframe src="https://calendar.google.com/calendar/embed?src=vnrc.org_4t58bc6j2djd233mm6iql3h43s%40group.calendar.google.com&amp;ctz=America%2FNew_York" style="border: 0" width="750" height="600" frameborder="0" scrolling="no"></iframe>
                <?php
              } ?>-->
    	    	</header>

    	    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    				<!-- To see additional archive styles, visit the /parts directory -->
    				<?php get_template_part( 'parts/loop', 'archive' ); ?>

    			<?php endwhile; ?>

    				<?php joints_page_navi(); ?>

    			<?php else : ?>

    				<?php get_template_part( 'parts/content', 'missing' ); ?>

    			<?php endif; ?>

    		</main> <!-- end #main -->

    		<!-- SIDEBAR -->

<div id="sidebar1" class="sidebar small-12 medium-4 large-4 cell" role="complementary">
	<?php dynamic_sidebar("ppt_sidebar"); ?>
</div>

<!-- END SIDEBAR -->

     </div> <!-- end #inner-content -->
   </div> <!-- end .grid-container -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
