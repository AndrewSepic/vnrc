<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
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

			    <main class="main small-12 large-8 medium-8 cell" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				    	<?php get_template_part( 'parts/loop', 'page' ); ?>

				    <?php endwhile; endif; ?>

				</main> <!-- end #main -->

			    <?php get_sidebar(); ?>

			</div> <!-- end #inner-content -->

		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>