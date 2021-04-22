<?php

/**
 * Create A Simple Theme Options Panel
 *
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

// Start Class
if (!class_exists('Bat_Theme_Options_Admin')) {

	class Bat_Theme_Options_Admin
	{

		/**
		 * Start things up
		 *
		 * @since 1.0.0
		 */
		public function __construct()
		{

			// We only need to register the admin panel on the back-end
			if (is_admin()) {
				add_action('admin_menu', array('Bat_Theme_Options_Admin', 'add_admin_menu'));
				add_action('admin_init', array('Bat_Theme_Options_Admin', 'register_settings'));
			}
		}

		/**
		 * Returns all theme options
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_options()
		{
			return get_option('theme_options');
		}

		/**
		 * Returns single theme option
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_option($id)
		{
			$options = self::get_theme_options();
			if (isset($options[$id])) {
				return $options[$id];
			}
		}

		/**
		 * Add sub menu page
		 *
		 * @since 1.0.0
		 */
		public static function add_admin_menu()
		{
			add_menu_page(
				esc_html__('Bat Theme Settings', 'text-domain'),
				esc_html__('Bat Theme Settings', 'text-domain'),
				'manage_options',
				'theme-settings',
				array('Bat_Theme_Options_Admin', 'create_admin_page')
			);
		}

		/**
		 * Register a setting and its sanitization callback.
		 *
		 * We are only registering 1 setting so we can store all options in a single option as
		 * an array. You could, however, register a new setting for each option
		 *
		 * @since 1.0.0
		 */
		public static function register_settings()
		{
			register_setting('theme_options', 'theme_options', array('Bat_Theme_Options_Admin', 'sanitize'));
		}

		/**
		 * Sanitization callback
		 *
		 * @since 1.0.0
		 */
		public static function sanitize($options)
		{
			// If we have options lets sanitize them
			if ($options) {
				foreach ($options as $key => &$value) {
					$value = sanitize_text_field($value);
				}
				return $options;
			}
		}

		/**
		 * Settings page output
		 *
		 * @since 1.0.0
		 */
		public static function create_admin_page()
		{ ?>

			<div class="wrap">

				<h1><?php esc_html_e('Bat Theme Options', 'text-domain'); ?></h1>
				<p><?php esc_html_e('Update settings to see changes', 'text-domain'); ?></p>
				<nav class="nav-tab-wrapper">
					<button class="nav-tab nav-tab-active" data-show="tab-content--textSettings">Text</button>
					<button class="nav-tab" data-show="tab-content--colorSettings">Colors</button>
					<button class="nav-tab" data-show="tab-content--buttonSettings">Buttons</button>
				</nav>
				<form method="post" action="options.php">
					<?php settings_fields('theme_options'); ?>
					<?php
					echo '<div class="tab-content tab-content--colorSettings">';
					require_once('tab-content/tab-color-settings.php');
					echo '</div>';


					echo '<div class="tab-content tab-content--buttonSettings">';
					require_once('tab-content/tab-button-settings.php');
					echo '</div>';

					echo '<div class="tab-content tab-content--textSettings">';
					require_once('tab-content/tab-text-settings.php');
					echo '</div>';
					?>
					<?php submit_button(); ?>
					<button class="reset-options">Reset Options</button>
					<div class="reset-confirm"></div>

				</form>
			</div><!-- .wrap -->
<?php }
	}
}
new Bat_Theme_Options_Admin();

// Helper function to use in your theme to return a theme option value
function bat_get_theme_option($id = '')
{
	return Bat_Theme_Options_Admin::get_theme_option($id);
}

require_once('bat-theme-options-compiler.php');
