<?php
/*
  Plugin Name: Disable Welcome Messages and Tips
  Description: Hide Welcome Messages and Tips in the Gutenberg Block Editor
  Version: 1.0.0
  Author: Jules Colle
  Author URI: https://bdwm.be
 */
add_action('admin_head', 'dwpgw_hide_popovers');

/**
 * Inspired by https://orbisius.com/p4620
 */
function dwpgw_hide_popovers() {
	?>
	<style>
		.wp-admin .components-popover.nux-dot-tip {
			display: none !important;
		}
	</style>
	<?php
}