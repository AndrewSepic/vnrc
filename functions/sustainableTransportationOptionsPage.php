<?php
// create custom plugin settings menu
add_action('admin_menu', 'register_sustainable_transportation_create_menu');

function  register_sustainable_transportation_create_menu() {

	//create new top-level menu
	//add_menu_page('My Cool Plugin Settings', 'Cool Settings', 'administrator', __FILE__, 'sustainable_transportation_settings_page' , "dashicons-text-page");
	add_submenu_page( 'edit.php?post_type=susttransportation', 'Sustainable Transportation', 'Settings', 'administrator', 'sustainable_transportation_settings_page', 'sustainable_transportation_settings_page' );


	//call register settings function
	add_action( 'admin_init', 'register_sustainable_transportation_settings' );
}


function register_sustainable_transportation_settings() {
	//register our settings
	register_setting( 'sustainable-transportation-group', 'st_title' );
	register_setting( 'sustainable-transportation-group', 'st_landingPageImage' );
	register_setting( 'sustainable-transportation-group', 'st_about' );

	register_setting( 'sustainable-transportation-group', 'st_image' );
	register_setting( 'sustainable-transportation-group', 'st_content' );

	register_setting( 'sustainable-transportation-group', 'st_subtitle' );
	register_setting( 'sustainable-transportation-group', 'st_link_text' );
	register_setting( 'sustainable-transportation-group', 'st_link' );


}

function sustainable_transportation_settings_page() {
?>
<div class="wrap">
<h1>Settings</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'sustainable-transportation-group' ); ?>
    <?php do_settings_sections( 'sustainable-transportation-group' ); ?>
    <table class="form-table" style='max-width:900px;'>
			<tr valign="top">
				<th scope="row">Title</th>
				<td><input type='text' style='width:100%;' name='st_title' value="<?php echo esc_attr( get_option('st_title') ); ?>" ></td>
			</tr>

			<tr valign="top">
				<th scope="row">Sub Title</th>
				<td><input type='text' style='width:100%;' name='st_subtitle' value="<?php echo esc_attr( get_option('st_subtitle') ); ?>" ></td>
			</tr>

			<tr valign="top">
				<th scope="row">Landing Banner Page Image</th>
				<td>

					<div id='st_landingPageImageholder'><? if(get_option("st_landingPageImage")){ echo  wp_get_attachment_image(get_option("st_landingPageImage"), 'medium'); } ?></div>


					<input type="hidden" id="st_landingPageImage" name="st_landingPageImage" value="<?php echo esc_attr( get_option('st_landingPageImage') ); ?>" />
					<input id="st_landingPageImage_upload_image_button" type="button" class="button" value='Upload Landing Page Image' />

				</td>
			</tr>

        <tr valign="top">
        <th scope="row">Landing page about text</th>
        <td>
					<?
					$settings = array(
					    'teeny' => true,
					    'textarea_rows' => 15,
					    'tabindex' => 1,
							"textarea_name" => "st_about"
					);
					$content = get_option('st_about');
					wp_editor($content, 'st_about', $settings);

					?>
				 </tr>

    </table>

		<h2>Home page block</h2>

		<table class="form-table" style='max-width:900px;'>
			<tr valign="top">
				<th scope="row">Image</th>
				<td>

					<div id='st_imageHolder'><? if(get_option("st_image")){ echo  wp_get_attachment_image(get_option("st_image"), 'medium'); } ?></div>


					<input type="hidden" id="st_image" name="st_image" value="<?php echo esc_attr( get_option('st_image') ); ?>" />
					<input id="upload_image_button" type="button" class="button" value='Upload Feature Image' />

				</td>
			</tr>

        <tr valign="top">
        <th scope="row">Content</th>
        <td>

					<?
					$settings = array(
					    'teeny' => true,
					    'textarea_rows' => 15,
					    'tabindex' => 1,
							"textarea_name" => "st_content"
					);
					$content = get_option('st_content');
					wp_editor($content, 'st_content', $settings);

					?>
        </tr>

				<tr valign="top">
					<th scope="row">Link text</th>
					<td><input type='text' style='width:100%;' name='st_link_text' value="<?php echo esc_attr( get_option('st_link_text') ); ?>" ></td>
				</tr>

				<tr valign="top">
					<th scope="row">Link</th>
					<td><input type='text' style='width:100%;' name='st_link' value="<?php echo esc_attr( get_option('st_link') ); ?>" ></td>
				</tr>

    </table>

    <?php submit_button(); ?>

</form>
</div>
<script>
jQuery(document).ready(function($){
  var mediaUploader;
  $('#upload_image_button').click(function(e) {
    e.preventDefault();
      if (mediaUploader) {
      mediaUploader.open();
      return;
    }
    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Choose Image',
      button: {
      text: 'Choose Image'
    }, multiple: false });
    mediaUploader.on('select', function() {
      var attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#st_imageHolder').html("<img src='"+attachment.url+"' style='max-width:100%' />");
      $('#st_image').val(attachment.id);
    });
    mediaUploader.open();
  });


var mediaUploader;
$('#st_landingPageImage_upload_image_button').click(function(e) {
		e.preventDefault();
			if (mediaUploader) {
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
			text: 'Choose Image'
		}, multiple: false });
		mediaUploader.on('select', function() {
			var attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#st_landingPageImageholder').html("<img src='"+attachment.url+"' style='max-width:100%' />");
			$('#st_landingPageImage').val(attachment.id);
		});
		mediaUploader.open();
	});

});
</script>
<?php } ?>
<?php
function vrnc_options_enqueue_scripts() {
  //  wp_register_script( 'wptuts-upload', array('jquery','media-upload','thickbox') );

        wp_enqueue_script('jquery');

        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');

        wp_enqueue_script('media-upload');
        wp_enqueue_script('wptuts-upload');


}
add_action('admin_enqueue_scripts', 'vrnc_options_enqueue_scripts');
?>
