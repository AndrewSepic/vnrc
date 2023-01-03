<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

 get_header(); ?>

<? if(get_option("st_landingPageImage")){
  $image=wp_get_attachment_image_src(get_option("st_landingPageImage"),'full');
  $banner=$image[0];
} else {
  $banner=get_template_directory_uri().'/assets/images/swoosh.png';
}
?>
 <header class="header" role="banner" style="background-image: url('<?=$banner; ?>'); background-color: #9fb06b; background-size: cover;">


 	<div class="navWrap">
 		<div class="grid-container">
 			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
 		</div>
 	</div>

 		<div id="heroTitle" class='st'>
      <?php
						//if(!empty($category)){$firstCategory = $category[0]->cat_name;} ?>
			<h1><?=get_option("st_title"); ?></h1>
      <h2><?=get_option('st_subtitle'); ?></h2>

      <?php if (! is_category('news-stories')) {
        ?>
        <h3><?php single_cat_title('Topic: '); ?></h3>
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

              <article  style='margin-bottom:0;padding-bottom:0;'>
               <div class='tab'>
			  	<a href='https://vnrc.org/category/news-stories/'>News & Stories</a>
			  	<a><?=get_option("st_title"); ?></a>
			   </div>
			  </article>

		   <? $opt=wp_load_alloptions();
			if($opt["st_about"]){ echo "<article class='info'  style='margin-bottom:0;padding-bottom:0;'><p>".$opt["st_about"]."</p></article>";}
           ?>

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
