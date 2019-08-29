<?php
/*
Template Name: Community Planning Toolbox - Issues
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


			    <main class="main small-12 large-8 medium-8 cell" role="main">

						<header class="article-header">
							<h1><?php the_title();?></h1>
						</header>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				    	<?php get_template_part( 'parts/loop', 'page' ); ?>

				    <?php endwhile; endif;?>
					<div class="grid-x">
						<div class="small-12 medium-6 large-4 cell">
							<button class="button browseIssues" type="button" data-toggle="issues-dropdown">Browse Issues <span>&#8964;</span></button>
								<div class="dropdown-pane" id="issues-dropdown" data-dropdown data-auto-focus="true">
									<ul class="issues">
									<?php
									$args = [
										'child_of' => $post->ID,
										'title_li' => '',
									];
									wp_list_pages( $args );
								?>
									</ul>
								</div>
						</div>
						<div class="small-12 medium-6 large-8 cell">
							<?php echo do_shortcode('[ivory-search id="16362" title="Issues Search Form"]');?>
						</div>
					</div>
				</main> <!-- end #main -->

			</div> <!-- end #inner-content -->

		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
