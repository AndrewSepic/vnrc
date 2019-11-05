<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

<?php $hero = get_field('page_header');
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

		<div id="heroTitle">
			<h1><?php the_title(); ?></h1>
		</div>

</header> <!-- started in header.php-->

	<div class="content">

		<div class="grid-container">

			<div class="inner-content grid-x grid-margin-x grid-padding-x">

				<main class="main small-12 medium-8 large-8 cell" role="main">

					<article class="content-not-found">

						<header class="article-header">
							<h1><?php _e( 'Epic 404 - Article Not Found', 'jointswp' ); ?></h1>
						</header> <!-- end article header -->

						<section class="entry-content">
							<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
						</section> <!-- end article section -->

						<section class="search">
						    <p><?php get_search_form(); ?></p>
						</section> <!-- end search section -->

					</article> <!-- end article -->

				</main> <!-- end #main -->

			</div> <!-- end #inner-content -->
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
