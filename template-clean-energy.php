<?php
/*
Template Name: Climate & Clean Energy
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
						<h2>Climate Action News</h2>
					</div>
					<div class="cell small-12 medium-12 large-2 catLink">
						<a class="readmore" href="/category/news">Read All <span class="greenarrow"></span></a>
					</div>

					<!--- Posts Begin -->
					<?php

						 $args = array('cat' => 17, 'posts_per_page' => 3,);
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

				<!-- Video Section -->
				<div class="grid-x grid-padding-x video">
					<div class="cell small-12 medium-4 large-5 vidContent">
						<h2><?php the_field('video_title_cleanenergy', '99');?></h2>
						<div class="leadin"><?php the_field('video_leadin_cleanenergy', '99'); ?></div>
						<div class="text"><?php the_field('video_text_cleanenergy', '99');?></div>
						<a class="videoLink" href="<?php the_field('video_link_url_cleanenergy','99');?>"><?php the_field('video_link_text_cleanenergy','99');?><span class="whitearrow"></span></a>

					</div>
					<div class="cell small-12 medium-8 large-7 vidembed">
						<?php the_field('video_embed_cleanenergy','99');?>
					</div>
				</div><!-- .video end -->

				<!-- Community Action -->
				<div class="grid-x grid-padding-x grid-margin-x community">
					<div class="cell small-12 medium-4 large-7 pic">
						<img src="<?php the_field('vecan_image');?>" alt="VECAN Energy committee" />
					</div>
					<div class="cell small-12 medium-8 large-5 vidembed">
						<h2><?php the_field('vecan_title','99');?></h2>
						<div class="leadin"><?php the_field('vecan_leadin','99');?></div>
						<p><?php the_field('vecan_content','99');?></p>
						<a class="bold green" href="<?php the_field('vecan_link','99');?>"><?php the_field('vecan_link_text','99');?>
							<img class="vecan-logo" src="<?php echo get_template_directory_uri();?>/assets/images/svg/vecan-color-logo.svg" alt="VECAN VErmont Energy & Climate Action Network"/>
						</a>
					</div>
				</div><!-- .community end -->

			</div><!-- end .gridContainer -->
		</div><!-- end .greyWrapper -->

		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-x resources">

				<div class="cell small-12 medium-12 large-8 large-offset-2">
					<h2><?php the_field('resources_title','99');?></h2>
				</div>
				<div class="cell small-12 medium-12 large-2 catLink">
					<a class="readmore" href="/category/news">View More <span class="greenarrow"></span></a>
				</div>

				<?php
				// check if the repeater field has rows of data
				if( have_rows('resources','99') ):

		 	// loop through the rows of data
		    while ( have_rows('resources','99') ) : the_row();?>

				<div class="small-12 medium-4 large-4 cell">
					<a href="<?php the_sub_field('resource_url','99');?>">
						<img src="<?php the_sub_field('resource_image','99');?>" alt="Community toolbox"/>
	 					<h3><?php the_sub_field('resource_title','99');?></h3>
					</a>
				</div>

			<?php
    	endwhile;

			else :

    		// no rows found

			endif;?>

			</div>  <!-- end .resources -->
		</div> <!-- end .gridContainer -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
