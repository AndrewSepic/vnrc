<?php
/*
Template Name: Homepage
*/

get_header(); ?>
	<?php $hero = get_field('hero_section', 'option');
		if ( $hero ): ?>
	<header class="header" role="banner" style="background-image: url('<?php echo $hero['hero_image']['url']; ?>')">
		 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
		<div class="grid-x grid-margin-x heroWrapper">
					<div id="hero">
						<!-- <img src="" alt="Vermont Afterschool" /> -->
						<div class="grid-container">
							<div id="heroTitle" class="cell small-12 large-4">
								<h4><?php echo $hero['headline']; ?></h4>
								<span class="since"><?php echo $hero['since']; ?></span>
							</div>
						</div>
					</div>
				<?php endif; ?>
		</div>
	</header> <!-- started in header.php-->

		<div class="content">

			<div class="inner-content grid-x grid-margin-x">
		    <main class="main small-12 medium-12 large-12 cell" role="main">

					<!-- First Section -->
					<div class="firstWrapper">
						<div class="arrow"></div>
						<div class="grid-container">
							<div class="grid-x home-1">
								<div class="cell small-12 medium-12 large-8 large-offset-2">
									<h2>We Are Vermont Afterschool</h2>
									<p>A staewide non-profit The grid defaults to the full width of the available space. To contain it use the grid-container class. The container will be centered and have a max-width equal to your $grid-container setting (1200px by default), along with padding on the left/right equal to half your $grid-container-padding setting.</p>
								</div>
							</div>
						</div>
					</div><!-- end .firstWrapper -->

					<!-- Second Section -->
					<div class="secondWrapper">
						<div class="arrow"></div>
						<div class="grid-container">
							<div class="grid-x home-2">
								<div class="cell small-12 medium-6 large-5 large-offset-6 medium-offset-6">
										<h2>Why We Do This Work</h2>
										<p>A staewide non-profit The grid defaults to the full width of the available space. To contain it use the grid-container class. </p>
										<a class="button">Impacts</a>
								</div>
							</div>
						</div>
					</div><!-- end .secondWrapper -->

					<!-- Third Section -->
					<div class="thirdWrapper">
						<div class="arrow"></div>
						<div class="grid-container">
							<div class="grid-x home-3">
								<div class="cell small-12 medium-6 large-5 large-offset-1">
									<h2>We Rely on Colloboration</h2>
									<p>A statewide non-profit The grid defaults to the full width of the available space. To contain it use the grid-container class. </p>
									<a class="button orange">Join Us</a> <a class="button">Learn More</a>
								</div>
								<div class="cell small-12 medium-6 large-5">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/logos.jpg" alt="collaborators"/>
								</div>
							</div>
						</div>
					</div><!-- end .third -->

					<div class="noteWrapper">
						<div class="grid-container">
							<div class="grid-x grid-padding-x grid-margin-x noteworthy">
								<div class="cell small-12 medium-12 large-12 header">
									<h5>Noteworthy</h5>
									<a class="pagination">View All Posts &raquo;</a>
								</div>


									<div class="cell small-12 medium-4 large-4 post">
										<span class="cat">Opinion</span>
										<h2>Post Title With Two Lines</h2>
										<span class="meta">By Author, Position</span>
										<?php // get_template_part( 'parts/content', 'byline' ); ?>
										<p class="excerpt">It was recently public radio fundraising time here in Vermont. Im a big VErmont Public Radio fan and have been knonw to stay tuned through their repeated membership pitches.</p>
										<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
									</div>

									<div class="cell small-12 medium-4 large-4 post">
										<span class="cat">News</span>
										<h2>Call for Youth Art</h2>
										<span class="meta">By Author, Position</span>
										<?php // get_template_part( 'parts/content', 'byline' ); ?>
										<p class="excerpt">It was recently public radio fundraising time here in Vermont. Im a big VErmont Public Radio fan and have been knonw to stay tuned through their repeated membership pitches.</p>
										<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
									</div>

									<div class="cell small-12 medium-4 large-4 post">
										<span class="cat">Data Digest</span>
										<h2>Weapons & School Violence</h2>
										<span class="meta">By Author, Position</span>
										<?php // get_template_part( 'parts/content', 'byline' ); ?>
										<p class="excerpt">It was recently public radio fundraising time here in Vermont. Im a big VErmont Public Radio fan and have been knonw to stay tuned through their repeated membership pitches.</p>
										<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
									</div>
							</div>
						</div> <!-- end grid-container -->
					</div> <!-- end .ntnWrapper -->

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->



	</div> <!-- end #content -->

<?php get_footer(); ?>