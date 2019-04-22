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
      <h1>VNRC Victories</h1>
 		</div>



 </header> <!-- started in header.php-->


	<div class="content">
	  <div class="grid-container">
    	<div class="inner-content grid-x grid-margin-x grid-padding-x">

    	    <main class="main small-12 medium-12 large-12 cell" role="main">

    	    	<header>
    	    		<h1 class="page-title"><?php the_archive_title();?></h1>
    				<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
    	    	</header>
              <div class="grid-x grid-padding-x">
              <?php if (have_posts()) : ?>
              <?php $postcount = 0; // Initialize the post counter ?>
              <?php while (have_posts()) : the_post(); //start the loop ?>
              <?php $postcount++; //add 1 to the post counter ?>



              <?php if ($postcount == 1) : // if this is the first post ?>

                  <div class="cell small-12 medium-12 large-12">
                    <article id="post-<?php the_ID(); ?>" class="leadVictory" role="article">

                			<header class="article-header">
                				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <p class="victoryDate">
                        	<?php the_time('l, F jS, Y');?>
                        </p>

                			</header> <!-- end article header -->

                			<section class="entry-content" itemprop="text">
                        <?php the_post_thumbnail('victory'); ?>
                				<?php the_content();?>
                			</section> <!-- end article section -->
                    </article> <!-- end article -->
                	</div>

              <?php else: // if this is not the first post ?>

      				    <!-- To see additional archive styles, visit the /parts directory -->

                    <div class="cell small-12 medium-4 large-4 post">
                      <?php
                        if ( has_post_thumbnail() ) {
                          the_post_thumbnail( 'victory' );
                      } ?>
                      <div class="overlay">
                        <h4><?php the_title() ?></h4>
                        <span class="short"><?php the_field('short_description');?></span>
                        <a class="more" href="<?php echo the_permalink(); ?>">Find Out More<span class="whitearrow"></span></a>
                      </div>
                    </div>

                <?php endif; ?>

    			<?php endwhile; ?>
        </div> <!-- End grid-x for victory group -->

    				<?php joints_page_navi(); ?>

    			<?php else : ?>

    				<?php get_template_part( 'parts/content', 'missing' ); ?>

    			<?php endif; ?>

    		</main> <!-- end #main -->

     </div> <!-- end #inner-content -->
   </div> <!-- end .grid-container -->
	</div> <!-- end #content -->

<?php get_footer(); ?>