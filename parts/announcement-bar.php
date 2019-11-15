<?php
/**
 * The template part for displaying The Announcement Bar
 */
?>

<?php
// Is the Announcement Bar actived ?
if( get_field('activate', 'option' ) ): ?>

  <?php // What type of Anncouncement?
   if( get_field('announcement_color', 'option') == 'red' ):
       $color = 'red';
   elseif( get_field('announcement_color', 'option') == 'grey'):
     $color = 'grey';
   endif; ?>

  <div class="announcement <?php echo $color; ?> grid-x grid-padding-x" style="display:none;">
    <div class="cell small-12 large-4">
      <img src="<?php the_field('announcement_image', 'option');?>" alt="announcement image"/>
    </div>
    <div class="cell small-12 large-8">
        <!-- Announcement Message -->
        <h3><?php the_field('announcement_title', 'option');?></h3>
        <p><?php the_field('announcement_text', 'option');?></p>
        <?php
        // If User wants button
        if( !get_field('toggle_button', 'option') ): ?>

 	       <a class="button" href="<?php the_field('button_link','option');?>"><?php the_field('button_text', 'option');?></a>

        <?php endif; ?>

       <a id="closeit">CLOSE <b>X</b></a>
    </div>
  </div>
<?php endif; ?>

<!--  Announcement Bar  END -->
