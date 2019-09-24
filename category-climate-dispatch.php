<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

 get_header(); ?>

 <?php $hero = get_field('blog_header');
 	if ( $hero ): ?>
 <header class="header" role="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/swoosh.png'), url('<?php echo $hero ?>')">

	 <?php
 else: ?>
 <header class="header" role="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/swoosh.png'), url('<?php echo get_template_directory_uri(); ?>/assets/images/default-header.jpg')">
 	<?php
 endif; ?>
 	<div class="navWrap">
 		<div class="grid-container">
 			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
 		</div>
 	</div>

 		<div id="heroTitle">
      <?php
						//if(!empty($category)){$firstCategory = $category[0]->cat_name;} ?>
			<h1>Climate Dispatch</h1>

 		</div>



 </header> <!-- started in header.php-->


	<div class="content">
	  <div class="grid-container">
    	<div class="inner-content grid-x grid-margin-x grid-padding-x">

    	    <main class="main small-12 medium-8 large-8 cell" role="main">

    	    	<header>
              <?php the_breadcrumb(); ?>
    	    		<h1 class="page-title"><?php the_archive_title();?></h1>
    				<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
    	    	</header>

    	    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <?php
              /**
               * Template part for displaying posts
               *
               * Used for single, index, archive, search.
               */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
              	<div class="grid-x grid-padding-x">
              		<div class="cell small-12 medium-6 large-6">
              					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('news'); ?></a>
              		</div>

              		<div class="cell small-12 medium-6 large-6">
              			<header class="article-header">
              				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              				<?php //get_template_part( 'parts/content', 'byline' ); ?>
              			</header> <!-- end article header -->

              			<section class="entry-content" itemprop="text">
              				<?php echo excerpt(15);?>
              			</section> <!-- end article section -->

              			<footer class="article-footer">
              				<a class="excerpt-read-more" href="<?php the_permalink(); ?>">Read more <span class="greenarrow"></span></a>
              			</footer> <!-- end article footer -->
              		</div>
              	</div>

              </article> <!-- end article -->


    			<?php endwhile; ?>

    				<?php joints_page_navi(); ?>

    			<?php else : ?>

    				<?php get_template_part( 'parts/content', 'missing' ); ?>

    			<?php endif; ?>

    		</main> <!-- end #main -->

    		<?php get_sidebar(); ?>

     </div> <!-- end #inner-content -->
   </div> <!-- end .grid-container -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
