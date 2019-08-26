<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<?php // check the number of images
			$numimage = count( get_field( 'hero_images', 'option' ) );
			if ($numimage < 2) {
				// Get the rows, get the single row and it's image
				$rows = get_field('hero_images', 'option'); // get all the rows
				$first_row = $rows[0];
				$first_row_image = $first_row['hero_image'];
				echo "Theres only one image!" ?>

	<header class="header" role="banner" style="background-image: url('<?php echo $first_row_image; ?>')">
	<?php
	}
	else {
		$rows = get_field('hero_images', 'option');
		$rand_row = $rows[ array_rand($rows)];
		$rand_image = $rand_row['hero_image']; ?>

	<header class="header" role="banner" style="background-image: url('<?php echo $rand_image; ?>')">
<?php
	}
	?>

		<div class="navWrap">
			<div class="grid-container">
		 		<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
			</div>
		</div>

			<div id="heroTitle">
				<h1><?php the_field('headline', 'option'); ?></h1>
				<span class="since"><?php the_field('since', 'option'); ?></span>
				<a class="button orange" href="<?php the_field('donate_link', 'option');?>">Support VNRC</a>
			</div>

	</header> <!-- started in header.php-->

		<div class="content">

			<div class="grid-container">
				<div class="grid-x icons">
					<div class="cell small-6 large-auto">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/energy.svg" alt="Energy & Climate Action"/>
							<h4>Climate Action & Clean Energy</h4>
						</a>
					</div>
					<div class="cell small-6 large-auto">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/clean-water.svg" alt="Clean Water"/>
							<h4>Clean Water</h4>
						</a>
					</div>
					<div class="cell small-6 large-auto">
						<a href="">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/toxic-free.svg" alt="Toxic Free Environment"/>
							<h4>Toxic Free Environment</h4>
						</a>
					</div>
					<div class="cell small-6 large-auto">
						<a href="">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/smart-growth.svg" alt="Smart Growth"/>
							<h4>Smart Growth</h4>
						</a>
					</div>
					<div class="cell small-6 large-auto">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/forests.svg" alt="Healthy Forests & Wildlife"/>
							<h4>Healthy Forests & Wildlife</h4>
						</a>
					</div>
					<div class="cell small-6 large-auto">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/partnerships.svg" alt="Partnerships"/>
							<h4>Partnerships</h4>
						</a>
					</div>
					<div class="cell small-12 large-auto">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/statehouse.svg" alt="Statehouse"/>
							<h4>State House</h4>
						</a>
					</div>
				</div>
			</div>

			<div class="inner-content grid-x grid-margin-x">
		    <main class="main small-12 medium-12 large-12 cell" role="main">

					<!-- First Section -->
					<div class="greyWrapper">
						<div class="grid-container">
							<div class="grid-x grid-padding-x news">
								<div class="cell small-12 medium-12 large-4 large-offset-4">
									<h2>News &amp; Stories</h2>
								</div>
								<div class="cell small-12 medium-12 large-4 catLink">
									<a class="readmore" href="<?php echo site_url();?>/category/news-stories">Read all News &amp; Stories <span class="greenarrow"></span></a>
								</div>

								<!--- Posts Begin -->
								<?php

								   $args = array('cat' => 3, 'posts_per_page' => 3,);
								   $category_posts = new WP_Query($args);

								   if($category_posts->have_posts()) :
								      while($category_posts->have_posts()) :
								         $category_posts->the_post();
								?>
								<div class="cell small-12 medium-4 large-4 post">
									<?php
										if ( has_post_thumbnail() ) {
    									the_post_thumbnail( 'news' );
									} ?>
									<h4><?php the_title() ?></h4>
									<?php // get_template_part( 'parts/content', 'byline' ); ?>
									<?php the_excerpt()?>
									<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
								</div>


								<?php
								      endwhile;
								   else:
								?>

								      Oops, there are no posts.

								<?php
								   endif;
								?>

								<!--- Posts EnD -->
							</div><!-- .news end -->

							<div class="grid-x grid-padding-x video">
								<div class="cell small-12 medium-4 large-5 vidContent">
									<h2><?php the_field('video_title', 'option');?></h2>
									<div class="leadin"><?php the_field('video_leadin', 'option'); ?></div>
									<div class="text"><?php the_field('video_text', 'option');?></div>
									<a class="videoLink" href="<?php the_field('video_link_url', 'option');?>"><?php the_field('video_link_text', 'option');?><span class="whitearrow"></span></a>

								</div>
								<div class="cell small-12 medium-8 large-7 vidembed">
									<?php the_field('video_embed', 'option');?>
								</div>
							</div><!-- .video end -->
						</div>
					</div><!-- end .firstWrapper -->




					<div class="grid-container">
						<div class="grid-x grid-margin-x victories">

							<div class="cell small-12 medium-12 large-4 large-offset-4">
								<h2>Victories</h2>
							</div>
							<div class="cell small-12 medium-12 large-4 catLink">
								<a class="readmore" href="/category/victories">View all victories <span class="greenarrow"></span></a>

							</div>

							<!-- Victory posts -->
							<?php

								 $args = array('cat' => 4, 'posts_per_page' => 3 );
								 $category_posts = new WP_Query($args);

								 if($category_posts->have_posts()) :
										while($category_posts->have_posts()) :
											 $category_posts->the_post();
							?>
								<div class="cell small-12 medium-4 large-4 post">
									<a class="victoryLink" href="<?php echo the_permalink(); ?>">
									<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail( 'victory' );
									} ?>
										<div class="overlay">
											<h4><?php the_title() ?></h4>
											<span class="short"><?php the_field('short_description');?></span>
										</div>
									</a>
								</div>

							<?php
										endwhile;
								 else:
							?>
										Oops, there are no posts.
							<?php
								 endif;
							?>
							<!--- Posts EnD -->

						</div>
					</div> <!-- end grid-container -->

					<div class="missionWrapper">
						<div class="grid-container">
							<div class="grid-x grid-padding-x grid-margin-x mission">
								<div class="cell small-12 medium-12 large-12">
									<h3>Our Mission</h3>
									<p><?php the_field('mission_text', 'option'); ?></p>
									<a class="button white" href="<?php the_field('donate_link', 'option');?>">Join Today</a>
								</div>

							</div>
						</div> <!-- end grid-container -->
					</div> <!-- end .missionWrapper -->

					<div class="grid-container">
						<div class="grid-x grid-padding-x grid-margin-x advocates">

							<div class="cell small-12 medium-4 large-4">
								<img class="adPic" src="<?php the_field('advocate_image_1', 'option');?>" />
								<h5><?php the_field('advocate_name_1', 'option') ?></h5>
								<span class="role"><?php the_field('advocate_role_1', 'option') ?></span>
								<blockquote><?php the_field('advocate_quote_1', 'option') ?></blockquote>
							</div>

							<div class="cell small-12 medium-4 large-4">
								<img class="adPic" src="<?php the_field('advocate_image_2', 'option');?>"/>
								<h5><?php the_field('advocate_name_2', 'option') ?></h5>
								<span class="role"><?php the_field('advocate_role_2', 'option') ?></span>
								<blockquote><?php the_field('advocate_quote_2', 'option') ?></blockquote>
							</div>

							<div class="cell small-12 medium-4 large-4">
								<img class="adPic" src="<?php the_field('advocate_image_3', 'option');?>"/>
								<h5><?php the_field('advocate_name_3', 'option') ?></h5>
								<span class="role"><?php the_field('advocate_role_3', 'option') ?></span>
								<blockquote><?php the_field('advocate_quote_3', 'option') ?></blockquote>
							</div>

						</div>
					</div> <!-- end grid-container -->

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->



	</div> <!-- end #content -->

<?php get_footer(); ?>