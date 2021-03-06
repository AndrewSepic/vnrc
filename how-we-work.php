<?php
/*
Template Name: How We Work
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

			    <div class="small-12 medium-12 large-10 large-offset-1 cell intro" >
						<h2 class="centered"><?php the_field('how_we_work_title');?></h2>
						<p><?php the_field('how_we_work_intro');?></p>
					</div>
			</div>
		</div>

		<div class="greyWrapper">
			<div class="grid-container">
				<h2>Learn More about our Key Issues</h2>
				<div class="grid-x icons">
					<div class="cell large-auto">
						<a href="<?php the_field('climate_action','option');?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/energy.svg" alt="Energy & Climate Action"/>
							<h4>Clean Energy & Climate Action</h4>
						</a>
					</div>
					<div class="cell large-auto">
						<a href="<?php the_field('clean_water','option');?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/clean-water.svg" alt="Clean Water"/>
							<h4>Clean Water</h4>
						</a>
					</div>
					<div class="cell large-auto">
						<a href="<?php the_field('toxic_free','option');?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/toxic-free.svg" alt="Toxic Free Environment"/>
							<h4>Toxic-Free Environment</h4>
						</a>
					</div>
					<div class="cell large-auto">
						<a href="<?php the_field('smart_growth','option');?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/smart-growth.svg" alt="Smart Growth"/>
							<h4>Smart Growth</h4>
						</a>
					</div>
					<div class="cell large-auto">
						<a href="<?php the_field('health_forests','option');?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/forests.svg" alt="Healthy Forests & Wildlife"/>
							<h4>Healthy Forests & Wildlife</h4>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="grid-x">

			<div class="small-12 medium-6 large-6 cell statehouse">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 222.75 330.32"><defs><style>.cls-1{fill:#FFF;}</style></defs><title>energyAsset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M199.09,294.24l0-49.07H212.7V216H197.12s0-29.21-19.46-54.51-42.86-37-42.86-37L134.44,97H125.7q.08,4.55.31,9.08a101,101,0,0,0-28.52-.64c-.33,0-.77,0-.88-.3s.62-.37.43-.09l.71-.71a8.46,8.46,0,0,0,1.59-5.94,11.19,11.19,0,0,0-.28-1.4h-9.4L90,124.5s-23.36,11.69-42.82,37S27.74,216,27.74,216H12.16v29.18H25.77v49.07H0l0,35.7,1,.38,117.13-27.91L222.75,330V294.27Zm-123.46-.55H49.72V245.36l25.91,0Zm23.47,0V245.38H125l0,48.34Zm49.33,0,0-48.33,25.91,0,0,48.31Z"/><path class="cls-1" d="M97.75,104.32,97,105c.19-.28-.54-.23-.43.09s.55.33.88.3a101,101,0,0,1,28.52.64q-.24-4.53-.31-9.08-.18-9.63.35-19.26c.2-3.62.45-7.4-1-10.73a15.89,15.89,0,0,1-1.52-3.74,9.25,9.25,0,0,1,.18-3q.89-5.3,1.78-10.58a1.72,1.72,0,0,1,.5-1.15,1.68,1.68,0,0,1,1.15-.22c2.79.14,5.91.54,8.08-1.21a6.54,6.54,0,0,0,2.13-5.25A18.12,18.12,0,0,0,136,36.16a6.78,6.78,0,0,0-1.23-2.37c-2.06-2.24-5.68-1-8.72-.91a1.61,1.61,0,0,1-1.08-.26c-.44-.35-.43-1-.48-1.57-.23-2.16-2-3.85-3.82-5s-3.91-2-5.49-3.48-2.56-3.94-1.53-5.85a15.7,15.7,0,0,1,1.56-2,7.71,7.71,0,0,0,.5-7.43,19.13,19.13,0,0,0-4.68-6.15,3.35,3.35,0,0,0-2-1.15,3.47,3.47,0,0,0-2.43,1.23c-2.8,2.57-5.85,5.93-5,9.62a13.42,13.42,0,0,0,2.39,4.24c.93,1.34,2.15,3,1.56,4.52-1.52,3.93-5.37,4.86-6.87,5.58-3,1.45-4.62,4.85-5.18,8.15s-.31,6.7-.83,10c-.39,2.41-1.17,4.73-1.66,7.12a32.47,32.47,0,0,0,.57,14.86,7.58,7.58,0,0,1,.44,3.48,5.1,5.1,0,0,1-2.57,3.12,3.63,3.63,0,0,0,6.54,1.12c1.43,2.19,1,5,.73,7.65a32.74,32.74,0,0,0,1.24,13.17c.33,1,.72,2.05,1,3.1a11.19,11.19,0,0,1,.28,1.4A8.46,8.46,0,0,1,97.75,104.32Z"/></g></g></svg>
				<h3>State House</h3>
				<p><?php the_field('statehouse_text');?></p>
				<p><?php the_field('statehouse_linktext');?></p>
			</div>

			<div class="small-12 medium-6 large-6 cell partnerships">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352.64 338.17"><defs><style>.cls-1{fill:#FFF;}</style></defs><title>energyAsset 5</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M3.86,262H98.91a3.81,3.81,0,1,0,0-7.62h-95a3.81,3.81,0,1,0,0,7.62Z"/><path class="cls-1" d="M128.46,256.56V208.91l23.43-23.18H176a3.81,3.81,0,1,0,0-7.62H159.6l18-17.78h24.09a3.81,3.81,0,1,0,0-7.62H185.3l18-17.78h24.09a3.81,3.81,0,1,0,0-7.62H211l19.11-18.9a3.74,3.74,0,0,0,0-5.38,3.89,3.89,0,0,0-5.44,0l-70.5,69.7V156.52a3.86,3.86,0,0,0-7.71,0v23.83l-18,17.78v-40l23.43-23.17H176a3.82,3.82,0,1,0,0-7.63H159.6l18-17.78h24.1a3.81,3.81,0,1,0,0-7.62H185.3L204.41,83a3.74,3.74,0,0,0,0-5.38,3.87,3.87,0,0,0-5.44,0l-44.83,44.29V105.71a3.86,3.86,0,0,0-7.71,0v23.83l-18,17.78,0-40,23.43-23.17H176a3.81,3.81,0,1,0,0-7.62H159.6l19.11-18.89a3.74,3.74,0,0,0,0-5.38,3.87,3.87,0,0,0-5.44,0L154.16,71.13V54.92a3.86,3.86,0,0,0-7.71,0V78.75l-18,17.78V56.48L153,32.19a3.77,3.77,0,0,0,0-5.39,3.9,3.9,0,0,0-5.45,0L128.46,45.71V4.1a3.86,3.86,0,0,0-7.71,0V45.71L101.63,26.82a3.89,3.89,0,0,0-5.44,0,3.76,3.76,0,0,0,0,5.38l24.56,24.29v40l-18-17.78V54.91a3.86,3.86,0,0,0-7.71,0v16.2L75.93,52.22a3.89,3.89,0,0,0-5.44,0,3.76,3.76,0,0,0,0,5.38L89.6,76.5H73.22a3.81,3.81,0,1,0,0,7.62h24.1l23.43,23.16v40l-18-17.78V105.7a3.86,3.86,0,0,0-7.71,0v16.21L50.26,77.61a3.89,3.89,0,0,0-5.44,0,3.76,3.76,0,0,0,0,5.38l19.11,18.9H47.55a3.81,3.81,0,1,0,0,7.62h24.1l18,17.78H73.25a3.81,3.81,0,1,0,0,7.62h24.1l23.43,23.18,0,40-18-17.78V156.52a3.86,3.86,0,0,0-7.71,0v16.21L24.56,103a3.89,3.89,0,0,0-5.44,0,3.76,3.76,0,0,0,0,5.38l19.12,18.9H21.85a3.81,3.81,0,1,0,0,7.62H46l18,17.78H47.55a3.81,3.81,0,1,0,0,7.62h24.1l18,17.78H73.25a3.81,3.81,0,1,0,0,7.62h24.1l23.43,23.18v47.65l-75.94,75.1a3.74,3.74,0,0,0,0,5.38,3.9,3.9,0,0,0,5.45,0l70.49-69.71V282L70.51,331.66a3.74,3.74,0,0,0,0,5.38,3.85,3.85,0,0,0,2.72,1.11A3.89,3.89,0,0,0,76,337l44.79-44.29v14.62L96.19,331.66a3.76,3.76,0,0,0,0,5.38,3.91,3.91,0,0,0,5.46,0l19.11-18.89v16.09s0,.07,0,.12a3.43,3.43,0,0,0,.3,1.41c0,.13.13.26.2.4s.14.25.21.37a3.8,3.8,0,0,0,1.68,1.33,2.49,2.49,0,0,0,.53.16l.18.06a4,4,0,0,0,.78.08,3.79,3.79,0,0,0,2.33-.82c.14-.1.27-.19.39-.29a3.51,3.51,0,0,0,.62-.88,3.78,3.78,0,0,0,.49-1.82V318.15L147.58,337a3.9,3.9,0,0,0,5.45,0,3.74,3.74,0,0,0,0-5.38l-24.56-24.29V292.75L173.28,337a3.9,3.9,0,0,0,5.45,0,3.74,3.74,0,0,0,0-5.38L128.46,282V267.34l70.48,69.71a3.89,3.89,0,0,0,5.46,0,3.76,3.76,0,0,0,0-5.38Z"/><path class="cls-1" d="M348.78,261.67H253.72a3.81,3.81,0,1,1,0-7.62h95.06a3.81,3.81,0,1,1,0,7.62Z"/><path class="cls-1" d="M224.18,256.27V208.62l-23.43-23.17h-24.1a3.82,3.82,0,1,1,0-7.63H193l-18-17.78H151a3.81,3.81,0,1,1,0-7.62h16.39l-18-17.78h-24.1a3.81,3.81,0,1,1,0-7.62h16.42l-19.12-18.9a3.76,3.76,0,0,1,0-5.38,3.89,3.89,0,0,1,5.44,0l70.5,69.7V156.23a3.86,3.86,0,0,1,7.71,0v23.83l18,17.78v-40l-23.43-23.18h-24.1a3.81,3.81,0,1,1,0-7.62H193l-18-17.78H151a3.82,3.82,0,1,1,0-7.63h16.39L148.22,82.72a3.76,3.76,0,0,1,0-5.38,3.87,3.87,0,0,1,5.44,0l44.83,44.29V105.42a3.86,3.86,0,0,1,7.71,0v23.83l18,17.79V107L200.75,83.85h-24.1a3.82,3.82,0,1,1,0-7.63H193L173.92,57.33a3.76,3.76,0,0,1,0-5.38,3.89,3.89,0,0,1,5.44,0l19.12,18.89V54.63a3.86,3.86,0,0,1,7.71,0V78.46l18,17.78v-40L199.62,31.9a3.76,3.76,0,0,1,0-5.38,3.87,3.87,0,0,1,5.44,0l19.12,18.9V3.81a3.86,3.86,0,0,1,7.71,0V45.42L251,26.53a3.9,3.9,0,0,1,5.45,0,3.76,3.76,0,0,1,0,5.38L231.89,56.2v40l18-17.78V54.62a3.86,3.86,0,0,1,7.71,0V70.83l19.11-18.9a3.9,3.9,0,0,1,5.45,0,3.77,3.77,0,0,1,0,5.39L263,76.21h16.39a3.81,3.81,0,1,1,0,7.62h-24.1L231.89,107v40l18-17.78V105.41a3.86,3.86,0,0,1,7.71,0v16.21l44.78-44.3a3.9,3.9,0,0,1,5.45,0,3.76,3.76,0,0,1,0,5.38L288.7,101.6h16.39a3.81,3.81,0,1,1,0,7.62H281L263,127h16.39a3.81,3.81,0,1,1,0,7.62h-24.1L231.86,157.8l0,40,18-17.78V156.23a3.86,3.86,0,0,1,7.71,0v16.21l70.48-69.7a3.89,3.89,0,0,1,5.44,0,3.74,3.74,0,0,1,0,5.38L314.4,127h16.38a3.81,3.81,0,1,1,0,7.62H306.69l-18,17.78h16.38a3.81,3.81,0,1,1,0,7.62H281l-18,17.78h16.38a3.82,3.82,0,1,1,0,7.63H255.29l-23.43,23.17v47.65l75.94,75.1a3.76,3.76,0,0,1,0,5.38,3.91,3.91,0,0,1-5.46,0L231.86,267v14.62l50.27,49.71a3.76,3.76,0,0,1,0,5.38,3.91,3.91,0,0,1-5.46,0l-44.78-44.29v14.62l24.55,24.29a3.74,3.74,0,0,1,0,5.38,3.9,3.9,0,0,1-5.45,0l-19.12-18.89V334s0,.07,0,.12a3.6,3.6,0,0,1-.3,1.41c-.06.13-.13.26-.21.4s-.13.25-.21.37a3.78,3.78,0,0,1-1.67,1.33,4,4,0,0,1-.53.17l-.18.06a5.16,5.16,0,0,1-.79.07,4.53,4.53,0,0,1-.74-.07,3.83,3.83,0,0,1-1.59-.75l-.38-.29a3.38,3.38,0,0,1-.63-.88,3.85,3.85,0,0,1-.48-1.82V317.86l-19.12,18.89a3.89,3.89,0,0,1-5.46,0,3.76,3.76,0,0,1,0-5.38l24.56-24.29V292.46l-44.8,44.29a3.89,3.89,0,0,1-5.46,0,3.76,3.76,0,0,1,0-5.38l50.27-49.69V267.05l-70.48,69.72a3.91,3.91,0,0,1-5.46,0,3.77,3.77,0,0,1,0-5.39Z"/><path class="cls-1" d="M148.84,262h58.33a3.81,3.81,0,1,0,0-7.62H148.84a3.81,3.81,0,1,0,0,7.62Z"/></g></g></svg>
				<h3>Partnerships</h3>
				<p><?php the_field('partnerships_text');?></p>
				<p><?php the_field('partnerships_link_text');?></p>
			</div>

		</div>

		<div class="grid-container">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
				<div class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'page' ); ?>

					<?php endwhile; endif; ?>

				</div>
			</div>
		</div>

		<div class="howSupportWrapper" style="background-image: url('<?php the_field('howSupport_image'); ?>');">
			<div class="grid-container">
				<div class="grid-x grid-padding-x grid-margin-x howSupport">
					<div class="cell small-12 medium-12 large-12">
						<h2><?php the_field('support_us_title'); ?></h2>
						<p><?php the_field('support_us_text'); ?></p>
						<p class="thankyou"><?php the_field('thankyou_text');?></p>
						<a class="button" href="/donate">Donate Today</a>
					</div>

				</div>
			</div> <!-- end grid-container -->
		</div> <!-- end .howSupportWrapper -->

			</div> <!-- end #inner-content -->

		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>
