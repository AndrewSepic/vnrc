<?php
/*
Template Name: Support Us
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

			<div class="inner-content grid-x grid-margin-x grid-padding-x supportUs">

			    <div class="small-12 medium-12 large-10 large-offset-1 cell intro" >
						<h2>Ways to Give</h2>
						<p><?php the_field('support_intro');?></p>
					</div>

					<div class="small-12 medium-4 large-5 cell images">
					<?php
						$images = get_field('images');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)

						if( $images ): ?>
						    <ul>
						        <?php foreach( $images as $image ): ?>
						            <li>
						            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif; ?>
					</div>

					<div class="small-12 medium-8 large-7 cell">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'parts/loop', 'page' ); ?>

						<?php endwhile; endif; ?>

					</div>
					<div class="supportContacts grid-x grid-padding-x grid-margin-x">
						<div class="small-12 medium-6 large-5 cell ">
							<div class="matte" style="background-image: url('<?php the_field('supportContact1_image');?>')"></div>
							<p><?php the_field('supportContact1_text');?></p>
						</div>

						<div class="small-12 medium-6 large-5 large-offset-1 cell ">
							<div class="matte" style="background-image: url('<?php the_field('supportContact2_image');?>')"></div>
							<p><?php the_field('supportContact2_text');?></p>
						</div>
							<div class="small-12 medium-12 large-12 cell bymail ">
								<?php the_field('supportbymail');?>
							</div>

					</div>

			</div> <!-- end #inner-content -->

		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>
