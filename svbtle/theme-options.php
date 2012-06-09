<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
	register_setting( 'sample_options', 'svbtle_options', 'theme_options_validate' );
}

function theme_options_add_page() {
	add_theme_page( __( 'Svbtle Options', 'wordpress-svbtle' ), __( 'Svbtle Options', 'wordpress-svbtle' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#color_picker_color1').farbtastic('#color1');            
		});
	</script>
	
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Options', 'wordpress-svbtle' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'wordpress-svbtle' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'svbtle_options' ); ?>

			<table class="form-table">

				<tr valign="top"><th scope="row"><?php _e( 'Display sidebar cover animation?', 'wordpress-svbtle' ); ?></th>
					<td>
						<input id="svbtle_options[cover]" name="svbtle_options[cover]" type="checkbox" value="1" <?php checked( '1', $options['cover'] ); ?> />
					</td>
				</tr>
				
				<tr valign="top"><th scope="row"><?php _e( 'Display logo pulse animation?', 'wordpress-svbtle' ); ?></th>
					<td>
						<input id="svbtle_options[pulse]" name="svbtle_options[pulse]" type="checkbox" value="1" <?php checked( '1', $options['pulse'] ); ?> />
					</td>
				</tr>
				
				<tr valign="top"><th scope="row"><?php _e( 'Display anchors?', 'wordpress-svbtle' ); ?></th>
					<td>
						<input id="svbtle_options[anchor]" name="svbtle_options[anchor]" type="checkbox" value="1" <?php checked( '1', $options['anchor'] ); ?> />
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Blog color', 'wordpress-svbtle' ); ?></th>
					<td>
						<input id="color1" class="regular-text" type="text" name="svbtle_options[color]" value="<?php esc_attr_e( $options['color'] ); ?>" /><div id="color_picker_color1"></div>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Google Analytics // Typekit', 'wordpress-svbtle' ); ?></th>
					<td>
						<textarea id="svbtle_options[google_analytics]" class="large-text" cols="50" rows="10" name="svbtle_options[google_analytics]"><?php echo esc_textarea( $options['google_analytics'] ); ?></textarea>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'wordpress-svbtle' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	if ( ! isset( $input['anchor'] ) )
		$input['anchor'] = null;
	$input['anchor'] = ( $input['anchor'] == 1 ? 1 : 0 );
	
	if ( ! isset( $input['cover'] ) )
		$input['cover'] = null;
	$input['cover'] = ( $input['cover'] == 1 ? 1 : 0 );
	
	if ( ! isset( $input['pulse'] ) )
		$input['pulse'] = null;
	$input['pulse'] = ( $input['pulse'] == 1 ? 1 : 0 );

	$input['color'] = wp_filter_nohtml_kses( $input['color'] );

	$input['google_analytics'] = $input['google_analytics'] ;

	return $input;
}

?>