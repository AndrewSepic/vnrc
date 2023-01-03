<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

 <header class="header" role="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/swoosh.png');  background-color: #9fb06b; background-size: cover;">

	<div class="navWrap">
		<div class="grid-container">
			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
		</div>
	</div>

		<div id="heroTitle" class='st'>
      <h1><?=get_option("st_title"); ?></h1>
      <h2><?=get_option('st_subtitle'); ?></h2>
		</div>


</header> <!-- started in header.php-->

<div class="content">

	<div class="grid-container">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

			<main class="main small-12 medium-8 large-8 cell" role="main">

        <?php the_breadcrumb(); ?>

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'single' ); ?>

			    <?php endwhile; else : ?>

			   		<?php get_template_part( 'parts/content', 'missing' ); ?>

			    <?php endif; ?>

			</main> <!-- end #main -->

			<!-- SIDEBAR -->

<div id="sidebar1" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

<?php dynamic_sidebar("ppt_sidebar"); ?>

</div>

<!-- END SIDEBAR -->

		</div> <!-- end #inner-content -->
	</div>

</div> <!-- end #content -->

<?php get_footer(); ?>
