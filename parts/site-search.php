<?php
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
			<h1><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h1>
		</div>



</header> <!-- started in header.php-->

	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

			<main class="main small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell" role="main">
				<header>
					<h1 class="archive-title">What We Found</h1>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
          	<div class="grid-x grid-padding-x">

          		<div class="cell small-12 medium-12 large-12">
          			<header class="article-header">
          				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          				<?php get_template_part( 'parts/content', 'byline' ); ?>
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
