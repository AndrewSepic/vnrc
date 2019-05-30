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
              <div class="grid-x grid-margin-x">
                <div class="cell small-12 medium-12 large-12">
                  <h2>Our Proudest Victories </h2>
                </div>

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); //start the loop ?>

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