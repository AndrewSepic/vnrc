<?php
/*
Template Name: Staff & Board
*/

get_header(); ?>

<?php
	$hero = get_field('page_header');
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

		<div id="heroTitle">
			<h1><?php the_title(); ?></h1>
		</div>

</header> <!-- started in header.php-->

	<div class="content">
		<div class="grid-container">

			<div class="inner-content grid-x grid-margin-x grid-padding-x">

			    <main class="main small-12 medium-12 large-12 cell" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'page' ); ?>

					<?php endwhile; endif;?>
					<div class="grid-container">
						<div class="staff grid-x grid-margin-x">
							<?php
								// check if the repeater field has rows of data
								if( have_rows('staff') ):
								// loop through the rows of data
								$i = 1;
							 while ( have_rows('staff') ) : the_row();?>


									<div class="small-12 medium-3 large-3 cell">
										<a class="openstaff" data-open="staff-<?php echo $i;?>">
											<img src="<?php the_sub_field('staff_image');?>" alt="<?php the_sub_field('staff_name');?>"/>
											<h4><?php the_sub_field('staff_name');?></h4>
											<div class="staffTitle"><?php the_sub_field('staff_title');?></div>
										</a>
									</div>
									<div class="reveal small" id="staff-<?php echo $i;?>" data-reveal>
										<div class="staffTop">
											<img src="<?php the_sub_field('staff_image');?>" alt="<?php the_sub_field('staff_name');?>"/>
											<h4><?php the_sub_field('staff_name');?></h4>
											<div class="staffTitle"><?php the_sub_field('staff_title');?></div>
										</div>
										<div class="staffBottom">
											<p><?php the_sub_field('staff_info');?></p>
											<p class="contact"><a href="tel:802-223-2328">802-223-2328</a> ext: <?php the_sub_field('staff_ext');?> | <a href="mailto:<?php the_sub_field('staff_email');?>"><?php the_sub_field('staff_email');?></a></p>
										  <button class="close-button" data-close aria-label="Close modal" type="button">
										    <span aria-hidden="true">&times;</span>
										  </button>
										</div>
									</div>
									<?php  $i++; ?>

					<?php
					endwhile;?>
						</div>
				<?php
				else :

					// no rows found

				endif;?>
				<div class="staff grid-x grid-margin-x">
					<div class="small-12 medium-12 large-12 cell vcv">
						<?php if (is_page('225')) {
							?>
								<h2>Vermont Conservation Voters</h2>
					</div>
					<?php }
					?>
						<?php
							// check if the repeater field has rows of data
							if( have_rows('vcv') && (is_page('225')) ):
							// loop through the rows of data
							$i = 1;
						 while ( have_rows('vcv') ) : the_row();?>


								<div class="small-12 medium-3 large-3 cell">
									<a class="openstaff" data-open="vcv-staff-<?php echo $i;?>">
										<img src="<?php the_sub_field('vcv_staff_image');?>" alt="<?php the_sub_field('vcv_staff_name');?>"/>
										<h4><?php the_sub_field('vcv_staff_name');?></h4>
										<div class="staffTitle"><?php the_sub_field('vcv_staff_title');?></div>
									</a>
								</div>
								<div class="reveal small" id="vcv-staff-<?php echo $i;?>" data-reveal>
									<div class="staffTop">
										<img src="<?php the_sub_field('vcv_staff_image');?>" alt="<?php the_sub_field('vcv_staff_name');?>"/>
										<h4><?php the_sub_field('vcv_staff_name');?></h4>
										<div class="staffTitle"><?php the_sub_field('vcv_staff_title');?></div>
									</div>
									<div class="staffBottom">
										<p><?php the_sub_field('vcv_staff_info');?></p>
										<p class="contact"><a href="tel:802-223-2328">802-223-2328</a> ext: <?php the_sub_field('vcv_staff_ext');?> | <a href="mailto:<?php the_sub_field('vcv_staff_email');?>"><?php the_sub_field('vcv_staff_email');?></a></p>
										<button class="close-button" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
								<?php  $i++; ?>

						<?php
						endwhile;?>
					</div>
					<?php
					else :

						// no rows found

					endif;?>
					</div> <!-- end .grid-container -->
				</main> <!-- end #main -->

			</div> <!-- end #inner-content -->

		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>
