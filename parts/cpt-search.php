<?php
 /*
Template Name: CPT Search
 */

 get_header(); ?>

 <?php $hero = get_field('cpt_header_image', 'option');
 	if ( $hero ):
       $pageheader = $hero;
   else:
     $pageheader = get_field('default_header_image', 'option');
   endif; ?>
 <header class="header" role="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/swoosh.png'), url('<?php echo $pageheader ?>')">

 	<div class="navWrap">
 		<div class="grid-container">
 			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
 		</div>
 	</div>

 </header> <!-- started in header.php-->

 	<div id="cptTitle">
 		<div class="grid-container">
 			<div class="grid-x grid-margin-x grid-padding-x">
 				<div class="main small-12 medium-12 large-12 cell">
 					<h1>Community Planning Toolbox</h1>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="content">

 		<div class="grid-container">

 			<div class="inner-content grid-x grid-margin-x grid-padding-x">

 				<?php if ( is_active_sidebar( 'cpt_sidebar' ) ) { ?>
 					<div id="cpt_sidebar" class="sidebar small-12 medium-4 large-4 cell" role="complementary">
 							<?php dynamic_sidebar( 'cpt_sidebar' ); ?>
 					</div>
 						<?php } ?>

			<main class="main small-12 medium-10 large-8 cell" role="main">
				<header>
					<h1><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h1>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
							<div class="grid-x grid-padding-x">

								<div class="cell small-12 medium-12 large-12">
									<header class="article-header">
										<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										<?php get_template_part( 'parts/content', 'cpttag' ); ?>
									</header> <!-- end article header -->

									<section class="entry-content" itemprop="text">
										<?php echo excerpt(55);?>
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

				</div> <!-- end #inner-content -->

				</div> <!-- end #content -->

				<?php get_footer(); ?>
