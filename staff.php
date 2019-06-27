<?php
/*
Template Name: Staff & Board
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

			    <main class="main small-12 medium-12 large-12 cell" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'page' ); ?>

					<?php endwhile; endif;?>

					<div class="staff grid-x grid-margin-x grid-padding-x">
						<?php
							// check if the repeater field has rows of data
							if( have_rows('staff') ):

						// loop through the rows of data
							while ( have_rows('staff') ) : the_row();?>

						<div class="small-12 medium-4 large-4 cell">
							<a class="openstaff" href="#">
								<img src="<?php the_sub_field('staff_image');?>" alt="<?php the_sub_field('staff_name');?>"/>
								<h3><?php the_sub_field('staff_name');?></h3>
								<h4><?php the_sub_field('staff_title');?></h4>
							</a>
							<div class="info">
								<p><?php the_sub_field('staff_info');?></p>
								<p><?php the_sub_field('staff_phone');?> | <a href="mailto:<?php the_sub_field('staff_email');?>"><?php the_sub_field('staff_email');?></a></p>
							</div>
						</div>


				<?php
				endwhile;?>
					</div>
				<?php
				else :

					// no rows found

				endif;?>

				</main> <!-- end #main -->

			</div> <!-- end #inner-content -->

		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>
