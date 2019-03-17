<?php
/*
Template Name: Key Issues Template
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
					<h2 class="initHeader">Initiatives</h2>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<img src="<?php the_field('init_image_1');?>" alt="Initiative Image 1"/>
					<h3><?php the_field('init_title1');?></h3>
					<p><?php the_field('init_intro_1');?></p>
				  <a class="excerpt-read-more" href="<?php the_field('init_link_1');?>">Read More <span class="greenarrow excerpt"></span></a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<img src="<?php the_field('init_image_2');?>" alt="Initiative Image 2"/>
					<h3><?php the_field('init_title2');?></h3>
					<p><?php the_field('init_intro_2');?></p>
					<a class="excerpt-read-more" href="<?php the_field('init_link_2');?>">Read More <span class="greenarrow excerpt"></span></a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<img src="<?php the_field('init_image_3');?>" alt="Initiative Image 3"/>
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
						<h2>Smart Growth News</h2>
					</div>
					<div class="cell small-12 medium-12 large-2 catLink">
						<a class="readmore" href="/category/news">Read All <span class="greenarrow"></span></a>
					</div>

					<!--- Posts Begin -->
					<?php

						 $args = array('cat' => 3);
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

				<!-- Video Section -->
				<div class="grid-x grid-padding-x video">
					<div class="cell small-12 medium-4 large-5 vidContent">
						<h2><?php the_field('video_title', 'option');?></h2>
						<div class="leadin"><?php the_field('video_leadin', 'option'); ?></div>
						<div class="text"><?php the_field('video_text', 'option');?></div>
						<a class="videoLink" href="<?php the_field('video_link_url', 'option');?>"><?php the_field('video_link_text', 'option');?><span class="circle"><i class="fi-arrow-right"></i></span></a>

					</div>
					<div class="cell small-12 medium-8 large-7 vidembed">
						<?php the_field('video_embed', 'option');?>
					</div>
				</div><!-- .video end -->

				<!-- Community Action -->
				<div class="grid-x grid-padding-x grid-margin-x community">
					<div class="cell small-12 medium-4 large-7 pic">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/energy-committee.png" alt="VNRC Energy committee" />
					</div>
					<div class="cell small-12 medium-8 large-5 vidembed">
						<h2>Community Action</h2>
						<div class="leadin">Energy Committees</div>
						<p>
							In the beginning of the summer I placed one in the Chartreux, without the sanction of a recommendation so distinct and so authoritative as yours of Macbean; and I am afraid, that according to the establishment of the House, the opportunity of making the charity so good amends will not soon recur.
						</p>
						<a class="bold green" href="#">Learn More about our associate organization, VECAN.
							<img class="vecan-logo" src="<?php echo get_template_directory_uri();?>/assets/images/svg/vecan-color-logo.svg" alt="VECAN VErmont Energy & Climate Action Network"/>
						</a>
					</div>
				</div><!-- .community end -->

			</div><!-- end .gridContainer -->
		</div><!-- end .greyWrapper -->

		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-x resources">

				<div class="cell small-12 medium-12 large-8 large-offset-2">
					<h2>Resources</h2>
				</div>
				<div class="cell small-12 medium-12 large-2 catLink">
					<a class="readmore" href="/category/news">View More <span class="greenarrow"></span></a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<a href="#">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/toolbox.png" alt="COmmunity toolbox"/>
						<h3>Community Planning Toolbox</h3>
					</a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<a href="#">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/reports.png" alt="Initiative Image 2"/>
						<h3>Smart Growth Progress Report</h3>
					</a>
				</div>

				<div class="small-12 medium-4 large-4 cell">
					<a href="#">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/landuse.png" alt="Initiative Image 3"/>
						<h3>Land Use Planning Resources</h3>
					</a>
				</div>

			</div>  <!-- end .resources -->
		</div> <!-- end .gridContainer -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
