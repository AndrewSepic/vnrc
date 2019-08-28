<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<header class="header" role="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/swoosh.png'), url('<?php echo get_template_directory_uri(); ?>/assets/images/default-header.jpg')">

	<div class="navWrap">
		<div class="grid-container">
			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
		</div>
	</div>

		<div id="heroTitle">

			<h1>News &amp; Stories</h1>
		</div>


</header> <!-- started in header.php-->

<div class="content">

	<div class="grid-container">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

			<main class="main small-12 medium-8 large-8 cell" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'single' ); ?>

			    <?php endwhile; else : ?>

			   		<?php get_template_part( 'parts/content', 'missing' ); ?>

			    <?php endif; ?>

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->
	</div>

</div> <!-- end #content -->

<?php get_footer(); ?>
