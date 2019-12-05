<?php
/*
Template Name: Clean Water
*/

get_header(); ?>

<?php $hero = get_field('key_header');
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

		    <div class="small-12 medium-8 large-8 cell keyInfo">
					<h1 class="key_title"><?php the_title(); ?></h1>
					<p><?php the_field('key_issue_intro');?></p>
					<div class="director">
						<div class="matte" style="background-image: url('<?php the_field('director_image');?>')"></div>
						<div class="inquiries">For questions or inquiries:</div>
						<?php the_field('director_contact');?>
					</div>
				</div>

				<div class="small-12 medium-4 large-4 cell keyGraphic">
					<img src="<?php the_field('key_issue_graphic');?>" alt="<?php the_title(); ?> Graphic" />
				</div>

			</div> <!-- end #inner-content -->

			<div class="initiatives grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">
					<h2 class="initHeader">At A Glance</h2>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<a href="<?php the_field('init_link_1');?>">
						<img src="<?php the_field('init_image_1');?>" alt="Initiative Image 1"/>
					</a>
					<h3><?php the_field('init_title1');?></h3>
					<p><?php the_field('init_intro_1');?></p>
				  <a class="excerpt-read-more" href="<?php the_field('init_link_1');?>">Read More <span class="greenarrow excerpt"></span></a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<a href="<?php the_field('init_link_2');?>">
						<img src="<?php the_field('init_image_2');?>" alt="Initiative Image 2"/>
					</a>
					<h3><?php the_field('init_title2');?></h3>
					<p><?php the_field('init_intro_2');?></p>
					<a class="excerpt-read-more" href="<?php the_field('init_link_2');?>">Read More <span class="greenarrow excerpt"></span></a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<a href="<?php the_field('init_link_3');?>">
						<img src="<?php the_field('init_image_3');?>" alt="Initiative Image 3"/>
					</a>
					<h3><?php the_field('init_title3');?></h3>
					<p><?php the_field('init_intro_3');?></p>
					<a class="excerpt-read-more" href="<?php the_field('init_link_3');?>">Read More <span class="greenarrow excerpt"></span> </a>
				</div>

			</div>  <!-- end .initiatives -->

		</div> <!-- end .grid-container -->

		<!-- Key Issue News -->
		<div class="greyWrapper">
			<div class="grid-container">
				<div class="grid-x grid-padding-x news">
					<div class="cell small-12 medium-12 large-8 large-offset-2">
						<h2>Clean Water News</h2>
					</div>
					<div class="cell small-12 medium-12 large-2 catLink">
						<a class="readmore" href="/category/news-stories/water/">Read All <span class="greenarrow"></span></a>
					</div>

					<!--- Posts Begin -->
					<?php

						 $args = array('cat' => 16, 'posts_per_page' => 3,);
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
						<?php get_template_part( 'parts/content', 'byline' ); ?>
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
					 wp_reset_postdata();
					?>

					<!--- Posts EnD -->
				</div><!-- .news end -->
			</div>
		</div><!-- end .greyWrapper -->

				<!-- Community Action -->
			<div class="grid-container">
				<div class="grid-x grid-padding-x grid-margin-x community">
					<div class="cell small-12 medium-4 large-7 pic">
						<img src="<?php the_field('water_caucus_image');?>" />
					</div>
					<div class="cell small-12 medium-8 large-5 vidembed">
						<h2><?php the_field('caucus_title');?></h2>
						<div class="leadin"><?php the_field('caucus_leadin');?></div>
						<p><?php the_field('caucus_content');?></p>
						<a class="bold green" href="<?php the_field('caucus_link');?>"><?php the_field('caucus_link_text');?>
						</a>
					</div>
				</div><!-- .community end -->

				<?php // test to see if extra water fields are being used. If so..
				 if(get_field('extra_water_area_title')) {
					?>
					<hr>
					<!-- Extra Water <area shape="default" coords="" href="#" alt=""> -->
					<div class="grid-x grid-padding-x grid-margin-x community">
						<div class="cell small-12 medium-4 large-7 pic">
							<h2><?php the_field('xtra_water_area_title');?></h2>
							<div class="leadin"><?php the_field('extra_water_area_leadin');?></div>
							<p>
								<?php the_field('extra_water_area_content');?>
							</p>
							<a class="bold green" href="<?php the_field('extra_water_area_link_url');?>"><?php the_field('extra_water_area_link_text');?>
							</a>
						</div>
						<div class="cell small-12 medium-8 large-5 vidembed">
							<img src="<?php the_field('extra_water_area_image');?>" alt="Forest Round Table" />
						</div>
					</div><!-- .community end -->
				<?php
				}
			?>

			</div><!-- end .gridContainer -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
