<?php
/*
Template Name: Statehouse
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

				<div class="small-12 medium-12 large-10 large-offset-1 cell intro">
					<p><?php the_field('state_house_intro');?></p>
				</div>

			</div> <!-- end #inner-content -->

			<div class="initiatives grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">
					<h2 class="initHeader">Current Bills</h2>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<img src="<?php the_field('bill_image_1');?>" alt="Bill Image 1"/>
					<h3><?php the_field('bill_title1');?></h3>
					<p><?php the_field('bill_intro_1');?></p>
				  <a class="excerpt-read-more" href="<?php the_field('bill_link_1');?>">Learn More <span class="greenarrow excerpt"></span></a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<img src="<?php the_field('bill_image_2');?>" alt="Bill Image 2"/>
					<h3><?php the_field('bill_title2');?></h3>
					<p><?php the_field('bill_intro_2');?></p>
					<a class="excerpt-read-more" href="<?php the_field('bill_link_2');?>">Learn More <span class="greenarrow excerpt"></span></a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<img src="<?php the_field('bill_image_3');?>" alt="Bill Image 3"/>
					<h3><?php the_field('bill_title3');?></h3>
					<p><?php the_field('bill_intro_3');?></p>
					<a class="excerpt-read-more" href="<?php the_field('bill_link_3');?>">Learn More <span class="greenarrow excerpt"></span> </a>
				</div>

			</div>  <!-- end .initiatives -->

		</div> <!-- end .grid-container -->

		<!-- Key Issue News -->
		<div class="greyWrapper">
			<div class="grid-container">
				<div class="grid-x grid-padding-x news">
					<div class="cell small-12 medium-12 large-8 large-offset-2">
						<h2>Legislative News</h2>
					</div>
					<div class="cell small-12 medium-12 large-2 catLink">
						<a class="readmore" href="/category/news">Read All <span class="greenarrow"></span></a>
					</div>

					<!--- Posts Begin -->
					<?php

						 $args = array('cat' => 15, 'posts_per_page' => 3,);
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
						 wp_reset_postdata();
					?>
					<!--- Posts EnD -->
				</div><!-- .news end -->
			</div><!-- end .gridContainer -->
		</div><!-- end .greyWrapper -->


		<div class="grid-container">
			<!-- Parcelization -->
				<div class="grid-x grid-padding-x grid-margin-x community">
					<div class="cell small-12 medium-4 large-7 pic">
						<img src="<?php the_field('act250_image');?>" alt="Act 250" />
					</div>
					<div class="cell small-12 medium-8 large-5 vidembed">
						<h2><?php the_field('act250_title');?></h2>
						<div class="leadin"><?php the_field('act250_leadin');?></div>
						<p>
							<?php the_field('act250_content');?>
						</p>
						<a class="bold green" href="<?php the_field('act250_link_url');?>"><?php the_field('act250_link_text');?>
						</a>
					</div>
				</div><!-- .community end -->
				<hr>
				<!-- Forest Round Table -->
				<div class="grid-x grid-padding-x grid-margin-x community">
					<div class="cell small-12 medium-4 large-7 pic">
						<h2><?php the_field('vcv_title');?></h2>
						<div class="leadin"><?php the_field('vcv_leadin');?></div>
						<p>
							<?php the_field('vcv_content');?>
						</p>
						<a class="bold green" href="<?php the_field('vcv_link_url');?>"><?php the_field('vcv_link_text');?>
						</a>
					</div>
					<div class="cell small-12 medium-8 large-5 vidembed">
						<img src="<?php the_field('vcv_image');?>" alt="Vermont Conservation Voters" />
					</div>
				</div><!-- .community end -->
			</div><!-- end .gridContainer -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
