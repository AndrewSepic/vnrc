<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<div id="logo">
			<a href="<?php echo home_url(); ?>">
				<img class="logo green" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/green-logo.svg" alt="<?php echo get_bloginfo( 'name' );?>"/>
				<img class="logo white" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/white-logo.svg" alt="<?php echo get_bloginfo( 'name' );?>"/>
			</a></li>
		</div>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>
		<button class="button informed hide-for-small-only" data-open="enews" aria-controls="enews" aria-haspopup="true" tabindex="0">Stay Informed</button>
	</div>

	<div class="top-bar-right show-for-small-only">
		<div class="hamburger" id="hamburger-1" data-toggle="off-canvas">
			 <span class="line"></span>
			 <span class="line"></span>
			 <span class="line"></span>
		 </div>
	</div>
</div>