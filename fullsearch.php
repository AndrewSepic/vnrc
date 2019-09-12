<?php
/**
 * The template is for displaying the enewsletter sign up modal
 *
 *  It contains the code to bring in ACF field to allow client to add embed code.
 *
 *
 */
?>
<div class="full reveal" id="fullsearch" data-reveal>
  <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  	<label>
  		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" autofocus />
  	</label>
    <input type="hidden" name="site_section" value="site_search">
  	<input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'jointswp' ) ?>" />
  </form>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
