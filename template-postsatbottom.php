<?php
/*
Template Name: Art Gibb or Small Grants
*/

get_header(); ?>

<?php $hero = get_field('page_header');
	if ( $hero ): ?>
<header class="header" role="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/swoosh.png'), url('<?php echo $hero ?>')">

	<div class="navWrap">
		<div class="grid-container">
			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
		</div>
	</div>

		<div id="heroTitle">
			<h1><?php the_title(); ?></h1>
		</div>

	<?php endif; ?>

</header> <!-- started in header.php-->

	<div class="content">
		<div class="grid-container">

			<div class="inner-content grid-x grid-margin-x grid-padding-x">

			    <main class="main small-12 medium-10 medium-offset-1 large-10 large-offset-1 cell" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'page' ); ?>

					<?php endwhile; endif; ?>

				</main> <!-- end #main -->

				<div class="postsAtBottom">
					<?php if (is_page(213)) {
						?> 	<h2>Small Grant Winners</h2> <?php
					}
					else {
						?> <h2>Previous Art Gibb Recipients</h2> <?php
					}?>


					<!--- Posts Begin -->
					<?php

						 $args = array('cat' => 3, 'posts_per_page' => 5,);
						 $category_posts = new WP_Query($args);

						 if($category_posts->have_posts()) :
								while($category_posts->have_posts()) :
									 $category_posts->the_post();
							?>
	    				<?php get_template_part( 'parts/loop', 'archive' ); ?>
							<?php
										endwhile;
								 else:
							?>

										Oops, there are no posts.

							<?php
								 endif;
							?>
				</div>

			</div> <!-- end #inner-content -->

		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>
