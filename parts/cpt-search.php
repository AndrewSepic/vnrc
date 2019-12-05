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

            <header class="article-header">
              <h1><?php _e( 'Sorry, No Results.', 'jointswp' );?></h1>
            </header>

            <section class="entry-content">
              <p><?php _e( 'Try your search again.', 'jointswp' );?></p>
            </section>

						<?php endif; ?>

            <!-- Advanced Search -->
						<h2 class="cpt">Browse or Search Toolbox</h2>
						<div class="grid-x">
							<div class="small-12 medium-2 large-3 cell">
								<button class="button browseIssues" type="button" data-toggle="issues-dropdown">Browse Issues <span>&#8964;</span></button>
									<div class="dropdown-pane" id="issues-dropdown" data-dropdown data-auto-focus="true">
										<ul class="issues">
										<?php
										$args = [
											'child_of' => 16109,
											'title_li' => '',
										];
										wp_list_pages( $args );
									?>
										</ul>
									</div>
							</div>
							<div class="small-12 medium-2 large-3 cell">
								<button class="button browseIssues" type="button" data-toggle="tools-dropdown">Browse Tools<span>&#8964;</span></button>
									<div class="dropdown-pane" id="tools-dropdown" data-dropdown data-auto-focus="true">
										<ul class="issues">
										<?php
										$args = [
											'child_of' => 16116,
											'title_li' => '',
										];
										wp_list_pages( $args );
									?>
										</ul>
									</div>
							</div>
							<div class="small-12 medium-2 large-4 cell">
								<button class="button browseIssues" type="button" data-toggle="casestudies-dropdown">Browse Case Studies <span>&#8964;</span></button>
									<div class="dropdown-pane" id="casestudies-dropdown" data-dropdown data-auto-focus="true">
										<ul class="issues">
										<?php
										$args = [
											'child_of' => 16119,
											'title_li' => '',
										];
										wp_list_pages( $args );
									?>
										</ul>
									</div>
							</div>
							<div class="small-12 medium-4 large-6 cell cpt-search">
								<?php// echo do_shortcode('[ivory-search id="19635" title="CPT Wide Search"]');?>

								<!-- <form class="is-search-form is-form-style is-form-style-1 is-form-id-16362 " action="http://dev.vnrc.org/" method="get" role="search" _lpchecked="1">
									<label><input type="text" name="s" value="" class="is-search-input" placeholder="Search Issues..." autocomplete="off"></label>
									<input type="submit" value="Search" class="is-search-submit">
									<input type="hidden" name="id" value="16362">
									<input type="hidden" name="site_section" value="cpt_search">
									<input type="hidden" name="post_type" value="page">
								</form> -->

								<form role="search" method="get" class="search-form" action="https://vnrc.org/">
									<input type="search" class="search-field" placeholder="Search Toolbox..." value="" name="s" title="Search for:">
									<input type="submit" class="search-submit button" value="Search">
									<input type="hidden" name="site_section" value="cpt_search">
									<input type="hidden" name="id" value="19635"><input type="hidden" name="post_type" value="page">
								</form>
							</div>
						</div>

					</main> <!-- end #main -->

				</div> <!-- end #inner-content -->

				</div> <!-- end #content -->

				<?php get_footer(); ?>
