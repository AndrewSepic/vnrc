<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>
        <!-- Enews signup modal -->
        <?php get_template_part('signupmodal');?>
        <?php get_template_part('fullsearch');?>

				<footer class="footer" role="contentinfo">
          <div class="grid-container">
            <div class="top-footer grid-x grid-padding-x grid-margin-x">
              <div class="small-12 medium-6 large-6 cell subscribe">
                <h4><?php the_field('stay_informed_title', 'option');?></h4>
                <p><?php the_field('stay_informed_text', 'option');?></p>
                <a class="button green" data-open="enews">Sign Up</a>
              </div>

              <div class="small-12 medium-6 large-6 cell reports">
                <img src="<?php the_field('reports_image', 'option');?>" alt="VNRC Reports & Plublications"/>
                <h4><?php the_field('reports_title', 'option');?></h4>
                <p><?php the_field('reports_text', 'option');?></p>
              </div>
            </div><!-- end .top-footer -->
          </div>
          <div class="bottomFooterWrapper">
            <div class="grid-container">
    					<div class="bottom-footer grid-x grid-padding-x">

                <div class="small-12 medium-6 large-3 cell vnrc">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-white.png" alt="Vermont Natural Resrouces Council Logo"/>
    							<p><?php the_field('contact_info', 'option');?></p>
    	    			</div>

                <div class="small-12 medium-6 large-5 cell associates"/>
                  <h5>Visit our Associate Organizations</h5>
                  <a href="http://vermontconservationvoters.com/" target="_blank"><img class="vcv" src="<?php echo get_template_directory_uri();?>/assets/images/svg/vcv-white.png" alt="Vermont Conservation Voters"/></a>
                  <a href="http://vecan.net/" target="_blank"><img class="vecan" src="<?php echo get_template_directory_uri();?>/assets/images/svg/vecan-white.svg" alt="Vermont Energy & Climate Action Network"/></a>
                  <a href="http://freevermontrivers.org/" target="_blank"><img class="vcv" src="<?php echo get_template_directory_uri();?>/assets/images/svg/fvtr.svg" alt="Vermont Energy & Climate Action Network"/></a>
                </div>

                <div class="small-12 medium-12 large-4 cell links">
                  <div class="follow">
                    <h5>Follow Us</h5>
                    <a href="http://www.facebook.com/pages/Vermont-Natural-Resources-Council-VNRC/210368456477" target="_blank"><i class="fi-social-facebook"></i></a>
                    <a href="https://twitter.com/VNRCorg" target="_blank"><i class="fi-social-twitter"></i></a>
                    <a href="https://www.instagram.com/vt_naturalresources/" target="_blank"><i class="fi-social-instagram"></i></a>
                  </div>
                  <div class="support">
                    <h5>Support VNRC</h5>
                    <a href="<?php the_field('donate_link', 'option');?>" class="button orange">Donate Today</a>
                  </div>
                  <p><?php the_field('nonprofit_subscript', 'option');?></p>
                </div>

                <div class="small-12 medium-12 large-12 cell pageinfo">
    							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Site made with &hearts; by <a href="http://thinkupdesign.ca/"/>Think Up! Design</a>.</p>
    						</div>

    					</div> <!-- end .bottom-footer -->
            </div> <!-- end .grid-container -->
          </div> <!-- end .bottomFooterWrapper -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>
         <!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-HMNQ15V3G1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-HMNQ15V3G1');
		</script>

	</body>

</html> <!-- end page -->
